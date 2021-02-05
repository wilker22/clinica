<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        //dd(Auth::user()->role->name);
        if(Auth::user()->role->name == "admin"){
            return $next($request);
        }else{
            return redirect()->back();
        }


    }
}
