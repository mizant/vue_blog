import { createApp } from 'vue'



import IndexComponent from "./components/IndexComponent.vue";
import router from "./router.js";
import { useStore} from "vuex";

export default {
    setup () {
        const store = useStore()

        return {
            // access a state in computed function
            count: computed(() => store.state.count),

            // access a getter in computed function
            double: computed(() => store.getters.double)
        }
    }
}


createApp(IndexComponent)
    .use(router)
    .mount('#app')




