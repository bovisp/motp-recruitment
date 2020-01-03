<?php

namespace App\Http\Controllers\Api;

use App\Answer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class AnswersController extends Controller
{
  public function show()
  {
    return Answer::where(
      'candidate_id', (int) Cache::get('candidateid')
    )->first();
  }
}
