<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
    use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role = "")
    {
        // dd(Auth::check());
        if(Auth::check() == false){
            return redirect()->route("register");   
        }else{
            if(Auth::user()->role->name == "Admin"){
                return $next($request);
            }else{
                return redirect()->route("home");   
            }
        }
        if (! $request->user()->hasRole($role)) {
            abort(401, 'This action is unauthorized.');
        }
        
    }
}
