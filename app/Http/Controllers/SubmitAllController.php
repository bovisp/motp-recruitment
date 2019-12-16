<?php

namespace App\Http\Controllers;

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
}
