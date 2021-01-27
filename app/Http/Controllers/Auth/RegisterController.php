<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;




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
    protected $redirectTo = '/home2';
    protected $email = 'email';
    protected $username = 'username';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');


                               
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
            // 'name' => ['required', 'string', 'max:255'],
             'username' => ['required', 'string', 'unique:users'],
            
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'akses'=> ['required'],
            'id_auditor'=> ['unique:users'],
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
        
// <script>
//         $id : $('auditor').val();
// </script>
        return User::create([
            'name' => $data['name'],
             'username' => $data['username'],
            
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'akses' => $data['akses'],

            'id_auditor' => $data['auditor'],
            'id_auditee' => $data['auditee'],
            'pass' => $data['password_confirmation']
        ]);
        
    }

    protected function selesaikanregistrasi()
    {

    }

}


// Illuminate/Routing/Router      mematikan route register >> cari fungsi auth
