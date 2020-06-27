<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use Closure;
use \App\Admin;

class CheckToken
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
        if(!$request->headers->has('token')||$request->header('token')=='undefined'){
            return response()->json(['message'=>'Invalid user']);
        }
        else{
            $token=$request->header('token');
            $admin=\App\Admin::find(1);
            if(is_null($admin) || !$admin->validateToken($token)){
                return response()->json(['message'=>'Invalid user']);
            }
            else{
                return $next($request);
            }
        }
    }
}
