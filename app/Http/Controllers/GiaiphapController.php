<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu_c1;
use App\Menu_c1_lang;
use App\Baiviet;
use App\Menu_baiviet;
use App\Menu_baiviet_lang;
use App\Menu_con;
use App\Menu_con_lang;
use App\Khosanpham;
use App\Khosanpham_lang;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;

class GiaiphapController extends Controller
{
    public function giaiphap(){

        SEOMeta::setTitle('PAT- GIẢI PHÁP', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thiết kế website, dịch vụ seo từ khóa, maketing online');
        SEOMeta::addMeta('article:section', 'Giải Pháp', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- GIẢI PHÁP');
        OpenGraph::setUrl('https://patict.vn/giai-phap');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/Mask%20Group%20623.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask%20Group%20623.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/Mask%20Group%20623.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- GIẢI PHÁP');
        Twitter::setSite('@LuizVinicius73');
        $lang =app()->getLocale();
    	$menu_baiviet = Menu_baiviet::select('menu_baiviets.id','menu_baiviets_lang.name_menu_baiviet','menu_baiviets_lang.slug','menu_baiviets_lang.note','languages.title','menu_baiviets.image')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->join('languages','languages.id','=','menu_baiviets_lang.id_lang')
        ->orwhere('menu_baiviets_lang.slug','quan-ly-doanh-nghiep')
    	->orwhere('menu_baiviets_lang.slug','giai-phap-y-te')
    	->orwhere('menu_baiviets_lang.slug','chinh-phu-dien-tu')
    	->orwhere('menu_baiviets_lang.slug','maketing-online')
        ->orwhere('menu_baiviets_lang.slug','business-management')
        ->orwhere('menu_baiviets_lang.slug','medical-solutions')
        ->orwhere('menu_baiviets_lang.slug','e-government')
        ->orwhere('menu_baiviets_lang.slug','maketing-online1')
    	->get();

    	$menu_c21 = Menu_baiviet::select('menu_baiviets.id','menu_baiviets_lang.name_menu_baiviet','menu_baiviets_lang.slug','menu_baiviets_lang.note','languages.title','menu_baiviets.image')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->join('languages','languages.id','=','menu_baiviets_lang.id_lang')
        ->orwhere('menu_baiviets_lang.slug','thuong-mai-dien-tu')
    	->orwhere('menu_baiviets_lang.slug','giai-phap-giao-duc')
        ->orwhere('menu_baiviets_lang.slug','ecommerce')
        ->orwhere('menu_baiviets_lang.slug','educational-solutions')
    	->get();

        $khodemo =  Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','kho_sanphams.note','languages.title')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
        ->where('kho_sanphams.note','Đã hoàn thành')
        ->get();
       // dd($khodemo);
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
    	return view('index.giaiphap',compact('menu_baiviet','menu_c21','khodemo','lang','menu_c1','menu_bv'));
    }
    public function giaiphapdetail($id){
        $menu_baiviet = Menu_baiviet::select('menu_baiviets_lang.slug')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->where('menu_baiviets_lang.slug',$id)->first();

        if($menu_baiviet['slug'] == 'thuong-mai-dien-tu' || $menu_baiviet['slug'] == 'ecommerce'){

        SEOMeta::setTitle('PAT- GIẢI PHÁP- THƯƠNG MẠI ĐIỆN TỬ', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thương mại điện tử, dịch vụ thương mại điện tử, website thương mại điện tử');
        SEOMeta::addMeta('article:section', 'Giải Pháp', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- GIẢI PHÁP- THƯƠNG MẠI ĐIỆN TỬ');
        OpenGraph::setUrl('https://patict.vn/giai-phap/thuong-mai-dien-tu');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_18_rr_pattern.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- GIẢI PHÁP- THƯƠNG MẠI ĐIỆN TỬ');
        Twitter::setSite('@LuizVinicius73');


        $khodemo =  Khosanpham::select('kho_sanphams.id','kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','kho_sanphams.note','languages.title')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
        ->where('kho_sanphams.note','Đã hoàn thành')
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
            return view('index.giaiphap_thuongmai',compact('khodemo','lang','menu_c1','menu_bv'));
        }elseif($menu_baiviet['slug'] == 'giai-phap-giao-duc' || $menu_baiviet['slug'] == 'educational-solutions'){

            SEOMeta::setTitle('PAT- GIẢI PHÁP- GIÁO DỤC', false);
            SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            SEOMeta::addKeyword('giải pháp giáo dục, giải pháp quản lý giáo dục, ứng dụng quản lý giáo dục');
            SEOMeta::addMeta('article:section', 'Giải Pháp', 'property');
            OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            OpenGraph::setTitle('PAT- GIẢI PHÁP- GIÁO DỤC');
            OpenGraph::setUrl('https://patict.vn/giai-phap/giai-phap-giao-duc');
            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'pt-br');
            OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

            OpenGraph::addImage('https://patict.vn/index/img/GPGD-banner.png');
            OpenGraph::addImage(['url' => 'https://patict.vn/index/img/GPGD-banner.png','size' => 300]);
            OpenGraph::addImage('https://patict.vn/index/img/GPGD-banner.png', ['height' => 300, 'width' => 300]);

            Twitter::setTitle('PAT- GIẢI PHÁP- GIÁO DỤC');
            Twitter::setSite('@LuizVinicius73');

            $khodemo =  Khosanpham::select('kho_sanphams.id','kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','kho_sanphams.note','languages.title')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
        ->where('note','Đã hoàn thành')->get();
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
            return view('index.giaiphap_giaoduc',compact('khodemo','lang','menu_c1','menu_bv'));
        }elseif($menu_baiviet['slug'] == 'giai-phap-y-te' || $menu_baiviet['slug'] =='medical-solutions'){

            SEOMeta::setTitle('PAT- GIẢI PHÁP- GIÁO DỤC', false);
            SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            SEOMeta::addKeyword('giải pháp giáo dục, giải pháp quản lý giáo dục, ứng dụng quản lý giáo dục');
            SEOMeta::addMeta('article:section', 'Giải Pháp', 'property');
            OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            OpenGraph::setTitle('PAT- GIẢI PHÁP- GIÁO DỤC');
            OpenGraph::setUrl('https://patict.vn/giai-phap/giai-phap-giao-duc');
            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'pt-br');
            OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

            OpenGraph::addImage('https://patict.vn/index/img/GPGD-banner.png');
            OpenGraph::addImage(['url' => 'https://patict.vn/index/img/GPGD-banner.png','size' => 300]);
            OpenGraph::addImage('https://patict.vn/index/img/GPGD-banner.png', ['height' => 300, 'width' => 300]);

            Twitter::setTitle('PAT- GIẢI PHÁP- GIÁO DỤC');
            Twitter::setSite('@LuizVinicius73');
            $khodemo =  Khosanpham::select('kho_sanphams.id','kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','kho_sanphams.note','languages.title')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
        ->where('kho_sanphams.note','Đã hoàn thành')
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
            return view('index.giaiphap_yte',compact('khodemo','lang','menu_c1','menu_bv'));
        }elseif($menu_baiviet['slug'] == 'quan-ly-doanh-nghiep' || $menu_baiviet['slug'] == 'business-management'){

            SEOMeta::setTitle('PAT- GIẢI PHÁP- QUẢN LÝ DOANH NGIỆP', false);
            SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            SEOMeta::addKeyword('quản lý doanh nghiệp, giải pháp quản lý doanh nghiệp, tư vấn giải pháp quản lý doanh nghiệp');
            SEOMeta::addMeta('article:section', 'Giải Pháp', 'property');
            OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            OpenGraph::setTitle('PAT- GIẢI PHÁP- QUẢN LÝ DOANH NGIỆP');
            OpenGraph::setUrl('https://patict.vn/giai-phap/quan-ly-doanh-nghiep');
            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'pt-br');
            OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

            OpenGraph::addImage('https://patict.vn/index/img/QLDN-banner%20(2).png');
            OpenGraph::addImage(['url' => 'https://patict.vn/index/img/QLDN-banner%20(2).png','size' => 300]);
            OpenGraph::addImage('https://patict.vn/index/img/QLDN-banner%20(2).png', ['height' => 300, 'width' => 300]);

            Twitter::setTitle('PAT- GIẢI PHÁP- QUẢN LÝ DOANH NGIỆP');
            Twitter::setSite('@LuizVinicius73');

  
            $khodemo =  Khosanpham::select('kho_sanphams.id','kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','kho_sanphams.note','languages.title')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
        ->where('kho_sanphams.note','Đã hoàn thành')
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
            return view('index.giaiphap_doanhnghiep',compact('khodemo','lang','menu_c1','menu_bv'));
        }elseif($menu_baiviet['slug'] == 'chinh-phu-dien-tu' || $menu_baiviet['slug'] == 'e-government'){

            SEOMeta::setTitle('PAT- GIẢI PHÁP- CHÍNH PHỦ ĐIỆN TỬ', false);
            SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            SEOMeta::addKeyword('chính phủ điện tử, chính phủ điện tử 4.0, giải pháp thành phố thông minh');
            SEOMeta::addMeta('article:section', 'Giải Pháp', 'property');
            OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            OpenGraph::setTitle('PAT- GIẢI PHÁP- CHÍNH PHỦ ĐIỆN TỬ');
            OpenGraph::setUrl('https://patict.vn/giai-phap/quan-ly-doanh-nghiep');
            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'pt-br');
            OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

            OpenGraph::addImage('https://patict.vn/index/img/CPDT-banner.png');
            OpenGraph::addImage(['url' => 'https://patict.vn/index/img/CPDT-banner.png','size' => 300]);
            OpenGraph::addImage('https://patict.vn/index/img/CPDT-banner.png', ['height' => 300, 'width' => 300]);

            Twitter::setTitle('PAT- GIẢI PHÁP- CHÍNH PHỦ ĐIỆN TỬ');
            Twitter::setSite('@LuizVinicius73');

            $khodemo =  Khosanpham::select('kho_sanphams.id','kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','kho_sanphams.note','languages.title')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
        ->where('kho_sanphams.note','Đã hoàn thành')
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
            return view('index.giaiphap_dientu',compact('khodemo','lang','menu_c1','menu_bv'));
        }elseif($menu_baiviet['slug'] == 'maketing-online' || $menu_baiviet['slug'] == 'maketing-online1'){

            SEOMeta::setTitle('PAT- GIẢI PHÁP- MARKETING ONLINE', false);
            SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            SEOMeta::addKeyword('marketing online, dịch vụ marketing online, giải pháp marketing online');
            SEOMeta::addMeta('article:section', 'Giải Pháp', 'property');
            OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            OpenGraph::setTitle('PAT- GIẢI PHÁP- MARKETING ONLINE');
            OpenGraph::setUrl('https://patict.vn/giai-phap/maketing-online');
            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'pt-br');
            OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

            OpenGraph::addImage('https://patict.vn/index/img/MO-banner.png');
            OpenGraph::addImage(['url' => 'https://patict.vn/index/img/MO-banner.png','size' => 300]);
            OpenGraph::addImage('https://patict.vn/index/img/MO-banner.png', ['height' => 300, 'width' => 300]);

            Twitter::setTitle('PAT- GIẢI PHÁP- MARKETING ONLINE');
            Twitter::setSite('@LuizVinicius73');


            $khodemo =  Khosanpham::select('kho_sanphams.id','kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','kho_sanphams.note','languages.title')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
        ->where('kho_sanphams.note','Đã hoàn thành')
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
            return view('index.giaiphap_online',compact('khodemo','lang','menu_c1','menu_bv'));
        }
        
    }
}
