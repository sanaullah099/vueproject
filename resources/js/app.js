require('./bootstrap');
 window.Vue = require('vue');

// import Vue from 'vue';

import VueRouter from 'Vue-router';
Vue.use(VueRouter);


import App from './App.vue';
import Home from '../js/components/Home';
import ContactList from '../js/components/ContactList';


import VueAxoios from 'Vue-axios';
import axios from 'axios';
Vue.use(VueAxios,axios);

const routes = [
{
	name: '/',
	path: '/',
	component: Home
},
{
	name: '/contacts',
	path: '/contacts',
	component: ContactList
}
];
const router = new VueRouter({mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
