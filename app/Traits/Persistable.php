<?php

namespace App\Traits;

use App\Answer;
use App\Candidate;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;

trait Persistable
{
  protected function persist($request, $key)
  {
    $answer = $this->answer();

    $answer[request('key')] = $request[$key];

    $answer->candidate_id = $this->candidate()->id;

    $answer->save();
  }

  protected function answer()
  {
    return Answer::whereCandidateId($this->candidate()->id)->first() ?? Answer::make();
  }

  protected function candidate()
  {
    $candidate = Candidate::whereSession(Cookie::get('motp_recruitement_session'))->first();

    return Candidate::find($candidate->id);
  }
}