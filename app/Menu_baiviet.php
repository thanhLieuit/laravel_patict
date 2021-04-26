<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_baiviet extends Model
{
	protected $table = 'menu_baiviets';
    protected $guarded = [];

    public function baiviet()
    {
        return $this->hasMany(Baiviet::class,'id_menu_baiviet','id');
    }
    public function menu_baiviet_lang()
    {
        return $this->hasMany(Menu_baiviet_lang::class,'id_menu_baiviets','id');
    }
    
}
