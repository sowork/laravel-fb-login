<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class GuestAdmin
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
//        if (auth()->guard('admin')->check()) { // 可以这样使用
        if (Auth::guard('admin')->check()) {
            return redirect('/admin');
        }

        return $next($request);
    }
}
