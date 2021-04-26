<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhgiadt_lang extends Model
{
   	protected $table = 'danhgia_dts_lang';
    protected $guarded = [];

    public function danhgia_dts()
    {
        return $this->belongsTo(Danhgiadt::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    
}
