<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == 'user' && Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::HOME);
        }

        if ($guard == 'admin' && Auth::guard($guard)->check()) {
            return redirect(RouteServiceProvider::ADMIN_DASHBOARD);
        }

        return $next($request);
    }
}
