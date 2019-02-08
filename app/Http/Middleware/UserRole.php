<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next, $guard = null)
     {
       if (Auth::guard($guard)->check()) {
         foreach ($request->user()->roles  as $role) {
           if ($role->name == 'editor' || $role->name == 'creador') {
             return $next($request);
           }
         }
       }

       return redirect('/admin');
     }
}
