<template>
	<div class="container">
		<div class="card card-login mx-auto mt-5">
			<div class="card-header">Вход</div>
			<div class="card-body">
				<form v-on:submit.prevent="login">
					<div class="form-group">
						<div class="form-label-group">
							<input
								type="email"
                                v-model="user.email"
								id="email"
								class="form-control"
								placeholder="Email aдрес"
								autofocus="autofocus"
							/>
                            <div class="invalid-feedback d-block" v-if="errors.email">{{errors.email[0]}}</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-label-group">
							<input
								type="password"
                                v-model="user.password"
								id="password"
								class="form-control"
								placeholder="Пароль"
							/>
                            <div class="invalid-feedback d-block" v-if="errors.password">{{errors.password[0]}}</div>
						</div>
					</div>
                    <button type="submit" class="btn btn-primary btn-block">Войти</button>
				</form>
				<div class="text-center">
                    <router-link to="/register" class="d-block small mt-3">Регистрация</router-link>
                    <router-link to="/reset-password-request" class="d-block small">Забыли пароль?</router-link>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
    import * as auth from '../../services/auth_service';
    import * as tasks from '../../services/list_service';
    export default {
        name: 'Login',
        data() {
            return {
                user: {
                    email: '',
                    password: '',
                    remember_me: false
                },
                errors: {}
            }
        },
        methods: {
            reloadTasks: async function() {
                try {
                    const response = await tasks.getTasks(this.$store.state.profile.id);
                    this.$store.dispatch('tasksSet', response.data);
                } catch (error) {
                    
                }
            },
            login: async function() {
                try {
                    const response = await auth.login(this.user);
                    this.errors = [];
                    if (this.$store.state.profile.email_verified_at != null) {
                        this.reloadTasks();
                        this.$router.push('/dashboard');
                    }
                    else {
                        this.$router.push('/email/verify');
                    }
                } catch (error) {
                    console.log(error);
                    switch (error.response.status) {
                        case 422:
                            this.errors = error.response.data.errors;
                            break;
                        case 401:
                            this.flashMessage.error({
                                message: 'Some error occurred, Please try again!',
                                time: 5000
                            });
                        case 500:
                            this.flashMessage.error({
                                message: error.response.data.message,
                                time: 5000
                            });
                            break;
                        default:
                            this.flashMessage.error({
                                message: 'Some error occurred, Please try again!',
                                time: 5000
                            });
                            break;
                    } 
                }
            }
        }
    };
</script>