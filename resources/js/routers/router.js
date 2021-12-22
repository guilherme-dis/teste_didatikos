import VueRouter from "vue-router";
import Vue from "vue";

import Produtos from "../components/produtos";
import Cidade from "../components/cidade";
import ProdutosCadastro from "../components/produtos/cadastrar"
import List from "../components/produtos/list"

const routes = [
    {path: '/produtos',             name: 'produtos',       component: Produtos},
    {path: '/cidade',               name: 'cidade',         component: Cidade},
    {path: '/produtos/cadastrar',   name: 'cadastro',       component: ProdutosCadastro},
    {path: '/produtos/list',        name: 'list',           component: List},
    {path: '/', redirect:'/produtos'}
];
const router = new VueRouter({
    mode:'history',
    base:process.env.BASE_URL,
    routes
})
Vue.use(VueRouter);
export default router
