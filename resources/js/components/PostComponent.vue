<script setup>

import CreateComponent from "@/components/CreateComponent.vue";
import IndexComponent from "@/components/IndexComponent.vue";

</script>

<template>
<div class="m-lg-5">

    <CreateComponent></CreateComponent>
    <IndexComponent></IndexComponent>

</div>
</template>

<script>

import axios from "axios";


export default {
    data () {
        return {
            persons: null
        }
    },

    methods: {

    },
    mounted() {

    },
    components: {
        CreateComponent,
        IndexComponent
    }
}
</script>

<style scoped>

</style>
