<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_c1 extends Model
{
   	protected $table = 'menus_c1';
    protected $guarded = [];

    public function menu_con()
    {
        return $this->hasMany(Menu_con::class,'id_menu_c1','id');
    }
    public function menu_c1_lang()
    {
        return $this->hasMany(Menu_c1_lang::class,'id_menus_c1','id');
    }
}
