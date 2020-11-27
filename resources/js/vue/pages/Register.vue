<template>
    <div class="card">
        <div class="card-header">Регистрация</div>
        <div class="card-body">
            <div class="row">
                <label for="last_name">Фамилия</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>
            <div class="row mt-3">
                <label for="first_name">Имя</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>
            <div class="row mt-3">
                <label for="patron">Отчество</label>
                <input type="text" class="form-control" id="patron" name="patron">
            </div>
            <div class="row mt-3">
                <label for="email">E-Mail</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="row mt-3">
                <label for="phone">Телефон</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="row mt-3">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="row mt-3">
                <label for="password1">Подтвердите пароль</label>
                <input type="password" class="form-control" id="password1" name="password1">
            </div>
            <div class="row mt-3">
                <button class="btn btn-primary">Отправить</button>
            </div>
            <div class="row mt-5">
                Уже зарегистрированы? &nbsp;<router-link :to="{name: 'Login'}">Войти!</router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Register"
}
</script>

<style scoped>
.card {
    max-width: 500px;
    margin: 0 auto;
}
</style>
