<template>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <router-link :to="{name: 'News'}" class="nav-link">
                    <i class="mdi mdi-view-dashboard-outline menu-icon"></i>
                    <span class="menu-title">Новости</span>
                </router-link>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-team" aria-expanded="false"
                   aria-controls="ui-advanced">
                    <i class="mdi mdi-bullseye-arrow menu-icon"></i>
                    <span class="menu-title">Команда</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-team">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <router-link :to="{name: 'MyTeams'}" class="nav-link">Мои команды</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link :to="{name: 'FindTeam'}" class="nav-link">Найти команду</router-link>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-publishes" aria-expanded="false"
                   aria-controls="ui-publishes">
                    <i class="mdi mdi-bullseye-arrow menu-icon"></i>
                    <span class="menu-title">Публикации</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-publishes">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <router-link :to="{name: 'MyPublications'}" class="nav-link">Мои публикации</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link :to="{name: 'AddPublication'}" class="nav-link">Добавить публикацию
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link :to="{name: 'FavoritesPublications'}" class="nav-link">Избранные публикации
                            </router-link>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                   aria-controls="ui-advanced">
                    <i class="mdi mdi-bullseye-arrow menu-icon"></i>
                    <span class="menu-title">Проекты</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-advanced">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <router-link :to="{name: 'MyProjects'}" class="nav-link">Мои проекты
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link :to="{name: 'Projects'}" class="nav-link">Список проектов
                            </router-link>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/widgets/widgets.html">
                    <i class="mdi mdi-airplay menu-icon"></i>
                    <span class="menu-title">Друзья</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pages/widgets/widgets.html">
                    <i class="mdi mdi-airplay menu-icon"></i>
                    <span class="menu-title">Сообщения</span>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    name: "Sidebar"
}
</script>

<style scoped>

</style>
