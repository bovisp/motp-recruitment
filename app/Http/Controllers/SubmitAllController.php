<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Candidate;
use Illuminate\Http\Request;
use App\Mail\AssessmentCompleted;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

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

    $candidate = Candidate::whereSession(Cookie::get('motp_recruitement_session'))->first();

    $candidate->update([
      'session' => ''
    ]);

    Mail::to('paul.bovis@canada.ca')
      ->send(new AssessmentCompleted($candidate));

    auth()->logout();
  }

  protected function assessmentComplete() {
    $candidate_id = Candidate::whereSession(Cookie::get('motp_recruitement_session'))->first()->id;

    $answer = Answer::where('candidate_id', $candidate_id)->first();

    return $answer !== null &&
           $answer->naptt15 !== null &&
           $answer->case1 !== null && 
           $answer->case2ex1 !== null && 
           $answer->case2ex2 !== null && 
           $answer->image_url !== null;
  }
}
