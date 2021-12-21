<template>
  <div class="posts">
      <h1>cidades</h1>
     <div class="post" v-for="(post,index) in posts" :key="index">
        <p>{{post.nome}}</p>
         <p>{{post.id}}</p>
        <hr>
        oi
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
        .get("/api/cidades")
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
