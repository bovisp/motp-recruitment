<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Candidate;
use Illuminate\Http\Request;
use App\Mail\AssessmentCompleted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

class SubmitAllController extends Controller
{
  public function index()
  {
    return view('cases.confirm');
  }

  public function store()
  {
    if ($this->assessmentComplete() === false) {
      return response()->json([
        'errors' => [
          'incomplete' => [
            'You have not completed some of the exercises. Please complete these before finishing the assessment.'
          ]
        ]
      ], 422);
    }

    $candidate_id = (int) Cache::get('candidateid');

    $candidate = Candidate::find($candidate_id);

    Mail::to('paul.bovis@canada.ca')
      ->send(new AssessmentCompleted($candidate));

    Cache::forget('candidate');
    
    Cache::forget('candidateid');

    auth()->logout();
  }

  protected function assessmentComplete() {
    $candidate_id = (int) Cache::get('candidateid');

    $answer = Answer::where('candidate_id', $candidate_id)->first();

    return $answer !== null &&
           $answer->naptt15 !== null &&
           $answer->case1 !== null && 
           $answer->case2ex1 !== null && 
           $answer->case2ex2 !== null && 
           $answer->image_url !== null;
  }
}
