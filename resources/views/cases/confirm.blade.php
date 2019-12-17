@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <p>
          Are ya sure you wanna finish?
        </p> 

        <form action="{{ env('APP_URL') }}/cases/submit-all" method="POST">
          @csrf
          
          <button class="btn btn-primary">
            Yo!
          </button>
        </form>
      </div>
    </div>
  </div>

@endsection