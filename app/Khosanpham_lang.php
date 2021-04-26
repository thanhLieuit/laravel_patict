<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Khosanpham_lang extends Model
{
   	protected $table = 'kho_sanphams_lang';
    protected $fillable = [
        'name_sanpham', 'slug','keywork', 'noidung', 'tomtat', 'id_lang', 'id_khosanphams',
    ];

 
    public function kho_sanphams()
    {
        return $this->belongsTo(Khosanpham::class,'id_khosanphams','id');
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
