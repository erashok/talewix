<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Session;


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
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function authenticated(){
        if (Auth::user()->role_as == '1')  //1=Admin
        {
            return redirect('admin/dashboard')->with('status','welcome to admin dashboard');
        }
        else if (Auth::user()->role_as == '0'){
            return redirect('/home')->with('status','Logged in Successfull');

        }
        else{
             return redirect('/');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function getLogout(){
        if (Auth::user()->role_as == '1')  //1=Admin
        {
            Auth::logout();
            //Session::flush();
            return redirect('/')->with('status','welcome to admin dashboard');
        }
        else if (Auth::user()->role_as == '0'){
            Auth::logout();
           // Session::flush();
            return redirect('/home')->with('status','Logged in Successfull');

        }
        else{
             return redirect('/');
        }
    }
}
