<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\Classes\TimerCache;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests\SubmitNameRequest;

class SubmitNameController extends Controller
{
    public function store(SubmitNameRequest $request)
    {
      $candidate = Candidate::create(
        array_merge(
          request()->only('firstname', 'lastname'),
          ['session' => $cookie = Cookie::get(env('APP_COOKIE_NAME'))]
        )
      );

      TimerCache::set($cookie);
      
      return redirect('/cases/case-one');
    }
}
