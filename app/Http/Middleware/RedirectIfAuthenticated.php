<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role_id;
            switch ($role) {
              case '1':
                return '/superadmin';
                break;
              case '2':
                return '/admin';
                break;
            case '3':
                return '/user';
                break;
              default:
                return '/home';
              break;
          }
        }
        return $next($request);
      }
}
