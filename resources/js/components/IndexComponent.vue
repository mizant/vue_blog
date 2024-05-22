<template>
    <router-link :to="{name: 'person.index'}">People</router-link>
    <router-link :to="{name: 'person.create'}">Add</router-link>
    <router-view></router-view>
</template>
