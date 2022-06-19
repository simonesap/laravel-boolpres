<template>

    <div>

        <body>
                <Header/>

                <main>
                    <div class="container">
                        <!-- <PostList/> -->
                        <router-view></router-view>
                    </div>


                </main>

        </body>

    </div>

</template>

<script>
import Header from './Header.vue';
import PostList from './posts/PostList.vue';

    export default {
        name: 'App',

        components: {
            Header,
            PostList,
        }
    }

</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Joan&display=swap');

    body {
        font-family: 'Joan', serif;
    }


</style>
