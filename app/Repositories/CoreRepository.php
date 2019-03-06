<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 05.03.2019
 * Time: 21:23
 */

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class CoreRepository
{
    /**
     * @var Model
     */
    protected $model;
    
    /**
     * CoreRepository constructor.
     */
    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }
    
    /**
     * @return mixed
     */
    abstract protected function getModelClass();
    
    /**
     * @return Model|\Illuminate\Foundation\Application|mixed
     */
    protected function startConditions()
    {
        return clone $this->model;
    }
    
}