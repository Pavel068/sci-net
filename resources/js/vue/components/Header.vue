<template>
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <router-link :to="{path: '/'}" class="navbar-brand brand-logo">
                Sci-Net
            </router-link>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav navbar-nav-right" v-if="isAuth">
                <li class="nav-item dropdown show">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown" aria-expanded="true">
                        <i class="mdi mdi-bell-outline mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list show" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item">
                            <p class="mb-0 font-weight-normal float-left">Рекомендации по работе с системой
                            </p>
                        </a>
                        <div class="dropdown-divider"></div>
                        <router-link class="dropdown-item preview-item" :to="{name: 'Profile'}">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-settings mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium">Профиль</h6>
                                <p class="font-weight-light small-text mb-0">
                                    Заполните область научных интересов
                                </p>
                            </div>
                        </router-link>
                        <div class="dropdown-divider"></div>
                        <router-link class="dropdown-item preview-item" :to="{name: 'Profile'}">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                    <i class="mdi mdi-settings mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-medium">Профиль</h6>
                                <p class="font-weight-light small-text mb-0">
                                    Заполните идентификаторы Elibrary и Orcid
                                </p>
                            </div>
                        </router-link>
                    </div>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="https://via.placeholder.com/30x30" alt="profile">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <router-link class="dropdown-item" :to="{name: 'Profile'}">
                            <i class="mdi mdi-account text-primary"></i>
                            Профиль
                        </router-link>
                        <router-link class="dropdown-item" :to="{name: 'Settings'}">
                            <i class="mdi mdi-settings text-primary"></i>
                            Настройки
                        </router-link>
                        <div class="dropdown-divider"></div>
                        <router-link class="dropdown-item" :to="{name: 'Logout'}">
                            <i class="mdi mdi-logout text-primary"></i>
                            Выход
                        </router-link>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
</template>

<script>
import common from "../mixins/common";

export default {
    name: "Header",
    mixins: [common],
    mounted() {
        document.querySelector('button[data-toggle="offcanvas"]').addEventListener('click', () => {
            const classList = document.querySelector('#sidebar').classList.value;
            if (classList && classList.indexOf('active') !== -1) {
                document.querySelector('#sidebar').classList.remove('active');
            } else {
                document.querySelector('#sidebar').classList.add('active');
            }
        });
    }
}
</script>

<style scoped>

</style>
