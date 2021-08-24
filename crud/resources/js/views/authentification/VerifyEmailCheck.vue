<template>
    <div>
        <h1>Подтвердите аккаунт с помощью письма отправленного на почту {{$store.state.profile.email}}</h1>
        <div v-if="countDown != 0" class="send-again__counter">Для повторной отправки подождите еще {{countDown}} секунд</div>
        <button @click.once="sendEmail" v-if="countDown == 0">Отправить письмо повторно</button>
    </div>
</template>

<script>
    import * as auth from '../../services/auth_service';
    export default {
        name: "verifyCheck",
        data() {
            return {
                countDown: 0
            }
        },
        created() {
            if (localStorage.getItem('countDown') > 0) {
                this.countDown = localStorage.getItem('countDown')
                this.countDownTimer()
            }
            if (localStorage.getItem('countDown') == null)
                localStorage.setItem('countDown', this.countDown);
            else
                this.countDown = localStorage.getItem('countDown')
        },
        methods: {
            countDownTimer() {
                if(this.countDown > 0) {
                    setTimeout(() => {
                        this.countDown -= 1
                        localStorage.setItem('countDown', this.countDown);
                        this.countDownTimer()
                    }, 1000)
                }
            },
            async sendEmail() {
                this.countDown = 60;
                localStorage.setItem('countDown', this.countDown);
                this.countDownTimer();
                const response = await auth.resendVerificationEmail(this.$store.state.profile);
            }
        }
    }
</script>

<style scoped>
</style>