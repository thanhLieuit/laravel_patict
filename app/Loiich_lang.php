<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loiich_lang extends Model
{
   	protected $table = 'loiichs_lang';
    protected $guarded = [];
    public function loiich()
    {
        return $this->belongsTo(Loiich::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    
}
