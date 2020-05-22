<template>
  <div>
    <h1>Posts</h1> 
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
          console.log(res.data);
        })
      }
    }
  }
</script>
