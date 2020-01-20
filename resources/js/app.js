require('./bootstrap')

require('./plugins/jqScribble')

axios.defaults.baseURL = 'http://msc-educ-smc.cmc.ec.gc.ca/motp-recruitment'

import Vue from 'vue'
import store from './store'
import ES6Promise from 'es6-promise'

ES6Promise.polyfill()

window.Vue = Vue
window.events = new Vue

import './plugins/interceptors'

Vue.component('qpf-table', require('./components/qpf-table/QpfTable.vue').default)
Vue.component('draw-app', require('./components/draw/Draw.vue').default)
Vue.component('textbox-answer', require('./components/textboxes/TextboxAnswer.vue').default)
Vue.component('confirm-page', require('./components/confirm/Confirm.vue').default)
Vue.component('score-item', require('./components/scores/ScoreItem.vue').default)
Vue.component('image-map-two', require('./components/imagemap/ImageMapTwo.vue').default)
Vue.component('image-map-one', require('./components/imagemap/ImageMapOne.vue').default) 
Vue.component('image-animator', require('./components/animator/ImageAnimator.vue').default) 

const app = new Vue({  
  el: '#app',
  store
})