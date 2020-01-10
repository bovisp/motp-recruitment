<template>
  <div class="row mb-5" style="height: 450px;">
    <div class="col-md-5">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455 459">
        <image width="455" height="459" xlink:href="https://res.cloudinary.com/tcddmedia/image/upload/v1578516894/moip_direct_entry_assessment/case%202/Exercise%201/OBS-reference_imgmap_small_qyngkn.jpg"></image>
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
            opacity=".3" 
            width="26" 
            height="17"
            class="station"
          >
            <title>{{ `${station.name} (${station.code.toUpperCase()})` }}</title>
          </rect>
        </a>
      </svg>
    </div>

    <div class="col-md-7" style="height: 100%; overflow: hidden; overflow-y:scroll;">
      <p>
        <small v-html="metar.toUpperCase()" class="font-weight-bold"></small>
      </p>
    </div>
  </div> 
</template>

<script>
import metarData from '../../data/metars-two' 

export default {
  data () {
    return {
      metars: [],
      metar: '',
      stations: [
        { x: 219, y: 208, name: 'Natashquan', code: 'cyna', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYNA_ktp0zh.png' },
        { x: 181, y: 199, name: 'Havre Saint-Pierre', code: 'cygv', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYGV_uzx6ne.png' },
        { x: 125, y: 191, name: 'Sept-Îles', code: 'cyzv', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083391/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYZV_bbp9ua.png' },
        { x: 61, y: 301, name: 'Presque Isle', code: 'kpqi', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083391/moip_direct_entry_assessment/case%202/Exercise%201/OBS/KPQI_mjkx76.png' },
        { x: 119, y: 280, name: 'Bathurst', code: 'czbf', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083391/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CZBF_nqzyi2.png' },
        { x: 61, y: 320, name: 'Houlton', code: 'khul', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083391/moip_direct_entry_assessment/case%202/Exercise%201/OBS/KHUL_pzrgov.png' },
        { x: 122, y: 372, name: 'Greenwood', code: 'cyzx', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083391/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYZX_gqyyan.png' },
        { x: 416, y: 301, name: 'St. John\'s', code: 'cyyt', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYYT_rt61vb.png' },
        { x: 74, y: 240, name: 'Mont-Joli', code: 'cyyy', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYYY_h2w8se.png' },
        { x: 103, y: 356, name: 'Saint John', code: 'cysj', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYSJ_licrt6.png' },
        { x: 171, y: 334, name: 'Charlottetown', code: 'cyyg', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYYG_z5efvo.png' },
        { x: 241, y: 346, name: 'Sydney', code: 'cyqy', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYQY_fxgdkm.png' },
        { x: 373, y: 258, name: 'Gander', code: 'cyqx', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYQX_s9kouo.png' },
        { x: 134, y: 333, name: 'Moncton', code: 'cyqm', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYQM_g09xjt.png' },
        { x: 87, y: 406, name: 'Yarmouth', code: 'cyqi', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYQI_hqcepu.png' },
        { x: 345, y: 146, name: 'Mary\'s Harbour', code: 'cymh', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYMH_zbzmgg.png' },
        { x: 285, y: 267, name: 'Stephenville', code: 'cyjt', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083390/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYJT_yooqzf.png' },
        { x: 312, y: 247, name: 'Deer Lake', code: 'cydf', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYDF_wz2yoc.png' },
        { x: 207, y: 299, name: 'Îles-de-la-Madeleine', code: 'cygr', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYGR_xh45zx.png' },
        { x: 154, y: 245, name: 'Gaspé', code: 'cygp', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYGP_qb6xgd.png' },
        { x: 154, y: 379, name: 'Halifax', code: 'cyhz', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYHZ_e7kmh9.png' },
        { x: 240, y: 422, name: 'Sable Island', code: 'cwsa', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CWSA_hrv0tm.png' },
        { x: 91, y: 335, name: 'Gagetown', code: 'cycx', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYCX_lezgoh.png' },
        { x: 342, y: 174, name: 'St. Anthony', code: 'cyay', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYAY_mifmph.png' },
        { x: 9, y: 228, name: 'Bagotville', code: 'cybg', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYBG_oxctvi.png' },
        { x: 74, y: 216, name: 'Baie-Comeau', code: 'cybc', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYBC_i0lgfu.png' },
        { x: 316, y: 175, name: 'Lourdes-de-Blanc-Sablon', code: 'cybx', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576083389/moip_direct_entry_assessment/case%202/Exercise%201/OBS/CYBX_lqo9dl.png' }
      ]
    }
  },

  methods: {
    showMetar (station) {
      this.metar = this.metars[station.code]

      console.log(this.metar)
    }
  },

  mounted () {
    this.metars = metarData
  }
}
</script>

<style scoped>
.station {
  pointer-events: all;
}

.station:hover {
  fill: green;
}
</style>