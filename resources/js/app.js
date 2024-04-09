import { createApp } from 'vue'



import IndexComponent from "./components/IndexComponent.vue";
import router from "./router.js";


createApp(IndexComponent)
    .use(router)
    .mount('#app')



