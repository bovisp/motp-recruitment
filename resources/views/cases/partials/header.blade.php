@if (Cache::has('candidate'))

  <div class="d-flex align-items-center w-100">
    <p>
      <strong>Candidate name: </strong>
      {{ Cache::get('candidate') }}
    </p>

    <p class="ml-auto">
      <a href="{{ env('APP_URL') }}/cases/case-{{ Str::contains(url()->current(), 'case-one') ? 'two': 'one' }}">
        Go to Case #{{ Str::contains(url()->current(), 'case-one') ? 2 : 1 }}
      </a>
    </p>
  </div>

@endif