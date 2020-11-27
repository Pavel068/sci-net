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
})

import App from "./vue/App";

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router,
    render: h => h(App)
})
