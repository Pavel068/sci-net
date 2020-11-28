<template>
    <div class="card">
        <div class="card-header">Избранные публикации</div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Название</th>
                    <th>Журнал</th>
                    <th>Категория</th>
                    <th>Соавторы</th>
                    <th></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Название</td>
                    <td>Журнал</td>
                    <td>Категория</td>
                    <td>Соавторы</td>
                    <td>
                        <router-link :to="{name: 'ViewPublication'}">Просмотр</router-link>
                        <router-link :to="{name: 'EditPublication'}">Скрыть</router-link>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Название</td>
                    <td>Журнал</td>
                    <td>Категория</td>
                    <td>Соавторы</td>
                    <td>
                        <router-link :to="{name: 'ViewPublication'}">Просмотр</router-link>
                        <router-link :to="{name: 'EditPublication'}">Скрыть</router-link>
                    </td>
                </tr>
            </table>
            <div class="mt-3">
                <button class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "FavoritesPublications"
}
</script>

<style scoped>

</style>
