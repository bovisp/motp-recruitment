@component('mail::message')
# {{ __('email.assessment-completed') }}

{{ $candidate->firstname }} {{ $candidate->lastname }} {{ __('email.paragraph') }}

@component('mail::button', ['url' => env('APP_URL') . '/answers/' . $candidate->id ])

@endcomponent
{{ __('email.button') }}
@endcomponent