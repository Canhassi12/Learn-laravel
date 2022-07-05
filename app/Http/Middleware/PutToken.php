<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PutToken
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
        $fds = $request->all();

        $token = $fds['_token'];

        session()->put('_token', $token);

        return $next($request);
    }
}
