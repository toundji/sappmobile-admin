<?php

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


function getCategorysss(Model $model){
    $model['category'] = Category::find($model->category_id);
    unset($model->category_id);

}
