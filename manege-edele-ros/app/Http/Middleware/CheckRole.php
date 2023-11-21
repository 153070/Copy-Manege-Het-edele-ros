<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
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
        if ($request->route()->getName() === 'agenda.edit') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar' || $user->role === 'instructeur')) {
                return $next($request);
            }
        }

        if ($request->route()->getName() === 'agenda.create') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar' || $user->role === 'instructeur')) {
                return $next($request);
            }
        }

        if ($request->route()->getName() === 'agenda.destroy') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar' || $user->role === 'instructeur')) {
                return $next($request);
            }
        }

        if ($request->route()->getName() === 'mededeling.edit') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar')) {
                return $next($request);
            }
        }

        if ($request->route()->getName() === 'mededeling.create') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar')) {
                return $next($request);
            }
        }

        if ($request->route()->getName() === 'mededeling.destroy') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar')) {
                return $next($request);
            }
        }

        if ($request->route()->getName() === 'mededeling.index') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar')) {
                return $next($request);
            }
        }

        if ($request->route()->getName() === 'paarden.edit') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar')) {
                return $next($request);
            }
        }

        if ($request->route()->getName() === 'paarden.create') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar')) {
                return $next($request);
            }
        }

        if ($request->route()->getName() === 'paarden.destroy') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar')) {
                return $next($request);
            }
        }

        if ($request->route()->getName() === 'paarden.index') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar')) {
                return $next($request);
            }
        }

        if ($request->route()->getName() === 'inschrijvingen.index') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar')) {
                return $next($request);
            }
        }

        if ($request->route()->getName() === 'inschrijvingen.edit') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar')) {
                return $next($request);
            }
        }

        if ($request->route()->getName() === 'inschrijvingen.create') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar')) {
                return $next($request);
            }
        }


        if ($request->route()->getName() === 'inschrijvingen.destroy') {
            $user = $request->user();
            if ($user && ($user->role === 'eigenaar')) {
                return $next($request);
            }
        }


        abort(403, 'Unauthorized');
    }
}
