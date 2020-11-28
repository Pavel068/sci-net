<template>
    <div class="card">
        <div class="card-header">Авторизация</div>
        <div class="card-body">
            <div class="row">
                <label for="login">E-mail</label>
                <input type="text" class="form-control" id="login" name="login" v-model="user_data.email">
            </div>
            <div class="row mt-3">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" v-model="user_data.password">
            </div>
            <div class="row mt-3">
                <button class="btn btn-primary" @click="loginRequest">Войти</button>
            </div>
            <div class="row mt-1"  v-if="error">
                <p style="color: red">Неверный логин или пароль!</p>
            </div>

            <div class="row mt-5">
                Еще нет аккаунта? &nbsp;<router-link :to="{name: 'Register'}">Зарегистрируйтесь!</router-link>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import common from "../mixins/common";

export default {
    name: "Login",
    mixins: [common],
    data() {
        return {
            user_data: {
                email: null,
                password: null
            },
            error: false
        }
    },
    methods: {
        async loginRequest() {
            const response = await axios.post(this.apiUrl + '/api/users/auth', this.user_data);
            if (response.data.error) {
                this.error = true;
            } else {
                localStorage.setItem('authUserId', response.data[0].id);
                await this.$router.push({path: '/'});
            }
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
