import './bootstrap';
import VueRouter from 'vue-router';
import router from './routes';
import Form from './utilities/Form';

Vue.use(VueRouter);
window.Form = Form;

Vue.component('flash', require('./components/Flash.vue'));
Vue.component('flash-errors', require('./components/Flash_Errors.vue'));
Vue.component('modal', require('./components/Modal.vue'));

const app = new Vue({
    el: '#app',
    data: {
            showModal: false
        },
    router
});
