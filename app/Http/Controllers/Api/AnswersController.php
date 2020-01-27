<?php

namespace App\Http\Controllers\Api;

use App\Answer;
use App\Candidate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class AnswersController extends Controller
{
  public function show()
  {
    $candidate = Candidate::whereSession(Cookie::get(env('APP_COOKIE_NAME')))->first();

    return Answer::where(
      'candidate_id', $candidate->id
    )->first();
  }
}
