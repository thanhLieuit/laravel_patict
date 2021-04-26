<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baogia_lang extends Model
{
   	protected $table = 'baogias_lang';
    protected $guarded = [];

    public function baogias()
    {
        return $this->belongsTo(Baogia::class,'id_baogia','id');
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    
}
