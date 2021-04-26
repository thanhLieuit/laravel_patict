<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loiich extends Model
{
   	protected $table = 'loiichs';
    protected $guarded = [];
    public function loiich_lang()
    {
        return $this->hasMany(Loiich_lang::class);
    }
}
