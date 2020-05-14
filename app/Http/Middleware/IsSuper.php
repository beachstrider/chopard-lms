<?php

namespace DLW\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;
use Auth;

class IsSuper
{
    public function handle($request, Closure $next)
    {
        if(Auth::guard('admin')->user()->is_super == false){
            abort('404');
        }

        return $next($request);
    }
}
