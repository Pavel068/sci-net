<template>
    <div class="card">
        <div class="card-header">Найти команду</div>
        <div class="card-body">
            <div class="filters">
                <div class="row">
                    <div class="col-md-2">
                        <label for="">Название</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label for="">Интересы</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label for="">Город</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label for="">ВУЗ</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label for="">Рейтинг</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <label for="">Проекты</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-md-12">
                        <button class="btn btn-primary">Применить</button>
                    </div>
                </div>
            </div>
            <table class="table table-striped mt-5">
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Организация</th>
                    <th>Участники</th>
                    <th>Проекты</th>
                    <th>Рейтинг</th>
                    <th></th>
                </tr>
                <tr v-for="team in teams">
                    <td>{{team.id}}</td>
                    <td>{{team.name}}</td>
                    <td></td>
                    <td>1</td>
                    <td></td>
                    <td>{{team.rating}}</td>
                    <td>
                        <router-link :to="{name: 'ViewTeam', params: {team_id: team.id}}">Подробнее</router-link>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
import common from "../../mixins/common";

export default {
    name: "FindTeam",
    mixins: [common],
    data() {
        return {
            teams: null
        }
    },
    methods: {
        async getTeams() {
            this.teams = (await axios.get(this.apiUrl + '/api/teams')).data;
        }
    },
    async mounted() {
        await this.getTeams();
    }
}
</script>

<style scoped>

</style>
