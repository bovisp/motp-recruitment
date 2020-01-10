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

$cookie = Cookie::get('motp_recruitment_session');
//dd($cookie);

      $candidate = Candidate::create(
        array_merge(
          request()->only('firstname', 'lastname'),
          ['session' => $cookie]
        )
      );
      
      return redirect('/cases/case-one');
    }
}
