<template>
    <div>
        <h1>Подтверждение почты...</h1>
    </div>
</template>

<script>
    import * as auth from '../../services/auth_service';
    export default {
        name: "VerifyEmail",
        created() {
            auth.verifyEmail(this.$route.query).then(() => {
                this.$router.push('/dashboard');
            });
        }
    }
</script>

<style scoped>
</style>