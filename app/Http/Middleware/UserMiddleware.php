<?php

namespace DLW\Http\Middleware;

use Closure;
use Auth;

class UserMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('admin')->check()) {
            return redirect('/admin');
        }
        else if (!Auth::guard()->check()){
            return redirect('/login');
        }
        return $next($request);
    }
}
