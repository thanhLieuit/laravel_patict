<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tuyendung;
use Datetime;
use App\Menu_baiviet;
use App\Menu_baiviet_lang;
use App\Menu_c1;
use App\Menu_c1_lang;
use Illuminate\Support\Facades\Validator;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;

class TuyendungController extends Controller
{
    public function tuyendung(){
        SEOMeta::setTitle('PAT- TUYỂN DỤNG', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thiết kế website, dịch vụ seo từ khóa, maketing online');
        SEOMeta::addMeta('article:section', 'Tuyển Dụng', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- TUYỂN DỤNG');
        OpenGraph::setUrl('https://patict.vn/tuyen-dung');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_23_fh_pattern.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- TUYỂN DỤNG');
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
    	return view('index.tuyendung',compact('menu_c1','menu_bv','lang'));
    }
    public function getdesign(){
        SEOMeta::setTitle('PAT- TUYỂN DỤNG', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thiết kế website, dịch vụ seo từ khóa, maketing online');
        SEOMeta::addMeta('article:section', 'Tuyển Dụng', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- TUYỂN DỤNG');
        OpenGraph::setUrl('https://patict.vn/tuyen-dung-design');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_23_fh_pattern.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- TUYỂN DỤNG');
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
    	return view('index.tuyendung_design_ux',compact('menu_c1','menu_bv','lang'));
    }
    public function postdesign(Request $request){
       
         $pattern = [
            'hoten' => 'required|unique:tuyendungs',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'congcu' =>'required',
            'kinhnghiem'=>'required',
            'mongmuon'=>'required',
            'muctieu' =>'required',
            'lydo'=>'required',

   ];

   $messenger = [
        'hoten.required' => 'Bạn không được để trường hoten trống',
        'email.required' => 'Trường email không được để trống',
        'email.email' => 'email không đúng định dạng',
        'phone.required' => 'bạn không được để trường phone trống',
        'phone.numeric' => 'Bạn nhập không đúng định dạng',
        'congcu.required' => 'Bạn không được để trống',
        'kinhnghiem.required' => 'Bạn không được để trống',
        'mongmuon.required' => 'Bạn không được để trống',
        'lydo.required' => 'Bạn không được để trống',
        'muctieu.required' => 'Bạn không được để trống',

   ];
        $validate=Validator::make($request->all(),$pattern,$messenger);
        if ($validate->fails()) {

         return back()->withErrors($validate)->withInput();
        }else {
            $tuyendung = new Tuyendung();
            $tuyendung->hoten = $request->old('hoten');
        $tuyendung->email = $request->old('email');
        $tuyendung->phone = $request->phone;
        if(isset($request->optradio)){
            $tuyendung->vitri = $request->optradio;
        }
        $tuyendung->congcu = $request->congcu;
        $tuyendung->kinhnghiem = $request->kinhnghiem;
        $tuyendung->mongmuon = $request->mongmuon;
        $tuyendung->muctieu = $request->muctieu;
        $tuyendung->lydo = $request->lydo;
        $tuyendung->portfolio = $request->port;
        $tuyendung->linkcv = $request->linkcv;
        $tuyendung->cauhoi = $request->cauhoi;
        $tuyendung->note = 'chưa nhận';
        $tuyendung->created_at = new datetime();
        $tuyendung->save();
        session()->flash('success', 'Cảm ơn bạn đã hoàn thành hồ sơ ứng tuyển. Chúng tôi sẽ liên hệ sớm nhất.');

        return redirect()->back();
        
        }
        
    	
    }
    public function getengineering(){
        SEOMeta::setTitle('PAT- TUYỂN DỤNG', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thiết kế website, dịch vụ seo từ khóa, maketing online');
        SEOMeta::addMeta('article:section', 'Tuyển Dụng', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- TUYỂN DỤNG');
        OpenGraph::setUrl('https://patict.vn/tuyen-dung-engineering');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_23_fh_pattern.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- TUYỂN DỤNG');
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
    	return view('index.tuyendung_engineering',compact('menu_c1','menu_bv','lang'));
    }
    public function postengineering(Request $request){
         $pattern = [
            'hoten' => 'required|unique:tuyendungs',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'congcu' =>'required',
            'kinhnghiem'=>'required',
            'mongmuon'=>'required',
            'muctieu' =>'required',
            'lydo'=>'required',

   ];

   $messenger = [
        'hoten.required' => 'Bạn không được để trường hoten trống',
        'email.required' => 'Trường email không được để trống',
        'email.email' => 'email không đúng định dạng',
        'phone.required' => 'bạn không được để trường phone trống',
        'phone.numeric' => 'Bạn nhập không đúng định dạng',
        'congcu.required' => 'Bạn không được để trống',
        'kinhnghiem.required' => 'Bạn không được để trống',
        'mongmuon.required' => 'Bạn không được để trống',
        'lydo.required' => 'Bạn không được để trống',
        'muctieu.required' => 'Bạn không được để trống',

   ];
        $validate=Validator::make($request->all(),$pattern,$messenger);
        if ($validate->fails()) {

         return back()->withErrors($validate)->withInput();
        }else {
    	$tuyendung = new Tuyendung();
    	$tuyendung->hoten = $request->hoten;
    	$tuyendung->email = $request->email;
    	$tuyendung->phone = $request->phone;
    	if(isset($request->optradio)){
    		$tuyendung->vitri = $request->optradio;
    	}
    	$tuyendung->congcu = $request->congcu;
    	$tuyendung->kinhnghiem = $request->kinhnghiem;
    	$tuyendung->mongmuon = $request->mongmuon;
    	$tuyendung->muctieu = $request->muctieu;
    	$tuyendung->lydo = $request->lydo;
    	$tuyendung->portfolio = $request->port;
    	$tuyendung->linkcv = $request->linkcv;
    	$tuyendung->cauhoi = $request->cauhoi;
    	$tuyendung->note = 'chưa nhận';
    	$tuyendung->created_at = new datetime();
    	$tuyendung->save();
        session()->flash('success', 'Cảm ơn bạn đã hoàn thành hồ sơ ứng tuyển. Chúng tôi sẽ liên hệ sớm nhất.');
    	return redirect()->back();
    }
    }
    public function getsalemark(){
        SEOMeta::setTitle('PAT- TUYỂN DỤNG', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thiết kế website, dịch vụ seo từ khóa, maketing online');
        SEOMeta::addMeta('article:section', 'Tuyển Dụng', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- TUYỂN DỤNG');
        OpenGraph::setUrl('https://patict.vn/tuyen-dung-sale-marketing');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_23_fh_pattern.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- TUYỂN DỤNG');
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
    	return view('index.tuyendung_sale_mark',compact('menu_c1','menu_bv','lang'));
    }
    public function postsalemark(Request $request){
         $pattern = [
            'hoten' => 'required|unique:tuyendungs',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'congcu' =>'required',
            'kinhnghiem'=>'required',
            'mongmuon'=>'required',
            'muctieu' =>'required',
            'lydo'=>'required',

   ];

   $messenger = [
        'hoten.required' => 'Bạn không được để trường hoten trống',
        'email.required' => 'Trường email không được để trống',
        'email.email' => 'email không đúng định dạng',
        'phone.required' => 'bạn không được để trường phone trống',
        'phone.numeric' => 'Bạn nhập không đúng định dạng',
        'congcu.required' => 'Bạn không được để trống',
        'kinhnghiem.required' => 'Bạn không được để trống',
        'mongmuon.required' => 'Bạn không được để trống',
        'lydo.required' => 'Bạn không được để trống',
        'muctieu.required' => 'Bạn không được để trống',

   ];
        $validate=Validator::make($request->all(),$pattern,$messenger);
        if ($validate->fails()) {

         return back()->withErrors($validate)->withInput();
        }else {
    	$tuyendung = new Tuyendung();
    	$tuyendung->hoten = $request->hoten;
    	$tuyendung->email = $request->email;
    	$tuyendung->phone = $request->phone;
    	if(isset($request->optradio)){
    		$tuyendung->vitri = $request->optradio;
    	}
    	$tuyendung->congcu = $request->congcu;
    	$tuyendung->kinhnghiem = $request->kinhnghiem;
    	$tuyendung->mongmuon = $request->mongmuon;
    	$tuyendung->muctieu = $request->muctieu;
    	$tuyendung->lydo = $request->lydo;
    	$tuyendung->portfolio = $request->port;
    	$tuyendung->linkcv = $request->linkcv;
    	$tuyendung->cauhoi = $request->cauhoi;
    	$tuyendung->note = 'chưa nhận';
    	$tuyendung->created_at = new datetime();
    	$tuyendung->save();
        session()->flash('success', 'Cảm ơn bạn đã hoàn thành hồ sơ ứng tuyển. Chúng tôi sẽ liên hệ sớm nhất.');
    	return redirect()->back();
    }
    }
    public function getseo(){
        SEOMeta::setTitle('PAT- TUYỂN DỤNG', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thiết kế website, dịch vụ seo từ khóa, maketing online');
        SEOMeta::addMeta('article:section', 'Tuyển Dụng', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- TUYỂN DỤNG');
        OpenGraph::setUrl('https://patict.vn/tuyen-dung-seo');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_23_fh_pattern.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_23_fh_pattern.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- TUYỂN DỤNG');
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
    	return view('index.tuyendung_seo',compact('menu_c1','menu_bv','lang'));
    }
    public function postseo(Request $request){
        $pattern = [
            'hoten' => 'required|unique:tuyendungs',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'congcu' =>'required',
            'kinhnghiem'=>'required',
            'mongmuon'=>'required',
            'muctieu' =>'required',
            'lydo'=>'required',

   ];

   $messenger = [
        'hoten.required' => 'Bạn không được để trường hoten trống',
        'email.required' => 'Trường email không được để trống',
        'email.email' => 'email không đúng định dạng',
        'phone.required' => 'bạn không được để trường phone trống',
        'phone.numeric' => 'Bạn nhập không đúng định dạng',
        'congcu.required' => 'Bạn không được để trống',
        'kinhnghiem.required' => 'Bạn không được để trống',
        'mongmuon.required' => 'Bạn không được để trống',
        'lydo.required' => 'Bạn không được để trống',
        'muctieu.required' => 'Bạn không được để trống',

   ];
        $validate=Validator::make($request->all(),$pattern,$messenger);
        if ($validate->fails()) {

         return back()->withErrors($validate)->withInput();
        }else {
    	$tuyendung = new Tuyendung();
    	$tuyendung->hoten = $request->hoten;
    	$tuyendung->email = $request->email;
    	$tuyendung->phone = $request->phone;
    	if(isset($request->optradio)){
    		$tuyendung->vitri = $request->optradio;
    	}
    	$tuyendung->congcu = $request->congcu;
    	$tuyendung->kinhnghiem = $request->kinhnghiem;
    	$tuyendung->mongmuon = $request->mongmuon;
    	$tuyendung->muctieu = $request->muctieu;
    	$tuyendung->lydo = $request->lydo;
    	$tuyendung->portfolio = $request->port;
    	$tuyendung->linkcv = $request->linkcv;
    	$tuyendung->cauhoi = $request->cauhoi;
    	$tuyendung->note = 'chưa nhận';
    	$tuyendung->created_at = new datetime();
    	$tuyendung->save();
        session()->flash('success', 'Cảm ơn bạn đã hoàn thành hồ sơ ứng tuyển. Chúng tôi sẽ liên hệ sớm nhất.');
    	return redirect()->back();
    }
    }
}
