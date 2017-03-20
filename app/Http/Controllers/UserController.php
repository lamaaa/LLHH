<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
// test
class UserController extends Controller
{
    protected $userService;
    /*
     * 未登录时不能执行edit，update，destroy操作
     * 已登录时不能执行create操作
     */

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
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
        $users = $this->userService->paginate(30);
        return view('user.index', compact('users'));
    }

    /*
     * 返回编辑用户密码的页面
     * 登录用户才能执行update
     */
    public function edit($id)
    {
        $user = $this->userService->editUser($id);
        return view('user.edit', compact('user'));
    }

    /*
     * 返回用户个人中心
     */
    public function show($id)
    {
        $user = $this->userService->getUserById($id);

        return view('user.show', compact('user'));
    }

    /*
     * 更新用户数据
     */
    public function update(Request $request, $id)
    {
        $this->userService->updateUser($request, $id);

        return redirect()->route('user.show', $id);
    }

    /*
     * 删除用户
     */
    public function destroy($id)
    {
        $this->userService->deleteUser($id);

        return back();
    }
}
