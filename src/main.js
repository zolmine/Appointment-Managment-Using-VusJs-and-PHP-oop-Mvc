import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import '../dist/tailwind.css'
import '../dist/style.css'
// import VueSession from 'vue-session'
// createApp(App).use(VueSession)
createApp(App).use(router).mount('#app')
