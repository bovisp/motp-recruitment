@extends('layouts.app')

@section('content')

  <div class="container my-5">

    @include('cases.partials.countdown-timer')

    <div class="row justify-content-center">
      <div class="col-md-8">
        <confirm-page 
          base-url="{{ env('APP_URL') }}"
          :candidate-id="{{ App\Candidate::whereSession(Cookie::get(env('APP_COOKIE_NAME')))->first()->id }}"
        ></confirm-page>
      </div>
    </div>
  </div>

@endsection