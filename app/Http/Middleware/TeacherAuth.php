<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class TeacherAuth
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
    if (Auth::check()){
            if (Auth::user() -> role == 2){
                return $next($request);
            }
            redirect("admin");
        }
    return redirect("login");

    }
}
