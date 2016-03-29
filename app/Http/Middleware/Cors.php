<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     * php artisan make:middleware cors
     *
     * Cria um middleware que sera executado antes do sistema, para acrescentar os headers que autorizam cross domain
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request)
            ->header('Acces-Control-Allow-Origin', '*')
            ->header('Acces-Control-Allow-Methods', 'GET','POST','PUT','DELETE','OPTIONS')
        ;
    }
}
