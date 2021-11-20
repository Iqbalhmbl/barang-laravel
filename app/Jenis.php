<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $table = "jenis_barang";
    protected $guarded = [];

    public function jenis(){
    	return $this->hasMany('App\Barang');
    }
}
