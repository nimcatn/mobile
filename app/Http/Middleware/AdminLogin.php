<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminLogin
{
    public function handle(Request $request, Closure $next): Response
    {
        try {
            if (Auth::User()->role != "admin") {
                return redirect('login')->with('error', 'شما دسترسی لازم برای بخش مدیریت را ندارید');
            }
        } catch (\Throwable $th) {
            return redirect('login')->with('error', 'برای این بخش شما باید وارد اکانت خود شوید');
        }
        return $next($request);
    }
}
