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
}