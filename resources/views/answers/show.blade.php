@extends('layouts.app')

@section('content')

  <div class="container">
    <h2 class="mb-4">
      Responses for {{ $candidate->firstname }} {{ $candidate->lastname }}
    </h2>

    <h3>Case One</h3>

    {{ $answers->case1 }}

    <h3 class="mt-5">
      Case Two Exercise One - image
    </h3>

    <img src="{{ asset('storage/images/' . $answers->image_url) }}">

    <h3 class="mt-5">
      Case Two Exercise One - answer
    </h3>

    {{ $answers->case2ex1 }}

    <h3 class="mt-5">
      Case Two Exercise Two - table
    </h3>

    @include('answers.partials.c2e2table')

    <h3 class="mt-5">
      Case Two Exercise Two - answer
    </h3>

    {{ $answers->case2ex1 }}
  </div>

@endsection