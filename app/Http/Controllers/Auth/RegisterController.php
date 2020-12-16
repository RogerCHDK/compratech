<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        return view("registro");
    }

    public function postRegister(Request $request){
        
        $v = \Validator::make($request->all(), [
            
            'nombre' => ['String','min:3', 'max:150','required'],
            'ap_pat' => ['String','min:3', 'max:150','required'],
            'ap_mat' => ['String','min:3', 'max:150','required'],
            'sexo' => ['required'],
            'telefono' => ['Integer','min:7','required'],
            'fecha_nac' => ['date','required'],
            'email'    => 'required|email|unique:users',
            'password'    => ['required', 'min:6'],
            'entidad_id' => ['required'],
            'municipio_id' => ['required'],
            'colonia' => ['String','min:3', 'max:150','required'],
            'calle' => ['String','min:3', 'max:150','required'],
            'foto_ruta' => ['required','image'],
            'cp' => ['Integer','digits:5','required'],
            'tipo_usuario_id' => ['required'],
            /*
            
            'phone_number' => 'required',
            'type' => 'required|in:empresa,particular',
            'register' => 'required_if:type,empresa'
            */
        ]);

 
        if ($v->fails())
        {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }
        
        /*
        $validate = $this->validate($request, [
            'nombre' => ['String', 'max:255','required'],
            'ap_pat' => ['String', 'max:255','required'],
            'ap_mat' => ['String', 'max:255','required'],
            'sexo' => ['numeric','required'],
            'telefono' => ['numeric','required'],
        ]);
        */
        $datos = $request->all();
        $rutaarchivos ="../storage/usuarios/";
        $hora =date("h:i:s");
        $fecha = date("d-m-Y");
        //$prefijo = $fecha."_".$hora;
        $archivo = $request->file("foto_ruta");
        //$input = array('file' => $archivo);
        //$reglas = array('file' => 'required|mimes:jpeg,png,gif|max:50000');
        //$ruta = $prefijo.'_'.$archivo->getClientOriginalName();
        $ruta = time().$archivo->getClientOriginalName();
        $r1 = Storage::disk('usuarios')->put($ruta, \File::get($archivo));
        if ($r1) {
            $datos['foto_ruta'] =$ruta;
            $pass = Hash::make($datos['password']);
        $datos['password'] = $pass;
        Users::create($datos);


        
        $credentials = $request->only('email','password');
        if ($this->auth->attempt($credentials, $request->has('remember'))) {
            $usuarioactual = \Auth::user();
            $user =$usuarioactual;
            //return redirect()->route('users.show',$usuarioactual->id)->with('user',$user);
            return view('inicio')->with("user", $user);
        }else{
            return view('login');
        }

        
        } else {
            return view("mensaje.error_acceso")->with('mjs','No se pudo ingresar');
        }
        
        
        //return redirect('/users');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
