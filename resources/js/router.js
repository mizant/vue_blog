import {createRouter, createWebHistory} from "vue-router";




const routes = [
    {path: '/people', name: 'person.index', component: () => import('./components/Person/Index.vue')},
    {path: '/people/create', name: 'person.create', component: () => import('./components/Person/Create.vue')},
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router


// остановился на 6:49 ошибка axios is not defined
