<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    public function handle($request, Closure $next, $role)
    {
        // Check if the user is logged in

            // Check if the user has the required role
            if (Auth::user()->role === $role) {
                return $next($request);
            }


        // Redirect or return an error response as needed
      abort(401);
    }
}
