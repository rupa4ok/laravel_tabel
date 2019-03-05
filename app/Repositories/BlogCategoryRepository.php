<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 05.03.2019
 * Time: 21:02
 */

namespace App\Repositories;

use App\Models\BlogCategory;

class BlogCategoryRepository
{
    public function getEdit($id)
    {
        return BlogCategory::where('id', $id)->first();
    }
    
    public function getForComboBox()
    {
        return BlogCategory::all();
    }
}