<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Userlogin
{
    private $userlogin;
    public function __construct(){

    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next,$guard = 'userlogin')
    {
        if(Auth::guard($guard)->check()){
             return $next($request);
        }
        else {
            return redirect()->route('signin')->with('thongbao12','bạn phải đăng nhập để mua hàng');
        }

    }
}
