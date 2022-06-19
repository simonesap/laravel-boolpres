
 window.Vue = require('vue');
//  axios = require('axios');

import Vue from 'vue';

import router from './routes.js';
import App from './components/App.vue';


const app = new Vue({
    el: '#root',router,
    render: h => h(App)
})

import VueRouter from 'vue-router'

Vue.use(VueRouter)
