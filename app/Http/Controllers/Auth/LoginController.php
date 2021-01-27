<?php

namespace App\Http\Controllers\Auth;
use Auth;

use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/';
    protected $username = 'username';

   
    protected function redirectTo()
    {
        if (auth()->user()->akses=='ADMIN' )
        {
            return '/admin/datapegawai';
        }

        elseif (auth()->user()->akses=='KEPALA' )
        {
            return '/kepala';
        }

        elseif (auth()->user()->akses=='AUDITOR' )
        {
            return '/auditor/daftarpertanyaan';
        }

        elseif (auth()->user()->akses=='AUDITEE' )
         {
            return '/auditee/lks-tindakan';
         }   
       
    }



    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
