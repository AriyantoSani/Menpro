<?php

namespace App\Http\Middleware;

use Closure;

class SessionHasAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->session()->get('role') == 'admin') {
            // user value cannot be found in session
            // if(!$request->session()->get('role') == 'admin'){
            return redirect('/');
            // }
        }
        return $next($request);
    }
}
