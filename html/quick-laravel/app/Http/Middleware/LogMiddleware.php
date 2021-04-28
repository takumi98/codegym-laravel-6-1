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
        // アクションの実行前にログを実行
        file_put_contents('/var/www/html/quick-laravel/access.log', date('Y-m-d H:i:s') . "\n", FILE_APPEND);
        // a.アクションを実行
        $response = $next($request);
        // b.レスポンスの内容を加工
        // $response->setContent(mb_strtoupper($response->content()));
        return $response;
    }
}
