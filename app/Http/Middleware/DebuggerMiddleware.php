<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DebuggerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user() && in_array(auth()->id(), [96])) {
            \Debugbar::enable();
        } else {
            \Debugbar::disable();
        }

        return $next($request);
    }
}
