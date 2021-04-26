<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhgiadt extends Model
{
   	protected $table = 'danh_gia_dts';
    protected $guarded = [];
    
    public function danhgia_dts_lang()
    {
        return $this->hasMany(Danhgiadt_lang::class);
    }
}
