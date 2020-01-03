<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Support\Facades\Cache;


class CaseOneController extends Controller
{
    public function show()
    {
      return view('cases/case-one');
    }

    public function store()
    {
      request()->validate([
        'body' => 'required'
      ]);

      $candidate_id = (int) Cache::get('candidateid');
      
      if (Answer::where('candidate_id', $candidate_id)->first() === null) {
        $answer = Answer::make();

        $answer[request('key')] = request('body');

        $answer->candidate_id = (int) Cache::get('candidateid');

        $answer->save();
      } else {
        $answer = Answer::where('candidate_id', $candidate_id)->first();

        $answer[request('key')] = request('body');

        $answer->save();
      }
    }

    public function getCase1Answer()
    {
      $candidate_id = (int) Cache::get('candidateid');

      return Answer::where('candidate_id', $candidate_id)->first();
    }
}
