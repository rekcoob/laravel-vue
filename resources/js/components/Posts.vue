<template>
  <div>
    <h1>Posts</h1> 

    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
          <a  @click="fetchPosts(pagination.prev_page_url)" class="page-link" href="#">Previous</a>
        </li>
        <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
          <a @click="fetchPosts(pagination.next_page_url)" class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>

    <div class="card card-body mb-2" v-for="post in posts" 
    v-bind:key="post.id">
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
      fetchPosts(page_url) {
        let vm = this;        
        page_url = page_url || '/api/posts'
        fetch(page_url)
        .then(res => res.json())
        .then(res => {
          console.log(res);
          this.posts = res.data;
          vm.makePagination(res.meta, res.links);
        })
        .catch(err => console.log(err));

      },

      makePagination(meta, links) {
        let pagination = {
          current_page: meta.current_page,
          last_page: meta.last_page,
          next_page_url: links.next,
          prev_page_url: links.prev
        }

        this.pagination = pagination;
      }
    }
  }
</script>
