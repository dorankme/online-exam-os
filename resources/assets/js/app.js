
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Header from './components/Header.vue'
import Main from './components/Main.vue'
import Footer from './components/Footer.vue'


import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes: [
        { path: '/', component: Header},
        { path: '/', component: Main},
    ]
})



new Vue(Vue.util.extend({ router }, Header)).$mount('#header')
new Vue(Vue.util.extend({ router }, Main)).$mount('#main')
new Vue(Vue.util.extend({ router }, Footer)).$mount('#footer')