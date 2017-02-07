<?php

namespace App\Http\Middleware;

use Closure;

class xdloginMiddleware
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
        if(session('xdid')){
            return $next($request);
        }else{
            return redirect('/xdlogin');
        }
    }
}
