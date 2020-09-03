require('./bootstrap');

window.Vue = require('vue');

//Components
Vue.component('products', require('./components/products/products.vue').default); //products Dashboard
Vue.component('categories', require('./components/products/categories.vue').default); //categories Dashboard
Vue.component('cart', require('./components/purchase/cart.vue').default); //cart
Vue.component('dashboard', require('./components/customer/dashboard.vue').default); //customer profile
Vue.component('credit', require('./components/customer/credit.vue').default); //customer credits profile
Vue.component('payment', require('./components/purchase/payment.vue').default); //payment page
Vue.component('account', require('./components/customer/account.vue').default); //payment page
Vue.component('admin-dashboard', require('./components/Admin/dashboard.vue').default); //Admin Dashboard
Vue.component('pagination', require('./components/Products/pagination.vue').default); //Pagination Component
Vue.component('loading', require('./components/App/loading.vue').default); //Loading Component
Vue.component('carrier', require('./components/App/carrier.vue').default); //Loading Component
Vue.component('load-control', require('./components/App/Load-control.vue').default); //Loading Control
Vue.component('shoporcheckout', require('./components/purchase/shoporcheckout.vue').default); //Shop or checkout
Vue.component('autosignin', require('./components/customer/autosignin.vue').default); //payment page
Vue.component('load_progress', require('./components/App/load-progress.vue').default); //Loading Component

//Admin Dashboard
Vue.component('admindashboard', require('./components/Admin/dashboard.vue').default); //Admin Dashboard

//chart app components
Vue.component('users-component', require('./components/chartapp/UsersComponent.vue').default);
Vue.component('message-component', require('./components/chartapp/MessagesComponent.vue').default);
Vue.component('active-chats-component', require('./components/chartapp/ActiveChatsComponent.vue').default);
Vue.component('stream-chat', require('./components/chartapp/StreamChat.vue').default);

//Imports

import common from './common/common.js'; //common js
Vue.mixin(common); //compile commonjs

import Swal from "vue-sweetalert2"; //Swalt Msgs
Vue.use(Swal);

import VueToast from 'vue-toast-notification';
// Import one of available themes
import 'vue-toast-notification/dist/theme-default.css';
//import 'vue-toast-notification/dist/theme-sugar.css';

Vue.use(VueToast, {
    // One of the options
    position: 'top'
});
//let instance = Vue.$toast.open('You did it!');

//import vuex
//import {store} from './store/store.js';

//Global class
import global from "./Global/gloabal.js";
Vue.prototype.$global = new global();

//App imports
import routes from './routes/routes.js';

//Mounts app components
import VueRouter from "vue-router";
Vue.use(VueRouter);
const router = new VueRouter({
    //mode: 'history',
    routes,
});


//Event bus
var Event = new Vue();
window.Event = Event;

import VueProgressBar from 'vue-progressbar'

const options = {
    color: '#bffaf3',
    failedColor: '#874b4b',
    thickness: '5px',
    transition: {
        speed: '10s',
        opacity: '0.6s',
        termination: 6000
    },
    autoRevert: true,
    location: 'top',
    inverse: false
}

Vue.use(VueProgressBar, options)

//chart app event bus
Vue.prototype.EventBus = new Vue();

const app = new Vue({
    router,
    el: '#app',
});