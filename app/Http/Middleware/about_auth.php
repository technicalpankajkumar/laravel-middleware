<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class about_auth
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
        $country=['india','uk','russia','canada','uae','uganda'];
        
        if($request->country && !in_array($request->country,$country)){
            return redirect('unvalable');
        }
        if(!isset($request->auth) || !$request->auth){
            return redirect ('unvalable');
        }
        return $next($request);
    }
}
