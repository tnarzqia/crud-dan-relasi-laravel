<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    //
    public function clas()
    {
        return $this->belongsTo(Clas::class, 'kelas_id', 'id');
    }

    public function ektra()
    {
        return $this->belongsToMany('App\Models\Ekstra');
    }
}
