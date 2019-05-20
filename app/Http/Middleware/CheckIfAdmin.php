<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfAdmin
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
        // Redireciona caso não esteja logado
        if( !auth()->check() )
        {
            return redirect()->route('home');
        }

        // Redireciona caso não seja um administrador
        if( !auth()->user()->is_admin  )
        {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
