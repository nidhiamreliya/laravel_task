<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class AdminMiddleware
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
        if (Sentinel::check()) 
        {
            $user = Sentinel::getUSer();

            if(!$user->inRole('Admin'))
            {
                return redirect()->to('admin/login');
            }
        }
        else
        {
            return redirect()->to('admin/login');
        }

        return $next($request);
    }
}
