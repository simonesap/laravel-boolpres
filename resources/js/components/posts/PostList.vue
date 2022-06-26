<template>

    <div>
        <div v-if="isLoading" >
            <Loader/>
        </div>

        <div style="width: 300px; margin: 0 auto;">
            <h2>Your posts</h2>
        </div>

        <div v-if="posts.length">

            <Pagination :pagination="pagination" @on-page-change="getPosts" />

            <div class="card text-center m-3" v-for="post in posts" :key="post.id">
                <div class="card-header">
                    {{post.title}} - Category: {{post.category.label}}
                </div>
                <div>
                    <img :src="post.image" alt="">
                </div>
                <div class="card-body">
                    <p class="card-title">
                        <span v-for="tag in post.tags" :key="tag.id" class="badge" :style="`background-color: ${tag.color}`">
                            {{tag.label}}
                        </span>
                    </p>
                    <p class="card-text">{{post.content}}</p>
                    <!-- <router-link :to="{name: 'post-show-page'}" class="btn btn-primary">View</router-link> -->
                    <!-- {params: $post.id} -->
                </div>
                <div class="card-footer text-muted" >
                    {{post.created_at[0]}}
                    {{post.created_at[1]}}
                    {{post.created_at[2]}}
                    {{post.created_at[3]}}
                    {{post.created_at[4]}}
                    {{post.created_at[5]}}
                    {{post.created_at[6]}}
                    {{post.created_at[7]}}
                    {{post.created_at[8]}}
                    {{post.created_at[9]}}
                </div>

                <router-link class="text-white btn btn-primary"
                             style="width: 70px; margin: 0 auto;"
                             :to="{name: 'post-show-page', params: { slug: post.slug} }">

                             View
                </router-link>

            </div>
        </div>
        <p v-else>Non ci sono post</p>
    </div>

</template>

<script>
import axios from 'axios';
import Loader from '../Loader.vue';
import Pagination from '../Pagination.vue';

    export default {
        name: 'PostList',

        components: {
            Loader,
            Pagination,
        },

        data() {
            return{
                posts: [],
                pagination: {},
                isLoading: true,
            }

        },

        methods: {
                getPosts(page = 1){
                    // axios.get(`http://127.0.0.1:8000/api/posts?page=${page}`)
                    axios.get('http://127.0.0.1:8000/api/posts?page=' + page)
                    .then( (res) => {
                        console.log(res.data.posts);

                        //destrutturazione
                        const {data, current_page, last_page} = res.data.posts;

                        console.log('data', data);
                        console.log('current_page', current_page);
                        console.log('last_page',last_page);


                        this.posts = data;

                        this.pagination = {
                                            lastPage: last_page,
                                            currentPage: current_page,
                                          }

                        // this.isLoading = false;
                    }).then( () => {
                        // console.log('terminato il caricamento dei posts')
                        this.isLoading = false;
                    } );

            }
        },

        mounted() {
            this.getPosts();
        }

    }

</script>

<style scoped>

</style>
