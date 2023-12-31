<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;


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
    
    }

    protected function authenticated(Request $request) {

      $this->middleware('guest')->except('logout');
        if(Auth::check()) {
            if (Auth::user()->role == '1') {
                return redirect()->route('staff.staff_profile.edit', ['id' => Auth::user()->id ]);
            }
        }        
    }
    public function showLoginForm() {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
