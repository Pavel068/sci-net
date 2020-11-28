<template>
    <div class="card">
        <div class="card-header">Мои публикации</div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Журнал</th>
                    <th>Индексируется</th>
                    <th></th>
                </tr>
                <tr v-if="!publications || !publications.length">
                    <td colspan="5">Нет публикаций!</td>
                </tr>
                <tr v-else v-for="pub in publications">
                    <td>{{ pub.id }}</td>
                    <td>{{ pub.name }}</td>
                    <td>{{ pub.journal }}</td>
                    <td>{{ pub.indexer }}</td>
                    <td>
                        <router-link :to="{name: 'EditPublication'}">Редактировать</router-link>
                    </td>
                </tr>
            </table>
            <div class="mt-3">
                <router-link class="btn btn-primary" :to="{name: 'AddPublication'}">Добавить</router-link>
            </div>
        </div>
    </div>
</template>

<script>
import common from "../../mixins/common";
import axios from 'axios';

export default {
    name: "MyPublications",
    mixins: [common],
    data() {
        return {
            publications: null
        }
    },
    methods: {
        async getMyPublication() {
            this.publications = (await axios.get(this.apiUrl + `/api/publications/by_user/${this.authUserId}`)).data;
        }
    },
    async mounted() {
        await this.getMyPublication();
    }
}
</script>

<style scoped>

</style>
