require('./bootstrap');

import Vue from 'vue'

import BootstrapVue from "bootstrap-vue";
Vue.use(BootstrapVue)

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import routes from "./vue/router/routes";
const router = new VueRouter({
    mode: 'history',
    routes
});

router.beforeEach((to, from, next) => {
    if (to.path === '/') {
        next({
            name: 'News',
            params: {nextUrl: to.fullPath}
        })
    }

    if (to.name === 'Login') {
        if (localStorage.getItem('authUserId')) {
            next({
                name: 'News',
                params: {nextUrl: to.fullPath}
            })
        }
    }

    if (to.matched.some(record => record.meta.auth)) {
        if (!localStorage.getItem('authUserId')) {
            next({
                name: 'Login',
                params: {nextUrl: to.fullPath}
            });
        } else {
            next();
        }
    } else {
        next();
    }
});

import App from "./vue/App";

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router,
    render: h => h(App)
})
