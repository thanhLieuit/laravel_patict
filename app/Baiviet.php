<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baiviet extends Model
{
   	protected $table = 'baiviets';
    protected $guarded = [];
    public function baiviet_lang()
    {
        return $this->hasMany(Baiviet_lang::class,'id_baiviets','id');
    }
    public function menu_baiviet()
    {
        return $this->hasMany(Menu_baiviet::class,'id_menu_baiviet','id');
    }
    

}
