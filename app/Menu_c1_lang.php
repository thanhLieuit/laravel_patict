<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_c1_lang extends Model
{
   	protected $table = 'menus_c1_lang';
    protected $guarded = [];

    public function menu_c1()
    {
        return $this->belongsTo(Menu_c1::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
