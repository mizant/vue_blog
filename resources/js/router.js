import {createRouter, createWebHistory} from "vue-router";




const routes = [
    {path: '/people', name: 'person.index', component: () => import('./components/Person/Index.vue')},
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
