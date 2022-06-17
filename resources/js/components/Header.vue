<template>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div>
                <img :src="require('../../../public/img/logo.png')" alt="">
            </div>
            <router-link class="navbar-brand m-1" to="/">Boolpress.com</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <router-link class="nav-link m-1" to="{name: 'home'}">Home <span class="sr-only">(current)</span></router-link>
                </li>
                <li class="nav-item active">
                    <router-link class="nav-link m-1" to="{name: 'contact'}">Contact</router-link>
                </li>
                <li class="nav-item active">
                    <a class="nav-link m-1" href="/admin/posts">Bacheca</a>
                </li>

                </ul>
            </div>
        </nav>
    </header>
</template>

<script>

export default{
        name: "header",
        data() {
            return {

            }
        }
    }
</script>

<style scoped>
    .blue_custom{
        color: blue;
        color: #3d869f;
        text-shadow: 2px 2px 4px #000000;
        font-size: 1.5em;
    }

    .w_custom{
        width: 150px;
    }
</style>
