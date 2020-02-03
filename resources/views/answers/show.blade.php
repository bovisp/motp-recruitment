@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="d-flex">
      <a href="{{ env('APP_URL') . '/answers' }}" class="ml-auto mb-4">
        {{ __('answers.back-to-candidates') }}
      </a>
    </div>

    <h2 class="mb-4">
      {{ __('answers.responses-for') }} {{ $candidate->firstname }} {{ $candidate->lastname }}
    </h2>

    <h3>{{ __('case1.title') }}</h3>

    {{ $answers->case1 ?? '' }}

    <score-item
      :candidate="{{ json_encode($candidate) }}"
      :answers="{{ json_encode($answers) }}"
      :scores="{{ json_encode($candidate->scores) }}"
      :max-scores="{{ json_encode($maxScores) }}"
      type="case1"
    ></score-item>

    <h3 class="mt-5">
      {{ __('components.confirmation.case-two-exercise-one-image') }}
    </h3>

    @if(optional($answers)->image_url !== null)
    <img src="{{ asset('storage/images/' . $answers->image_url) }}">
    @else
      <div class="alert alert-info">
        {{ __('answers.question-not-answered') }}
      </div>
    @endif
    
    <score-item
      :candidate="{{ json_encode($candidate) }}"
      :answers="{{ json_encode($answers) }}"
      :scores="{{ json_encode($candidate->scores) }}"
      :max-scores="{{ json_encode($maxScores) }}"
      type="image_url"
    ></score-item>

    <h3 class="mt-5">
      {{ __('components.confirmation.case-two-exercise-one-answer') }}
    </h3>

    {{ $answers->case2ex1 ?? '' }}

    <score-item
      :candidate="{{ json_encode($candidate) }}"
      :answers="{{ json_encode($answers) }}"
      :scores="{{ json_encode($candidate->scores) }}"
      :max-scores="{{ json_encode($maxScores) }}"
      type="case2ex1"
    ></score-item>

    <h3 class="mt-5">
      {{ __('components.confirmation.case-two-exercise-two-table') }}
    </h3>

    @if(optional($answers)->naptt15 !== null)
      @include('answers.partials.c2e2table')
    @else
      <div class="alert alert-info">
        {{ __('answers.question-not-answered') }}
      </div>
    @endif

    <score-item
      :candidate="{{ json_encode($candidate) }}"
      :answers="{{ json_encode($answers) }}"
      :scores="{{ json_encode($candidate->scores) }}"
      :max-scores="{{ json_encode($maxScores) }}"
      type="naptt15"
    ></score-item>

    <h3 class="mt-5">
      {{ __('components.confirmation.case-two-exercise-two-answer') }}
    </h3>

    {{ $answers->case2ex2 ?? '' }}

    <score-item
      :candidate="{{ json_encode($candidate) }}"
      :answers="{{ json_encode($answers) }}"
      :scores="{{ json_encode($candidate->scores) }}"
      :max-scores="{{ json_encode($maxScores) }}"
      type="case2ex2"
    ></score-item>
  </div>

@endsection