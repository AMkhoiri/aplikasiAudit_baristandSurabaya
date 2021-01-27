<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

use App\User;

class mymiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

       
     
    // $akses= $this->user->akses;
    //     // $user = Auth::user()->akses;
    //     if($user=='ADMIN') 
    //     {
    //    return $next($request);
    //     }

    //     abort(403);
         return $next($request);
     }
}
