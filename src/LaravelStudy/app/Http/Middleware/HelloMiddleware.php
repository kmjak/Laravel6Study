<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $data = [
            [
                'name'=>'山田太郎',
                'mail'=>'yamada@tarou'
            ],
            [
                'name'=>'田中花子',
                'mail'=>'hanako@tanaka'
            ],
            [
                'name'=>'鈴木幸子',
                'mail'=>'sachi@ko'
            ],
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
