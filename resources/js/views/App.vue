<template>

<div>
        <h1>work in progress</h1>
    <h2>sito in costruzione</h2>

    <div class="container" v-for="post in posts" :key="post.id">
        <div class="col">
            <div>{{post.title}}</div>
            <img :src="post.image" alt="">
            <div>{{post.description}}</div>
        </div>
    </div>
</div>


</template>

<script>

import Axios from 'axios';
import ExampleComponent from '../components/ExampleComponent';

export default {
    name:"App",
    components: { ExampleComponent},
    
    data(){
        return{
            posts: ''
        }
    },

    mounted() {
        Axios.get('/api/posts').
        then((response) => {
            this.posts = response.data.posts
            console.log(this.posts);
        
        })
    }
}

</script>