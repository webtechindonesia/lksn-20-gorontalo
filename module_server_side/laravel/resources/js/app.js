axios.defaults.headers.common['Authorization']  = 'Bearer ' + localStorage.getItem('token')

require('./bootstrap');

import axios from 'axios';
import Vue from 'vue'

import VueRouter from 'vue-router'

import routes from './router'

Vue.use(VueRouter)

window.Vue = require('vue');

Vue.component('Navigation', require('./components/Navigation.vue').default);

const app = new Vue({
    el: '#yukpilih',
    router: new VueRouter(routes)
});
