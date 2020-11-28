<template>
    <div class="card">
        <div class="card-header">Мои команды</div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Организация</th>
                    <th>Участники</th>
                    <th>Проекты</th>
                    <th>Рейтинг</th>
                    <th></th>
                </tr>
                <tr v-if="!myTeams || !myTeams.length">
                    <td colspan="7">У вас нет команд</td>
                </tr>
                <tr v-for="team in myTeams">
                    <td>{{team.id}}</td>
                    <td>{{team.name}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <router-link :to="{name: 'ViewTeam', params: {team_id: team.id}}">Подробнее</router-link>
                    </td>
                </tr>
            </table>

            <div class="mt-3">
                <button class="btn btn-primary">Создать команду</button>
            </div>
        </div>
    </div>
</template>

<script>
import common from "../../mixins/common";

export default {
    name: "MyTeams",
    mixins: [common],
    data() {
        return {
            myTeams: null,
        }
    },
    methods: {
        async getMyTeams() {
            this.myTeams = (await axios.get(this.apiUrl + `/api/teams/by_user/${this.authUserId}`)).data;
        }
    },
    async mounted() {
        await this.getMyTeams();
    }
}
</script>

<style scoped>

</style>
