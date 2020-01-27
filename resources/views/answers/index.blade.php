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
              </a>
            </li>

            <table class="table">
              <tbody>
                <tr>
                  <th>Question</th>
                  <th>Score</th>
                </tr>

                <tr>
                  <td>Case One</td>
                  <td>{{ $candidate->scores->where('type', 'case1')->first()->score ?? 'No answer' }}</td>
                </tr>

                <tr>
                  <td>Case Two Exercise One image</td>
                  <td>{{ $candidate->scores->where('type', 'image_url')->first()->score ?? 'No answer' }}</td>
                </tr>

                <tr>
                  <td>Case Two Exercise One answer</td>
                  <td>{{ $candidate->scores->where('type', 'case2ex1')->first()->score ?? 'No answer' }}</td>
                </tr>

                <tr>
                  <td>Case Two Exercise Two table</td>
                  <td>{{ $candidate->scores->where('type', 'naptt15')->first()->score ?? 'No answer' }}</td>
                </tr>

                <tr>
                  <td>Case Two Exercise Two answer</td>
                  <td>{{ $candidate->scores->where('type', 'case2ex2')->first()->score ?? 'No answer' }}</td>
                </tr>
              </tbody>
            </table>

          @endforeach

        </ol>
      </div>
    </div>
  </div>

@endsection