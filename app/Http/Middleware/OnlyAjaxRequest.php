<?php
namespace DLW\Http\Middleware;
use Closure;
class OnlyAjaxRequest
{
    public function handle($request, Closure $next)
    {
        if ($request->expectsJson()) {
            return $next($request);
        }
        return abort(404);
    }
}