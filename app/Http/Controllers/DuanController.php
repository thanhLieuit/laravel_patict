<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu_c1;
use App\Menu_c1_lang;
use App\Menu_baiviet;
use App\Menu_baiviet_lang;
use App\Menu_con;
use App\Menu_con_lang;
use App\Danhgiadt;
use App\Danhgiadt_lang;
use App\Khosanpham;
use App\Khosanpham_lang;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;

class DuanController extends Controller
{
    public function project(){

        SEOMeta::setTitle('PAT- DỰ ÁN', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thiết kế website, dịch vụ seo từ khóa, maketing online');
        SEOMeta::addMeta('article:section', 'Dự Án', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- DỰ ÁN');
        OpenGraph::setUrl('https://patict.vn/du-an');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/Group%205476.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Group%205476.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/Group%205476.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- DỰ ÁN');
        Twitter::setSite('@LuizVinicius73');

    	$baivietapp= Khosanpham::select('kho_sanphams.id','kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menu_cons_lang.slug','app-mobile')
            ->get();
            //dd($baivietapp);
    	$baivietsoft= Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
    
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menu_cons_lang.slug','softwate')
            ->get();
    	$baivietweb= Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menu_cons_lang.slug','website')
            ->get();
    	$baivietdakhac= Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menu_cons_lang.slug','du-an-khac')
            ->get();

        $danhgiadt = Danhgiadt::select('danhgia_dts_lang.name','danhgia_dts_lang.noidung','languages.title','danh_gia_dts.image')
        ->join('danhgia_dts_lang','danhgia_dts_lang.id_danhgia_dts','=','danh_gia_dts.id')
        ->join('languages','danhgia_dts_lang.id_lang','=','languages.id')
        ->get();
        $menu_c1 = Menu_c1::select('menus_c1.id','menus_c1_lang.name_menu_c1','menus_c1.image','menus_c1_lang.slug','languages.title')->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')->join('languages','languages.id','=','menus_c1_lang.id_lang')
            ->where('menus_c1.id',79)
             ->orwhere('menus_c1.id',80)
             ->orwhere('menus_c1.id',81)
             ->orwhere('menus_c1.id',82)
             ->orwhere('menus_c1.id',83)
             ->orwhere('menus_c1.id',84)
             ->get();
        $menu_bv = Menu_baiviet::select('menu_baiviets.id','menu_baiviets_lang.name_menu_baiviet','menu_baiviets.image','menu_baiviets_lang.slug','languages.title')
            ->join('menu_baiviets_lang','menu_baiviets.id','=','menu_baiviets_lang.id_menu_baiviets')
            ->join('languages','languages.id','=','menu_baiviets_lang.id_lang')
            ->where('menu_baiviets.id',6)
            ->orwhere('menu_baiviets.id',7)
            ->orwhere('menu_baiviets.id',8)
            ->orwhere('menu_baiviets.id',9)
            ->orwhere('menu_baiviets.id',10)
            ->orwhere('menu_baiviets.id',11)
            ->get();
        $lang =app()->getLocale();
    	return view('index.project',compact('baivietapp','baivietsoft','baivietweb','baivietdakhac','danhgiadt','lang','menu_c1','menu_bv'));
    }
    public function projectdetail($id){
       $baiviet3 = Khosanpham::select('kho_sanphams.id','kho_sanphams.image','kho_sanphams_lang.tomtat','kho_sanphams_lang.keywork','kho_sanphams_lang.name_sanpham')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->where('kho_sanphams_lang.slug',$id)->first();
        SEOMeta::setTitle($baiviet3->name_sanpham , false);
        SEOMeta::setDescription($baiviet3->tomtat);
        SEOMeta::addKeyword($baiviet3->keywork);
        SEOMeta::addMeta('article:section', 'Dự Án', 'property');
        OpenGraph::setDescription($baiviet3->tomtat);
        OpenGraph::setTitle($baiviet3->name_sanpham , false);
        OpenGraph::setUrl('');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/img/'.$baiviet3->image);
        OpenGraph::addImage(['url' => 'http://patict.vn/index/img/'.$baiviet3->image,'size' => 300]);
        OpenGraph::addImage('http://patict.vn/index/img/'.$baiviet3->image, ['height' => 300, 'width' => 300]);

        Twitter::setTitle($baiviet3->name_sanpham , false);
        Twitter::setSite('@LuizVinicius73');

    	$baiviet1 = Khosanpham::select('kho_sanphams.id')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->where('kho_sanphams_lang.slug',$id)->first();
        $baiviet = Khosanpham::select('kho_sanphams.id','kho_sanphams.image','kho_sanphams_lang.name_sanpham','kho_sanphams_lang.noidung','kho_sanphams_lang.slug','kho_sanphams.link','languages.title')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
        ->where('kho_sanphams.id', $baiviet1->id)
        ->get();
        $danhgiadt = Danhgiadt::select('danhgia_dts_lang.name','danhgia_dts_lang.noidung','languages.title','danh_gia_dts.image')
        ->join('danhgia_dts_lang','danhgia_dts_lang.id_danhgia_dts','=','danh_gia_dts.id')
        ->join('languages','danhgia_dts_lang.id_lang','=','languages.id')
        ->get();
        $menu_c1 = Menu_c1::select('menus_c1.id','menus_c1_lang.name_menu_c1','menus_c1.image','menus_c1_lang.slug','languages.title')->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')->join('languages','languages.id','=','menus_c1_lang.id_lang')
            ->where('menus_c1.id',79)
             ->orwhere('menus_c1.id',80)
             ->orwhere('menus_c1.id',81)
             ->orwhere('menus_c1.id',82)
             ->orwhere('menus_c1.id',83)
             ->orwhere('menus_c1.id',84)
             ->get();
        $menu_bv = Menu_baiviet::select('menu_baiviets.id','menu_baiviets_lang.name_menu_baiviet','menu_baiviets.image','menu_baiviets_lang.slug','languages.title')
            ->join('menu_baiviets_lang','menu_baiviets.id','=','menu_baiviets_lang.id_menu_baiviets')
            ->join('languages','languages.id','=','menu_baiviets_lang.id_lang')
            ->where('menu_baiviets.id',6)
            ->orwhere('menu_baiviets.id',7)
            ->orwhere('menu_baiviets.id',8)
            ->orwhere('menu_baiviets.id',9)
            ->orwhere('menu_baiviets.id',10)
            ->orwhere('menu_baiviets.id',11)
            ->get();
         $lang =app()->getLocale();
        return view('index.project_detail',compact('baiviet','danhgiadt','lang','menu_c1','menu_bv'));
    }
}
