<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu_con_lang extends Model
{
	protected $table = 'menu_cons_lang';
    protected $fillable = [
        'menu_con', 'note',
    ];

    public function menu_cons()
    {
        return $this->belongsTo(Menu_con::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
