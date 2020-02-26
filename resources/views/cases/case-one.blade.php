@extends('layouts.app')

@section('content')

  <div class="container my-5">
    @include('cases.partials.header')

    @include('cases.partials.case-one-scores')

    @include('cases.partials.countdown-timer')

    <h2>{{ __('case1.title') }}</h2>

    <div class="row">
      <div class="col-md-6">
        <p>{{ __('case1.paragraph.1') }}</p>
      </div>

      <div class="col-md-6">
        <figure class="figure">
          <img class="figure-img img-fluid" src="https://res.cloudinary.com/tcddmedia/image/upload/v1582747778/moip_direct_entry_assessment/case%201/yyu_yts_ref_map_pdsoff.png" />
          <figcaption class="figure-caption">{{ __('case1.caption.1') }}</figcaption>
        </figure>
      </div>
    </div>

    <p>{{ __('case1.paragraph.2') }}</p>

    <p>{{ __('case1.paragraph.3') }}</p>

    <blockquote class="blockquote" style="border-left-style: solid; border-left-color: #868e96; border-left-width: 3px; padding-left: 1em; margin: 1rem 0;">
      <p class="mb-0" style="color: #868e96; font-style: italic;">{{ __('case1.quote.1') }}</p>
    </blockquote>

    <p>{{ __('case1.paragraph.4') }}</p>

    <!-- Nav tabs for case1Tab1 -->
    <ul id="case1Tab1" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="case1Tab1Fog-tab" class="nav-link active" href="#case1Tab1Fog" data-toggle="tab">{{ __('case1.tab.1.label.1') }}</a>
      </li>
      <li class="nav-item">
        <a id="case1Tab1Night-tab" class="nav-link" href="#case1Tab1Night" data-toggle="tab">{{ __('case1.tab.1.label.2') }}</a>
      </li>
    </ul>

    <!-- Tab panes for case1Tab1 -->
    <div 
      class="tab-content mb-4 rounded" 
      style="margin-top:-10px; border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6;"
    >
      <div id="case1Tab1Fog" class="tab-pane active">
        <p class="pt-3 px-3">{{ __('case1.tab.1.caption.1') }}</p>

        <image-animator
          file="case1GoesFogProduct"
        ></image-animator>
      </div>
      
      <div id="case1Tab1Night" class="tab-pane">
        <p class="pt-3 px-3">{{ __('case1.tab.1.caption.2') }}</p>
        
        <image-animator
          file="case1GoesNightProduct"
        ></image-animator>
      </div>
    </div>

    <p>{{ __('case1.paragraph.5') }}</p>

    <p>{{ __('case1.paragraph.6') }}</p>

    <image-map-one></image-map-one>
    
    <p>{{ __('case1.paragraph.7') }}</p>

    <figure class="figure my-4">
      <img src="https://res.cloudinary.com/tcddmedia/image/upload/v1576785899/moip_direct_entry_assessment/case%201/SOUNDING-MAP-500MB-HEIGHTS-12Z_wbvg6u.gif" alt="" />
      <figcaption class="figure-caption">{{ __('case1.caption.2') }}</figcaption>
    </figure>

    <p>{{ __('case1.paragraph.8') }}</p>

    <!-- Nav tabs for case1Tab2 -->
    <ul id="case1Tab2" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="case1Tab212ZSoundingPickleLake-tab" class="nav-link active" href="#case1Tab212ZSoundingPickleLake" data-toggle="tab">{{ __('case1.tab.2.label.1') }}</a>
      </li>
      <li class="nav-item">
        <a id="case1Tab212ZSoundingBuffalo-tab" class="nav-link" href="#case1Tab212ZSoundingBuffalo" data-toggle="tab">{{ __('case1.tab.2.label.2') }}</a>
      </li>
      <li class="nav-item">
        <a id="case1Tab212ZSoundingManiwaki-tab" class="nav-link" href="#case1Tab212ZSoundingManiwaki" data-toggle="tab">{{ __('case1.tab.2.label.3') }}</a>
      </li>
    </ul>

    <!-- Tab panes for case1Tab2 -->
    <div 
      class="tab-content mb-4 rounded"
      style="border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6;"
    >
      <div id="case1Tab212ZSoundingPickleLake" class="tab-pane active">
        <img style="width: 60%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1575663413/moip_direct_entry_assessment/case%201/UA_soundings/SOUNDING_PICKLE_LAKE_YPL_12Z_migise.png" alt="" />
      </div>
      <div id="case1Tab212ZSoundingBuffalo" class="tab-pane">
        <img style="width: 60%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1575663413/moip_direct_entry_assessment/case%201/UA_soundings/SOUNDING_BUFFALO_KBUF_12Z_acdrdq.png" alt="" />
      </div>
      <div id="case1Tab212ZSoundingManiwaki" class="tab-pane">
        <img style="width: 60%;" src="https://res.cloudinary.com/tcddmedia/image/upload/v1575663413/moip_direct_entry_assessment/case%201/UA_soundings/SOUNDING_MANIWAKI_12Z_ycfv31.png" alt="" />
      </div>
    </div>

    <p>{{ __('case1.paragraph.9') }}</p>

    <figure class="figure my-4">
      <image-animator
        file="case1SurfaceMslpWinds"
        :standalone="true"
      ></image-animator>

      <figcaption class="figure-caption">{{ __('case1.caption.3') }}</figcaption>
    </figure>

    <!-- Nav tabs for case1Tab3 -->
    <ul id="case1Tab3" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="case1Tab3YTS-tab" class="nav-link active" href="#case1Tab3YTS" data-toggle="tab">{{ __('case1.tab.3.label.1') }}</a>
      </li>
      <li class="nav-item">
        <a id="case1Tab3YYU-tab" class="nav-link" href="#case1Tab3YYU" data-toggle="tab">{{ __('case1.tab.3.label.2') }}</a>
      </li>
    </ul>

    <!-- Tab panes for case1Tab3 -->
    <div 
      class="tab-content mb-4 rounded"
      style="border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6;"
    >
      <div id="case1Tab3YTS" class="tab-pane active">
        <image-animator
          file="case1CytsNwpSoundings"
          :fluid="true"
        ></image-animator>
      </div>
      <div id="case1Tab3YYU" class="tab-pane">
        <image-animator
          file="case1CyyuNwpSoundings"
        ></image-animator>
      </div>
    </div>

    <p>{{ __('case1.paragraph.10') }}</p>

    <p>{{ __('case1.paragraph.11') }}</p>

    <!-- Nav tabs for case1Tab4 -->
    <ul id="case1Tab4" class="nav nav-tabs mt-4">
      <li class="nav-item">
        <a id="case1Tab4YTSFog-tab" class="nav-link active" href="#case1Tab4YTSFog" data-toggle="tab">{{ __('case1.tab.4.label.1') }}</a>
      </li>
      <li class="nav-item">
        <a id="case1Tab4YYUFog-tab" class="nav-link" href="#case1Tab4YYUFog" data-toggle="tab">{{ __('case1.tab.4.label.2') }}</a>
      </li>
    </ul>

    <!-- Tab panes for case1Tab4 -->
    <div 
      class="tab-content mb-4 rounded"
      style="border-left: 1px solid #dee2e6; border-right: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6; margin-top: -10px;"
    >
      <div id="case1Tab4YTSFog" class="tab-pane active">
        <p class="pt-3 px-3">{{ __('case1.tab.4.caption.1') }}</p>
        <img class="w-75" src="https://res.cloudinary.com/tcddmedia/image/upload/v1581623120/moip_direct_entry_assessment/case%201/YTS-FOG-CLIMATOLOGY_qbghg8.png" alt="" />
      </div>
      
      <div id="case1Tab4YYUFog" class="tab-pane">
        <p class="pt-3 px-3">{{ __('case1.tab.4.caption.2') }}</p>
        <img class="w-75" src="https://res.cloudinary.com/tcddmedia/image/upload/v1581623120/moip_direct_entry_assessment/case%201/YYU-FOG-CLIMATOLOGY_k39dfm.png" alt="" />
      </div>
    </div>

    <p>{{ __('case1.paragraph.12') }}</p>

    <blockquote class="blockquote" style="border-left-style: solid; border-left-color: #868e96; border-left-width: 3px; padding-left: 1em; margin: 1rem 0;">
      <p class="mb-0" style="color: #868e96; font-style: italic;">{{ __('case1.quote.2') }}</p>
    </blockquote>

    <p>{{ __('case1.paragraph.13') }} <strong>({{ $maxScores->where('name', 'case1')->first()->score }} {{ __('case1.points') }})</strong></p>

    <div id="case-one-answer">
      <textbox-answer
        :candidate-id="{{ App\Candidate::whereSession(Cookie::get(env('APP_COOKIE_NAME')))->first()->id }}"
        answer-key="case1"
        endpoint="case-one"
      ></textbox-answer>
    </div>

    <div class="mt-5">
      @include('cases.partials.header')
    </div>
  </div>

@endsection