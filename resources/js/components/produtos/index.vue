<template>
    <div class="posts">
        <h2>produtos</h2>
        <router-link :to="{name:'cadastro'}"><a class="waves-effect waves-light btn" >Casdastrar Produto</a></router-link>
        <router-link :to="{name:'list'}"><a class="waves-effect waves-light btn" >Pesquisar por id</a></router-link>
        <div class="post" v-for="(post,index) in posts.data" :key="index">
            <p>Nome: <b>{{ post.name }}</b></p>
            <p>Valor: {{ post.valor }}</p>
            <p>Quantidade em estoque: {{ post.qtd_estoque }}</p>
            <p>ID: {{ post.id }}</p>

            <button class="waves-effect waves-light btn" @click="deleteProdutos(post.id)">Deletar</button>
            <button class="waves-effect waves-light btn" @click="updataProdutos(post.id)">Atualizar</button>
            <hr>
        </div>


    </div>
</template>


<script>
import axios from "axios";

export default {
    created() {
        this.fetchPosts();
    },
    data() {
        return {
            posts: {
                data: [],
                meta: {
                    current_page: 1,
                    last_page: 1,
                },
            },
        };
    },

    methods: {
        fetchPosts() {
            axios
                .get("/api/products")
                .then((response) => {
                    this.posts = response.data;
                })
                .catch((response) => {
                    console.log(response);
                });
        },
        async deleteProdutos(id) {
            const req = await fetch(`http://localhost:8000/api/products/${id}`, {
                method: "DELETE"
            });
            this.fetchPosts();
        },
    },
};
</script>
<style scoped>
.waves-effect{
    background-color: #ee7086;
}
</style>
