<?php

namespace DLW\Http\Middleware;

use Closure;
use Auth;

class UserLoginMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('admin')->check()) {
            return redirect('/admin');
        }
        else if(Auth::guard()->check()){
            return redirect('/');
        }
        return $next($request);
    }
}
