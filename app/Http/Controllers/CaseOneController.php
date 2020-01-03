<?php

namespace App\Http\Controllers;

use App\Traits\Persistable;

class CaseOneController extends Controller
{
    use Persistable;

    public function show()
    {
      return view('cases.case-one');
    }

    public function store()
    {
      request()->validate([
        'body' => 'required'
      ]);

      $this->persist(request()->all(), 'body');
    }
}
