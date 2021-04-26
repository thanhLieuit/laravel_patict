<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu_baiviet;
use App\Menu_baiviet_lang;
use App\Menu_c1;
use App\Menu_c1_lang;
use App\Baiviet;
use App\Baiviet_lang;
use App\Language;
use Carbon\Carbon;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
use DB;
use App\Tag;
use App\Tag_lang;

class TintucController extends Controller
{
    public function news(){

        SEOMeta::setTitle('PAT- TIN TỨC', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thiết kế website, dịch vụ seo từ khóa, maketing online');
        SEOMeta::addMeta('article:section', 'Dự Án', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- TIN TỨC');
        OpenGraph::setUrl('https://patict.vn/tin-tuc');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_23_fh_pattern.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- TIN TỨC');
        Twitter::setSite('@LuizVinicius73');

    	$baivietvecty= Baiviet::select('baiviets_lang.name_baiviet','baiviets_lang.tomtat','baiviets.image','baiviets.id','baiviets.created_at','baiviets_lang.slug','languages.title')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->join('menu_baiviets','menu_baiviets.id','=','baiviets.id_menu_baiviet')
        ->join('languages','languages.id','=','baiviets_lang.id_lang')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->where('menu_baiviets_lang.slug','ve-cong-ty')->orderBy('baiviets.id','desc' )
        ->get();
    	
    	$baivietcamnang= Baiviet::select('baiviets_lang.name_baiviet','baiviets_lang.tomtat','baiviets.image','baiviets.id','baiviets.created_at','baiviets_lang.slug','languages.title')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->join('menu_baiviets','menu_baiviets.id','=','baiviets.id_menu_baiviet')
        ->join('languages','languages.id','=','baiviets_lang.id_lang')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->where('menu_baiviets_lang.slug','cam-nang-cong-nghe')->orderBy('baiviets.id','desc' )
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

    	return view('index.news',compact('baivietvecty','baivietcamnang','lang','menu_c1','menu_bv'));
    }
    public function newsdetail($id){
        $baiviet1 = Baiviet::select('baiviets_lang.slug','baiviets.image','baiviets_lang.tomtat','baiviets_lang.name_baiviet','baiviets_lang.keywork')
         ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
         ->where('baiviets_lang.slug',$id)->first();
        SEOMeta::setTitle($baiviet1->name_baiviet , false);
        SEOMeta::setDescription($baiviet1->tomtat);
        SEOMeta::addKeyword($baiviet1->keywork);
        SEOMeta::addMeta('article:section', 'Dự Án', 'property');
        OpenGraph::setDescription($baiviet1->tomtat);
        OpenGraph::setTitle($baiviet1->name_baiviet);
        OpenGraph::setUrl('https://patict.vn/chi-tiet-tin-tuc/'.$baiviet1->slug);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/img/'.$baiviet1->image);
        OpenGraph::addImage(['url' => 'https://patict.vn/img/'.$baiviet1->image,'size' => 300]);
        OpenGraph::addImage('https://patict.vn/img/'.$baiviet1->image, ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- TIN TỨC');
        Twitter::setSite('@LuizVinicius73');

        $baiviet1 = Baiviet::select('baiviets.id')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->where('baiviets_lang.slug',$id)->first();
        
    	$baiviet = Baiviet::select('baiviets.id','languages.title','baiviets_lang.name_baiviet','baiviets_lang.updated_at','baiviets_lang.noidung','baiviets.id_menu_baiviet','users.name','baiviets_lang.slug')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->join('languages','languages.id','=','baiviets_lang.id_lang')
        ->join('users','users.id','=','baiviets.id_user')
        ->where('baiviets.id',$baiviet1->id)
        ->get();
        
 		$tag1 = Baiviet::select('baiviets_lang.id')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->where('baiviets_lang.slug',$id)
        ->first();
        $tag2 = Tag::select("tags_lang.name",'tags_lang.slug','languages.title')
        ->join('tags_lang','tags_lang.id_tag','=','tags.id')
        ->join('tags_baiviet','tags_baiviet.id_tag','=','tags.id')
        ->join('languages','languages.id','=','tags_lang.id_lang')
        ->where('tags_baiviet.id_baiviets_lang',$tag1->id)->get();
        
        $baivietmoivn = Baiviet::select('baiviets_lang.name_baiviet','baiviets_lang.tomtat','baiviets.image','baiviets.id','baiviets.created_at','baiviets_lang.slug','languages.title')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->join('menu_baiviets','menu_baiviets.id','=','baiviets.id_menu_baiviet')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->join('languages','languages.id','=','baiviets_lang.id_lang')
        ->where('menu_baiviets_lang.slug','cam-nang-cong-nghe')
        ->orwhere('menu_baiviets_lang.slug','Ve-cong-ty')
        ->get();
     
        $baivietmoien=  Baiviet::select('baiviets_lang.name_baiviet','baiviets_lang.tomtat','baiviets.image','baiviets.id','baiviets.created_at','baiviets_lang.slug','languages.title')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->join('menu_baiviets','menu_baiviets.id','=','baiviets.id_menu_baiviet')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->join('languages','languages.id','=','baiviets_lang.id_lang')
        ->where('menu_baiviets_lang.slug','cam-nang-cong-nghe')
        ->orwhere('menu_baiviets_lang.slug','Ve-cong-ty')
        ->get();
        
        $baivietlienquanvn = Baiviet::select('baiviets_lang.name_baiviet','baiviets_lang.tomtat','baiviets.image','baiviets.id','baiviets.created_at','baiviets_lang.slug','languages.title')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->join('menu_baiviets','menu_baiviets.id','=','baiviets.id_menu_baiviet')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->join('languages','languages.id','=','baiviets_lang.id_lang')
        ->where('menu_baiviets_lang.slug','cam-nang-cong-nghe')
        ->get();

        $baivietlienquanen= Baiviet::select('baiviets_lang.name_baiviet','baiviets_lang.tomtat','baiviets.image','baiviets.id','baiviets.created_at','baiviets_lang.slug','languages.title')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->join('menu_baiviets','menu_baiviets.id','=','baiviets.id_menu_baiviet')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->join('languages','languages.id','=','baiviets_lang.id_lang')
        ->where('menu_baiviets_lang.slug','Ve-cong-ty')
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
        return view('index.news_detail',compact('baiviet','baivietlienquanvn','lang','baivietlienquanen','menu_c1','menu_bv','tag2','baivietmoivn','baivietmoien'));
    }
    public function tag($id){
        $menu_c1 = Menu_c1::select('menus_c1.id','menus_c1_lang.name_menu_c1','menus_c1.image','menus_c1_lang.slug','languages.title')
        ->join('menus_c1_lang','menus_c1.id','=','menus_c1_lang.id_menus_c1')
        ->join('languages','languages.id','=','menus_c1_lang.id_lang')
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

        $tag1 = Tag::select('tags.id')
        ->join('tags_lang','tags_lang.id_tag','=','tags.id')
        ->where('slug',$id)
        ->first();
        
        $tag2 = Tag::select('tags.id','tags_lang.name','languages.title')
        ->join('tags_lang','tags_lang.id_tag','=','tags.id')
        ->join('languages','languages.id','=','tags_lang.id_lang')
        ->where('tags.id',$tag1->id)
        ->get();
        
        $baiviet = Baiviet::select('baiviets.id','languages.title','baiviets_lang.name_baiviet','baiviets_lang.noidung','baiviets.image','baiviets_lang.slug')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->join('languages','languages.id','=','baiviets_lang.id_lang')
        ->join('tags_baiviet','tags_baiviet.id_baiviets_lang','=','baiviets_lang.id')
        ->where('tags_baiviet.id_tag',$tag1->id)
        ->get();
       
        return view('index.tag',compact('menu_c1','menu_bv','lang','baiviet','tag2'));
    }
}
