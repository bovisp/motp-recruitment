@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2>
          {{ __('answers.candidates') }}
        </h2>

        <ol>

          @foreach($candidates as $candidate)

            <li class="mb-4">
              <a href="{{ $candidate->path() }}">
                {{ $candidate->firstname }} {{ $candidate->lastname }}
              </a> - {{ __('answers.took-exam-on') }} {{ $candidate->created_at->isoFormat('MMMM Do YYYY') }}
            </li>

            <table class="table">
              <tbody>
                <tr>
                  <th>{{ __('answers.question') }}</th>
                  <th>{{ __('answers.score') }}</th>
                </tr>

                <tr>
                  <td>{{ __('answers.case-one') }}</td>
                  <td>{{ $candidate->scores->where('type', 'case1')->first()->score ?? 'No answer' }}</td>
                </tr>

                <tr>
                  <td>{{ __('answers.case-two-exercise-one-image') }}</td>
                  <td>{{ $candidate->scores->where('type', 'image_url')->first()->score ?? 'No answer' }}</td>
                </tr>

                <tr>
                  <td>{{ __('answers.case-two-exercise-one-answer') }}</td>
                  <td>{{ $candidate->scores->where('type', 'case2ex1')->first()->score ?? 'No answer' }}</td>
                </tr>

                <tr>
                  <td>{{ __('answers.case-two-exercise-two-table') }}</td>
                  <td>{{ $candidate->scores->where('type', 'naptt15')->first()->score ?? 'No answer' }}</td>
                </tr>

                <tr>
                  <td>{{ __('answers.case-two-exercise-two-answer') }}</td>
                  <td>{{ $candidate->scores->where('type', 'case2ex2')->first()->score ?? 'No answer' }}</td>
                </tr>

                <tr>
                  <td class="text-right">Total</td>
                  <td>{{ $candidate->scores->sum('score') }}</td>
                </tr>
              </tbody>
            </table>

          @endforeach

        </ol>
      </div>
    </div>
  </div>

@endsection