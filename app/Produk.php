<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public function pesanan_detail() 
	{
	     return $this->hasMany('App\PesananDetail','produk_id', 'id');
	}
}
