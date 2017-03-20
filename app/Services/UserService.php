<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/3/19
 * Time: 19:47
 */

namespace App\Services;

use App\Models\User;
use App\Repositorys\UserRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class UserService
{
    use ValidatesRequests, AuthorizesRequests;

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser(Request $request)
    {
        $this->validate($request, [
            'name'  =>  'required|max:50',
            'email' =>  'required|email|unique:users|max:255',
            'password'  =>  'required'
        ]);
        $user = $this->userRepository->createUser($request);
        $this->sendEmailConfirmationTo($user);

        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~,请先前往邮箱进行激活。');
        return $user;
    }

    /*
     * 发送邮件给注册用户进行激活
     */
    public function sendEmailConfirmationTo($user)
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

    public function updateUser(Request $request, $id)
    {
        $this->validate($request, [
            'name'  =>  'required|max:50',
            'password'  =>  'confirmed|min:6'
        ]);
        $user = $this->getUserById($id);
        $this->authorize('update', $user);
        $data = [];
        $data['name'] = $request->name;
        if ($request->password)
        {
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);

        session()->flash('success', '个人资料更新成功！');
    }

    public function paginate($number)
    {
        return User::paginate($number);
    }

    public function getUserById($id)
    {
        return User::findOrFail($id);
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $this->authorize('update', $user);
        $user->delete();

        session()->flash('success', '成功删除用户！');
    }

    public function editUser($id)
    {
        $user = $this->getUserById($id);
        $this->authorize('update', $user);

        return $user;
    }

    public function confirmEmail($token)
    {
        $user = $this->userRepository->getUserByToken($token);
        $this->userRepository->activateUser($user);

        Auth::login($user);
        session()->flash('success', '恭喜您，激活成功！');

        return $user;
    }
}