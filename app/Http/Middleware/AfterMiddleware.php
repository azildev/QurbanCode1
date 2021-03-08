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
    public function handle($request, Closure $next)
    {
        
        $response = $next($request);
        
        if (!Session('user')) {
            // user value cannot be found in session
            return redirect('/');
        }
        return $response;
        
        // $response = $next($request);
        // if (!$request->session()->has('user')) {
        //     // user value cannot be found in session
        //     return redirect('/');
        // }
        // return $response;
    }
}
