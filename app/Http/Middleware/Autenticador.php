<?php

namespace App\Http\Middleware;

use Closure;

class Autenticador
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
        if(!$request->is('admin') && \Auth::guest()){
            return redirect()->action('AdminController@login');
        }
        
        return $next($request);
    }
}
