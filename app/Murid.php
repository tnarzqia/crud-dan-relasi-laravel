<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    //
    protected $primaryKey = 'siswa_id';
    public function clas()
    {
        return $this->belongsTo(Clas::class, 'kelas_id', 'siswa_id');
    }

    public function ektra()
    {
        return $this->belongsToMany('App\Models\Ekstra');
    }
}
