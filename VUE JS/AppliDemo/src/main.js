import { createApp } from 'vue'
import { createRouter ,createWebHistory } from 'vue-router'
import App from './App.vue'
import Home from './components/Acceuil.vue'
import Chapitre from './components/Chapitre.vue'
import Article from './components/Article.vue'


import './assets/main.css'
const routes = [
    { path: '/', component: Home },
    { path:'/chapitre', component: Chapitre},
    { path:'/article', component: Article}
    
  
  ]

  const router = createRouter({
    history: createWebHistory(),
    routes,
  })
  
  
  const app = createApp(App)

  app.use(router)

app.mount('#app')
