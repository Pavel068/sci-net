<template>
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="mdi mdi-view-dashboard-outline menu-icon"></i>
                    <span class="menu-title">Лента</span>
                </a>
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
                        <li class="nav-item"><a class="nav-link" href="#">Мои команды</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Подбор команды</a></li>
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
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-publishes" aria-expanded="false"
                   aria-controls="ui-publishes">
                    <i class="mdi mdi-bullseye-arrow menu-icon"></i>
                    <span class="menu-title">Публикации</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="ui-publishes">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"><a class="nav-link" href="#">Мои публикации</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Добавить публикацию</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Избранное</a></li>
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
                        <li class="nav-item"><a class="nav-link" href="#">Список проектов</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Мои проекты</a></li>
                    </ul>
                </div>
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
