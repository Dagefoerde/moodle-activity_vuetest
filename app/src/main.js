// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import wrap from '@vue/web-component-wrapper'

Vue.config.productionTip = false
App.router = router
const CustomElement = wrap(Vue, App)
router.replace('/')
window.customElements.define('mod-vue-test', CustomElement)
