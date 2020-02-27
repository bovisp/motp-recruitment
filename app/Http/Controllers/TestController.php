<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
  public function index()
  {
    return view('test');
  }

  public function store()
  {
    DB::table('tests')->truncate();

    Test::create(request()->all());

    return response()->json([
      'message' => 'Success man!!'
    ]);
  }

  public function show()
  {
    return Test::first()->body ?? '';
  }
}
