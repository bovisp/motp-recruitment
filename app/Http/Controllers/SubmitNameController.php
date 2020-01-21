<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests\SubmitNameRequest;

class SubmitNameController extends Controller
{
    public function store(SubmitNameRequest $request)
    {
      $candidate = Candidate::create(
        array_merge(
          request()->only('firstname', 'lastname'),
          ['session' => Cookie::get(env('APP_COOKIE_NAME'))]
        )
      );
      
      return redirect('/cases/case-one');
    }
}
