<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ektra extends Model
{
    //
    protected $primarykey = 'extra_id';

    public function murid()
    {
        return $this->belongsToMany('App\Models\Murid');
    }
}
