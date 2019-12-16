<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Support\Facades\Cache;

class SubmitNameController extends Controller
{
    public function store()
    {
      request()->validate([
        'firstname' => 'required',
        'lastname' => 'required'
      ]);

      $candidate = Candidate::create(
        request()->only('firstname', 'lastname')
      );

      Cache::forever(
        'candidate', "{$candidate->firstname} {$candidate->lastname}"
      );

      Cache::forever(
        'candidateid', $candidate->id
      );

      return redirect('/cases/case-one');
    }
}
