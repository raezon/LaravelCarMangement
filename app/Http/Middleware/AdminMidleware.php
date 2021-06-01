<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMidleware
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
        //return $next($request);
        if(Auth::check())
        {
            if(Auth::user()->role_as=='1')//0-user ,1-admin
            {
                return $next($request);
            }else{
                return redirect()->with('status','Access Denied ');
            }
        }else{
            return redirect()->with('status','Access Denied ,as you are not authenticated');
        }
    }
}
