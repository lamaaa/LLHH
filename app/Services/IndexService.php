<?php
/**
 * Created by PhpStorm.
 * User: 55402
 * Date: 2017/3/26
 * Time: 19:56
 */
namespace App\Services;

use App\Repositorys\IndexRepository;

class IndexService
{
    protected $indexRepository;

    public function __construct(IndexRepository $indexRepository)
    {
        $this->indexRepository = $indexRepository;
    }
}