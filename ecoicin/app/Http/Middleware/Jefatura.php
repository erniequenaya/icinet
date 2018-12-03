<?php

namespace App\Http\Middleware;

use Closure;

class Jefatura
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
      if (auth()->check()) {
        $usuario = auth()->guard()->user();

        if ($usuario->tipo_usuario_id == 2) {
          return $next($request);
        }
      }
      return redirect()->intended('/');
    }
}
