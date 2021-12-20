<template>
  <div class="posts">
      <h2>produtos</h2>
     <div class="post" v-for="(post,index) in posts.data" :key="index">
        {{post.name}}
        <p>{{post.valor}}</p>
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
  },
};
</script>
