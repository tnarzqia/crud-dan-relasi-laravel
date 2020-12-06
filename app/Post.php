<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //mengakui categorinya memiliki banyak post

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');

    }

}
