<?php

namespace App\Http\Middleware;

use Closure;

class LogMiddleware
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
        // a.ミドルウェアの実処理
        file_put_contents('/var/www/html/quick-laravel/access.log', date('Y-m-d H:i:s') . "\n", FILE_APPEND);
        // b.次のミドルウェアを呼び出し
        return $next($request);
    }
}
