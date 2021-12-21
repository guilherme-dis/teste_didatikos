import Vue from "vue";
import VueRouter from "vue-router";
import App from './app.vue'
import routes from './routers/router'
Vue.use(VueRouter);
const router = new VueRouter({
    mode:'history',
    base:process.env.BASE_URL,
    routes
})
//Vue.component("cidade", require("./components/cidade").default);
//Vue.component("products", require("./components/produtos").default);
//

// const routes = [
//     { path: "/", component: productsComponent },
//     { path: "/cidade", component: cidadeComponent },
// ];
//
// const router = new VueRouter({
//     routes,
// });

const app = new Vue({
    el: "#app",
    components:{App},
    router
});

require("./bootstrap");
