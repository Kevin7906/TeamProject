<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShoppingCartCheck
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
        if (\Cart::isEmpty() ) {
            return redirect('donut.list')->with([
                'message' => '請先將商品加入購物車中~謝謝'
            ]);
        }
        return $next($request);
    }
}
