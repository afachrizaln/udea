<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class VisitorMiddleware
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
        if(!Sentinel::check())
            return $next($request);
        else{
            $user = Sentinel::getUser();
            if($user->inRole('student')) {
                return redirect()->route('student.dashboard');
            } elseif($user->inRole('lecturer')) {
                return redirect()->route('lecturer.dashboard');
            } else {
                return "hello";
            }
        }
    }
}
