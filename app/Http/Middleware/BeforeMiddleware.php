<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class BeforeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // $email      = $request->input('email');
        // $password   = $request->input('password');
        $user  = User::where(['email' => $request->input('email')])->first();
        // if ($user > 1) {
        //     return redirect('/');
        // }
        // return $next($request);

        if(!$request->session()->has('name')){
           
            return redirect('/');
        }
        else{
            return $next($request);
        }
    }
}
