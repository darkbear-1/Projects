<template>
	<div class="container">
		<div class="card card-login mx-auto mt-5">
			<div class="card-header">Сброс пароля</div>
			<div class="card-body">
				<div class="text-center mb-4">
					<h4>Забыли пароль?</h4>
					<p>Введите свой адрес электронной почты, и мы отправим вам инструкции по изменению пароля.</p>
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
								autofocus="autofocus"
                                v-model="user.email"
							/>
                            <div class="invalid-feedback" v-if="errors.email">{{errors.email[0]}}</div>
						</div>
					</div>
                    <button type="submit" class="btn btn-primary btn-block" ref="btnSubmit">Запросить пароль</button>
				</form>
				<div class="text-center">
					<router-link to="/register" class="d-block small mt-3">Регистрация</router-link>
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
                    email: ''
                },
                btnOldHtml: '',
                errors: {}
            }
        },
        methods: {
            onSubmit: async function() {
                try {
                    this.disableSubmission(this.$refs.btnSubmit);
                    this.errors = {};
                    const response = await auth.resetPasswordRequest(this.user);
                    this.flashMessage.success({
                        message: response.data.message,
                        time: 5000
                    });
                    this.$router.push({name: 'reset-password', params: { email: this.user.email }});
                } catch (error) {
                    console.log(error)
                    switch (error.response.status) {
                        case 422:
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
                btn.innerHTML = '<span class="fa fa-spinner fa-spin"></span> Подождите...';
            },
            enableSubmission(btn) {
                btn.removeAttribute('disabled');
                btn.innerHTML = this.btnOldHtml;
            }
        }
    };
</script>