import { createApp } from 'vue'
import store from './store'
import IndexComponent from "./components/IndexComponent.vue";

import router from "./router.js";


createApp(IndexComponent).use(router).use(store).mount('#app')



