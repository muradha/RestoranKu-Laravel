<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function pesanan_detail() 
	{
	     return $this->hasMany('App\PesananDetail','menu_id', 'id');
	}
}
