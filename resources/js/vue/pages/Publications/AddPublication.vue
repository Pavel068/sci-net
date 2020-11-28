<template>
    <div class="card">
        <div class="card-header">Добавить публикацию</div>
        <div class="card-body">
            <div class="row">
                <label for="publication_name">Название</label>
                <input class="form-control" type="text" name="publication_name" id="publication_name" v-model="name">
            </div>
            <div class="row mt-3">
                <label for="publication_keywords">Ключевые слова</label>
                <input class="form-control" type="text" name="publication_keywords" id="publication_keywords"
                       v-model="keywords" placeholder="Через запятую">
            </div>
            <div class="row mt-3">
                <label for="publication_journal">Журнал</label>
                <input class="form-control" type="text" name="publication_journal" id="publication_journal"
                       v-model="journal">
            </div>
            <div class="row mt-3">
                <label for="publication_year">Год</label>
                <input class="form-control" type="text" name="publication_year" id="publication_year" v-model="year">
            </div>
            <div class="row mt-3">
                <label for="publication_pages">Страницы</label>
                <input class="form-control" type="text" name="publication_pages" id="publication_pages" v-model="pages"
                       placeholder="Диапазон, например, 25 - 32">
            </div>
            <div class="row mt-5">
                <button class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AddPublication",
    data() {
        return {
            name: null,
            keywords: null,
            journal: null,
            year: null,
            pages: null
        }
    }
}
</script>

<style scoped>

</style>
