<?php

namespace App\Http\Controllers\Auth;

use App\Candidate;
use App\Classes\TimerCache;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
      $candidate = Candidate::whereSession($cookie = Cookie::get(env('APP_COOKIE_NAME')))->first();

      if ($candidate) {
        $candidate->update([
          'session' => ''
        ]);

        TimerCache::remove($cookie);
      }
      
      $this->guard()->logout();

      $request->session()->invalidate();

      return $this->loggedOut($request) ?: redirect('/');
    }
}
