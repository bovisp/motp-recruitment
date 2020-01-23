<template>
  <div class="row mb-5" style="height: 450px;">
    <div class="col-md-5">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 643 433">
        <image width="643" height="433" xlink:href="https://res.cloudinary.com/tcddmedia/image/upload/v1579799943/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/12z_sounding_locations_awuolm.jpg"></image>
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
            width="100" 
            height="30"
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
        { x: 145, y: 70, name: 'Sept-Iles', code: 'cyzv', images: {
          tephi: '',
          hodo: ''
        } },
        { x: 342, y: 165, name: 'Stephenville', code: 'cyjt', images: {
          tephi: '',
          hodo: ''
        } },
        { x: 501, y: 205, name: 'St. John\'s', code: 'cyyt', images: {
          tephi: '',
          hodo: ''
        } },
        { x: 71, y: 196, name: 'Caribou', code: 'kpqi', images: {
          tephi: '',
          hodo: ''
        } },
        { x: 103, y: 247, name: 'Gagetown', code: 'cycx', images: {
          tephi: '',
          hodo: ''
        } },
        { x: 103, y: 331, name: 'Yarmouth', code: 'cyqi', images: {
          tephi: '',
          hodo: ''
        } }
      ]
    }
  },

  methods: {
    showMetar (station) {
      this.metar = this.metars[station.code]
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