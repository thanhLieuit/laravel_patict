<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu_c1;
use App\Menu_c1_lang;
use App\Menu_baiviet;
use App\Menu_baiviet_lang;
use App\Menu_con;
use App\Menu_con_lang;
use App\Doitac;
use App\Baogia;
use App\Baogia_lang;
use App\Danhgiakh;
use App\Danhgiakh_lang;
use App\baiviet;
use App\Khosanpham;
use App\Infweb;
use App\Saver_email;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;


class IndexController extends Controller
{
    public function trangchu(){

        SEOMeta::setTitle('PAT- CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thiết kế website, dịch vụ seo từ khóa, maketing online','dịch vụ quảng cáo google','dịch vụ quảng cáo facebook','dịch vụ quản trị website');
        //SEOMeta::addMeta('article:section', 'Kiến thức', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG');
        OpenGraph::setUrl('https://patict.vn/');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/Mask Group 64-min.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask Group 64-min.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/Mask Group 64-min.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- CÔNG NGHỆ THÔNG TIN VÀ TRUYỀN THÔNG');
        Twitter::setSite('@LuizVinicius73');

        
        $doitac = Doitac::get();
        $baogia = Baogia::select('baogias.id','baogias_lang.name_baogia','baogias.image','languages.title','baogias_lang.noidung','languages.title')
        ->join('baogias_lang','baogias.id','=','baogias_lang.id_baogia')
        ->join('languages','languages.id','=','baogias_lang.id_lang')
        ->get();
        $danhgia_kh = Danhgiakh::select('danhgias.star','danhgias.image','danhgias_lang.name','danhgias_lang.noidung','languages.title')
        ->join('danhgias_lang','danhgias.id','=','danhgias_lang.id_danhgia')
        ->join('languages','languages.id','=','danhgias_lang.id_lang')
        ->get();

        $tn = Infweb::join('languages','languages.id','=','infweb.id_lang')->where('infweb.id',1)->orwhere('infweb.id',2)->get();
       
        $lang =app()->getLocale();

        $gtcl = Infweb::join('languages','languages.id','=','infweb.id_lang')->where('infweb.id',3)->orwhere('infweb.id',4)->get();
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

        return view('index.body',compact('menu_c1','doitac','baogia','danhgia_kh','tn','gtcl','lang','menu_bv'));
    }
    public function about(){
        SEOMeta::setTitle('PAT- GIỚI THIỆU', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thiết kế website, dịch vụ seo từ khóa, maketing online');
        SEOMeta::addMeta('article:section', 'Giới Thiệu', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- GIỚI THIỆU');
        OpenGraph::setUrl('https://patict.vn/gioi-thieu');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/ID3002634.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/ID3002634.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/ID3002634.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- GIỚI THIỆU');
        Twitter::setSite('@LuizVinicius73');

       $tn1 = Infweb::join('languages','languages.id','=','infweb.id_lang')->where('infweb.id',5)->orwhere('infweb.id',6)->get();
        $lang =app()->getLocale();

        $gtcl = Infweb::join('languages','languages.id','=','infweb.id_lang')->where('infweb.id',3)->orwhere('infweb.id',4)->get();

        $sm = Infweb::join('languages','languages.id','=','infweb.id_lang')->where('infweb.id',7)->orwhere('infweb.id',8)->get();

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
    	return view('index.about',compact('tn1','sm','gtcl','lang','menu_c1','menu_bv'));
    }
    
    public function getxemtatca(){
         SEOMeta::setTitle('PAT- Giao Diện', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thiết kế website, dịch vụ seo từ khóa, maketing online');
        SEOMeta::addMeta('article:section', 'Giới Thiệu', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- Giao Diện');
        OpenGraph::setUrl('https://patict.vn/xem-tat-ca');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_23_fh_pattern.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- Giao Diện');
        Twitter::setSite('@LuizVinicius73');

        $khosanpham = Khosanpham::select('kho_sanphams.id','kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','languages.title')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->whereNotBetween ('kho_sanphams.id',[15, 17])
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
        return view('index.xemtatca',compact('khosanpham','lang','menu_c1','menu_bv'));
    }
}
