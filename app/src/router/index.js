import Vue from 'vue'
import Router from 'vue-router'
import Dashboard from '../components/Dashboard'
import Highscore from '../components/Highscore'

Vue.use(Router)

export default new Router({
  mode: 'abstract',
  routes: [
    {
      path: '/',
      name: 'dashboard',
      component: Dashboard
    },
    {
      path: '/highscore',
      name: 'highscore',
      component: Highscore
    }
  ]
})
