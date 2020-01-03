<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Candidate;

class MarkingController extends Controller
{
  public function show(Candidate $candidate)
  {
    $answers = Answer::whereCandidateId($candidate->id)->first();

    return view('answers.show', compact('answers', 'candidate'));
  }
}
