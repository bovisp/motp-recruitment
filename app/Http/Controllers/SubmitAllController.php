<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SubmitAllController extends Controller
{
  public function store()
  {
    Cache::forget('candidate');
    
    Cache::forget('candidateid');

    auth()->logout();

    return redirect('/home');
  }

  public function index()
  {
    $candidate_id = (int) Cache::get('candidateid');

    return Answer::where('candidate_id', $candidate_id)->first();
  }
}
