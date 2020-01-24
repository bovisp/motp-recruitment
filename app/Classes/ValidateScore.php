<?php

namespace App\Classes;

use App\Mark;
use Illuminate\Support\Arr;

class ValidateScore
{
  protected $maxMarks;

  public function __construct()
  {
    $this->maxMarks = Mark::all();
  }

  public function check()
  {
    $score = $this->maxMarks
      ->where('name', request('marks')['type'])
      ->first()
      ->score;

    return (int) request('marks')['score'] <= $score;
  }
}