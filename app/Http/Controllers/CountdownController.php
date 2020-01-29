<?php

namespace App\Http\Controllers;

use App\Classes\TimerCache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CountdownController extends Controller
{
    public function index() {
      return TimerCache::check($cookie = Cookie::get(env('APP_COOKIE_NAME')));
    }
}
