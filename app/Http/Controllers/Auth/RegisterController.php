<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

//use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Municipio;
use App\Models\Estado;
use Validator;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Session;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('guest');
    }
    */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest')->except('getLogout');
    }

    public function getRegister(){
        $estados = Estado::select('id','nombre')->orderBy('nombre')->get();
        return view("registro")->with('estados',$estados);
    }

    public function postRegister(Request $request){
        
        $v = \Validator::make($request->all(), [
            'nombre' => ['String','min:3', 'max:150','required'],
            'ap_paterno' => ['String','min:3', 'max:150','required'],
            'ap_materno' => ['String','min:3', 'max:150','required'],
            'telefono' => ['Integer','min:7','required'],
            'email'    => 'required|email|unique:users',
            'password'    => ['required', 'min:6'],
            'estado_id' => ['required'],
            'municipio_id' => ['required'],
            'colonia' => ['String','min:3', 'max:150','required'],
            'calle' => ['String','min:3', 'max:150','required'],
            'codigo_postal' => ['Integer','digits:5','required'],
        ]);

 
        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        
        
        $datos = $request->all();
        $pass = Hash::make($datos['password']);
        $datos['password'] = $pass;
        $datos['tipo_usuario'] = 1;
        $datos['status'] = 1;
        User::create($datos);
        $credentials = $request->only('email','password');
        if ($this->auth->attempt($credentials, $request->has('remember'))) {
            $usuarioactual = \Auth::user();
            $user =$usuarioactual;
            //return redirect()->route('users.show',$usuarioactual->id)->with('user',$user);
            return view('bienvenida')->with("user", $user);
        }else{
            return view('iniciarsesion');
        }
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    */
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /*
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    */
}
