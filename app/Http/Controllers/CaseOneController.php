<?php

namespace App\Http\Controllers;

use App\Traits\Persistable;
use App\Http\Requests\TextBoxRequest;

class CaseOneController extends Controller
{
    use Persistable;

    public function show()
    {
      return view('cases.case-one');
    }

    public function store(TextBoxRequest $request)
    {
      $this->persist(request()->all(), 'body');

      return response()->json([
        'message' => __('components.textbox.success')
      ], 200);
    }
}
