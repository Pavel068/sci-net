<template>
    <div class="card">
        <div class="card-header">Добавить публикацию</div>
        <div class="card-body">
            <div class="row">
                <label for="publication_name">Название</label>
                <input class="form-control" type="text" name="publication_name" id="publication_name" v-model="publication.name">
            </div>
            <div class="row mt-3">
                <label for="publication_authors">Авторы</label>
                <input class="form-control" type="text" name="publication_authors" id="publication_authors"
                       v-model="publication.authors" placeholder="Через запятую">
            </div>
            <div class="row mt-3">
                <label for="publication_keywords">Ключевые слова</label>
                <input class="form-control" type="text" name="publication_keywords" id="publication_keywords"
                       v-model="publication.keywords" placeholder="Через запятую">
            </div>
            <div class="row mt-3">
                <label for="publication_journal">Журнал</label>
                <input class="form-control" type="text" name="publication_journal" id="publication_journal"
                       v-model="publication.journal">
            </div>
            <div class="row mt-3">
                <label for="publication_indexer">Индексируется</label>
                <input class="form-control" type="text" name="publication_indexer" id="publication_indexer"
                       v-model="publication.indexer" placeholder="ВАК, РИНЦ, Scopus, WoS">
            </div>
            <div class="row mt-3">
                <label for="publication_year">Год</label>
                <input class="form-control" type="text" name="publication_year" id="publication_year" v-model="publication.year">
            </div>
            <div class="row mt-3">
                <label for="publication_pages">Страницы</label>
                <input class="form-control" type="text" name="publication_pages" id="publication_pages" v-model="publication.pages"
                       placeholder="Диапазон, например, 25 - 32">
            </div>
            <div class="row mt-1" v-if="error">
                <p style="color: red">Ошибка при добавлении публикации!</p>
            </div>
            <div class="row mt-1" v-if="success_added">
                <p style="color: green">Публикация успешно добавлена!</p>
            </div>

            <div class="row mt-5">
                <button class="btn btn-primary" @click="addPublication">Добавить</button>
            </div>
        </div>
    </div>
</template>

<script>
import common from "../../mixins/common";
import axios from 'axios';

export default {
    name: "AddPublication",
    mixins: [common],
    data() {
        return {
            publication: {
                name: null,
                authors: null,
                keywords: null,
                journal: null,
                indexer: null,
                year: null,
                pages: null
            },
            error: false,
            success_added: false,
        }
    },
    methods: {
        async addPublication() {
            const publication = await axios.post(this.apiUrl + '/api/publications', this.publication);
            if (publication.data.error) {
                this.error = true;
            } else {
                this.error = false;
                this.success_added = true;
                setInterval(() => {
                    this.success_added = false;
                }, 3000);
            }
        }
    }
}
</script>

<style scoped>

</style>
