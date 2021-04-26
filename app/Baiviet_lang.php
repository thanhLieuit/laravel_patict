<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baiviet_lang extends Model
{
   	protected $table = 'baiviets_lang';
    protected $guarded = [];
    public function baiviet_lang()
    {
        return $this->belongsTo(Baiviet::class,'id_baiviets','id');
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    public function tags() 
    {
       return $this->belongsToMany(Tag::class,'tags_baiviet','id_baiviets_lang','id_tag');
    }
}
