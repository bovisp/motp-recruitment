<?php

namespace App\Http\Middleware;

use Closure;
use App\Candidate;
use Illuminate\Support\Facades\Cookie;

class HasCachedName
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
	  $candidate = Candidate::whereSession(Cookie::get(env('APP_COOKIE_NAME')))->first();

    if (!$candidate) {
      return redirect('/home');
    }
    
    return $next($request);
  }
}
