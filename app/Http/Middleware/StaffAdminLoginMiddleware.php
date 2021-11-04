<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Auth, Response;

class StaffAdminLoginMiddleware
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if(!Auth::guard('staff_admin')->check()) // 未登录
        {
            return redirect('/admin/login');

//            $return["status"] = false;
//            $return["log"] = "admin-no-login";
//            $return["msg"] = "请先登录";
//            return Response::json($return);
        }
        else
        {
            $staff_admin = Auth::guard('staff_admin')->user();
            view()->share('me_staff_admin', $staff_admin);
        }
        return $next($request);
    }
}
