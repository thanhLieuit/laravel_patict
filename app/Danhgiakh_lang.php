<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhgiakh_lang extends Model
{
   	protected $table = 'danhgias_lang';
    protected $guarded = [];
    public function danhgias()
    {
        return $this->belongsTo(Danhgiakh::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    
}
