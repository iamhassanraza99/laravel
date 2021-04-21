<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Login_First
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
        if(!$request->session()->has('name')){
            return redirect('admin/login');
        }
        return $next($request);
    }
}

