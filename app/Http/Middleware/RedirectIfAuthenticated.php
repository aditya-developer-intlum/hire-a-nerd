<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            if($request->user()->type == 0){

                return redirect('/home');    
                
            }else if($request->user()->type == 1 xor $request->user()->type == 2 ){

                return redirect('/home');
            }
            
        }

        return $next($request);
    }
}
