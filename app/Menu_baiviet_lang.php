<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_baiviet_lang extends Model
{
	protected $table = 'menu_baiviets_lang';
    protected $guarded = [];

    public function menu_baiviet()
    {
        return $this->belongsTo(Menu_baiviet::class,'id_menu_baiviets','id');
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    
}
