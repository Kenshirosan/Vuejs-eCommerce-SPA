import './bootstrap';
// import './aos';
import VueRouter from 'vue-router';
import router from './routes';
import Form from './utilities/Form';

 Vue.use(VueRouter);
window.Form = Form;
// These components are nested in Home.vue
Vue.component('presentationcards', require('./views/includes/PresentationCards.vue'));
Vue.component('pricingandoffercards', require('./views/includes/PricingAndOfferCards.vue'));
Vue.component('thegirl', require('./views/includes/TheGirl.vue'));
Vue.component('brands', require('./views/includes/Brands.vue'));
Vue.component('workers', require('./views/includes/Workers.vue'));
Vue.component('blog', require('./views/includes/Blog.vue'));
Vue.component('pricing', require('./views/includes/Pricing.vue'));
Vue.component('whattheysay', require('./views/includes/WhatTheySay.vue'));
//
Vue.component('flash', require('./components/Flash.vue'));
Vue.component('flash-errors', require('./components/Flash_Errors.vue'));
const app = new Vue({
    el: '#app',

    router
});
