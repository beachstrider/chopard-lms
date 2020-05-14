<?php

namespace DLW\Http\Middleware;

use Closure;
use Auth;

class AdminLoginMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard()->check()) {
            return redirect('/');
        }
        else if(Auth::guard('admin')->check()){
            return redirect('/admin');
        }
        return $next($request);
    }
}
