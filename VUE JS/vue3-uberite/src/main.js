import { createApp } from 'vue'
import App from './App.vue'
import{ createRouter, createWebHashHistory} from 'vue-router'
import HomeVue  from './page/home.vue'
import RestaurantVue  from './page/Restaurant.vue'

const routes = [
    { path: '/', component: HomeVue },
    { name: 'Restaurant', path: '/restaurant/:name', component: RestaurantVue },
]
  const router = createRouter({
    history: createWebHashHistory(),
    routes
  })

  const VueApp = createApp(App)

  VueApp.use(router)

  VueApp .mount('#app')
