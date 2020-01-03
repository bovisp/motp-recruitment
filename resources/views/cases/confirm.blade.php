@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <confirm-page 
          base-url="{{ env('APP_URL') }}"
          :candidate-id="{{ (int) Cache::get('candidateid') }}"
        ></confirm-page>
      </div>
    </div>
  </div>

@endsection