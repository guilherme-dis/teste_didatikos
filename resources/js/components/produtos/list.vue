<template>
    <div class="list">
        <h4>DIGITE O ID</h4>
        <input type="text" v-model="idz">
        <input type="submit" value="Enviar" v-on:click="submit_id">

                <div >
                    <p>Nome: <b>{{ name }}</b></p>
                    <p>Valor: {{ valor }}</p>
                    <p>Quantidade em estoque: {{ qtd_estoque }}</p>
                    <p>ID: {{ idz}}</p>

<!--                    <button class="waves-effect waves-light btn" @click="deleteProdutos(post.id)">Deletar</button>-->
<!--                    <button class="waves-effect waves-light btn" @click="updataProdutos(post.id)">Atualizar</button>-->
                    <hr>
                </div>

    </div>
</template>


<script>

import axios from "axios";

export default {
    data() {
        return {
            idz: null,
            product: null,
            name:null,
            valor:null,
            qtd_estoque:null,

        }
    }, methods: {
        submit_id(e) {
            axios
                .get(`http://localhost:8000/api/products/${this.idz}}`)
                .then((response) => {
                    this.name=response.data.name;
                    this.valor=response.data.valor;
                    this.qtd_estoque=response.data.qtd_estoque;
                })
                .catch((response) => {
                    console.log(response);
                });
        }


    }
}
</script>
