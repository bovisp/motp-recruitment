@extends('layouts.app')

@section('content')

  <div class="container my-5">
    @include('cases.partials.header')

    @include('cases.partials.case-two-scores')

    @include('cases.partials.countdown-timer')

    <h2>{{ __('case2_exercise1.title') }}</h2>

    <p>{{ __('case2_exercise1.paragraph.1') }}</p>

    <!-- Nav tabs for Case2E1Tab1 -->

    <ul id="Case2E1Tab1" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="Case2E1Tab1IR-tab" class="nav-link active" href="#Case2E1Tab1IR" data-toggle="tab">{{ __('case2_exercise1.tab.1.label.1') }}</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab1IRMultispectral-tab" class="nav-link" href="#Case2E1Tab1IRMultispectral" data-toggle="tab">{{ __('case2_exercise1.tab.1.label.2') }}</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab1WV-tab" class="nav-link" href="#Case2E1Tab1WV" data-toggle="tab">{{ __('case2_exercise1.tab.1.label.3') }}</a>
      </li>
    </ul>

    <!-- Tab panes for Case2E1Tab1 -->
    <div 
      class="tab-content mb-4 rounded"
      style="border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; margin-top: -10px;"
    >
      <div id="Case2E1Tab1IR" class="tab-pane active">
        <p class="pt-3 px-3">{{ __('case2_exercise1.tab.1.caption.1') }}</p>
        
        <image-animator
          file="case2Exercise2GoesSatIr"
          :fluid="true"
        ></image-animator>
      </div>
        
      <div id="Case2E1Tab1IRMultispectral" class="tab-pane">
        <p class="pt-3 px-3">{{ __('case2_exercise1.tab.1.caption.2') }}</p>
        
        <image-animator
          file="case2Exercise2GoesSatMultispec"
          :fluid="true"
        ></image-animator>
      </div>
        
      <div id="Case2E1Tab1WV" class="tab-pane">
        <p class="pt-3 px-3">{{ __('case2_exercise1.tab.1.caption.3') }}</p>
        
        <image-animator
          file="case2Exercise2GoesSatWv"
          :fluid="true"
        ></image-animator>
      </div>
    </div>

    <p>{{ __('case2_exercise1.paragraph.2') }}</p>

    <!-- Nav tabs for Case2E1Tab2 -->
    <ul id="Case2E1Tab2" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="Case2E1Tab2SFC-PRES-TEMP-tab" class="nav-link active" href="#Case2E1Tab2SFC-PRES-TEMP" data-toggle="tab">{{ __('case2_exercise1.tab.2.label.1') }}</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab2SFC-PRES-DP-tab" class="nav-link" href="#Case2E1Tab2SFC-PRES-DP" data-toggle="tab">{{ __('case2_exercise1.tab.2.label.2') }}</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab2SFC-PRES-PTEND-tab" class="nav-link" href="#Case2E1Tab2SFC-PRES-PTEND" data-toggle="tab">{{ __('case2_exercise1.tab.2.label.3') }}</a>
      </li>
    </ul>

    <!-- Tab panes for Case2E1Tab2 -->
    <div 
      class="tab-content mb-4 rounded"
      style="border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; margin-top: -10px;"
    >
      <div id="Case2E1Tab2SFC-PRES-TEMP" class="tab-pane active">
        <p class="pt-3 px-3">{{ __('case2_exercise1.tab.2.caption.1') }}</p>
        <img class="img-fluid" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576864830/moip_direct_entry_assessment/case%202/Exercise%201/MAP_PLOT_temp_m8cw8y.png" alt="" />
      </div>
      
      <div id="Case2E1Tab2SFC-PRES-DP" class="tab-pane">
        <p class="pt-3 px-3">{{ __('case2_exercise1.tab.2.caption.2') }}</p>
        <img class="img-fluid" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576864830/moip_direct_entry_assessment/case%202/Exercise%201/MAP_PLOT_dp_aucffs.png" alt="" />
      </div>
      
      <div id="Case2E1Tab2SFC-PRES-PTEND" class="tab-pane">
        <p class="pt-3 px-3">{{ __('case2_exercise1.tab.2.caption.3') }}</p>
        <img class="img-fluid" src="https://res.cloudinary.com/tcddmedia/image/upload/v1581019611/moip_direct_entry_assessment/case%202/Exercise%201/MAP-PLOT-3-SFC-PRES-PTEND_napk1h.png" alt="" />
      </div>
    </div>

    <!-- Nav tabs for Case2E1Tab3 -->
    <ul id="Case2E1Tab3" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="Case2E1Tab315CAPPISNOW-tab" class="nav-link active" href="#Case2E1Tab315CAPPISNOW" data-toggle="tab">{{ __('case2_exercise1.tab.3.label.1') }}</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab3CompositeLOLLA-tab" class="nav-link" href="#Case2E1Tab3CompositeLOLLA" data-toggle="tab">{{ __('case2_exercise1.tab.3.label.2') }}</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1TabDrilldownLOLLA-tab" class="nav-link" href="#Case2E1TabDrilldownLOLLA" data-toggle="tab">{{ __('case2_exercise1.tab.3.label.3') }}</a>
      </li>
      <li class="nav-item">
        <a id="Case2E1Tab3CaribouLocation-tab" class="nav-link" href="#Case2E1Tab3CaribouLocation" data-toggle="tab">{{ __('case2_exercise1.tab.3.label.4') }}</a>
      </li>
    </ul>

    <!-- Tab panes for Case2E1Tab3 -->
    <div 
      class="tab-content mb-4 rounded"
      style="border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; margin-top: -10px;"
    >
      <div id="Case2E1Tab315CAPPISNOW" class="tab-pane active">
        <p class="pt-3 px-3">{{ __('case2_exercise1.tab.3.caption.1') }}</p>
        
        <image-animator
          file="case2Exercise1RadarCappi15Snow"
          :fluid="true"
        ></image-animator>
      </div>
      
      <div id="Case2E1Tab3CompositeLOLLA" class="tab-pane">
        <p class="pt-3 px-3">{{ __('case2_exercise1.tab.3.caption.2') }}</p>

        <image-animator
          file="case2Exercise1RadarCompositeVrLolla"
          :fluid="true"
        ></image-animator>
      </div>
      
      <div id="Case2E1TabDrilldownLOLLA" class="tab-pane">
        <p class="pt-3 px-3">{{ __('case2_exercise1.tab.3.caption.3') }}</p>
        
        <image-animator
          file="case2Exercise1RadarDrilldownVrLolla"
          :fluid="true"
        ></image-animator>
      </div>

      <div id="Case2E1Tab3CaribouLocation" class="tab-pane">
        <img class="mt-4 pb-4 pl-4 pr-4" src="https://res.cloudinary.com/tcddmedia/image/upload/v1581105304/moip_direct_entry_assessment/case%202/Exercise%201/RADAR/Map-Caribou-RADAR_hffdwz.png" alt="" />
      </div>
    </div>

    <p>{{ __('case2_exercise1.paragraph.3') }}</p>

    <image-map-tephi></image-map-tephi>

    <p>{{ __('case2_exercise1.paragraph.4') }}</p>

    <figure class="figure my-4">
      <img class="figure-img w-50" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576013433/moip_direct_entry_assessment/case%202/Exercise%201/Soundings%20-%20Actual/CYQI_CYCX_KCAR_COMPARISON_h8veh5.png" alt="" />
      <figcaption class="figure-caption">{{ __('case2_exercise1.tab.4.caption.13') }}</figcaption>
    </figure>

    <p>{{ __('case2_exercise1.paragraph.5') }}</p>

    <image-map-two></image-map-two>

    <p>
      {{ __('case2_exercise1.paragraph.6') }} 
      <strong>({{ $maxScores->where('name', 'image_url')->first()->score }} {{ __('case2_exercise1.points') }})</strong>
    </p>

    <draw-app
      base-url="{{ env('APP_URL') }}"
    ></draw-app>

    <p style="margin-bottom: -2rem;" class="mt-5">
      {{ __('case2_exercise1.reasoning') }}
      <strong>({{ $maxScores->where('name', 'case2ex1')->first()->score }} {{ __('case2_exercise1.points') }})</strong>:
    </p>

    <div id="case-two-exercise-one-answer" class="mt-5">
      <textbox-answer
        :candidate-id="{{ App\Candidate::whereSession(Cookie::get(env('APP_COOKIE_NAME')))->first()->id }}"
        answer-key="case2ex1"
        endpoint="case-two"
      ></textbox-answer>
    </div>

    <h2 class="mt-4">{{ __('case2_exercise2.title') }}</h2>

    <p>{{ __('case2_exercise2.paragraph.1') }}</p>

    <!-- Nav tabs for Case2E2Tab1 -->
    <ul id="Case2E2Tab1" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="Case2E2Tab1Ref-tab" class="nav-link active" href="#Case2E2Tab1Ref" data-toggle="tab">{{ __('case2_exercise2.tab.1.label.1') }}</a>
      </li>
      <li class="nav-item">
        <a id="Case2E2Tab1YNA-tab" class="nav-link" href="#Case2E2Tab1YNA" data-toggle="tab">{{ __('case2_exercise2.tab.1.label.2') }}</a>
      </li>
      <li class="nav-item">
        <a id="Case2E2Tab1YDF-tab" class="nav-link" href="#Case2E2Tab1YDF" data-toggle="tab">{{ __('case2_exercise2.tab.1.label.3') }}</a>
      </li>
    </ul>

    <!-- Tab panes for Case2E2Tab1 -->
    <div 
      class="tab-content mb-4 rounded"
      style="border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; margin-top: -10px;"
    >
      <div id="Case2E2Tab1Ref" class="tab-pane active">
        <p class="pt-3 px-3">{{ __('case2_exercise2.tab.1.caption.1') }}</p>
        <img src="https://res.cloudinary.com/tcddmedia/image/upload/v1576165269/moip_direct_entry_assessment/case%202/Exercise%202/Forecast_Reference_z0m8vm.png" alt="" />
      </div>
        
      <div id="Case2E2Tab1YNA" class="tab-pane">
        <p class="pt-3 px-3">{{ __('case2_exercise2.tab.1.caption.2') }}</p>
        <img class="w-75" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576768486/moip_direct_entry_assessment/case%202/Exercise%202/Topo_map_Natashquan_zacdnw.png" alt="" />
      </div>
        
      <div id="Case2E2Tab1YDF" class="tab-pane">
        <p class="pt-3 px-3">{{ __('case2_exercise2.tab.1.caption.3') }}</p>
        <img class="w-75" src="https://res.cloudinary.com/tcddmedia/image/upload/v1576768486/moip_direct_entry_assessment/case%202/Exercise%202/Topo_map_Deer_Lake_njanea.png" alt="" />
      </div>
    </div>

    <p>{{ __('case2_exercise2.paragraph.2') }}</p>

    <div class="row">
      <div class="col-md-6">

        <!-- Nav tabs for Case2E2Tab2 -->
        <ul id="Case2E2Tab2" class="nav nav-tabs mt-4">
          <li class="nav-item">
            <a id="Case2E2Tab2SFCTEMPPRES-tab" class="nav-link active" href="#Case2E2Tab2SFCTEMPPRES" data-toggle="tab">{{ __('case2_exercise2.tab.2.label.1') }}</a>
          </li>
          <li class="nav-item">
            <a id="Case2E2Tab2SFCWINDPRES-tab" class="nav-link" href="#Case2E2Tab2SFCWINDPRES" data-toggle="tab">{{ __('case2_exercise2.tab.2.label.2') }}</a>
          </li>
          <li class="nav-item">
            <a id="Case2E2Tab2WETBULBTEMP-tab" class="nav-link" href="#Case2E2Tab2WETBULBTEMP" data-toggle="tab">{{ __('case2_exercise2.tab.2.label.3') }}</a>
          </li>
        </ul>
  
        <!-- Tab panes for Case2E2Tab2 -->
        <div 
          class="tab-content mb-4 rounded"
          style="border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6;"
        >
          <div id="Case2E2Tab2SFCTEMPPRES" class="tab-pane active">
            <image-animator
              file="case2Exercise2NwpSfcTempPres"
              :fluid="true"
            ></image-animator>

            <p class="p-2">{{ __('case2_exercise2.tab.2.caption.1') }}</p>
          </div>
          
          <div id="Case2E2Tab2SFCWINDPRES" class="tab-pane">
            <image-animator
              file="case2Exercise2NwpSfcWindPres"
              :fluid="true"
            ></image-animator>

            <p class="p-2">{{ __('case2_exercise2.tab.2.caption.2') }}</p>
          </div>
          
          <div id="Case2E2Tab2WETBULBTEMP" class="tab-pane">
            <image-animator
              file="case2Exercise2Nwp850mbWetBulbTempHeights"
              :fluid="true"
            ></image-animator>

            <p class="p-2">{{ __('case2_exercise2.tab.2.caption.3') }}</p>
          </div>
        </div>
      </div>

      <div class="col-md-6">

        <!-- Nav tabs for Case2E2Tab3 -->
        <ul id="Case2E2Tab3" class="nav nav-tabs mt-4">
            <li class="nav-item">
              <a id="Case2E2Tab33HRQPF850MBTEMP-tab" class="nav-link active" href="#Case2E2Tab33HRQPF850MBTEMP" data-toggle="tab">{{ __('case2_exercise2.tab.3.label.1') }}</a>
            </li>
            <li class="nav-item">
              <a id="Case2E2Tab3700MBRHHEIGHTS-tab" class="nav-link" href="#Case2E2Tab3700MBRHHEIGHTS" data-toggle="tab">{{ __('case2_exercise2.tab.3.label.2') }}</a>
            </li>
            <li class="nav-item">
              <a id="Case2E2Tab3500MBVORTHEIGHTS-tab" class="nav-link" href="#Case2E2Tab3500MBVORTHEIGHTS" data-toggle="tab">{{ __('case2_exercise2.tab.3.label.3') }}</a>
            </li>
            <li class="nav-item">
              <a id="Case2E2Tab31000-500THICJNESSSFCPRES-tab" class="nav-link" href="#Case2E2Tab31000-500THICJNESSSFCPRES" data-toggle="tab">{{ __('case2_exercise2.tab.3.label.4') }}</a>
            </li>
          </ul>
    
          <!-- Tab panes for Case2E2Tab3 -->
          <div 
            class="tab-content mb-4 rounded"
            style="border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6;"
          >
            <div id="Case2E2Tab33HRQPF850MBTEMP" class="tab-pane active">
              <image-animator
                file="case2Exercise2Nwp3hrQpf850mbTemp"
                :fluid="true"
              ></image-animator>

              <p class="p-2">{{ __('case2_exercise2.tab.3.caption.1') }}</p>
            </div>
            
            <div id="Case2E2Tab3700MBRHHEIGHTS" class="tab-pane">
              <image-animator
                file="case2Exercise2Nwp700mbRhHeights"
                :fluid="true"
              ></image-animator>

              <p class="p-2">{{ __('case2_exercise2.tab.3.caption.2') }}</p>
            </div>
             
            <div id="Case2E2Tab3500MBVORTHEIGHTS" class="tab-pane">
              <image-animator
                file="case2Exercise2Nwp500mbVortHeights"
                :fluid="true"
              ></image-animator>

              <p class="p-2">{{ __('case2_exercise2.tab.3.caption.3') }}</p>
            </div>

            <div id="Case2E2Tab31000-500THICJNESSSFCPRES" class="tab-pane">
              <image-animator
                file="case2Exercise2Nwp100-500ThicknessSurfacePressure"
                :fluid="true"
              ></image-animator>

              <p class="p-2">{{ __('case2_exercise2.tab.3.caption.4') }}</p>
            </div>
          </div>
      </div>
    </div>

    <p>{{ __('case2_exercise2.paragraph.3') }}</p>

    <ol>
      <li>
        {{ __('case2_exercise2.list.1.item.1') }}
      </li>
      <li>
        {{ __('case2_exercise2.list.1.item.2') }}
      </li>
      <li>
        {{ __('case2_exercise2.list.1.item.3') }}
      </li>
    </ol>

    <p>{{ __('case2_exercise2.paragraph.4') }}</p>

    <ol>
      <li>
        {{ __('case2_exercise2.list.2.item.1') }}
      </li>
      <li>
        {{ __('case2_exercise2.list.2.item.2') }}
      </li>
      <li>
        {{ __('case2_exercise2.list.2.item.3') }}
      </li>
      <li>
        {{ __('case2_exercise2.list.2.item.4') }}
      </li>
    </ol>

    <p>{{ __('case2_exercise2.paragraph.5') }}</p>
    
    <!-- Nav tabs for Case2E2Tab4 -->
    <ul id="Case2E2Tab4" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="Case2E2Tab4CYNA-tab" class="nav-link active" href="#Case2E2Tab4CYNA" data-toggle="tab">{{ __('case2_exercise2.tab.4.label.1') }}</a>
      </li>
      <li class="nav-item">
        <a id="Case2E2Tab4CYDF-tab" class="nav-link" href="#Case2E2Tab4CYDF" data-toggle="tab">{{ __('case2_exercise2.tab.4.label.2') }}</a>
      </li>
    </ul>

    <!-- Tab panes for Case2E1Tab4 -->
    <div 
      class="tab-content mb-4 rounded"
      style="border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; margin-top: -10px;"
    >
      <div id="Case2E2Tab4CYNA" class="tab-pane active">
        <p class="pt-3 px-3">{{ __('case2_exercise2.tab.4.caption.1') }}</p>
        
        <image-animator
          file="case2Exercise2NwpCynaTephi"
          :fluid="true"
        ></image-animator>
      </div>
      
      <div id="Case2E2Tab4CYDF" class="tab-pane">
        <p class="pt-3 px-3">{{ __('case2_exercise2.tab.4.caption.2') }}</p>
        
        <image-animator
          file="case2Exercise2NwpCydfTephi"
          :fluid="true"
        ></image-animator>
      </div>
    </div>

    <p>
      {{ __('case2_exercise2.paragraph.6') }} 
      <strong>({{ $maxScores->where('name', 'naptt15')->first()->score }} {{ __('case2_exercise1.points') }})</strong>
    </p>

    <qpf-table
      :candidate-id="{{ App\Candidate::whereSession(Cookie::get(env('APP_COOKIE_NAME')))->first()->id }}"
    ></qpf-table>

    <p>
      {{ __('case2_exercise2.paragraph.7') }} 
      <strong>({{ $maxScores->where('name', 'case2ex2')->first()->score }} {{ __('case2_exercise1.points') }})</strong>
    </p>

    <div id="case-two-exercise-two-answer">
      <textbox-answer
        :candidate-id="{{ App\Candidate::whereSession(Cookie::get(env('APP_COOKIE_NAME')))->first()->id }}"
        answer-key="case2ex2"
        endpoint="case-two"
      ></textbox-answer>
    </div>

    <div class="mt-5">
      @include('cases.partials.header')
    </div>

    <a href="{{ env('APP_URL') }}/cases/confirm" class="btn btn-primary btn-lg mt-4">
      {{ __('cases.review-finish') }}
    </a>
  </div>

@endsection