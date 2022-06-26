<template>
    <div>
        <h2>Details Page</h2>

        <Alert v-if="isError"
               message="Post not found"
               type="danger" />

            <h2>
                {{show.title}}
            </h2>

            <img :src="show.image" alt="">


            <div class="card text-center m-3">
                <div class="card-header">
                    {{show.title}} - Category: {{show.category.label}}
                </div>
                <div class="card-body">
                    <!-- <p class="card-title">
                        <span class="badge">
                            {{tag.label}}
                        </span>
                    </p> -->
                    <p class="card-text">{{show.content}}</p>
                    <!-- <router-link :to="{name: 'show-show-page'}" class="btn btn-primary">View</router-link> -->
                    <!-- {params: $show.id} -->
                </div>
                <div class="card-footer text-muted" >
                    {{show.created_at[0]}}
                    {{show.created_at[1]}}
                    {{show.created_at[2]}}
                    {{show.created_at[3]}}
                    {{show.created_at[4]}}
                    {{show.created_at[5]}}
                    {{show.created_at[6]}}
                    {{show.created_at[7]}}
                    {{show.created_at[8]}}
                    {{show.created_at[9]}}
                </div>
            </div>
            <Alert v-if="isError" message="New message" type="info"/>
    </div>
</template>

<script>
import Alert from '../Alert.vue';

export default {
    name: 'PostShowPage',

    components: {
        Alert,
    },

    data() {
        return {
            show: [],
            isError: false,
        }
    },

    methods: {
                getPost(){
                    axios.get(`http://127.0.0.1:8000/api/posts/${ this.$route.params.slug }`)
                    .then( (res) => {
                        console.log(res.data);

                        this.show = res.data;
                        // this.isLoading = false;
                    }).catch((err)=>{
                        console.log(err);
                        this.isError = true
                    }).then( () => {
                        // console.log('terminato il caricamento dei posts')
                        this.isLoading = false;
                    } );

            }
        },

        mounted() {
            this.getPost();
            console.log(this.$route);
        }
}
</script>
