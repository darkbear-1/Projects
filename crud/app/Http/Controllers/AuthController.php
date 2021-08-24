<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Mail;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailNotification;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;

class AuthController extends Controller
{
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email',
            'password' => 'required|string|confirmed'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        if ($user->save()) {
            $user->sendEmailVerificationNotification();
            return response()->json([
                'user'=> $user,
                'message' => 'Пользователь успешно зарегистрирован!',
                'status_code' => 201
            ], 201);
        } else {
            return response()->json([
                'message' => 'Error',
                'status_code' => 500
            ], 500);
        }
    }

    public function verify(Request $request) {
        $user = User::findOrFail($request->id);

        if (! hash_equals((string) $request->hash, sha1($user->getEmailForVerification()))) {
            return response()->json([
                "message" => "Unauthorized",
                "success" => false
            ]);
        }

        if ($user->hasVerifiedEmail()) {
            return response()->json([
                "message" => "User already verified!",
                "success" => false
            ]);
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        $userData = array(
            'email' => $user->email,
            'name' => $user->name
        );

        Mail::send('emails.user_success', $userData, function ($message) use ($userData) {
            $message->from('no-reply@service.ru', 'Успешная регистрация');
            $message->to($userData['email'], $userData['name']);
            $message->subject('Успешная регистрация (Service)');
        });

        if (Mail::failures()) {
            return response()->json([
                'message' => 'Some error occured, Please try again',
                'status_code' => 500
            ], 500);
        } else {
            return response()->json([
                'message' => 'Мы отправили проверочный код на ваш адрес электронной почты',
                'status_code' => 200
            ], 200);
        }

        return response()->json([
            "message" => "Email verified successfully!",
            "success" => true
        ]);
    }

    public function resendVerificationEmail (Request $request) {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                "message" => "Failed to send!",
                "success" => false
            ]);
        }

        $user->sendEmailVerificationNotification();

        return response()->json([
            "message" => "Check your email!",
            "success" => true
        ]);
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                'message' => 'Неверное имя пользователя/пароль',
                'status_code' => 401
            ], 401);
        }

        $user = $request->user();

        if ($user->role == 'administrator') {
            $tokenData = $user->createToken('Personal Access Tokens', ['administrator']);
        } else {
            $tokenData = $user->createToken('Personal Access Tokens', ['user']);
        }

        $token = $tokenData->token;

        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }

        if ($token->save()) {
            return response()->json([
                'user' => $user,
                'access_token' => $tokenData->accessToken,
                'token_type' => 'Bearer',
                'token_scope' => $tokenData->token->scopes[0],
                'expires_at' => Carbon::parse($tokenData->token->expires_at)->toDateTimeString(),
                'status_code' => 200
            ], 200);
        } else {
            return response()->json([
                'message' => 'Some error occured, Please try again',
                'status_code' => 500
            ], 500);
        }
    }

    public function logout(Request $request) {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Успешный выход!',
            'status_code' => 200
        ], 200);
    }

    public function profile(Request $request) {
        if ($request->user()) {
            return response()->json($request->user(), 200);
        }

        return response()->json([
            'message' => 'Не выполнен вход',
            'status_code' => 500
        ], 500);
    }

    public function resetPasswordRequest(Request $request) {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json([
                'message' => 'Мы отправили проверочный код на ваш адрес электронной почты',
                'status_code' => 200
            ], 200);
        } else {
            $random = rand(111111, 99999);
            $user->verification_code = $random;
            if ($user->save()) {
                $userData = array(
                    'email' => $user->email,
                    'name' => $user->name,
                    'random' => $random
                );

                Mail::send('emails.reset_password', $userData, function ($message) use ($userData) {
                    $message->from('no-reply@service.ru', 'Сброс пароля');
                    $message->to($userData['email'], $userData['name']);
                    $message->subject('Сброс пароля (Service)');
                });

                if (Mail::failures()) {
                    return response()->json([
                        'message' => 'Some error occured, Please try again',
                        'status_code' => 500
                    ], 500);
                } else {
                    return response()->json([
                        'message' => 'Мы отправили проверочный код на ваш адрес электронной почты',
                        'status_code' => 200
                    ], 200);
                }
            } else {
                return response()->json([
                    'message' => 'Some error occured, Please try again',
                    'status_code' => 500
                ], 500);
            }
        }
    }

    public function resetPassword(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'verification_code' => 'required|integer',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::where('email', $request->email)->where('verification_code', $request->verification_code)->first();
        if (!$user) {
            return response()->json([
                'message' => 'Пользователь не найден/Неверный код',
                'status_code' => 401
            ], 401);
        } else {
            $user->password = bcrypt(trim($request->password));
            $user->verification_code = Null;

            if ($user->save()) {
                return response()->json([
                    'message' => 'Пароль успешно изменён!',
                    'status_code' => 200
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Some error occured, Please try again',
                    'status_code' => 500
                ], 500);
            }
        }
    }
}
