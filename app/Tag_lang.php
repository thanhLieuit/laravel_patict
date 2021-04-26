<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag_lang extends Model
{
   	protected $table = 'tags_lang';
    protected $guarded = [];
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    public function tag()
    {
        return $this->hasMany(Tag::class,'id_tag','id');
    }

}
