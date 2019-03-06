<?php
/**
 * Created by PhpStorm.
 * User: rupack
 * Date: 6.3.19
 * Time: 14.41
 */

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BlogPostRepository
{
    /**
     * Подключаем модель для работы
     *
     * @return string
     */
    protected function getModelClass(): string
    {
        return Model::class;
    }
}