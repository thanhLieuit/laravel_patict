<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    public function index(){
        $tintuc = DB::table('baiviets')->select('baiviets_lang.slug')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->get();
        $dichvu = DB::table('menus_c1')->select('menus_c1_lang.slug')
        ->join('menus_c1_lang','menus_c1_lang.id_menus_c1','=','menus_c1.id')
        ->get();

        $chitietdichvu = DB::table('kho_sanphams')->select('kho_sanphams_lang.slug')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            
            ->whereNotBetween ('kho_sanphams.id',[15, 17])
            ->get();
       
        return view('index/sitemap/index',compact('tintuc','dichvu','chitietdichvu'));

    }
}
