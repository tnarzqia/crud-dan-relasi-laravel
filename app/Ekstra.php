<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekstra extends Model
{
    //
    protected $table = 'ekstra';

    public function murid()
    {
        return $this->belongsToMany('App\Models\Murid');
    }
}
