<?php

namespace App\Http\Middleware;

use Closure;

class Administrador
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

        if ($usuario->tipo_usuario_id == 1) {
          return $next($request);
        }
      }
      return redirect()->intended('/');
    }
}
