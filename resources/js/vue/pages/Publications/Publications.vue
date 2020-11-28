<template>
    <div class="card">
        <div class="card-header">Все публикации</div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Автор</th>
                    <th>Название</th>
                    <th>Журнал</th>
                    <th>Индексируется</th>
                </tr>
                <tr v-if="!publications || !publications.length">
                    <td colspan="5">Нет публикаций!</td>
                </tr>
                <tr v-else v-for="pub in publications">
                    <td>{{ pub.id }}</td>
                    <td>{{ pub.last_name }} {{pub.first_name}}</td>
                    <td>{{ pub.name }}</td>
                    <td>{{ pub.journal }}</td>
                    <td>{{ pub.indexer }}</td>
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
        async getPublication() {
            this.publications = (await axios.get(this.apiUrl + `/api/publications`)).data;
        }
    },
    async mounted() {
        await this.getPublication();
    }
}
</script>

<style scoped>

</style>
