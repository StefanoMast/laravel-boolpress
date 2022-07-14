<template>
  <div class="card mb-3" style="width: 18rem;">
                <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                <div class="card-body">
                    <p>Category: {{categoryName}}</p>
                    <h5 class="card-title">{{ post.title}}</h5>
                    <p class="card-text">{{troncateText( 50)}}</p>
                </div>
                <!-- <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div> -->
            </div>
</template>

<script>
export default {
    name: "PostCard",
    props: {
        post: Object
    },
    computed: {
        categoryName() {
            return this.post.category ? this.post.category.name: "nessuna";
        },
    },
    methods: {
        troncateText(maxCharNumber) {
            // se il testo è più lungo di maxharnumber taglia il testo e aggiungi ...
            // altrimenti ritorna testo intero
            if (this.post.content.length > maxCharNumber) {
                return this.post.content.substr(0, maxCharNumber) + '...'
            }
            return this.post.content;
        }
    }
}
</script>

<style>

</style>