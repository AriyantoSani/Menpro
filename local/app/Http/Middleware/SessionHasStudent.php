<?php

namespace App\Http\Middleware;

use Closure;

class SessionHasStudent
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
        if (!$request->session()->get('role') == 'mahasiswa') {
            // user value cannot be found in session
            // if(!$request->session()->get('role') == 'mahasiswa'){
            return redirect('/');
            // }
        }
        return $next($request);
    }
}
