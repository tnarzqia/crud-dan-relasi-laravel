<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    //
    protected $table = 'murids';

    public function clas()
    {
        return $this->belongsTo(Clas::class, 'kelas_id', 'id');
    }

    public function ekstra()
    {
        return $this->belongsToMany('App\Models\Ekstra');
    }
}
