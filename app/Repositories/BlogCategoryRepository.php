<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 05.03.2019
 * Time: 21:02
 */

namespace App\Repositories;

use App\Models\BlogCategory as Model;
use Illuminate\Database\Eloquent\Collection;


class BlogCategoryRepository extends CoreRepository
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
    
    /**
     * Получить модель для редактирования в админке
     *
     * @param $id
     * @return mixed
     */
    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }
    
    /**
     * Получить список категорий для вывода в выпадающем списке админки
     *
     * @return Collection
     */
    public function getForComboBox()
    {
        $columns = implode(', ', [
            'id',
            'CONCAT (id, ". ", title) AS id_title'
        ]);
        
        return $this
            ->startConditions()
            ->selectRaw($columns)
            ->toBase()
            ->get();
    }
    
    /**
     * Получить категории для постраничного вывода в админке
     *
     * @param $perPage
     * @return mixed
     */
    public function getAllWithPaginate($perPage)
    {
        $columns = ['id', 'title', 'parent_id'];
    
        return $this->startConditions()
            ->select($columns)
            ->paginate($perPage);
    }
    
}