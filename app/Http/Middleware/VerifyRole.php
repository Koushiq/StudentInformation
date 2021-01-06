<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyRole
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
        if($request->session()->get('role') == "admin"){
            return $next($request);
        }else if($request->session()->get('role') == "student"){
            return $next($request);
        }
        else
        {
            $request->session()->flash('invalidUserType', 'invalid usertype');
            return redirect('/');
        }
        
    }
}
