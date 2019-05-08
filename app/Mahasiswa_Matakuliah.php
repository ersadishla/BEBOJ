<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa_Matakuliah extends Model
{
    protected $table = 'mahasiswa_matakuliah';
    protected $primaryKey = 'id'; 
    public $timestamps = true;
    public $incrementing = true;
    protected $fillable = array(
         'matakuliah_id', 'mahasiswa_id'
    );
    public function mahasiswa(){
       return $this->belongsTo('App\Mahasiswa');
    }
    public function matakuliah(){
       return $this->belongsTo('App\Matakuliah');
    }

    //
}
