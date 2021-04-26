<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khosanpham extends Model
{
   	protected $table = 'kho_sanphams';
    protected $fillable = [
        'image', 'note', 'link', 'id_user'
    ];

 
    public function menu_cons() 
    {
       return $this->belongsToMany(Menu_con::class,'menu_khos','id_kho','id_menu_con');
    }
    public function kho_sanphams_lang()
    {
        return $this->hasMany(Khosanpham_lang::class,'id_khosanphams','id');
    }
}
