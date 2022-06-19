<template>
    <div>
        <h2>Questa pagina non esiste | Error: 404</h2>
        <button class="btn btn-warning" @click="$router.back()">Indietro</button>
    </div>
</template>

<script>

export default {
    name: 'NotFoundPage'
}

</script>
