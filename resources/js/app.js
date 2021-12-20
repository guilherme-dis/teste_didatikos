import Vue from 'vue'

Vue.component('cidade-component', require('./components/app').default)
const app = new Vue({
    el: '#app',
});

require('./bootstrap');