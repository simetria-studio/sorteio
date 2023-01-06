<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmailMiddleware
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

        $email = $request->user()->email ?? null;

        if ($email) {
            if ($email == 'admin@abateselect.com.br') {
                // Si el correo electrónico del usuario es igual al correo electrónico permitido, permite el acceso a la ruta
                return $next($request);
            }

            // Si el correo electrónico del usuario es diferente al correo electrónico permitido, redirige al usuario a otra página
            return redirect('/login-custom');
        } else {
            // Si el usuario no tiene correo electrónico, redirige al usuario a otra página
            return redirect('/login-custom');
        }
    }
}
