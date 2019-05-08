<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array(
        'nama', 'sks', 'semester'   
    );
    public function mahasiswa_matakuliah()
    {
        return $this->hasMany('App\Mahasiswa_Matakuliah');
    }
    //
}
