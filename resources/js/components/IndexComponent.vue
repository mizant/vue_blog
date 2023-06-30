<script setup>

</script>

<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in people">
                <th scope="row">{{ person.id }}</th>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
            </tr>
            </tbody>
        </table>
    </div>

</template>

<script>
import axios from "axios";

export default {
    name: "IndexComponent",

    data() {
        return {
            people: null,
        }
    },

    methods: {
        getPeople() {
            axios.get('/api/people')
                .then(res=> {
                    this.people = res.data
                })
        }
    },
    mounted() {
        this.getPeople()
    }

}
</script>

<style scoped>

</style>
