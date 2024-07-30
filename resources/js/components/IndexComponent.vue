<template>
    <div class="container">

        <div class="menu d-flex flex-wrap mb-3">
            <div class="link me-3 mt-3">
                <router-link :to="{name: 'person.index'}" class="text-decoration-none">Table People</router-link>
            </div>
        </div>

        <router-view></router-view>

        <div class="link btn btn-outline-primary">
            <router-link :to="{name: 'person.create'}" class="text-decoration-none">Add</router-link>
        </div>
    </div>

</template>
<script setup lang="ts">
</script>
