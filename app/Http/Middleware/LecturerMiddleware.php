<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class LecturerMiddleware
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
        if(Sentinel::check()) {
            $user = Sentinel::getUser();
            if($user->inRole('lecturer'))
                return $next($request);
            else
                return abort(404);  
        } else {
            return redirect()->route('login');
        }
    }
}
