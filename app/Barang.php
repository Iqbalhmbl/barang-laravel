<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "tb_barang";
    protected $guarded = [];

    public function jenis(){
    	return $this->belongsTo('App\Jenis');
    }
}
