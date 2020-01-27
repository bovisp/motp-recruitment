<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
      if(auth()->user() === null) {
        abort(401);
      }

      if(auth()->user()->email !== env('APP_ADMIN')) {
        abort(403);
      }

      return $next($request);
    }
}
