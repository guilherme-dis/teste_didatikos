<template>
    <div>
        <h2>Cadastro de Produtos</h2>
        <div>
            <form id="produto-form" @submit="createProduto">
                <div class="input-container">
                    <label for="name">Nome:</label>
                    <input type="text" v-model="name" name="name" id="name" required>

                    <label for="valor">Valor do produto;</label>
                    <input type="number" v-model="valor" name="valor" id="valor" required>
                    <label for="qtd_estoque">Quantidade em estoque:</label>
                    <input type="number" v-model="qtd_estoque" name="qtd_estoque" id="qtd_estoque" required>

                    <label for="cidades_id">Digite o id da cidade</label>
                    <input type="number" v-model="cidades_id" id="cidades_id">
                    <!--                    <select name="cidades_id" id="cidades_id" v-model="cidade">-->
                    <!--                        <option value="">Selecione a cidade</option>-->
                    <!--                        <option v-for="cidade in cidades" :key="cidade.id" :value="cidade.id">-->

                    <!--                        </option>-->


                    <!--                    </select>-->
                    <input type="submit" class="submit-btn" value="Cadastrar Produto">
                </div>


            </form>
        </div>
    </div>
</template>
<script>

export default {
    name: 'cadastrar',
    data() {
        return {
            cidades: null,
            cidade: null,
            name: null,
            valor: null,
            qtd_estoque: null,
            cidades_id: null
        }
    },
    methods: {
        async getCidades() {
            const req = await fetch("http://localhost:8000/api/cidades");
            const data = await req.json();
            this.cidades = data.cidades;

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
            this.$router.Push('http://localhost:8000/produtos')


        }
        },
        mounted() {
            this.getCidades()
        }

    }
</script>

