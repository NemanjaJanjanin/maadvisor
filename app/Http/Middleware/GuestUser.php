<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class GuestUser
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
        if (Auth::guest()){
            return $next($request);
        }
        return redirect('home');
    }

}
