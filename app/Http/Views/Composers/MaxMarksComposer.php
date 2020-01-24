<?php

namespace App\Http\Views\Composers;

use App\Mark;
use Illuminate\View\View;

class MaxMarksComposer
{
  public function compose(View $view)
  {
    $view->with('maxScores', Mark::all());
  }
}