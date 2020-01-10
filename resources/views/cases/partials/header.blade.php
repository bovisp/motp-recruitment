@if (App\Candidate::whereSession(Cookie::get('motp_recruitement_session'))->first())

  <div class="d-flex align-items-center w-100">
    <p>
      <strong>Candidate name: </strong>
      {{ App\Candidate::whereSession(Cookie::get('motp_recruitement_session'))->first()->firstname }} 
      {{ App\Candidate::whereSession(Cookie::get('motp_recruitement_session'))->first()->lastname }}
    </p>

    <p class="ml-auto">
      <a href="{{ env('APP_URL') }}/cases/case-{{ Str::contains(url()->current(), 'case-one') ? 'two': 'one' }}">
        Go to Case #{{ Str::contains(url()->current(), 'case-one') ? 2 : 1 }}
      </a>
    </p>
  </div>

@endif