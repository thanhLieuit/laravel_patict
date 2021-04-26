<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baogia extends Model
{
   	protected $table = 'baogias';
    protected $guarded = [];

    public function baogias_lang()
    {
        return $this->hasMany(Baogia_lang::class,'id_baogia','id');
    }
    
}
