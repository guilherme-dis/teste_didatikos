import Vue from "vue";
//import VueRouter from "vue-router";


Vue.component("cidade", require("./components/cidade").default);
Vue.component("products", require("./components/produtos").default);
//Vue.use(VueRouter);

// const routes = [
//     { path: "/", component: productsComponent },
//     { path: "/cidade", component: cidadeComponent },
// ];
//
// const router = new VueRouter({
//     routes,
// });

const app = new Vue({
    //router,
    el: "#app",
});

require("./bootstrap");
