<template>
    <div class="card">
        <div class="card-header">Профиль</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <label for="last_name">Фамилия</label>
                        <input class="form-control" type="text" id="last_name" name="last_name">
                    </div>
                    <div class="row mt-3">
                        <label for="first_name">Имя</label>
                        <input class="form-control" type="text" id="first_name" name="first_name">
                    </div>
                    <div class="row mt-3">
                        <label for="patronymic">Отчество</label>
                        <input class="form-control" type="text" id="patronymic" name="patronymic">
                    </div>
                    <div class="row mt-3">
                        <label for="email">E-Mail</label>
                        <input class="form-control" type="email" id="email" name="email">
                    </div>
                    <div class="row mt-3">
                        <label for="phone">Телефон</label>
                        <input class="form-control" type="text" id="phone" name="phone">
                    </div>
                    <div class="row mt-3">
                        <label for="avatar">Аватар &nbsp;</label>
                        <input type="file" id="avatar" name="avatar">
                    </div>
                    <div class="row mt-3">
                        <label for="birthday">Дата рождения</label>
                        <input class="form-control" type="text" id="birthday" name="birthday">
                    </div>
                    <div class="row mt-3">
                        <label for="region">Регион</label>
                        <input class="form-control" type="date" id="region" name="region">
                    </div>
                    <div class="row mt-3">
                        <label for="city">Город</label>
                        <input class="form-control" type="text" id="city" name="city">
                    </div>
                    <div class="row mt-3">
                        <label for="organization">Организация</label>
                        <input class="form-control" type="text" id="organization" name="organization">
                    </div>
                    <div class="row mt-3">
                        <label for="position">Должность</label>
                        <input class="form-control" type="text" id="position" name="position">
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="row">
                        <label for="science_interests">Область научных интересов</label>
                        <input class="form-control" type="text" id="science_interests" name="science_interests">
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="row">
                        <label for="orcid">Orcid</label>
                        <input class="form-control" type="text" id="orcid" name="orcid">
                    </div>
                    <div class="row mt-3">
                        <label for="elibrary">Elibrary</label>
                        <input class="form-control" type="text" id="elibrary" name="elibrary">
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <button class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Profile"
}
</script>

<style scoped>

</style>
