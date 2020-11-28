<template>
    <div class="card">
        <div class="card-header">Найти команду</div>
        <div class="card-body">
            <div class="filters">
                <div class="row">
                    <div class="col-md-3">
                        <label for="">Научный интерес</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="">Город</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="">Рейтинг</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-3">
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
    name: "FindTeam"
}
</script>

<style scoped>

</style>
