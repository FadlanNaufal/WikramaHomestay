<?php

namespace App\Http\Controllers\UserAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
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
    protected $redirectTo = '/user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:pelanggan')->except('logout');
    }

    public function loginShow(){
    	return view('auth.Pelogin');
    }

     public function loginForm(Request $request)
    {
        $auth = Auth::guard('pelanggan')->attempt(
            ['email'=>$request->email,
            'password'=>$request->password]
        );
        if($auth){
            return redirect()->route('user.dashboard');
        }else{
            return redirect()->route('user.show')->with('success','Credential Not Valid');
        }
    }
}
