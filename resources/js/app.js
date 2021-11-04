require('./bootstrap');
window.Vue = require('vue');

import VueAxios from 'vue-axios';
import axios from 'axios';
import Vue from 'vue';
import Vuetify from 'vuetify';

Vue.use(Vuetify);
Vue.use(VueAxios, axios);

Vue.component('insurance-form', require('./components/InsuranceForm.vue').default);

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify()
});
