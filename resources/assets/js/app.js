import './bootstrap';
import VueRouter from 'vue-router';
import router from './routes';
import Form from './utilities/Form';

window.Vue = require('vue');
Vue.use(VueRouter);
window.Form = Form;


const app = new Vue({
    el: '#app',

    router
});
