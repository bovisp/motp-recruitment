require('./bootstrap');

require('./plugins/jqScribble')

axios.defaults.baseURL = 'http://msc-educ-smc.cmc.ec.gc.ca/motp-recruitment'

import Vue from 'vue'

window.Vue = Vue
window.events = new Vue

Vue.component('qpf-table', require('./components/qpf-table/QpfTable.vue').default);
Vue.component('draw-app', require('./components/draw/Draw.vue').default);

const app = new Vue({  
  el: '#app'
})