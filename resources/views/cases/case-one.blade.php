@extends('layouts.app')

@section('content')

  <div class="container">
    @include('cases.partials.header')

    <h2>Case 1</h2>

    <div class="row">
      <div class="col-md-6">
        <p>It is October 8 at 12:00Z (8am local), and you have begun working your shift as an operational meteorologist for central Ontario. Today, you are in charge of issuing weather forecasts for Kapuskasing, ON (CYYU) and Timmins, ON (CYTS).</p>
      </div>

      <div class="col-md-6">
        <figure class="figure">
          <img class="figure-img img-fluid" src="https://res.cloudinary.com/tcddmedia/image/upload/c_scale,w_589/v1575644904/moip_direct_entry_assessment/case%201/case_1_kap_tim_map_hmldig.jpg" />
          <figcaption class="figure-caption">Topographic map of central Canada with Timmins (CYTS) and Kapuskasing (CYYU) highlighted</figcaption>
        </figure>
      </div>
    </div>

    <p>Topographically, the ground gently rises from the northwest to the southeast over the area, meaning that NW flow is upslope.</p>

    <p>You received a briefing from your colleague on the night shift before he left:</p>

    <blockquote class="blockquote" style="border-left-style: solid; border-left-color: #868e96; border-left-width: 3px; padding-left: 1em; margin: 1rem 0;">
      <p class="mb-0" style="color: #868e96; font-style: italic;">It was not a very busy night. Mostly clear skies expected today under a ridge of high pressure. Satellite imagery is showing some low stratus cloud in areas of central Ontario, and a few sites are reporting reductions to visibility in fog.</p>
    </blockquote>

    <p>You sit down to begin your shift, and immediately pull-up the following satellite imagery and surface observations. </p>

    <!-- Nav tabs for case1Tab1 -->
    <ul id="case1Tab1" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="case1Tab1Fog-tab" class="nav-link active" href="#case1Tab1Fog" data-toggle="tab">GOES FOG Product</a>
      </li>
      <li class="nav-item">
        <a id="case1Tab1Night-tab" class="nav-link" href="#case1Tab1Night" data-toggle="tab">GOES NIGHT IR</a>
      </li>
    </ul>

    <!-- Tab panes for case1Tab1 -->
    <div class="tab-content mb-4">
      <div id="case1Tab1Fog" class="tab-pane active">
        <p class="my-2">GOES fog product valid from 0900Z-1200Z 8 October 2019</p>
        <video controls loop>
          <source 
            src="https://res.cloudinary.com/tcddmedia/video/upload/v1576770637/moip_direct_entry_assessment/case%201/GOES_FOG_PRODUCT_09_12z_crop_so_ytnbvu.mp4"
            type="video/mp4"
          >
        </video>
      </div>
      
      <div id="case1Tab1Night" class="tab-pane">
        <p class="my-2">GOES night IR product valid from 0900Z-1200Z 8 October 2019</p>
        <video controls loop>
          <source 
            src="https://res.cloudinary.com/tcddmedia/video/upload/v1576770635/moip_direct_entry_assessment/case%201/GOES_NIGHT_IR_09_12Z_crop_so_cs1mj3.mp4"
            type="video/mp4"
          >
        </video>
      </div>
    </div>

    <p>The first satellite loop above is the GOES Fog Product. It is a subtraction between the 3.7µ channel and the 10.3µ channel. At night in the absence of solar radiation, high cloud appears white and low stratus cloud and fog appears dark. The second satellite loop shows a multispectral IR image, where lower cloud is mapped to blue and higher cloud is mapped to white at night.</p>

    <p>You next pull up the METARs over the past 12hrs at the sites you are responsible for, as well as those at a few of the surrounding sites nearby. Use the GOES fog product loop below for reference as you read through the METARs.</p>

    <image-map-one></image-map-one>
    
    <p>Because it is just after 12Z, you now have access to new upper air soundings from the area. The three upper air sounding sites relevant for your geographic area are Pickle Lake, ON; Buffalo, NY; and Maniwaki, QC. In the image below, the 850mb winds from the soundings are plotted, as well as the actual 500mb height pattern from the 12Z soundings with the 12Z GOES NIGHT IR satellite image.</p>

    <figure class="figure my-4">
      <img src="https://res.cloudinary.com/tcddmedia/image/upload/v1576785899/moip_direct_entry_assessment/case%201/SOUNDING-MAP-500MB-HEIGHTS-12Z_wbvg6u.gif" alt="" />
      <figcaption class="figure-caption">GOES night IR image valid at 1200Z 8 October 2019. 500 mb geopotential heights and 850 mb winds are superimposed on top of the image. Pickle Lake, Maniwaki and Buffalo are indicated on the map</figcaption>
    </figure>

    <p>You next pull up each of the soundings.</p>

    <!-- Nav tabs for case1Tab3 -->
    <ul id="case1Tab3" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="case1Tab312ZSoundingPickleLake-tab" class="nav-link active" href="#case1Tab312ZSoundingPickleLake" data-toggle="tab">12Z Sounding Pickle Lake</a>
      </li>
      <li class="nav-item">
        <a id="case1Tab312ZSoundingBuffalo-tab" class="nav-link" href="#case1Tab312ZSoundingBuffalo" data-toggle="tab">12Z Sounding Buffalo</a>
      </li>
      <li class="nav-item">
        <a id="case1Tab312ZSoundingManiwaki-tab" class="nav-link" href="#case1Tab312ZSoundingManiwaki" data-toggle="tab">12Z Sounding Maniwaki</a>
      </li>
    </ul>

    <!-- Tab panes for case1Tab3 -->
    <div class="tab-content mb-4">
      <div id="case1Tab312ZSoundingPickleLake" class="tab-pane active">
        <img style="width: 60%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1575663413/moip_direct_entry_assessment/case%201/UA_soundings/SOUNDING_PICKLE_LAKE_YPL_12Z_migise.png" alt="" />
      </div>
      <div id="case1Tab312ZSoundingBuffalo" class="tab-pane">
        <img style="width: 60%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1575663413/moip_direct_entry_assessment/case%201/UA_soundings/SOUNDING_BUFFALO_KBUF_12Z_acdrdq.png" alt="" />
      </div>
      <div id="case1Tab312ZSoundingManiwaki" class="tab-pane">
        <img style="width: 60%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1575663413/moip_direct_entry_assessment/case%201/UA_soundings/SOUNDING_MANIWAKI_12Z_ycfv31.png" alt="" />
      </div>
    </div>

    <p>After analyzing all these observations, you decide to examine some NWP fields. In the loop below, the model-derived MSLP is contoured, near-surface level wind barbs are plotted, and areas of strong winds are contoured in greens/yellows.</p>

    <figure class="figure my-4">
      <video controls loop>
        <source 
          src="https://res.cloudinary.com/tcddmedia/video/upload/v1576609652/moip_direct_entry_assessment/case%201/SURFACE_MSLP_WINDS_vl5llx_n3ezyo_ytojml.mp4"
          type="video/mp4"
        >
      </video>
      <figcaption class="figure-caption">Model-derived mean sea level pressure (MSLP) and 925 mb winds valid from 0900Z 8 October to 0000Z 9 October 2019. Shaded regions indicate areas of stronger winds</figcaption>
    </figure>

    <!-- Nav tabs for case1Tab4 -->
    <ul id="case1Tab4" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="case1Tab4YTS-tab" class="nav-link active" href="#case1Tab4YTS" data-toggle="tab">YTS NWP Soundings</a>
      </li>
      <li class="nav-item">
        <a id="case1Tab4YYU-tab" class="nav-link" href="#case1Tab4YYU" data-toggle="tab">YYU NWP Soundings</a>
      </li>
    </ul>

    <!-- Tab panes for case1Tab4 -->
    <div class="tab-content mb-4">
      <div id="case1Tab4YTS" class="tab-pane active">
        <video controls loop>
          <source 
            src="https://res.cloudinary.com/tcddmedia/video/upload/v1576610697/moip_direct_entry_assessment/case%201/UA_soundings/nwp_sounding_yts_ebib5v.mp4"
            type="video/mp4"
          >
        </video>
      </div>
      <div id="case1Tab4YYU" class="tab-pane">
        <video controls loop>
          <source 
            src="https://res.cloudinary.com/tcddmedia/video/upload/v1576610697/moip_direct_entry_assessment/case%201/UA_soundings/nwp_sounding_yyu_ywxrge.mp4"
            type="video/mp4"
          >
        </video>
      </div>
    </div>

    <p>“The vertical profiles for Timmins (YTS) and Kapuskasing (YYU) above are from the 06Z run of the RDPS model, valid over 15hrs from 0900Z October 8th until 0000Z October 9th</p>

    <p>You next examine climatological information for both Kapuskasing and Timmins in the fall. The graphs below depict the diurnal probability of fog over 24hours for September (blue), October (pink) and November (yellow) based on the last 37 years of data.</p>

    <!-- Nav tabs -->
    <ul id="case1Tab5" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="case1Tab5YTSFog-tab" class="nav-link active" href="#case1Tab5YTSFog" data-toggle="tab">YTS Fog Climatology</a>
      </li>
      <li class="nav-item">
        <a id="case1Tab5YYUFog-tab" class="nav-link" href="#case1Tab5YYUFog" data-toggle="tab">YYU Fog Climatology</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content mb-4">
      <div id="case1Tab5YTSFog" class="tab-pane active">
        <p class="my-2">Fog climatology for September (blue), October (pink) and November (yellow) at Timmins(CYTS). The graph indicates the probability, in a given hour, that fog could occur.</p>
        <img class="w-75" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576601320/moip_direct_entry_assessment/case%201/YTS_FOG_CLIMATOLOGY_dkosfy.png" alt="" />
      </div>
      
      <div id="case1Tab5YYUFog" class="tab-pane">
        <p class="my-2">Fog climatology for September (blue), October (pink) and November (yellow) at Kapuskasing (CYYU). The graph indicates the probability, in a given hour, that fog could occur.</p>
        <img class="w-75" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576601320/moip_direct_entry_assessment/case%201/YYU_FOG_CLIMATOLOGY_depvon.png" alt="" />
      </div>
    </div>

    <p>It is now almost 13:00Z (9am local), and you receive a phone call from a client:</p>

    <blockquote class="blockquote" style="border-left-style: solid; border-left-color: #868e96; border-left-width: 3px; padding-left: 1em; margin: 1rem 0;">
      <p class="mb-0" style="color: #868e96; font-style: italic;">Hi, this is Emily Smith with the provincial government in Ontario. We need to get some updates on the fog in central Ontario. Specifically, we need to know when you expect the fog to clear out and visibility to improve to at least 6SM in Timmins, and whether you expect any fog to develop over Kapuskasing this morning.</p>
    </blockquote>

    <p>Given your analysis, what do you tell her? Please explain your reasoning with at least 5 pieces of evidence for each forecast site.</p>

    <div id="case-one-answer">
      <textbox-answer
        :candidate-id="{{ (int) Cache::get('candidateid') }}"
        answer-key="case1"
        endpoint="case-one"
      ></textbox-answer>
    </div>

    <div class="mt-5">
      @include('cases.partials.header')
    </div>
  </div>

@endsection