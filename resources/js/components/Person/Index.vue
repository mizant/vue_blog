<script>

import axios from "axios";

export default {
    name: "Index",

    mounted() {
        this.$store.dispatch('getPeople');
    },

    computed: {
        people() {
            return this.$store.getters.people;
        }
    }
}

</script>

<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in people" class="mb-3">
                <td>
                    <router-link :to="{name: 'person.show', params: {id: person.id}}">{{ person.name }}</router-link>
                </td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
                <td>
                    <router-link :to="{ name: 'person.edit', params: { id: person.id } }">Edit</router-link>
                </td>
                <a @click.prevent="$store.dispatch('deletePerson',person.id)" href="#" class="btn btn-outline-danger mb-2">Delete</a>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<style scoped>

</style>
