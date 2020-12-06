<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ektra extends Model
{
    //
    public function murid()
    {
        return $this->belongsToMany('App\Models\Murid');
    }
}
