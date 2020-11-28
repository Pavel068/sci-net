<template>
    <div class="card">
        <div class="card-header">Мои публикации</div>
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
                        <router-link :to="{name: 'EditPublication'}">Редактировать</router-link>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Название</td>
                    <td>Журнал</td>
                    <td>Категория</td>
                    <td>Соавторы</td>
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
export default {
name: "MyPublications"
}
</script>

<style scoped>

</style>
