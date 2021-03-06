<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
        //return $next($request);
        if (Auth::check()){
            if(auth()->user()->role_id == 1){
                return $next($request);
            }
        }
        return redirect('login')->with('error','Please sign into Dashboard.');
    }
}
