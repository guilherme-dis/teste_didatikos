import Vue from "vue";
import App from './app.vue'
import router from './routers/router'

const app = new Vue({
    el: "#app",
    components:{App},
    router
});
require("./bootstrap");
