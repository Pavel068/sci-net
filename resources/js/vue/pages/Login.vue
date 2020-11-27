<template>
    <div class="card">
        <div class="card-header">Авторизация</div>
        <div class="card-body">
            <div class="row">
                <label for="login">Телефон или E-mail</label>
                <input type="text" class="form-control" id="login" name="login" v-model="login">
            </div>
            <div class="row mt-3">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" v-model="password">
            </div>
            <div class="row mt-3">
                <button class="btn btn-primary">Войти</button>
            </div>
            <div class="row mt-5">
                Еще нет аккаунта? &nbsp;<router-link :to="{name: 'Register'}">Зарегистрируйтесь!</router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Login",
    data() {
        return {
            login: null,
            password: null
        }
    },
    mathods: {
        async login() {

        }
    }
}
</script>

<style scoped>
.card {
    max-width: 500px;
    margin: 0 auto;
}
</style>
