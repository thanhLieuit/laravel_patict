<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Danhgiakh extends Model
{
   	protected $table = 'danhgias';
    protected $guarded = [];

    public function danhgias_kh()
    {
        return $this->hasMany(Danhgiakh::class);
    }
    
}
