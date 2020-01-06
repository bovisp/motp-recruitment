@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="d-flex">
      <a href="{{ env('APP_URL') . '/answers' }}" class="ml-auto mb-4">
        Back to candidate list
      </a>
    </div>

    <h2 class="mb-4">
      Responses for {{ $candidate->firstname }} {{ $candidate->lastname }}
    </h2>

    <h3>Case One</h3>

    {{ $answers->case1 }}

    <score-item
      :candidate="{{ json_encode($candidate) }}"
      :answers="{{ json_encode($answers) }}"
      :scores="{{ json_encode($candidate->scores) }}"
      type="case1"
    ></score-item>

    <h3 class="mt-5">
      Case Two Exercise One - image
    </h3>

    <img src="{{ asset('storage/images/' . $answers->image_url) }}">

    <score-item
      :candidate="{{ json_encode($candidate) }}"
      :answers="{{ json_encode($answers) }}"
      :scores="{{ json_encode($candidate->scores) }}"
      type="image_url"
    ></score-item>

    <h3 class="mt-5">
      Case Two Exercise One - answer
    </h3>

    {{ $answers->case2ex1 }}

    <score-item
      :candidate="{{ json_encode($candidate) }}"
      :answers="{{ json_encode($answers) }}"
      :scores="{{ json_encode($candidate->scores) }}"
      type="case2ex1"
    ></score-item>

    <h3 class="mt-5">
      Case Two Exercise Two - table
    </h3>

    @include('answers.partials.c2e2table')

    <score-item
      :candidate="{{ json_encode($candidate) }}"
      :answers="{{ json_encode($answers) }}"
      :scores="{{ json_encode($candidate->scores) }}"
      type="naptt15"
    ></score-item>

    <h3 class="mt-5">
      Case Two Exercise Two - answer
    </h3>

    {{ $answers->case2ex2 }}

    <score-item
      :candidate="{{ json_encode($candidate) }}"
      :answers="{{ json_encode($answers) }}"
      :scores="{{ json_encode($candidate->scores) }}"
      type="case2ex2"
    ></score-item>
  </div>

@endsection