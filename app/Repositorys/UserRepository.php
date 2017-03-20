<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/3/19
 * Time: 19:32
 */
namespace App\Repositorys;

use App\Models\User;
use Illuminate\Http\Request;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function createUser(Request $request)
    {
        return User::create([
            'name'  =>  $request->name,
            'email' =>  $request->email,
            'password'  =>  bcrypt($request->password),
        ]);
    }

    public function getUserByToken($token)
    {
        return User::where('activation_token', $token)->firstOrFail();
    }

    public function activateUser(User $user)
    {
        $user->activated = true;
        $user->activation_token = null;
        $user->save();
    }
}