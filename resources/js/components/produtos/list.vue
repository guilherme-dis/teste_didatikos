<template>
    <div>
        <h2>
            <div >
<!--                <p>Nome: <b>{{ posts.name }}</b></p>-->
<!--                <p>Valor: {{ posts.valor }}</p>-->
<!--                <p>Quantidade em estoque: {{ posts.qtd_estoque }}</p>-->



                <label for="id">Digite o id</label>
                <input type="number" v-model="id" name="id" id="id" required>
                <button class="view" @click="show($id)">Mostrar</button>
            </div>
        </h2>
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
    },methods: {
        fetchPosts(id) {
            axios
                .get(`http://localhost:8000/api/products/${id}`)
                .then((response) => {
                    this.posts = response.data;
                })
                .catch((response) => {
                    console.log(response);
                });
        },
    },
    show(id){
        console.log(id)
    }
}
</script>
