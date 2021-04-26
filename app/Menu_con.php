<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_con extends Model
{
	protected $table = 'menu_cons';
    protected $fillable = [
         'image', 'slug', 'id_menu_c1',
    ];

    public function menu_c1()
    {
        return $this->belongsTo(Menu_c1::class);
    }
    public function kho_sanphams() 
    {
       return $this->belongsToMany('App\Khosanpham','menu_khos','id_kho','id_menu_con');
    }
    public function menu_con_lang()
    {
        return $this->hasMany(Menu_con_lang::class,'id_menu_cons','id');
    }
}
