<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';
    protected $guarded = [];
    public function infweb()
    {
        return $this->hasMany(Infweb::class);
    }
    public function menu_c1_lang()
    {
        return $this->hasMany(Menu_c1_lang::class,'id_lang','id');
    }
    public function menu_con_lang()
    {
        return $this->hasMany(Menu_con_lang::class);
    }
    public function kho_sanphams_lang()
    {
        return $this->hasMany(Khosanpham_lang::class);
    }
}
