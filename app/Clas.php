<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    //
    protected $tabel = 'cals';

    public function murids()
    {
        return $this->hasMany(Murid::class, 'kelas_id');
    }
}
