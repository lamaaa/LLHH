<?php

namespace App\Http\Controllers;

use App\Services\SessionService;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SessionController extends Controller
{
    protected $sessionService;
    /*
     * 已登录用户不能访问登录页面
     */
    public function __construct(SessionService $sessionService)
    {
        $this->sessionService = $sessionService;

        $this->middleware('guest', [
            'only'  =>  ['create']
        ]);
    }

    /*
     * 返回登录页
     */
    public function create()
    {
        return view('sessions.create');
    }

    /*
     * 1. 登录
     */
    public function store(Request $request)
    {
        return $this->sessionService->login($request);
    }

    /*
     * 退出
     */
    public function destroy()
    {
        return $this->sessionService->logout();
    }


}
