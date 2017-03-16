<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SessionsController extends Controller
{
    /*
     * 已登录用户不能访问登录页面
     */
    public function __construct()
    {
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
        $this->validate($request, [
            'email' =>  'required|email|max:255',
            'password'  =>  'required'
        ]);

        $credentials = [
            'email' =>  $request->email,
            'password'  =>  $request->password,
        ];

        if (Auth::attempt($credentials, $request->has('remember'))){
            if (Auth::user()->activated) {
                session()->flash('success', '欢迎回来！');
                return redirect()->intended(route('users.show', [Auth::user()]));
            } else {
                Auth::logout();
                session()->flash('warning', '您的帐号未激活，请检查邮箱中的注册邮件进行激活。');
                return redirect('/');
            }
        } else {
            session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
            return redirect()->back();
        }
    }

    /*
     * 退出
     */
    public function destroy()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }


}
