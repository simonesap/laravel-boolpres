<template>

    <div>
        <h2>Contact page</h2>

        <Alert type="success">

        </Alert>

        <form>
            <div class="form-group">
                <label for="email">Email address</label>

                <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="Enter email"
                        v-model="form.email">

                <small id="emailHelp" class="form-text text-muted">ciao</small>
            </div>
            <div class="form-group">
                <label for="message">Example textarea</label>
                <textarea class="form-control" id="message" rows="3">

                </textarea>
            </div>

            <button class="btn btn-primary" @click="sendForm">Invia</button>
        </form>
    </div>

</template>

<script>
import axios from 'axios';
import Alert from '../Alert.vue';

export default {
    name: 'ContactPage',

    components: {
        Alert
    },

    data() {
        return {
            form: {
                email: '',
                message: '',
            },
            alertMessage: '',
        }
    },

    methods: {
        sendForm(){
            axios.post('http://127.0.0.1:8000/api/messages', this.form)
            .then( (res) => {
                this.form.email = '',
                this.form.message = '',
                this.alertMessage = 'Il messaggio è stato inviato'
            });
        }
    },

    mounted(){
        console.log(this.$route);
    }
}

</script>
