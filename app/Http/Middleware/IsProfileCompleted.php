<?php

namespace DLW\Http\Middleware;

use Closure;
use Auth;

class IsProfileCompleted
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard()->user()->profile_complete==true){
            return $next($request);
        }
    }
}
