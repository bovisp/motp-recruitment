<template>
  <div style="max-width: 809px;" class="mb-4">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 809 529">
      <image width="809" height="529" xlink:href="https://res.cloudinary.com/tcddmedia/image/upload/v1576252972/moip_direct_entry_assessment/case%202/Exercise%201/OBS-reference_hhz4yl.jpg"></image>
      <a 
        @click.prevent="showMetar(station)"
        v-for="station in stations"
        :key="station.code"
        xlink:href="#"
      >
        <rect 
          :x="station.x" 
          :y="station.y" 
          fill="#ff0000" 
          opacity="0.2" 
          width="26" 
          height="17"
          class="station"
        ></rect>
      </a>
    </svg>

    <div 
      class="modal" 
      tabindex="-1" 
      role="dialog" 
      id="metarModal"
    >
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">
              METAR for {{ metar.code.toUpperCase() }}
            </h5>

            <button 
              class="close" 
              data-dismiss="modal" 
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body text-center">
            <img :src="metar.imgurl" class="img-fluid">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div> 
</template>

<script>
export default {
  data () {
    return {
      metar: {
        code: '',
        x: '',
        y: '',
        imgurl: ''
      },
      stations: [
        { x: 526, y: 207, code: 'cyna', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYNA_ktp0zh.png' },
        { x: 488, y: 199, code: 'cygv', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYGV_uzx6ne.png' },
        { x: 432, y: 191, code: 'cyzv', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083391/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYZV_bbp9ua.png' },
        { x: 368, y: 300, code: 'kpqi', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083391/moip_direct_entry_assessment/case%202/Exercise%201/OBS/KPQI_mjkx76.png' },
        { x: 427, y: 280, code: 'czbf', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083391/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CZBF_nqzyi2.png' },
        { x: 369, y: 320, code: 'khul', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083391/moip_direct_entry_assessment/case%202/Exercise%201/OBS/KHUL_pzrgov.png' },
        { x: 430, y: 372, code: 'cyzx', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083391/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYZX_gqyyan.png' },
        { x: 723, y: 301, code: 'cyyt', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYYT_rt61vb.png' },
        { x: 379, y: 234, code: 'cyyy', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYYY_h2w8se.png' },
        { x: 409, y: 356, code: 'cysj', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYSJ_licrt6.png' },
        { x: 478, y: 334, code: 'cyyg', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYYG_z5efvo.png' },
        { x: 549, y: 346, code: 'cyqy', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYQY_fxgdkm.png' },
        { x: 679, y: 258, code: 'cyqx', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYQX_s9kouo.png' },
        { x: 442, y: 333, code: 'cyqm', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYQM_g09xjt.png' },
        { x: 395, y: 406, code: 'cyqi', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYQI_hqcepu.png' },
        { x: 654, y: 146, code: 'cymh', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYMH_zbzmgg.png' },
        { x: 593, y: 267, code: 'cyjt', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYJT_yooqzf.png' },
        { x: 618, y: 247, code: 'cydf', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYDF_wz2yoc.png' },
        { x: 514, y: 299, code: 'cygr', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYGR_xh45zx.png' },
        { x: 460, y: 245, code: 'cygp', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYGP_qb6xgd.png' },
        { x: 462, y: 379, code: 'cyhz', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYHZ_e7kmh9.png' },
        { x: 547, y: 422, code: 'cwsa', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CWSA_hrv0tm.png' },
        { x: 398, y: 335, code: 'cycx', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYCX_lezgoh.png' },
        { x: 649, y: 174, code: 'cyay', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYAY_mifmph.png' },
        { x: 317, y: 228, code: 'cybg', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYBG_oxctvi.png' },
        { x: 381, y: 216, code: 'cybc', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYBC_i0lgfu.png' },
        { x: 623, y: 175, code: 'cybx', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYBX_lqo9dl.png' }
      ]
    }
  },

  methods: {
    showMetar (station) {
      this.metar = station

      $('#metarModal').modal('show')
    }
  }
}
</script>

<style scoped>
.station {
  pointer-events: all;
}

.station:hover {
  fill: #00ff00;
}
</style>