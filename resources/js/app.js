require('./bootstrap')

require('./plugins/jqScribble')

axios.defaults.baseURL = 'http://msc-educ-smc.cmc.ec.gc.ca/motp-recruitment'

import Vue from 'vue'
import store from './store'

window.Vue = Vue
window.events = new Vue

import './plugins/interceptors'

Vue.component('qpf-table', require('./components/qpf-table/QpfTable.vue').default)
Vue.component('draw-app', require('./components/draw/Draw.vue').default)
Vue.component('textbox-answer', require('./components/textboxes/TextboxAnswer.vue').default)
Vue.component('confirm-page', require('./components/confirm/Confirm.vue').default)
Vue.component('score-item', require('./components/scores/ScoreItem.vue').default)
Vue.component('image-map', require('./components/imagemap/ImageMap.vue').default) 

const app = new Vue({  
  el: '#app',
  store
})

// KPQI 120045Z AUTO 05005KT 5SM - SN BKN024 OVC035 M05/M11 A3027 RMK A02 SNB31 PO000=
// KPQI 120056z AUTO 05005KT 6SM - SN OVC024 -5.6/-10.6 A3026 RMK A02 SNB31 SLP284 P0000=
// KPQI 120156Z AUTO 07004KT 5SM - SN OVC028 -5.6/-9.4 A3025 RMK A02 SLP280 PO000=
// KPQI 120220Z AUTO 07007KT 1 3/4SM - SN BKNO16 OVCO23 M06/M09 A3025 RMK A02 PO000=
// KPQI 120226Z AUTO 06007KT 2SM - SN BR BKNO16 OVC023 M06/MO8 A3025 RMK A02 PO000=
// KPQI 120247Z AUTO 04005KT 1 1/2SM - SN BR OVC016 M07/MO8 A3023 RMK A02 PO000=
// KPQI 120256Z AUTO 04006KT 1 1/2SM - SN BR OVC016 -6.7/-8.3 A3023 RMK A02 SLP273 PO000 60000 58011=
// KPQI 120356Z AUTO 04009KT 1 1/2SM - SN BR OVC016 -6.7/-8.3 A3020 RMK A02 VIS 1 1/4V2 1/2 SLP262 PO000=
// KPQI 120410Z AUTO 04008KT 1 1/2SM - SN BR OVCO14 M07/MO8 A3020 RMK A02 PO000=
// KPQI 120423Z AUTO 04007KT 3/4SM - SN BR BKNO10 Ovc014 M07/M08 A3018 RMK A02 CIG O06V013 PO000 RVRNO=
// KPQI 120431Z AUTO 04007KT 3/4SM -SN BR BKNO08 OVC014 M07/M08 A3018 RMK A02 CIG O06V010 PO000 RVRNO=
// KPQI 120451Z AUTO 05007KT 1/2SM SN FZFG OVC006 M07/M08 A3016 RMK A02 PO001 400281072 RVRNO=
// KPQI 120456Z AUTO 04006KT 1/2SM SN FZFG OVC006 -6.7/-8.3 A3016 RMK A02 SLP249 PO001 400281072 RVRNO=
// KPQI 120507Z AUTO 03009KT 3/4SM - SN BR OVC006 MO7/M08 A3016 RMK A02 CIG 004V008 P0001 RVRNO=
// KPQI 120517Z AUTO 03006KT 1SM - SN BR OVC008 M07/M08 A3016 RMK A02 CIG 004V009 PO001 RVRNO=
// KPQI 120544Z AUTO 02007KT 3/4SM -SN BR OVC008 MO7/M08 A3014 RMK A02 CIG 007V010P0002 RVRNO=
// KPQI 120556Z AUTO 01006KT 3/4SM - SN BR OVC008 -6.7/-8.3 A3014 RMK A02 CIG 005V010 SLP242 PO003 60004 11044 21072 56020 RVRNO=
// KPQI 120614Z AUTO 02008KT 1/2SM SN FZFG OVC006 MO7/M08 A3013 RMK A02 PO001 RVRNO=
// KPQI 120624Z AUTO 3/4SM -SN BR OVC006 MO7/M08 A3012 RMK A02 PO001 RVRNO=
// KPQI 120656Z AUTO 03007KT 3/4SM - SN BR OVC006 -6.7/-8.3 A3008 RMK A02 CIG 004V08 PRESFR SLP223 PO002 RVRNO=
// KPQI 120705Z AUTO 03008KT 1/2SM SN FZFG OVC006 MO7/MO8 A3007 RMK A02 CIG 004V008 PRESFR PO001 RVRNO=
// KPQI 120717Z AUTO 3/4SM -SN BR OVC06 M07/M08 A3006 RMK A02 CIG 004V008 PO002 RVRNO=
// KPQI 120726Z AUTO 03009KT 1SM - SN BR OVC006 M07/M08 A3005 RMK A02 CIG 004V008 PO002 RVRNO=
// KPQI 120756Z AUTO 3/4SM - SN BR OVC006 -6.7/-7.8 A3002 RMK A02 CIG 006V009 SLP202 PO002 RVRNO=
// KPQI 120856Z AUTO 0301OKT 1SM - SN BR OVC006 -6.7/-7.8 A2996 RMK A02 SLP181 PO002 60006 56041 RVRNO=
// KPQI 120929z AUTO 03008KT 1 1/4SM - SN BR OVCO08 M07/MO8 A2994 RMK A02 CIG 007V011 PO000=
// KPQI 120935Z AUTO 03008KT 1SM - SN BR OVC010 M07/M08 A2993 RMK A02 PO00 RVRNO=
// KPQI 120956Z AUTO 02009KT 1SM - SN BR OVCO10 -6.7/-7.8 A2992 RMK A02 SLP167 PO001 RVRNO=
// KPQI 121015Z AUTO 03011lKT 1 1/4SM - SN OVCO10 MO7/ A2989 RMK A02 PRESFR PO000=
// KPQI 121029Z AUTO 0301OKT 1SM - SN OVc010 MO7/ A2988 RMK A02 PO002 RVRNO=
// KPQI 121036Z AUTO 0301OKT 1 1/4SM - SN OVC010 MO7/ A2987 RMK A02 CIG 008V012 PO002=
// KPQI 121054Z AUTO 03009KT 2SM - SN SCT011 OVCO16 M07/ A2985 RMK A02 PRESFR PO003=
// KPQI 121056Z AUTO 03008KT 2SM - SN OVc014 MO7/ A2984 RMK A02 PRESFR SLP141 PO003 T1067=
// KPQI 121113Z AUTO 04009KT 2 1/2SM - SN BR SCT016 OVC025 MO7/M08 A2982 RMK A02 PO000=
// KPQI 121127Z AUTO 03008KT 1 1/4SM - SN BR OVC023 M06/M08 A2982 RMK A02 PO000=
// KPQI 121156Z AUTO 03008KT 1 1/4SM - SN BR OVC019 -6.1/-7.8 A2979 RMK A02 SLP121 P0000 60010 70014 11061 21067 58059=