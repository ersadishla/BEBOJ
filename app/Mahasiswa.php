<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = array(
       'nrp', 'nama', 'password', 'remember_token'
    );

    public function mahasiswa_matakuliah(){
        return $this->hasMany('App\Mahasiswa_Matakuliah');
    }
    //
}
