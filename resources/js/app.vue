<template>
    <div>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo center">Controle de Produtos</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li>
                        <router-link to="/produtos">Produtos</router-link>
                    </li>
                    <li>
                        <router-link to="/cidade">Cidade</router-link>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="container">
                <router-view></router-view>


        </div>
    </div>
</template>
<script>

export default {}
</script>
