import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import BoolpressPage from './components/pages/BoolpressPage.vue';
import HomePage from './components/pages/HomePage.vue';
import ContactPage from './components/pages/ContactPage.vue';
import NotFoundPage from './components/pages/NotFoundPage.vue';
import PostShowPage from './components/pages/PostShowPage.vue';

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active blue_custom w_custom',
    routes: [
        {
            path: '/', component: BoolpressPage, name: 'boolpress'
        },
        {
            path: '/home', component: HomePage, name: 'home'
        },
        {
            path: '/contacts', component: ContactPage, name: 'contact'
        },
        {
            path: '/posts/:slug', component: PostShowPage, name: 'post-show-page'
        },
        {
            path: '*', component: NotFoundPage, name: 'notFound'
        },
    ]
});

export default router;
