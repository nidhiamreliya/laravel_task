<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class ClientMiddleware 
{
    protected $except = [
        'user', 'user/login', 'user/create', 'password' , 'password/*'
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        foreach($this->except as $route) {
            if ($request->is($route)) {
                return $next($request);
            }
        }
        if (Sentinel::check()) 
        {
            $user = Sentinel::getUSer();

            if(!$user->inRole('Client'))
            {
                return redirect()->to('user');
            }
        }
        else
        {
            return redirect()->to('user');
        }

        return $next($request);    }
}
