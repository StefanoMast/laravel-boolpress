<template>
  <div class="container">
    <section v-if="tag">
        <h2>Tag: {{tag.name}}</h2>
        <h3>Post collegati:</h3>
        <div class="row row-cols-3">
            <div v-for="post in tag.posts" :key="post.id" class="col">
                <PostCard :post="post"/>
            </div>
        </div>
    </section>
    <section v-else>Loanding...</section>
  </div>
</template>

<script>
import PostCard from "../components/PostCard.vue";
export default {
    name: "SingleTag",
    components: {
        PostCard
    },
    data() {
        return {
            tag: null,
        }
    },
    created() {
        this.getTagDetails();
    },
    methods: {
        getTagDetails() {
            axios.get(`/api/tags/${this.route.params.slug}`).then(resp => {
                this.tag = resp.data.results;
            });
        }
    }
}
</script>

<style>

</style>