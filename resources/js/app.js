require('./bootstrap');

import Vue from 'vue';
import Modal from './components/Modal.vue';
Vue.component('modal', Modal);

new Vue({
    el: '#app',
    data: {
        showModal: false
    }
});
