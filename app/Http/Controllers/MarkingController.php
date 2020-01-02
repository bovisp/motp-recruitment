<?php

namespace App\Http\Controllers;

use App\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MarkingController extends Controller
{
  public function show(Candidate $candidate)
  {
    dd($candidate);
  }
}
