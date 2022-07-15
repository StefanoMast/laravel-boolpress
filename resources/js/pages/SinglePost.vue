<template>
  <div class="container">
    <section v-if="post">
    <h2>{{post.title}}</h2>
    <p>Category: {{ categoryName}}</p>
    <div class="mb-4">
        <router-link 
        :to="{name: 'single-tag', params: {slug: tag.slug}}" 
        v-for="tag in post.tags" 
        :key="tag.id" class="badge rounded-pill bg-warning text-dark mr-3"
        >{{tag.name}}</router-link>
    </div>
    <p> {{post.content}}</p>
    </section>
    <section v-else>
        <h2>Loading...</h2>
    </section>
  </div>
</template>

<script>
export default {
    name: "SinglePost",
    data() {
        return {
            post: null,
        }
    },
    created() {
        this.getPostDetails();
    },
    computed: {
        categoryName()
        {
            return this.post.category ? this.post.category : 'nessuna';
        }    
    },
    methods: {
        getPostDetails() {
            const slug = this.$route.params.slug;
            axios.get(`/api/posts/${slug}`).then((resp) => {
                if (resp.data.success) {
                    this.post = resp.data.results;
                } else {
                    this.$router.push({ name: "not-found"});
                }
            });
        },
    },
};
</script>

<style>

</style>