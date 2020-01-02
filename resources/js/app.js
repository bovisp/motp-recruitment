require('./bootstrap');

require('./plugins/jqScribble')

axios.defaults.baseURL = 'http://msc-educ-smc.cmc.ec.gc.ca/motp-recruitment'

import Vue from 'vue'
import store from './store'

window.Vue = Vue
window.events = new Vue

import './plugins/interceptors'

Vue.component('qpf-table', require('./components/qpf-table/QpfTable.vue').default);
Vue.component('draw-app', require('./components/draw/Draw.vue').default);
Vue.component('case-one-textarea', require('./components/textboxes/CaseOne.vue').default);
Vue.component('case-two-exercise-one-textarea', require('./components/textboxes/CaseTwoExerciseOne.vue').default);
Vue.component('case-two-exercise-two-textarea', require('./components/textboxes/CaseTwoExerciseTwo.vue').default);
Vue.component('confirm-page', require('./components/confirm/Confirm.vue').default);

const app = new Vue({  
  el: '#app',
  store
})