<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AutorisationAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if(autorisationAuth($role)) {
            return $next($request);
        } else {
            return redirect()->route("cant-access");
        }
    }
}
