<template>
    <div>
    <h2>Cadastro de Produtos</h2>

    <form @submit="createProduto">

        <label for="name">Nome:</label>
        <input type="text" v-model="name" id="name" required>

        <label for="valor">Valor do produto;</label>
        <input type="number" v-model="valor" name="valor" id="valor" required>

        <label for="qtd_estoque">Quantidade em estoque:</label>
        <input type="number" v-model="qtd_estoque" name="qtd_estoque" id="qtd_estoque" required>
        <label>Materialize Select</label>
        <select class="browser-default" id="cidades_id" v-model="cidades_id">
            <option value="" disabled selected>Choose your option</option>
            <option v-for="c in cidades_select" v-bind:value="c.id">
                {{ c.nome }}
            </option>
        </select>

        <input type="submit" class="waves-effect waves-light btn" style="background-color: #ee7086" value="Cadastrar Produto">

    </form>
    </div>

</template>
<script>

export default {
    name: 'cadastrar',
    data() {
        return {
            cidades_select: null,
            cidade: null,
            name: null,
            valor: null,
            qtd_estoque: null,
            cidades_id: null
        }
    },
    methods: {
        async getCidades() {
            const req = await fetch("http://localhost:8000/api/cities");
            const data = await req.json();

            this.cidades_select = data;
            console.log(cidades_select);
        },
        async createProduto(e) {
            e.preventDefault();
            const data = {
                name: this.name,
                valor: this.valor,
                qtd_estoque: this.qtd_estoque,
                cidades_id: this.cidades_id
            }
            console.log(data)
            const dataJson = JSON.stringify(data)
            const req = await fetch("http://localhost:8000/api/products", {
                method: "POST",
                headers: {"Content-Type": "application/json"},
                body: dataJson
            });
            this.$router.push('/')


        }
    },
    mounted() {
        this.getCidades()
    }

}
</script>

