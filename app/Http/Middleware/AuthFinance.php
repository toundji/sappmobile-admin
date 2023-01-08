<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthFinance
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
        if(f_hasCookie(md5('token_sapp_finance'))) {
            return $next($request);
        } else {
            return redirect()->route("login-finance");
        }
    }
}
