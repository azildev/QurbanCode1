<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class BeforeMiddleware
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
        if (Session('user')) {
            // user value cannot be found in session
            return redirect('/dashboard');
        }
        return $next($request);
 
        // if ($request->session()->has('user')) {
        //     // user value cannot be found in session
        //     return redirect('/dashboard');
        // }
        // return $next($request);
    }
}
