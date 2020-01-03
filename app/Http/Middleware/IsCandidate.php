<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;

class IsCandidate
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

      if(auth()->user()->email === env('APP_ADMIN')) {
        return $next($request);
      }

      if($this->candidateIdFromRequest() !== $this->activeCandidate()) {
        abort(403);
      }

      return $next($request);
    }

    protected function candidateIdFromRequest()
    {
      preg_match_all("/\/answers\/([\d]+)/",request()->url(),$matches);

      return (int) $matches[1][0];
    }

    protected function activeCandidate()
    {
      return (int) Cache::get('candidateid');
    }
}
