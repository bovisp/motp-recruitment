<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Support\Facades\Cookie;

class SubmitNameController extends Controller
{
    public function store()
    {
      request()->validate([
        'firstname' => 'required',
        'lastname' => 'required'
      ]);

      $candidate = Candidate::create(
        array_merge(
          request()->only('firstname', 'lastname'),
          ['session' => Cookie::get(env('APP_COOKIE_NAME'))]
        )
      );
      
      return redirect('/cases/case-one');
    }
}
