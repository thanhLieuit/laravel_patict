<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lienhe;
use App\Saver_email;
use App\Menu_baiviet;
use App\Menu_baiviet_lang;
use App\Menu_c1;
use App\Menu_c1_lang;
use DB;
use DateTime;
use Mail;
use Illuminate\Support\Facades\Validator;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;

class LienheController extends Controller
{
    public function getlienhe(){
        SEOMeta::setTitle('PAT- LIÊN HỆ', false);
        SEOMeta::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        SEOMeta::addKeyword('thiết kế website, dịch vụ seo từ khóa, maketing online');
        SEOMeta::addMeta('article:section', 'Liên Hệ', 'property');
        OpenGraph::setDescription('Công ty PAT chuyên cung cấp các dịch vụ về thiết kế và lập trình web, dịch vụ seo từ khóa, quảng cáo google, facebook, lập trình ứng dụng, dịch vụ quản trị web, các giải pháp maketing online.');
        OpenGraph::setTitle('PAT- LIÊN HỆ');
        OpenGraph::setUrl('https://patict.vn/lien-he');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_58_dy_pattern.png');
        OpenGraph::addImage(['url' => 'https://patict.vn/index/img/Mask_Group_58_dy_pattern.png','size' => 300]);
        OpenGraph::addImage('https://patict.vn/index/img/Mask_Group_58_dy_pattern.png', ['height' => 300, 'width' => 300]);

        Twitter::setTitle('PAT- LIÊN HỆ');
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
    	return view('index.lienhe',compact('menu_c1','menu_bv','lang'));
    }
    public function postlienhe(Request $request){
    	$lienhe = new Lienhe();
    	$lienhe->name_khachhang = $request->tenkh;
    	$lienhe->name_cty = $request->tencty;
    	$lienhe->email = $request->email;
    	$lienhe->phone = $request->phone;
    	$lienhe->tieude= $request->title;
    	$lienhe->noidung= $request->noidung;
        $lienhe->note= 'chưa nhận';
    	$lienhe->created_at = new DateTime();
    	$lienhe->save();
    	return redirect()->back();
    }
    public function postytuong(Request $request){
        $pattern = [
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'noidung' =>'required',
           ];

           $messenger = [
                'email.required' => 'Trường email không được để trống',
                'email.email' => 'email không đúng định dạng',
                'phone.required' => 'bạn không được để trường phone trống',
                'phone.numeric' => 'Bạn nhập không đúng định dạng',
                'noidung.required' => 'Bạn không được để trường noidung trống',

           ];
            $validate=Validator::make($request->all(),$pattern,$messenger);
        if ($validate->fails()) {

         return back()->withErrors($validate)->withInput();
        }else{
            $ytuong = new Lienhe();
            $ytuong->name_khachhang = $request->ten;
         
            $ytuong->email = $request->email;
            $ytuong->phone = $request->phone;
            $ytuong->tieude= 'ý tưởng mới';
            $ytuong->noidung= $request->noidung;
            $ytuong->note= 'chưa nhận';
            $ytuong->created_at = new DateTime();
            $ytuong->save();
           
            return redirect()->back()->with('alert','Cảm ơn bạn đã gửi thông tin, chúng tôi sẽ liên hệ bạn sớm nhất.');
        }
       
    }
    public function postnhantin(Request $request){
        $pattern = [
            'email' => 'required|email',
           ];

           $messenger = [
                'email.required' => 'Trường email không được để trống',
                'email.email' => 'email không đúng định dạng',
           ];
            $validate=Validator::make($request->all(),$pattern,$messenger);
        if ($validate->fails()) {

         return back()->withErrors($validate)->withInput();
        }else{
        $save_email = New Saver_email();
        $save_email->email = $request->search;
      //  dd($save_email);
       $save_email->save();
        

        return redirect()->back()->with('alert','Cảm ơn bạn đã đăng ký');
        }
    }
}
