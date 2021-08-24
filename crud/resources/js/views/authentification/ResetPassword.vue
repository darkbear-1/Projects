<template>
	<div class="container">
		<div class="card card-login mx-auto mt-5">
			<div class="card-header">Сброс пароля</div>
			<div class="card-body">
				<div class="text-center mb-4">
					<h4>Сброс вашего пароля</h4>
				</div>
				<form v-on:submit.prevent="onSubmit">
					<div class="form-group">
						<div class="form-label-group">
							<input
								type="email"
								id="inputEmail"
								class="form-control"
								placeholder="Введите email адрес"
								required="required"
                                v-model="user.email"
							/>
                            <div class="invalid-feedback" v-if="errors.email">{{errors.email[0]}}</div>
						</div>
					</div>
                    <div class="form-group">
						<div class="form-label-group">
							<input
								type="number"
                                id="verificationCode"
								class="form-control"
								placeholder="Введите проверочный код"
								required="required"
								autofocus="autofocus"
                                v-model="user.verification_code"
							/> 
                            <div class="invalid-feedback" v-if="errors.verification_code">{{errors.verification_code[0]}}</div>
						</div>
					</div>
                    <div class="form-group">
						<div class="form-label-group">
							<input
								type="password"
								id="password"
								class="form-control"
								placeholder="Придумайте пароль"
								required="required"
                                v-model="user.password"
							/>
                            <div class="invalid-feedback" v-if="errors.password">{{errors.password[0]}}</div>
						</div>
					</div>
                    <div class="form-group">
						<div class="form-label-group">
							<input
								type="password"
								id="passwordConfirmation"
								class="form-control"
								placeholder="Повторите пароль"
								required="required"
                                v-model="user.password_confirmation"
							/>
                            <div class="invalid-feedback" v-if="errors.password_confirmation">{{errors.password_confirmation[0]}}</div>
						</div>
					</div>
                    <button type="submit" class="btn btn-primary btn-block" ref="btnSubmit">Изменить пароль</button>
				</form>
				<div class="text-center">
					<router-link to="/reset-password-request" class="d-block small mt-3">Повторно отправить проверочный код</router-link>
					<router-link class="d-block small" to="/login">Страница входа</router-link>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
    import * as auth from '../../services/auth_service';
    export default {
        name: 'ResetPasswordRequest',
        data() {
            return {
                user: {
                    email: '',
                    verification_code: '',
                    password: '',
                    password_confirmation: '',
                },
                btnOldHtml: '',
                errors: {}
            }
        },
        beforeRouteEnter(to, from, next) {
            next(vm => {
                vm.user.email = to.params.email
            });
        },
        methods: {
            onSubmit: async function() {
                try {
                    this.disableSubmission(this.$refs.btnSubmit);
                    this.errors = {};
                    const response = await auth.resetPassword(this.user);
                    this.flashMessage.success({
                        message: response.data.message,
                        time: 5000
                    });
                    this.$router.push('/login');
                } catch (error) {
                    console.log(error)
                    switch (error.response.status) {
                        case 422:
                            this.errors = error.response.data.errors;
                            break;
                        case 401:
                            this.errors = error.response.data.errors;
                            break;
                        default:
                            this.flashMessage.error({
                                message: 'Some error occurred, Please try again!',
                                time: 5000
                            });
                            break;
                    }
                    this.enableSubmission(this.$refs.btnSubmit);
                }
            },
            disableSubmission(btn) {
                btn.setAttribute('disabled', 'disabled');
                this.btnOldHtml = btn.innerHTML;
                btn.innerHTML = '<span class="fa fa-spinner fa-spin"></span> Please wait...';
            },
            enableSubmission(btn) {
                btn.removeAttribute('disabled');
                btn.innerHTML = this.btnOldHtml;
            }
        }
    };
</script>