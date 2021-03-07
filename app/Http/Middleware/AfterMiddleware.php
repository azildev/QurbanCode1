<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AfterMiddleware
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
        $user  = User::where(['email' => $request->input('email')])->first();
        if($request->session()->has('name')){
           
            return redirect('/dashboard');
        }
        else{
            return $next($request);
        }
        // if ($user > 0) {
        //     return redirect()->route('dashboard');
        // }
        // return $next($request);
    }
}
