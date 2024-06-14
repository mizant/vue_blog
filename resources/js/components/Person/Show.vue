<script>

import axios from "axios";

export default {
    name: "Show",

    data() {
        return {
            person:null
        }
    },

    mounted() {
        this.getPerson();
    },

    methods: {
        getPerson() {
            axios.get('/api/people/' + this.$route.params.id)
                .then(res=> {
                    this.person = res.data;
                })
        },
    }
}

</script>

<template>
    <div v-if="person">
     <div>
         Name: {{ person.name}}
     </div>
        <div>
            Job: {{ person.job}}
        </div>
        <div>
            Age: {{ person.age}}
        </div>
        <router-link :to="{ name: 'person.edit', params: { id: person.id } }">Edit</router-link>
    </div>
</template>

<style scoped>

</style>
