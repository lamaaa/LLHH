<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/3/30
 * Time: 17:17
 */
namespace App\Repositorys;

use App\Models\Module;

class ModuleRepository
{
    public function all()
    {
        return Module::all();
    }

}