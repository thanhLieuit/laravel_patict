<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infweb extends Model
{
    protected $table = 'infweb';
    protected $guarded = [];
   	public function language()
    {
        return $this->belongsTo(Language::class);
    }

}
