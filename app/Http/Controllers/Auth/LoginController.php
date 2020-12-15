<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\TwoFactorCodeNotification;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;

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

    protected function authenticated(Request $request, $user)
    {
        if ($user->two_factor) {
            $user->generateTwoFactorCode();
            $user->notify(new TwoFactorCodeNotification());
        }
    }
    public function facebookLogin()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        dd($user->getName().' '.$user->getEmail());
        $user->getId();
        $user->getNickname();
        $user->getName();
        $user->getEmail();
        $user->getAvatar();
    }
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback()
    {
        
        $user = Socialite::driver('google')->user();

        dd($user->getName().' '.$user->getEmail());
    }
    public function githubLogin()
    {
        return Socialite::driver('github')->redirect();
    }
    public function githubCallback()
    {
        dd('Hello');
        $user = Socialite::driver('github')->user();

        // $user->token;
    }

}