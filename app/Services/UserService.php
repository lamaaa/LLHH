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
}