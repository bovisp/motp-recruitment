<?php

namespace App\Http\Middleware;

use Closure;
use App\Candidate;
use App\Classes\TimerCache;
use Illuminate\Support\Facades\Cookie;

class CheckCountdownTimer
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
      $cookie = Cookie::get(env('APP_COOKIE_NAME'));

      if (TimerCache::check($cookie) === false) {
        $candidate = Candidate::whereSession($cookie = Cookie::get(env('APP_COOKIE_NAME')))->first();

        $candidate->update([
          'session' => ''
        ]);

        TimerCache::remove($cookie);

        auth()->logout();

        if (request()->expectsJson()) {
          return response()->json([
            'errors' => [
              'timeup' => [
                'Your evaluation time has expired.'
              ]
            ]
          ], 401);
        }

        return redirect('/login');
      }

      return $next($request);
    }
}
