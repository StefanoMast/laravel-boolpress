<template>
  <div class="container">
    <h2>Questo è il mio blog</h2>
    <Posts/>
  </div>
</template>

<script>
import Banner from "../components/Banner.vue";
import Posts from "../components/Posts.vue";
export default {
    name: "Blog",
    components: {
        Posts,
        Banner
    }
}
</script>

<style>

</style>