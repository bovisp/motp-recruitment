<template>
  <div class="row mb-5" style="height: 450px;">
    <div class="col-md-5">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 360 333">
        <image width="360" height="333" xlink:href="https://res.cloudinary.com/tcddmedia/image/upload/v1578688832/moip_direct_entry_assessment/case%201/Reference_Map_o6rcbi.png"></image>
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
            width="25" 
            height="19"
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
import metarData from '../../data/metars-one' 

export default {
  data () {
    return {
      metars: [],
      metar: '',
      stations: [
        { x: 127, y: 187, name: 'Kapuskasing', code: 'cyyu', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1575648284/moip_direct_entry_assessment/case%201/METAR/OBS_12Z_CYYU_afbxvc.png' },
        { x: 145, y: 213, name: 'Timmins', code: 'cyts', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576001810/moip_direct_entry_assessment/case%201/METAR/OBS_12Z_CYTS_ad4xkq.png' },
        { x: 109, y: 232, name: 'Chapleau', code: 'cyld', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1575648284/moip_direct_entry_assessment/case%201/METAR/OBS_12Z_CYLD_bby9si.png' },
        { x: 161, y: 137, name: 'Moosonee', code: 'cymo', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1575648284/moip_direct_entry_assessment/case%201/METAR/OBS_12Z_CYMO_tc66qj.png' },
        { x: 48, y: 172, name: 'Geraldton', code: 'cygq', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1575648284/moip_direct_entry_assessment/case%201/METAR/OBS_12Z_CYGQ_kioyh0.png' },
        { x: 193, y: 222, name: 'Rouyn-Noranda', code: 'cyuy', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1575648283/moip_direct_entry_assessment/case%201/METAR/OBS_12Z_CYUY_wriry4.png' },
        { x: 173, y: 237, name: 'Earlton', code: 'cyxr', imgurl: 'https://res.cloudinary.com/tcddmedia/image/upload/v1575648283/moip_direct_entry_assessment/case%201/METAR/OBS_12Z_CYXR_n6nae5.png' }
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