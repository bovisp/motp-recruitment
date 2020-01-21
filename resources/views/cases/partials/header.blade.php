@if (App\Candidate::whereSession(Cookie::get(env('APP_COOKIE_NAME')))->first())

  <div class="d-flex align-items-center w-100">
    <p>
      <strong>{{ __('cases.header.candidate-name') }} </strong>
      {{ App\Candidate::whereSession(Cookie::get(env('APP_COOKIE_NAME')))->first()->firstname }} 
      {{ App\Candidate::whereSession(Cookie::get(env('APP_COOKIE_NAME')))->first()->lastname }}
    </p>

    <p class="ml-auto">
      <a href="{{ env('APP_URL') }}/cases/case-{{ Str::contains(url()->current(), 'case-one') ? 'two': 'one' }}">
        {{ __('cases.header.go-to-case') }} #{{ Str::contains(url()->current(), 'case-one') ? 2 : 1 }}
      </a>
    </p>
  </div>

@endif