<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, $roles)
    {
        $user = Auth::user();
        $need_roles = explode('|', $roles);
        if (in_array($user->role_id, $need_roles)) {
            return $next($request);
        }
        return redirect()->route('login');;
    }
}