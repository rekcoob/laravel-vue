<template>
  <div>
    <h1>Posts</h1> 
    <div class="card card-body mb-2" v-for="post in posts" 
    v-bind:key="post.id"
    >
      <h3>{{ post.title }}</h3>
      <p>{{ post.body }}</p>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        posts: [],
        post: {
          id: '',
          title: '',
          body: ''
        },
        post_id: '',
        pagination: {},
        edit: false
      }
    },    

    created() {
      this.fetchPosts();
    },

    methods: {
      fetchPosts() {
        fetch('api/posts')
        .then(res => res.json())
        .then(res => {
          this.posts = res.data;
        })
      }
    }
  }
</script>
