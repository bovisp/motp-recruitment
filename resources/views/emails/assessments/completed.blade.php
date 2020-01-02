@component('mail::message')
# Assessment completed

{{ $candidate->firstname }} {{ $candidate->lastname }} has completed their online assessment.

@component('mail::button', ['url' => env('APP_URL') . '/answers/' . $candidate->id ])
View assessment answers
@endcomponent

@endcomponent