<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   	protected $table = 'tags';
    protected $guarded = [];
    public function baiviet_lang() 
    {
       return $this->belongsToMany(Baiviet_lang::class,'tags_baiviet','id_baiviets_lang','id_tag');
    }
    public function tag_lang()
    {
        return $this->hasMany(Tag_lang::class,'id_tag','id');
    }

}
