@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2>
          Candidates
        </h2>

        <ol>

          @foreach($candidates as $candidate)

            <li>
              <a href="{{ $candidate->path() }}">
                {{ $candidate->firstname }} {{ $candidate->lastname }}
              </a>
            </li>

          @endforeach

        </ol>
      </div>
    </div>
  </div>

@endsection