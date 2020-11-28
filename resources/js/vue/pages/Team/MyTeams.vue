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
                <tr>
                    <td>1</td>
                    <td>ITmb</td>
                    <td>Тамбовский Государственный Технический Университет</td>
                    <td>4</td>
                    <td>3 (1)</td>
                    <td>123</td>
                    <td>
                        <router-link :to="{name: 'ViewTeam', params: {team_id: 1}}">Подробнее</router-link>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    name: "MyTeams"
}
</script>

<style scoped>

</style>
