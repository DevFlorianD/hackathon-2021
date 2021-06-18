import {createApp} from 'vue'
import App from './App.vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import router from './config/router'

axios.defaults.headers.common['Content-type'] = 'application/json'
axios.defaults.headers.common['Accept'] = 'application/json'

createApp(App)
.use(VueAxios, axios)
.use(router)
.mount('#app')
