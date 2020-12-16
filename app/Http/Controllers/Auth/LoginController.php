<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest')->except('getLogout');
    }

    public function getlogin(){
        return view("login");

    }

    public function postlogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
        ]);
        $use = $request->email;
        $pass = $request->pass;
        
        $credentials = $request->only('email','password');
        if ($this->auth->attempt($credentials, $request->has('remember'))) {
            $usuarioactual = \Auth::user();
            $user =$usuarioactual;
            //return redirect()->route('users.show',$usuarioactual->id)->with('user',$user);
            return view('inicio')->with("user", $user);
        }
        
        return view('mensaje.error_login');
    }

    public function getLogout(){
        $this->auth->logout();
        Session::flush();
        return redirect("login");
    }
    
    
}
