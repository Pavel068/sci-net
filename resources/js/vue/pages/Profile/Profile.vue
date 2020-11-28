<template>
    <div class="card">
        <div class="card-header">Профиль</div>
        <div class="card-body">
            <div class="row" v-if="user_data">
                <div class="col-md-4">
                    <div class="row">
                        <label for="last_name">Фамилия</label>
                        <input class="form-control" type="text" id="last_name" name="last_name"
                               v-model="user_data.last_name">
                    </div>
                    <div class="row mt-3">
                        <label for="first_name">Имя</label>
                        <input class="form-control" type="text" id="first_name" name="first_name"
                               v-model="user_data.first_name">
                    </div>
                    <div class="row mt-3">
                        <label for="patronymic">Отчество</label>
                        <input class="form-control" type="text" id="patronymic" name="patronymic"
                               v-model="user_data.patronymic">
                    </div>
                    <div class="row mt-3">
                        <label for="email">E-Mail</label>
                        <input class="form-control" type="email" id="email" name="email" v-model="user_data.email">
                    </div>
                    <div class="row mt-3">
                        <label for="phone">Телефон</label>
                        <input class="form-control" type="text" id="phone" name="phone" v-model="user_data.phone">
                    </div>
                    <div class="row mt-3">
                        <label for="avatar">Аватар &nbsp;</label>
                        <input type="file" id="avatar" name="avatar">
                    </div>
                    <div class="row mt-3">
                        <label for="birthday">Дата рождения</label>
                        <input class="form-control" type="text" id="birthday" name="birthday"
                               v-model="user_data.birthday">
                    </div>
                    <div class="row mt-3">
                        <label for="region">Регион</label>
                        <input class="form-control" type="date" id="region" name="region" v-model="user_data.region">
                    </div>
                    <div class="row mt-3">
                        <label for="city">Город</label>
                        <input class="form-control" type="text" id="city" name="city" v-model="user_data.city">
                    </div>
                    <div class="row mt-3">
                        <label for="organization">Организация</label>
                        <input class="form-control" type="text" id="organization" name="organization"
                               v-model="user_data.organization">
                    </div>
                    <div class="row mt-3">
                        <label for="position">Должность</label>
                        <input class="form-control" type="text" id="position" name="position"
                               v-model="user_data.position">
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
                        <input class="form-control" type="text" id="orcid" name="orcid" v-model="user_data.orcid">
                    </div>
                    <div class="row mt-3">
                        <label for="elibrary">Elibrary</label>
                        <input class="form-control" type="text" id="elibrary" name="elibrary" v-model="user_data.elibrary">
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <button class="btn btn-primary" @click="saveProfile">Сохранить</button>
            </div>

            <div class="row mt-1" v-if="error">
                <p style="color: red">Ошибка при добавлении публикации!</p>
            </div>
            <div class="row mt-1" v-if="success_save">
                <p style="color: green">Данные успешно сохранены!</p>
            </div>
        </div>
    </div>
</template>

<script>
import common from "../../mixins/common";
import axios from 'axios';

export default {
    name: "Profile",
    mixins: [common],
    data() {
        return {
            user_data: null,
            error: false,
            success_save: false
        }
    },
    methods: {
        async getMe() {
            this.user_data = (await axios.get(this.apiUrl + `/api/users/${this.authUserId}`)).data;
        },
        async saveProfile() {
            const response = await axios.patch(this.apiUrl + `/api/users/${this.authUserId}`, this.user_data);

            if (response.error) {
                this.error = true;
            } else {
                this.error = false;
                this.success_save = true;
                setInterval(() => {
                    this.success_save = false;
                }, 3000);
            }
        }
    },
    async mounted() {
        await this.getMe();
    }
}
</script>

<style scoped>

</style>
