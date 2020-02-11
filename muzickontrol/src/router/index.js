import Vue from 'vue'
import Router from 'vue-router'
import NavBar from '@/components/NavBar'
import Article from '@/components/Article/Article'
import Liste from '@/components/Article/ListeArticle'
import VoirArticle from '@/components/Article/VoirArticle'
import Service from '@/components/Service'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: { NavBar}
    },
    {
      path: '/service',
      name: 'service',
      component: Service
    },
    {
      path: '/article/',
      name: 'article_liste',
      component: Liste
    },
    {
      path: '/article/ajout',
      name: 'article_ajout',
      component: Article
    },
    {
      path: '/article/voir/:id',
      name: 'article_voir',
      component: VoirArticle
    }
  ]
})
