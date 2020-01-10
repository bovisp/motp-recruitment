<?php

namespace App\Http\Middleware;

use Closure;
use App\Candidate;
use Illuminate\Support\Facades\Cookie;

class HasNoCachedName
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
    $candidate = Candidate::whereSession(Cookie::get('motp_recruitement_session'))->first();
    
    if ($candidate) {
      return redirect('/cases/case-one');
    }
    
    return $next($request);
  }
}
