<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{

    public function add(Request $request) {
        $request->validate([
            'text' => 'required|string|max:255'
        ]);

        $task = new Task();
        $task->text = $request->text;
        $task->user_id = $request->user;
        if ($task->save()) {
            return response()->json([
                'message' => 'Создан!',
                'status_code' => 201
            ], 201);
        } else {
            return response()->json([
                'message' => 'Error',
                'status_code' => 500
            ], 500);
        }
        return response()->json($request, 200);
       
    }

    public function update(Request $request) {

        $task = new Task();
        $taskField = Task::find($request->id);
        $taskField->text = $request->text;
        $taskField->status = $request->status;
        // return response()->json($taskField->text, 200);
        if ($taskField->save()) {
            return response()->json([
                'message' => 'Сохранено!',
                'status_code' => 201
            ], 201);
        } else {
            return response()->json([
                'message' => 'Error',
                'status_code' => 500
            ], 500);
        }

        return response()->json($request, 200);
       
    }

    public function delete(Request $request) {
        $task = new Task();
        $taskField = Task::find($request->id);
        if ($taskField->delete()) {
            return response()->json([
                'message' => 'Удалено!',
                'status_code' => 201
            ], 201);
        } else {
            return response()->json([
                'message' => 'Error',
                'status_code' => 500
            ], 500);
        }
        return response()->json($request, 200);
       
    }

    public function status(Request $request) {
        $task = new Task();
        $taskField = Task::find($request->id);
        $taskField->status = $request->status;
        if ($taskField->save()) {
            return response()->json([
                'message' => 'Сохранено!',
                'status_code' => 201
            ], 201);
        } else {
            return response()->json([
                'message' => 'Error',
                'status_code' => 500
            ], 500);
        }

        return response()->json($request, 200);
       
    }

    public function tasks(Request $request) {
        $user = User::find($request->user_id);
        return response()->json($user->task, 200);
    }

    public function clearComplete(Request $request) {
        $user = User::find($request->user_id)->task->where('status', true);
        if ($user->each->delete()) {
            return response()->json([
                'message' => 'Удалено!',
                'status_code' => 201
            ], 201);
        } else {
            return response()->json([
                'message' => 'Error',
                'status_code' => 500
            ], 500);
        }
        return response()->json($request, 200);
    }
}
