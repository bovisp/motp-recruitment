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
          ['session' => Cookie::get('motp_recruitement_session')]
        )
      );
      
      return redirect('/cases/case-one');
    }
}
