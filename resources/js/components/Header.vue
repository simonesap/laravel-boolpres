<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div>
                <img :src="require('../../../public/img/logo.png')" alt="">
            </div>
            <router-link class="navbar-brand m-1 w_custom-2" to="/">Boolpress.com</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <router-link class="nav-link m-1 w_custom-2" to="{name: 'home'}">Home <span class="sr-only">(current)</span></router-link>
                        </li>
                        <li class="nav-item active">
                            <router-link class="nav-link m-1 w_custom-2" to="{name: 'contact'}">Contact</router-link>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link m-1 w_custom-2" href="/admin/posts">Bacheca</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item active" >
                            <a class="nav-link m-1 w_custom-2" href="/admin/posts">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
import axios from 'axios';

export default{
        name: "Header",

        data() {
            return {
                user: [],
            }
        },

        methods: {
            getUser(){
                axios.get('http://127.0.0.1:8000/api/user')
                .then( (res) => {
                    console.log(res.data.user.id);
                    this.user = res.data;
                })
            }
        },

        mounted() {
            this.getUser();
        }
    }
</script>

<style scoped>
    .blue_custom{
        /* color: blue; */
        color: #3d869f;
        text-shadow: 1px 1px 1px #000000;
        font-size: 1.5em;
    }

    /* .w_custom{
        width: 150px;
    } */

    .w_custom-2{
        /* color: blue; */
        color: #3d869f;
        text-shadow: 1px 1px 1px #000000;
        font-size: 1.5em;
    }

    .w_custom-3{
        width: 100px;
    }
</style>
