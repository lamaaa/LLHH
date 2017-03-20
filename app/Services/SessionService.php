<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/3/20
 * Time: 11:09
 */
namespace App\Services;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionService
{
    use ValidatesRequests;

    public function login(Request $request)
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

    public function logout()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }
}