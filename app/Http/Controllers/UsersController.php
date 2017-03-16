<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    /*
     * 未登录时不能执行edit，update，destroy操作
     * 已登录时不能执行create操作
     */
    public function __construct()
    {
        $this->middleware('auth', [
            'only'  =>  ['edit', 'update', 'destroy']
        ]);

        $this->middleware('guest', [
            'only'  =>  ['create']
        ]);
    }

    /*
     * 加载30条用户数据
     */
    public function index()
    {
        $users = User::paginate(30);
        return view('users.index', compact('users'));
    }

    /*
     * 返回编辑用户密码的页面
     * 登录用户才能执行update
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    /*
     * 返回用户注册页面
     */
    public function create()
    {
        return view('users.create');
    }

    /*
     * 返回用户个人中心
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }

    /*
     * 1.验证用户输入的数据
     * 2.创建用户，插入数据库
     * 3.发送邮件给用户激活
     * 4.返回个人用户中心
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'  =>  'required|max:50',
            'email' =>  'required|email|unique:users|max:255',
            'password'  =>  'required'
        ]);

        $user = User::create([
            'name'  =>  $request->name,
            'email' =>  $request->email,
            'password'  =>  bcrypt($request->password),
        ]);

        $this->sendEmailConfirmationTo($user);
        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~,请先前往邮箱进行激活。');
        return redirect()->route('users.show', [$user]);
    }

    /*
     * 更新用户数据
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'  =>  'required|max:50',
            'password'  =>  'confirmed|min:6'
        ]);

        $user = User::findOrFail($id);
        $this->authorize('update', $user);

        $data = [];
        $data['name'] = $request->name;
        if ($request->password)
        {
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);

        session()->flash('success', '个人资料更新成功！');

        return redirect()->route('users.show', $id);
    }

    /*
     * 删除用户
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $this->authorize('destroy', $user);
        $user->delete();
        session()->flash('success', '成功删除用户！');
        return back();
    }

    /*
     * 发送邮件给注册用户进行激活
     */
    protected function sendEmailConfirmationTo($user)
    {
        $view = 'emails.confirm';
        $data = compact('user');
        $from = 'yang-19950427@163.com';
        $name = 'Lam';
        $to = $user->email;
        $subject = '感谢注册Sample应用！请确认您的邮箱。';

        Mail::send($view, $data, function ($message) use ($from, $name, $to, $subject){
            $message->from($from, $name)->to($to)->subject($subject);
        });
    }

    /*
     * 用户激活
     */
    public function confirmEmail($token)
    {
        $user = User::where('activation_token', $token)->firstOrFail();

        $user->activated = true;
        $user->activation_token = null;
        $user->save();

        Auth::login($user);
        session()->flash('success', '恭喜您，激活成功！');
        return redirect()->route('users.show', [$user]);
    }
}
