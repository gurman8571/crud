<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Route;

class Test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       // dump(Route::getRoutes() );
        return $next($request);
    }
}
