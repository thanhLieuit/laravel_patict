<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu_c1;
use App\Menu_c1_lang;
use App\Menu_baiviet;
use App\Menu_baiviet_lang;
use App\Menu_con;
use App\Menu_con_lang;
use App\Baiviet;
use App\Danhgiadt;
use App\Loiich;
use App\Loiich_lang;
use App\Khosanpham;
use App\Khosanpham_lang;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;

class DichvuController extends Controller
{
    private $menu_cons;
    private $kho_sanphams;
    public function __construct(Menu_con $menu_cons, Khosanpham $kho_sanphams)
    {
      
        $this->menu_cons = $menu_cons;
        $this->kho_sanphams = $kho_sanphams;
    }
    public function service(){
        SEOMeta::setTitle('PAT- DỊCH VỤ', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thiết kế website, dịch vụ seo từ khóa, maketing online');
        SEOMeta::addMeta('article:section', 'Dịch Vụ', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- DỊCH VỤ');
        OpenGraph::setUrl('https://patict.vn/dich-vu');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/banner-DV.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/banner-DV.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/banner-DV.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- DỊCH VỤ');
        Twitter::setSite('@LuizVinicius73');

        $lang =app()->getLocale();
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
        $loiich = Loiich::select('loiichs.id','loiichs.image','loiichs_lang.name_loiich','languages.title')
        ->join('loiichs_lang','loiichs_lang.id_loiich','=','loiichs.id')
        ->join('languages','languages.id','=','loiichs_lang.id_lang')->get();

    	return view('index.service',compact('menu_c1','loiich','lang','menu_bv'));
    }
    public function servicelaptrinhbatdau(){
        return view('index.service_laptrinh_batdau');
    }

    public function servicethietkewebsite($id){
    	$menu_c1 = Menu_c1::select('menus_c1_lang.slug')->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')->where('menus_c1_lang.slug',$id)->first();
    	if($menu_c1['slug'] == "thiet-ke-website" || $menu_c1['slug'] == "website-design"){

            SEOMeta::setTitle('PAT- DỊCH VỤ- THIẾT KẾ WEBSITE', false);
            SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            SEOMeta::addKeyword('thiết kế website, thiết kế website giá rẻ, thiết kế website chuẩn seo');
            SEOMeta::addMeta('article:section', 'Dịch Vụ', 'property');
            OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            OpenGraph::setTitle('PAT- DỊCH VỤ- THIẾT KẾ WEBSITE');
            OpenGraph::setUrl('https://patict.vn/dich-vu/'.$menu_c1->slug);

            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'pt-br');
            OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

            OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png');
            OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_18_rr_pattern.png','size' => 300]);
            OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png', ['height' => 300, 'width' => 300]);

            Twitter::setTitle('PAT- DỊCH VỤ- THIẾT KẾ WEBSITE');
            Twitter::setSite('@LuizVinicius73');


        
            $sanphamdn =  Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
            ->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menus_c1_lang.slug',$id)
            ->where('menu_cons_lang.slug','doanh-nghiep')
            ->get();
            
            $lang =app()->getLocale();
 

            $sanphambh = Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
            ->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menus_c1_lang.slug',$id)
            ->where('menu_cons_lang.slug','ban-hang')
            ->get();
           // dd($sanphambh);
            $baiviettt = Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
            ->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menus_c1_lang.slug',$id)
            ->where('menu_cons_lang.slug','tin-tuc')->get();

            $baiviettmdt = Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
            ->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menus_c1_lang.slug',$id)
            ->where('menu_cons_lang.slug','thuong-mai-dien-tu')->get();

            $baiviettktyc = Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
            ->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menus_c1_lang.slug',$id)
            ->where('menu_cons_lang.slug','thiet-ke-theo-yeu-cau')->get();
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
            return view('index.thiet-ke-website',compact('sanphamdn','sanphambh','baiviettt','baiviettmdt','baiviettktyc','lang','menu_c1','menu_bv'));
        }elseif($menu_c1['slug'] == "lap-trinh-phan-mem" || $menu_c1['slug'] == "programming-Software"){

            SEOMeta::setTitle('PAT- DỊCH VỤ- LẬP TRÌNH PHẦN MỀM', false);
            SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            SEOMeta::addKeyword('lập trình phần mềm, công ty lập trình phần mềm, lập trình website');
            SEOMeta::addMeta('article:section', 'Dịch Vụ', 'property');
            OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            OpenGraph::setTitle('PAT- DỊCH VỤ- LẬP TRÌNH PHẦN MỀM');
            OpenGraph::setUrl('https://patict.vn/dich-vu/'.$menu_c1->slug);
            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'pt-br');
            OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

            OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png');
            OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_18_rr_pattern.png','size' => 300]);
            OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png', ['height' => 300, 'width' => 300]);

            Twitter::setTitle('PAT- DỊCH VỤ- LẬP TRÌNH PHẦN MỀM');
            Twitter::setSite('@LuizVinicius73');

            $lang =app()->getLocale();

            $baivietweb = Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
             ->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menus_c1_lang.slug',$id)->where('menu_cons_lang.slug','quan-ly')->get();
           
            $baivietapp = Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
             ->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menus_c1_lang.slug',$id)->where('menu_cons_lang.slug','ung-dung')->get();

            $baivietsoft = Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.slug','kho_sanphams_lang.tomtat','kho_sanphams.image','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
             ->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menus_c1_lang.slug',$id)->where('menu_cons_lang.slug','trinh-bien-dich')->get();
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
            return view('index.lap-trinh-phan-mem',compact('baivietweb','baivietapp','baivietsoft','lang','menu_c1','menu_bv'));

        }elseif($menu_c1['slug'] == "ung-dung-mobile" || $menu_c1['slug'] == "mobile-application"){

            SEOMeta::setTitle('PAT- DỊCH VỤ- ỨNG DỤNG MOBILE', false);
            SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            SEOMeta::addKeyword('ứng dụng mobile, công ty lập trình ứng dụng mobile, lập trình ứng dụng mobile');
            SEOMeta::addMeta('article:section', 'Dịch Vụ', 'property');
            OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            OpenGraph::setTitle('PAT- DỊCH VỤ- ỨNG DỤNG MOBILE');
            OpenGraph::setUrl('https://patict.vn/dich-vu/'.$menu_c1->slug);
            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'pt-br');
            OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

            OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png');
            OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_18_rr_pattern.png','size' => 300]);
            OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png', ['height' => 300, 'width' => 300]);

            Twitter::setTitle('PAT- DỊCH VỤ- ỨNG DỤNG MOBILE');
            Twitter::setSite('@LuizVinicius73');
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
            return view('index.service_mobi',compact('menu_c1','menu_bv','lang'));
        }elseif($menu_c1['slug'] == "seo-top-google" || $menu_c1['slug'] == "seo-top-google1"){

            SEOMeta::setTitle('PAT- DỊCH VỤ- SEO TOP GOOGLE', false);
            SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            SEOMeta::addKeyword('dịch vụ seo từ khóa, dịch vụ seo top google, seo từ khóa');
            SEOMeta::addMeta('article:section', 'Dịch Vụ', 'property');
            OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            OpenGraph::setTitle('PAT- DỊCH VỤ- SEO TOP GOOGLE');
            OpenGraph::setUrl('https://patict.vn/dich-vu/'.$menu_c1->slug);
            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'pt-br');
            OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

            OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png');
            OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_18_rr_pattern.png','size' => 300]);
            OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png', ['height' => 300, 'width' => 300]);

            Twitter::setTitle('PAT- DỊCH VỤ- SEO TOP GOOGLE');
            Twitter::setSite('@LuizVinicius73');

            $lang =app()->getLocale();
            $baivietseo =  Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.noidung','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
             ->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menus_c1_lang.slug',$id)->where('menu_cons_lang.slug','seo-top-google')->get();
            //dd($baivietseo);
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
           return view('index.seo-top-google',compact('baivietseo','lang','menu_c1','menu_bv'));
    	}elseif($menu_c1['slug'] == "quan-tri-website" || $menu_c1['slug'] == "admin-website"){

            SEOMeta::setTitle('PAT- DỊCH VỤ- QUẢN TRỊ WEBSITE', false);
            SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            SEOMeta::addKeyword('quản trị website, dịch vụ quản trị website, dịch vụ quản trị website giá rẻ');
            SEOMeta::addMeta('article:section', 'Dịch Vụ', 'property');
            OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            OpenGraph::setTitle('PAT- DỊCH VỤ- QUẢN TRỊ WEBSITE');
            OpenGraph::setUrl('https://patict.vn/dich-vu/'.$menu_c1->slug);
            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'pt-br');
            OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

            OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png');
            OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_18_rr_pattern.png','size' => 300]);
            OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png', ['height' => 300, 'width' => 300]);

            Twitter::setTitle('PAT- DỊCH VỤ- QUẢN TRỊ WEBSITE');
            Twitter::setSite('@LuizVinicius73');

            $lang =app()->getLocale();
  			$baivietqt = Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.noidung','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
             ->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menus_c1_lang.slug',$id)->where('menu_cons_lang.slug','quan-tri-website')->get();
  
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
           return view('index.quan-tri-web',compact('baivietqt','lang','menu_c1','menu_bv'));
        }elseif($menu_c1['slug'] == "google-ads-facebook-ads" || $menu_c1['slug'] == "google-ads-facebook-ads1"){

            SEOMeta::setTitle('PAT- DỊCH VỤ- GOOGLE ADS FACEBOOK ADS', false);
            SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            SEOMeta::addKeyword('dịch vụ quảng cáo google ads, dịch vụ quảng cáo facebook ads, nhận chạy quảng cáo google');
            SEOMeta::addMeta('article:section', 'Dịch Vụ', 'property');
            OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
            OpenGraph::setTitle('PAT- DỊCH VỤ- GOOGLE ADS FACEBOOK ADS');
            OpenGraph::setUrl('https://patict.vn/dich-vu/'.$menu_c1->slug);
            OpenGraph::addProperty('type', 'article');
            OpenGraph::addProperty('locale', 'pt-br');
            OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

            OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png');
            OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_18_rr_pattern.png','size' => 300]);
            OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_18_rr_pattern.png', ['height' => 300, 'width' => 300]);

            Twitter::setTitle('PAT- DỊCH VỤ- GOOGLE ADS FACEBOOK ADS');
            Twitter::setSite('@LuizVinicius73');

            $lang =app()->getLocale();
            $baivietgg = Khosanpham::select('kho_sanphams_lang.name_sanpham','kho_sanphams_lang.noidung','languages.title')
            ->join('menu_khos','menu_khos.id_kho','=','kho_sanphams.id')
            ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
            ->join('menu_cons','menu_cons.id','=','menu_khos.id_menu_con')
            ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
            ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
             ->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')
            ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
            ->where('menus_c1_lang.slug',$id)->where('menu_cons_lang.slug','google-ads-facebook-ads')->get();
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
           return view('index.google-adwork',compact('baivietgg','lang','menu_c1','menu_bv'));
        }

       
    }
   
    public function dichvu(){
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
    	return view('index.body',compact('menu_c1','lang','menu_bv'));

    }
    public function chitietdichvu($id){
        $sanpham = Khosanpham::select('kho_sanphams.id','kho_sanphams.image','kho_sanphams_lang.name_sanpham','kho_sanphams_lang.tomtat','kho_sanphams_lang.slug','kho_sanphams_lang.keywork')->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->where('kho_sanphams_lang.slug',$id)->first();
        SEOMeta::setTitle($sanpham->name_sanpham, false);
        SEOMeta::setDescription($sanpham->tomtat);
        SEOMeta::addKeyword($sanpham->keywork);
        SEOMeta::addMeta('article:section', 'Dịch Vụ', 'property');
        OpenGraph::setDescription($sanpham->tomtat);
        OpenGraph::setTitle($sanpham->name_sanpham);
        OpenGraph::setUrl('http://patict.vn/chi-tiet-san-pham/'.$sanpham->slug);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('http://patict.vn/index/img/'.$sanpham->image);
        OpenGraph::addImage(['url' => 'http://patict.vn/index/img'.$sanpham->image,'size' => 300]);
        OpenGraph::addImage('http://patict.vn/index/img/'.$sanpham->image, ['height' => 300, 'width' => 300]);

        Twitter::setTitle($sanpham->name_sanpham);
        Twitter::setSite('@LuizVinicius73');
        $baiviet1 = Khosanpham::select('kho_sanphams.id')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->where('kho_sanphams_lang.slug',$id)->first();
        $baiviet = Khosanpham::select('kho_sanphams.id','kho_sanphams.image','kho_sanphams_lang.name_sanpham','kho_sanphams_lang.noidung','kho_sanphams_lang.slug','kho_sanphams.link','languages.title')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->join('languages','languages.id','=','kho_sanphams_lang.id_lang')
        ->where('kho_sanphams.id', $baiviet1->id)
        ->get();
      // dd($baiviet);
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
    	return view('index.sanpham_detail',compact('baiviet','danhgiadt','lang','menu_c1','menu_bv'));
    }
}
