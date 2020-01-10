@extends('layouts.app')

@section('content')

  <div class="container">
    @include('cases.partials.header')

    <h2>Case 2 Exersise 1 - Diagnosis of a Warm Front Over Atlantic Canada</h2>

    <p>Given the following weather information for the morning of November 12, 2019 at 12:00Z over Atlantic Canada, diagnose the location of the warm front at the surface. Draw the front over the map at the bottom of the exercise and provide a detailed justification for its placement on the page below.</p>

    <!-- Nav tabs for Case2E1Tab1 -->

    <ul id="Case2E1Tab1" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="Case2E1Tab1IR-tab" class="nav-link active" href="#Case2E1Tab1IR" data-toggle="tab">GOES 10.3 μm IR</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab1IRMultispectral-tab" class="nav-link" href="#Case2E1Tab1IRMultispectral" data-toggle="tab">GOES multispectral IR</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab1WV-tab" class="nav-link" href="#Case2E1Tab1WV" data-toggle="tab">GOES WV</a>
      </li>
    </ul>

    <!-- Tab panes for Case2E1Tab1 -->
    <div class="tab-content mb-4">
      <div id="Case2E1Tab1IR" class="tab-pane active">
        <p class="my-2">GOES 10.3 μm IR satellite imagery valid 0800-1200Z 12 November 2019</p>
        <video controls loop>
          <source 
            src="https://res.cloudinary.com/tcddmedia/video/upload/v1576787434/moip_direct_entry_assessment/case%202/Exercise%201/GOES_SAT_IR_10.3_08-12Z_yuplwq.mp4"
            type="video/mp4"
          >
        </video>
      </div>
        
      <div id="Case2E1Tab1IRMultispectral" class="tab-pane">
        <p class="my-2">GOES 10.3 μm multispectral IR satellite imagery valid 0800-1200Z 12 November 2019</p>
        <video controls loop>
          <source 
            src="https://res.cloudinary.com/tcddmedia/video/upload/v1576787433/moip_direct_entry_assessment/case%202/Exercise%201/GOES_SAT_IR_10.3_MULTISPEC_NIGHT_08-12Z_mhwysz.mp4"
            type="video/mp4"
          >
        </video>
      </div>
        
      <div id="Case2E1Tab1WV" class="tab-pane">
        <p class="my-2">GOES 6.9 μm water vapour satellite imagery valid 0600-1200Z 12 November 2019</p>
        <video controls loop>
          <source 
            src="https://res.cloudinary.com/tcddmedia/video/upload/v1576787431/moip_direct_entry_assessment/case%202/Exercise%201/GOES_SAT_WV_06-12Z_somjti.mp4"
            type="video/mp4"
          >
        </video>
      </div>
    </div>

    <p>The first Satellite image above shows the 10.3µ channel in black and white from 08:00-12:00Z, with lightning strikes overlaid. The second satellite image shows a multispectral image, where lower cloud is mapped to blue and higher cloud is mapped to white at night. The third satellite image shows the 6.9µ water vapour channel.</p>

    <!-- Nav tabs for Case2E1Tab2 -->
    <ul id="Case2E1Tab2" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="Case2E1Tab2SFC-PRES-TEMP-tab" class="nav-link active" href="#Case2E1Tab2SFC-PRES-TEMP" data-toggle="tab">Surface Pressure / Temperature</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab2SFC-PRES-DP-tab" class="nav-link" href="#Case2E1Tab2SFC-PRES-DP" data-toggle="tab">Surface Pressure / Dew Point Temperature</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab2SFC-PRES-PTEND-tab" class="nav-link" href="#Case2E1Tab2SFC-PRES-PTEND" data-toggle="tab">Surface Pressure / Pressure Tendency</a>
      </li>
    </ul>

    <!-- Tab panes for Case2E1Tab2 -->
    <div class="tab-content mb-4">
      <div id="Case2E1Tab2SFC-PRES-TEMP" class="tab-pane active">
        <p class="my-2">Surface pressure and temperature valid 1200Z 12 November 2019</p>
        <img class="img-fluid" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576864830/moip_direct_entry_assessment/case%202/Exercise%201/MAP_PLOT_temp_m8cw8y.png" alt="" />
      </div>
      
      <div id="Case2E1Tab2SFC-PRES-DP" class="tab-pane">
        <p class="my-2">Surface pressure and dew point temperature valid 1200Z 12 November 2019</p>
        <img class="img-fluid" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576864830/moip_direct_entry_assessment/case%202/Exercise%201/MAP_PLOT_dp_aucffs.png" alt="" />
      </div>
      
      <div id="Case2E1Tab2SFC-PRES-PTEND" class="tab-pane">
        <p class="my-2">Surface pressure and pressure tendency valid 1200Z 12 November 2019</p>
        <img class="img-fluid" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576864831/moip_direct_entry_assessment/case%202/Exercise%201/MAP_PLOT_ptend_cvmqkv.png" alt="" />
      </div>
    </div>

    <!-- Nav tabs for Case2E1Tab3 -->
    <ul id="Case2E1Tab3" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="Case2E1Tab315CAPPISNOW-tab" class="nav-link active" href="#Case2E1Tab315CAPPISNOW" data-toggle="tab">1.5 km CAPPI Snow</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab3CompositeLOLLA-tab" class="nav-link" href="#Case2E1Tab3CompositeLOLLA" data-toggle="tab">Composite VR LOLAA</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1TabDrilldownLOLLA-tab" class="nav-link" href="#Case2E1TabDrilldownLOLLA" data-toggle="tab">Drilldown VR LOLAA</a>
      </li>
    </ul>

    <!-- Tab panes for Case2E1Tab3 -->
    <div class="tab-content mb-4">
      <div id="Case2E1Tab315CAPPISNOW" class="tab-pane active">
        <p class="my-2">Composite loop of RADAR 1.5km CAPPI Snow imagery over the northeast coast, valid 0800-1200Z 12 November 2019</p>
        <video controls loop>
          <source 
            src="https://res.cloudinary.com/tcddmedia/video/upload/v1576615599/moip_direct_entry_assessment/case%202/Exercise%201/RADAR_CAPPI_1.5KM_SNOW_08-12Z_xok4ck.mp4"
            type="video/mp4"
          >
        </video>
      </div>
      
      <div id="Case2E1Tab3CompositeLOLLA" class="tab-pane">
        <p class="my-2">Composite loop of Doppler LOLAA RADAR imagery over the northeast, valid 0800-1200Z 12 November 2019</p>
        <video controls loop>
          <source 
            src="https://res.cloudinary.com/tcddmedia/video/upload/v1576615600/moip_direct_entry_assessment/case%202/Exercise%201/RADAR_Composite_VR_LOLAA_08-12Z_effwgs.mp4"
            type="video/mp4"
          >
        </video>
      </div>
      
      <div id="Case2E1TabDrilldownLOLLA" class="tab-pane">
        <p class="my-2">o	Caption for Drilldown: Loop of Doppler LOLAA RADAR imagery from the CBW RADAR (In Cariboo, Maine), valid 0800-1200Z 12 November 2019</p>
        <video controls loop>
          <source 
            src="https://res.cloudinary.com/tcddmedia/video/upload/v1576615599/moip_direct_entry_assessment/case%202/Exercise%201/RADAR_Drilldown_VR_LOLAA_08-12Z_x0d3lb.mp4"
            type="video/mp4"
          >
        </video>
      </div>
    </div>

    <p>In the tephigrams below, the soundings valid for 00Z November 12 (red) and 12Z (black) are plotted. The associated hodographs are from the 12Z soundings.</p>

    <!-- Nav tabs -->
    <ul id="Case2E1Tab4" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="Case2E1Tab4CYQITephi-tab" class="nav-link active" href="#Case2E1Tab4CYQITephi" data-toggle="tab">Yarmouth (CYQI) Tephi</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab4CYQIHodo-tab" class="nav-link" href="#Case2E1Tab4CYQIHodo" data-toggle="tab">Yarmouth (CYQI) Hodograph</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab4CYCXTephi-tab" class="nav-link" href="#Case2E1Tab4CYCXTephi" data-toggle="tab">Gagetown (CYCX) Tephi</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab4CYCXHodo-tab" class="nav-link" href="#Case2E1Tab4CYCXHodo" data-toggle="tab">Gagetown (CYCX) Hodograph</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab4KCARTephi-tab" class="nav-link" href="#Case2E1Tab4KCARTephi" data-toggle="tab">Caribou (KCAR) Tephi</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab4KCARHodo-tab" class="nav-link" href="#Case2E1Tab4KCARHodo" data-toggle="tab">Caribou (KCAR) Hodograph</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab4CYZVTephi-tab" class="nav-link" href="#Case2E1Tab4CYZVTephi" data-toggle="tab">Sept-Iles (CYZV) Tephi</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab4CYZVHodo-tab" class="nav-link" href="#Case2E1Tab4CYZVHodo" data-toggle="tab">Sept-Iles (CYZV) Hodograph</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab4CYJTTephi-tab" class="nav-link" href="#Case2E1Tab4CYJTTephi" data-toggle="tab">Stephenville (CYJT) Tephi</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab4CYJTHodo-tab" class="nav-link" href="#Case2E1Tab4CYJTHodo" data-toggle="tab">Stephenville (CYJT) Hodograph</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab4CYYTTephi-tab" class="nav-link" href="#Case2E1Tab4CYYTTephi" data-toggle="tab">St. John's (CYYT) Tephi</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab4CYYTHodo-tab" class="nav-link" href="#Case2E1Tab4CYYTHodo" data-toggle="tab">St. John's (CYYT) Hodograph</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab4YQIYCXKCARComp-tab" class="nav-link" href="#Case2E1Tab4YQIYCXKCARComp" data-toggle="tab">YQI / YCX / KCAR Tephi Comparison</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content mb-4">
      <div id="Case2E1Tab4CYQITephi" class="tab-pane active">
        <p class="my-2">Yarmouth (CYQI) tephi valid 0000Z (red) and 1200Z (black) for 12 November 2019</p>
        <img style="width: 50%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYQI_YARMOUTH_ouk3tb.png" alt="" />
      </div>
      
      <div id="Case2E1Tab4CYQIHodo" class="tab-pane">
        <p class="my-2">Yarmouth (CYQI) hodograph valid 1200Z 12 November 2019</p>
        <img style="width: 50%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYQI_YARMOUTH_HODO_blmmfq.png" alt="" />
      </div>
      
      <div id="Case2E1Tab4CYCXTephi" class="tab-pane">
        <p class="my-2">Gagetown (CYCX) tephi valid 1200Z (black) for 12 November 2019 (no balloon was launched at 0000Z that day)</p>
        <img style="width: 50%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576768979/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYCX_GAGETOWN_coyiuw.png" alt="" />
      </div>
      
      <div id="Case2E1Tab4CYCXHodo" class="tab-pane">
        <p class="my-2">Gagetown (CYCX) hodograph valid 1200Z 12 November 2019</p>
        <img style="width: 50%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYCX_GAGETOWN_HODO_uajkae.png" alt="" />
      </div>
      
      <div id="Case2E1Tab4KCARTephi" class="tab-pane">
        <p class="my-2">Caribou (KCAR) tephi valid 0000Z (red) and 1200Z (black) for 12 November 2019</p>
        <img style="width: 50%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576013434/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/KCAR_CARIBOU_fvda3u.png" alt="" />
      </div>
      
      <div id="Case2E1Tab4KCARHodo" class="tab-pane">
        <p class="my-2">Caribou (KCAR) hodograph valid 1200Z or 12 November 2019</p>
        <img style="width: 50%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576013435/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/KCAR_CARIBOU_HODO_xds5er.png" alt="" />
      </div>
      
      <div id="Case2E1Tab4CYZVTephi" class="tab-pane">
        <p class="my-2">Sept-Iles (CYZV) tephi valid 0000Z (red) and 1200Z (black) for 12 November 2019</p>
        <img style="width: 50%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576013434/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYZV_SEPT_ILES_f6gtqq.png" alt="" />
      </div>
      
      <div id="Case2E1Tab4CYZVHodo" class="tab-pane">
        <p class="my-2">Sept-Iles (CYZV) hodograph valid 1200Z 12 November 2019</p>
        <img style="width: 50%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576013434/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYZV_SEPT_ILES_HODO_qzkwd5.png" alt="" />
      </div>
      
      <div id="Case2E1Tab4CYJTTephi" class="tab-pane">
        <p class="my-2">Stephenville (CYJT) tephi valid 0000Z (red) and 1200Z (black) for 12 November 2019</p>
        <img style="width: 50%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYJT_STEPHENVILLE_z9tltf.png" alt="" />
      </div>
      
      <div id="Case2E1Tab4CYJTHodo" class="tab-pane">
        <p class="my-2">Stephenville (CYJT) hodograph valid 1200Z 12 November 2019</p>
        <img style="width: 50%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYJT_STEPHENVILLE_HODO_dnzjsa.png" alt="" />
      </div>
      
      <div id="Case2E1Tab4CYYTTephi" class="tab-pane">
        <p class="my-2">St. John's (CYYT) tephi valid 0000Z (red) and 1200Z (black) for 12 November 2019</p>
        <img style="width: 50%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576013434/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYYT_ST_JOHN_S_WEST_clbc4p.png" alt="" />
      </div>
      
      <div id="Case2E1Tab4CYYTHodo" class="tab-pane">
        <p class="my-2">St. John's (CYYT) hodograph valid 1200Z 12 November 2019</p>
        <img style="width: 50%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYYT_ST_JOHN_S_WEST_HODO_xtn24n.png" alt="" />
      </div>
      
      <div id="Case2E1Tab4YQIYCXKCARComp" class="tab-pane">
        <p class="my-2">YQI (black) / YCX (red) / KCAR (blue) Tephi Comparison valid 1200Z 12 November 2019</p>
        <img style="width: 50%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYQI_CYCX_KCAR_COMPARISON_h8veh5.png" alt="" />
      </div>
    </div>

    <figure class="figure my-4">
      <img class="figure-img img-fluid" src="https://res.cloudinary.com/tcddmedia/image/upload/c_scale,w_850/v1576013434/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/SOUNDING_LOCATIONS_12Z_IR_SAT_idqerj.png" alt="" />
      <figcaption class="figure-caption">GOES 10.3 μm IR satellite image valid 1200Z 12 November 2019. Upper air sites are indicated in red.</figcaption>
    </figure>

    <p>Click on each of the Observing sites in the red box below to view a history of the surface observations at that site over the past 12 hrs.</p>

    <image-map-two></image-map-two>

    <p>Using your mouse, draw in the location of the surface warm front on the map below and click the save icon. In the following box, provide a detailed reasoning of why you placed the warm front where you did.</p>

    <draw-app></draw-app>

    <div id="case-two-exercise-one-answer" class="mt-5">
      <textbox-answer
        :candidate-id="{{ (int) Cache::get('candidateid') }}"
        answer-key="case2ex1"
        endpoint="case-two"
      ></textbox-answer>
    </div>

    <h2 class="mt-4">Case 2 Exersise 2 - Precipitation Forecast over Newfoundland</h2>

    <p>It is November 12 at 12:00Z, and you have begun working your shift as an operational meteorologist for Northeastern Quebec and Newfoundland. Today, you are in charge of issuing weather forecasts for Natashquan, QC (CYNA) and Deer Lake, NL (CYDF). Examining the maps in the TABs below, you can see that Natashquan is located on the shore of the Gulf of St Lawrence, with terrain rising to the north. The town of Deer Lake is located in a valley oriented NE-SW on the eastern edge of the lake from which it is named, in north-central Newfoundland.</p>

    <!-- Nav tabs for Case2E2Tab6 -->

    <ul id="Case2E2Tab6" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="Case2E2Tab6Ref-tab" class="nav-link active" href="#Case2E2Tab6Ref" data-toggle="tab">Reference map</a>
      </li>
      <li class="nav-item">
        <a id="Case2E2Tab6YNA-tab" class="nav-link" href="#Case2E2Tab6YNA" data-toggle="tab">Map – CYNA</a>
      </li>
      <li class="nav-item">
        <a id="Case2E2Tab6YDF-tab" class="nav-link" href="#Case2E2Tab6YDF" data-toggle="tab">Map – CYDF</a>
      </li>
    </ul>

    <!-- Tab panes for Case2E2Tab6 -->
    <div class="tab-content mb-4">
      <div id="Case2E2Tab6Ref" class="tab-pane active">
        <p class="my-2">10.3&mu; IR GOES satellite image over the northeast coast, taken at 12:00Z. The locations of Natashquan (CYNA) and Deer Lake (CYDF) are circled in red.</p>
        <img src="https://res.cloudinary.com/tcddmedia/image/upload/v1576165269/moip_direct_entry_assessment/case%202/Exercise%202/Forecast_Reference_z0m8vm.png" alt="" />
      </div>
        
      <div id="Case2E2Tab6YNA" class="tab-pane">
        <p>Google Map view around Natashquan (CYNA), detailing the terrain.</p>
        <img class="w-75" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576768486/moip_direct_entry_assessment/case%202/Exercise%202/Topo_map_Natashquan_zacdnw.png" alt="" />
      </div>
        
      <div id="Case2E2Tab6YDF" class="tab-pane">
        <p>Google Map view around Deer Lake (CYDF), detailing the terrain.</p>
        <img class="w-75" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576768486/moip_direct_entry_assessment/case%202/Exercise%202/Topo_map_Deer_Lake_njanea.png" alt="" />
      </div>
    </div>

    <p>You have already analyzed the satellite, RADAR, METARs, and upper air data over the area, and diagnosed the presence of a warm front (Case 2 Exercise 1). You now must create a forecast of precipitation type and amount for both CYNA and CYDF from 15:00Z November 12 until 06:00Z November 13.</p>

    <div class="row">
      <div class="col-md-6">
        <!-- Nav tabs for Case2E2Tab1 -->
        <ul id="Case2E2Tab1" class="nav nav-tabs mt-4">
          <li class="nav-item">
            <a id="Case2E2Tab1SFCTEMPPRES-tab" class="nav-link active" href="#Case2E2Tab1SFCTEMPPRES" data-toggle="tab">NWP SFC TEMP PRES</a>
          </li>
          <li class="nav-item">
            <a id="Case2E2Tab1SFCWINDPRES-tab" class="nav-link" href="#Case2E2Tab1SFCWINDPRES" data-toggle="tab">NWP SFC WIND PRES</a>
          </li>
          <li class="nav-item">
            <a id="Case2E2Tab1WETBULBTEMP-tab" class="nav-link" href="#Case2E2Tab1WETBULBTEMP" data-toggle="tab">NWP WET BULB TEMP</a>
          </li>
        </ul>
  
        <!-- Tab panes for Case2E1Tab3 -->
        <div class="tab-content mb-4">
          <div id="Case2E2Tab1SFCTEMPPRES" class="tab-pane active">
            <video style="max-width: 100%;" controls loop>
              <source 
                src="https://res.cloudinary.com/tcddmedia/video/upload/v1576691870/moip_direct_entry_assessment/case%202/Exercise%202/NWP/NWP_2_SFC_TEMP_PRES_vnlulx.mp4"
                type="video/mp4"
              >
            </video>

            <p class="my-2">Surface temperature plotted in reds (warm) to blues (cool), overlaid with mean sea level pressure in black valid 1500Z 12 November 2019 to 0600Z 13 November 2019</p>
          </div>
          
          <div id="Case2E2Tab1SFCWINDPRES" class="tab-pane">
            <video style="max-width: 100%;" controls loop>
              <source 
                src="https://res.cloudinary.com/tcddmedia/video/upload/v1576691863/moip_direct_entry_assessment/case%202/Exercise%202/NWP/NWP_7_SFC_WIND_PRES_wj2zeo.mp4"
                type="video/mp4"
              >
            </video>

            <p class="my-2">Wind barbs colour-coded to wind speed of winds at 10m height above ground level, overlaid with mean sea level pressure in black valid 1500Z 12 November 2019 to 0600Z 13 November 2019</p>
          </div>
          
          <div id="Case2E2Tab1WETBULBTEMP" class="tab-pane">
            <video style="max-width: 100%;" controls loop>
              <source 
                src="https://res.cloudinary.com/tcddmedia/video/upload/v1576691866/moip_direct_entry_assessment/case%202/Exercise%202/NWP/NWP_1_850MB_WET_BULB_TEMP_HEIGHTS_uxew3b.mp4"
                type="video/mp4"
              >
            </video>

            <p class="my-2">Wet-bulb potential temperature at 850mb in oC plotted in yellows (warm) to greens (cool), overlaid with geopotential heights at 850mb valid 1500Z 12 November 2019 to 0600Z 13 November 2019</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <!-- Nav tabs for Case2E2Tab1 -->
        <ul id="Case2E2Tab2" class="nav nav-tabs mt-4">
            <li class="nav-item">
              <a id="Case2E2Tab23HRQPF850MBTEMP-tab" class="nav-link active" href="#Case2E2Tab23HRQPF850MBTEMP" data-toggle="tab">NWP 3HR QPF 850MB TEMP</a>
            </li>
            <li class="nav-item">
              <a id="Case2E2Tab2700MBRHHEIGHTS-tab" class="nav-link" href="#Case2E2Tab2700MBRHHEIGHTS" data-toggle="tab">NWP 700MB RH HEIGHTS</a>
            </li>
            <li class="nav-item">
              <a id="Case2E2Tab2500MBVORTHEIGHTS-tab" class="nav-link" href="#Case2E2Tab2500MBVORTHEIGHTS" data-toggle="tab">NWP 500MB VORT HEIGHTS</a>
            </li>
            <li class="nav-item">
              <a id="Case2E2Tab21000-500THICJNESSSFCPRES-tab" class="nav-link" href="#Case2E2Tab21000-500THICJNESSSFCPRES" data-toggle="tab">NWP 1000-500 THICKNESS SFC PRES</a>
            </li>
          </ul>
    
          <!-- Tab panes for Case2E1Tab3 -->
          <div class="tab-content mb-4">
            <div id="Case2E2Tab23HRQPF850MBTEMP" class="tab-pane active">
              <video style="max-width: 100%;" controls loop>
                <source 
                  src="https://res.cloudinary.com/tcddmedia/video/upload/v1576697358/moip_direct_entry_assessment/case%202/Exercise%202/NWP/NWP_6_3HR_QPF_850MB_TEMP_1_waws1r.mp4"
                  type="video/mp4"
                >
              </video>

              <p class="my-2">3HR Quantitative Precipitation Amounts, overlaid with temperature in &deg;C at 850mb valid 1500Z 12 November 2019 to 0600Z 13 November 2019</p>
            </div>
            
            <div id="Case2E2Tab2700MBRHHEIGHTS" class="tab-pane">
              <video style="max-width: 100%;" controls loop>
                <source 
                  src="https://res.cloudinary.com/tcddmedia/video/upload/v1576691867/moip_direct_entry_assessment/case%202/Exercise%202/NWP/NWP_5_700MB_RH_HEIGHTS_pxfwcy.mp4"
                  type="video/mp4"
                >
              </video>

              <p class="my-2">Areas of Relative humidity greater than 50% at 700mb, overlaid with geopotential heights at 700mb valid 1500Z 12 November 2019 to 0600Z 13 November 2019</p>
            </div>
             
            <div id="Case2E2Tab2500MBVORTHEIGHTS" class="tab-pane">
              <video style="max-width: 100%;" controls loop>
                <source 
                  src="https://res.cloudinary.com/tcddmedia/video/upload/v1576691866/moip_direct_entry_assessment/case%202/Exercise%202/NWP/NWP_3_500MB_VORT_HEIGHTS_eerj20.mp4"
                  type="video/mp4"
                >
              </video>

              <p class="my-2">Absolute vorticity at 500mb, overlaid with geopotential heights at 500mb valid 1500Z 12 November 2019 to 0600Z 13 November 2019</p>
            </div>

            <div id="Case2E2Tab21000-500THICJNESSSFCPRES" class="tab-pane">
              <video style="max-width: 100%;" controls loop>
                <source 
                  src="https://res.cloudinary.com/tcddmedia/video/upload/v1576691865/moip_direct_entry_assessment/case%202/Exercise%202/NWP/NWP_4_1000-500MB_THICKNESS_SFC_PRESSURE_mmrhpa.mp4"
                  type="video/mp4"
                >
              </video>

              <p class="my-2">1000-500mb thickness lines, overlaid with mean sea level pressure valid 1500Z 12 November 2019 to 0600Z 13 November 2019</p>
            </div>
          </div>
      </div>
    </div>

    <p>In the viewer above, you can see various model fields generated from the 12:00Z run of the RDPS from that day, valid from 15:00Z November 12 until 06:00Z November 13. On the left, the model fields are:</p>

    <ol>
      <li>
        Surface Temperature: Surface temperature plotted in reds (warm) to blues (cool), overlaid with mean sea level pressure in black.
      </li>
      <li>
        Near-surface winds: Wind barbs colour-coded to wind speed of winds at 10m height above ground level, overlaid with mean sea level pressure in black. 
      </li>
      <li>
        850mb Wet-bulb: Wet-bulb potential temperature at 850mb in oC plotted in yellows (warm) to greens (cool), overlaid with geopotential heights at 850mb.
      </li>
    </ol>

    <p>On the right:</p>

    <ol>
      <li>
        3HR QPF: 3HR Quantitative Precipitation Amounts, overlaid with temperature in &deg;C at 850mb.
      </li>
      <li>
        700mb RH: Areas of Relative humidity greater than 50% at 700mb, overlaid with geopotential heights at 700mb.
      </li>
      <li>
        500mb Vort: Absolute vorticity at 500mb, overlaid with geopotential heights at 500mb.
      </li>
      <li>
        1000-500mb Thickness: 1000-500mb thickness lines, overlaid with mean sea level pressure.
      </li>
    </ol>

    <p>You also have access to model soundings for both sites. Step through the time steps of the soundings below for CYNA and CYDF, generated from the 12:00Z model run of the RDPS and valid every 3hrs from 12:00Z November 12 until 06:00Z November 13.</p>
    
    <!-- Nav tabs for Case2E2Tab1 -->
    <ul id="Case2E2Tab3" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="Case2E2Tab3CYNA-tab" class="nav-link active" href="#Case2E2Tab3CYNA" data-toggle="tab">NWP CYNA Tephi</a>
      </li>
      <li class="nav-item">
        <a id="Case2E2Tab3CYDF-tab" class="nav-link" href="#Case2E2Tab3CYDF" data-toggle="tab">NWP CYDF Tephi</a>
      </li>
    </ul>

    <!-- Tab panes for Case2E1Tab3 -->
    <div class="tab-content mb-4">
      <div id="Case2E2Tab3CYNA" class="tab-pane active">
        <p class="my-2">Model sounding at Natashquan, QC from the 1200Z model run of the RDPS, valid every 3hrs from 1200Z November 12 2019 until 0600Z November 13.</p>
        <video style="max-width: 100%;" controls loop>
          <source 
            src="https://res.cloudinary.com/tcddmedia/video/upload/c_scale,h_452/v1578670611/moip_direct_entry_assessment/case%202/Exercise%202/Model%20Soundings/NWP-CYNA-SOUNDINGS_qkvbss.mp4"
            type="video/mp4"
          >
        </video>
      </div>
      
      <div id="Case2E2Tab3CYDF" class="tab-pane">
        <p class="my-2">Model sounding at Deer Lake, NL from the 1200Z model run of the RDPS, valid every 3hrs from 1200Z November 12 2019 until 0600Z November 13.</p>
        <video style="max-width: 100%;" controls loop>
          <source 
            src="https://res.cloudinary.com/tcddmedia/video/upload/c_scale,h_452/v1578670611/moip_direct_entry_assessment/case%202/Exercise%202/Model%20Soundings/NWP-CYDF-SOUNDINGS_l5crjr.mp4"
            type="video/mp4"
          >
        </video>
      </div>
    </div>

    <p>Using the above information, fill-in the following forecast tables, choosing the likeliest precipitation type and amount for the previous 3hrs: </p>

    <qpf-table
      :candidate-id="{{ (int) Cache::get('candidateid') }}"
    ></qpf-table>

    <p>In the box below, explain your reasoning and outline the evidence that supports your forecasts.</p>

    <div id="case-two-exercise-two-answer">
      <textbox-answer
        :candidate-id="{{ (int) Cache::get('candidateid') }}"
        answer-key="case2ex2"
        endpoint="case-two"
      ></textbox-answer>
    </div>

    <div class="mt-5">
      @include('cases.partials.header')
    </div>

    <a href="{{ env('APP_URL') }}/cases/confirm" class="btn btn-primary mt-4">
      Review answers and finish
    </a>
  </div>

@endsection