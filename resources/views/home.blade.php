@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2>
          Moodle Exercise to Assess a Direct Entry Candidate’s Ability to Apply Theoretical Meteorological Knowledge
        </h2>

        <p>
          This exercise is designed as a simulation, in order to assess your ability to apply theoretical meteorological knowledge. As such, the assessment will be based on your reasoning for forecast solutions rather than the solutions themselves. In your answers below, please provide detailed answers concerning the data you prioritize and reasoning behind your decisions as much as possible. Aim to provide as many pieces of evidence as you can for each forecast decision you make. You will be given 2 hours to complete the exercise. The simulation is made up of two cases comprising three exercises in total, so please plan your time accordingly.
        </p>
      </div>
    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-md-4">
        <form action="/submit-name" method="POST">
          @csrf

          <div class="form-group">
            <label for="firstname">First name</label>
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
            <label for="lastname">Last name</label>
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

          <button type="submit" class="btn btn-primary">Start assessment</button>
        </form>
      </div>
    </div>
  </div>
@endsection