<?php

namespace DLW\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard()->check()) {
            return redirect('/');
        }
        else if (!Auth::guard('admin')->check()){
            return redirect('/admin/login');
        }
        return $next($request);
    }
}
