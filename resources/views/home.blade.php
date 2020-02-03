@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2>
          {{ __('submitname.title') }}
        </h2>

        <p>
          {{ __('submitname.paragraph') }}
        </p>
      </div>
    </div>

    @include('score-header')

    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
      <form action="{{ env('APP_URL') }}/submit-name" method="POST">
          @csrf

          <div class="form-group">
            <label for="firstname">{{ __('submitname.firstname') }}</label>
            <input 
              type="text" 
              class="form-control @error('firstname') is-invalid @enderror" 
              id="firstname" 
              name="firstname"
            >

            @error('firstname')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="lastname">{{ __('submitname.lastname') }}</label>
            <input 
              type="text" 
              class="form-control @error('lastname') is-invalid @enderror" 
              id="lastname" 
              name="lastname"
            >

            @error('lastname')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">{{ __('submitname.start-assessment') }}</button>
        </form>
      </div>
    </div>
  </div>
@endsection