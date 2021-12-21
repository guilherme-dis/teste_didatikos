<template>
  <div class="posts">
      <h1>cidades</h1>
     <div class="post" v-for="(post,index) in posts" :key="index">
        <p>Nome: {{post.nome}}</p>
         <p>Estado:{{post.estado}}</p>
         <p>Pais:{{post.pais}}</p>
         <p>Id:{{post.id}}</p>
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
        .get("/api/cities")
        .then((response) => {
          this.posts = response.data;
        })
        .catch((response) => {
          console.log(response);
        });
    },
  },
};
</script>
