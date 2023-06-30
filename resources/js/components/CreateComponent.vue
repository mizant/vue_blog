<script setup>

</script>

<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" class="form-control" v-model="name" id="name" placeholder="name">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" v-model="age" id="age" placeholder="age">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="job" v-model="job" placeholder="job">
        </div>

        <div class="mb-3">
            <input  class="btn btn-primary" @click.prevent="addPerson" value="Добавить">
        </div>
    </div>

</template>

<script>
import axios from "axios";

export default {
    name: "CreateComponent",

    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },

    methods: {
        addPerson() {
            axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
                .then( res => {
                    this.name = null,
                    this.age = null,
                    this.job = null
                })
        }
    }

}
</script>

<style scoped>

</style>
