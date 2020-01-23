<template>
  <div class="row mb-5" style="max-height: 450px;">
    <div class="col-md-5">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 643 433">
        <image width="643" height="433" xlink:href="https://res.cloudinary.com/tcddmedia/image/upload/v1579799943/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/12z_sounding_locations_awuolm.jpg"></image>
        <a 
          @click.prevent="showTabs(station)"
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

    <div class="col-md-7">
      <div v-if="Object.keys(activeStation).length">
        <ul id="Case2E1Tab4" class="nav nav-tabs">
          <li class="nav-item">
            <a id="tephiTab-tab" class="nav-link active" href="#tephiTab" data-toggle="tab">Tephigram</a>
          </li>
          <li class="nav-item">
            <a id="hodoTab-tab" class="nav-link" href="#hodoTab" data-toggle="tab">Hodograph</a>
          </li>
        </ul>

        <!-- Tab panes for case1Tab4 -->
        <div 
          class="tab-content mb-4 rounded"
          style="border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; margin-top: -10px;"
        >
          <div id="tephiTab" class="tab-pane active">
            <img :src="activeStation.images.tephi" class="w-75 pt-4 px-2 pb-2">
          </div>
          
          <div id="hodoTab" class="tab-pane">
            <img :src="activeStation.images.hodo" class="w-75 pt-4 px-2 pb-2">
          </div>
        </div>
      </div>
    </div>
  </div> 
</template>

<script>
import { find } from 'lodash-es'

export default {
  data () {
    return {
      activeStation: {},
      stations: [{ 
        x: 145,
        y: 70,
        name: 'Sept-Iles',
        code: 'cyzv',
        images: {
          tephi: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576013434/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYZV_SEPT_ILES_f6gtqq.png',
          hodo: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576013434/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYZV_SEPT_ILES_HODO_qzkwd5.png'  
        }
      },
      { 
        x: 342,
        y: 165,
        name: 'Stephenville',
        code: 'cyjt',
        images: {
          tephi: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYJT_STEPHENVILLE_z9tltf.png',
          hodo: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYJT_STEPHENVILLE_HODO_dnzjsa.png'
        } 
      },{ 
        x: 501,
        y: 205,
        name: 'St. John\'s',
        code: 'cyyt', 
        images: {
          tephi: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576013434/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYYT_ST_JOHN_S_WEST_clbc4p.png',
          hodo: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYYT_ST_JOHN_S_WEST_HODO_xtn24n.png'
        } 
      },{ 
        x: 71,
        y: 196,
        name: 'Caribou',
        code: 'kpqi',
        images: {
          tephi: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576013434/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/KCAR_CARIBOU_fvda3u.png',
          hodo: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576013435/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/KCAR_CARIBOU_HODO_xds5er.png'
        } 
      },{ 
        x: 103,
        y: 247,
        name: 'Gagetown',
        code: 'cycx',
        images: {
          tephi: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576768979/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYCX_GAGETOWN_coyiuw.png',
          hodo: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYCX_GAGETOWN_HODO_uajkae.png'
        } 
      },{ 
        x: 103,
        y: 331,
        name: 'Yarmouth',
        code: 'cyqi',
        images: {
          tephi: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYQI_YARMOUTH_ouk3tb.png',
          hodo: 'https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYQI_YARMOUTH_HODO_blmmfq.png'
        } 
      }]
    }
  },

  methods: {
    showTabs (station) {
      this.activeStation = find(this.stations, ['code', station.code])
    }
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