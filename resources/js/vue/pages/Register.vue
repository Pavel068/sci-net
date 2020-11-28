<template>
    <div class="card">
        <div class="card-header">Регистрация</div>
        <div class="card-body">
            <div class="row">
                <label for="last_name">Фамилия</label>
                <input type="text" class="form-control" id="last_name" name="last_name" v-model="user_data.last_name">
            </div>
            <div class="row mt-3">
                <label for="first_name">Имя</label>
                <input type="text" class="form-control" id="first_name" name="first_name" v-model="user_data.first_name">
            </div>
            <div class="row mt-3">
                <label for="email">E-Mail</label>
                <input type="text" class="form-control" id="email" name="email" v-model="user_data.email">
            </div>
            <div class="row mt-3">
                <label for="phone">Телефон</label>
                <input type="text" class="form-control" id="phone" name="phone" v-model="user_data.phone">
            </div>
            <div class="row mt-3">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" v-model="user_data.password">
            </div>
            <div class="row mt-3">
                <label for="password_2">Подтвердите пароль</label>
                <input type="password" class="form-control" id="password_2" name="password_2" v-model="user_data.password_2">
            </div>
            <div class="row mt-3">
                <button class="btn btn-primary" @click="register">Отправить</button>
            </div>
            <div class="row mt-1"  v-if="error">
                <p style="color: red">Ошибки при заполнении формы!</p>
            </div>

            <div class="row mt-5">
                Уже зарегистрированы? &nbsp;<router-link :to="{name: 'Login'}">Войти!</router-link>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import common from "../mixins/common";

export default {
    name: "Register",
    mixins: [common],
    data() {
        return {
            user_data: {
                first_name: null,
                last_name: null,
                email: null,
                phone: null,
                password: null,
                password_2: null,
            },
            error: false
        }
    },
    methods: {
        async register() {
            const response = await axios.post(this.apiUrl + '/api/users', this.user_data);
            if (response.data.error) {
                this.error = true;
            } else {
                localStorage.setItem('authUserId', response.data.id);
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
