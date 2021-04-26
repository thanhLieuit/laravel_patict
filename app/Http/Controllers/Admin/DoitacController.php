<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Datetime;
use App\Doitac;
use App\Danhgiadt;
use App\Danhgiadt_lang;
use App\Danhgiakh;
use App\Danhgiakh_lang;
use App\nhatky;
use Carbon\Carbon;
use auth;
use App\Language;

class DoitacController extends Controller
{
    public function getinsertdoitac(){
    	return view('admin.insertdoitac');
    }
    public function postinsertdoitac(Request $request){
    	if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);
            $doitac = new Doitac();
            $doitac->name_doitac = $request->name_doitac;
            $doitac->image = $file_name =$file->getClientOriginalName('file');
            $doitac->note = $request->note;
            $doitac->created_at = new DateTime();
            $doitac->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm một đối tác';
            $nhatky->save();
        }else{
        	$doitac = new Doitac();
            $doitac->name_doitac = $request->name_doitac;
            $doitac->note = $request->note;
            $doitac->created_at = new DateTime();
            $doitac->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm một đối tác';
            $nhatky->save();
        }
        return redirect()->back();
    }
    public function gettabledoitac(){
    	$doitac = Doitac::get();
    	return view('admin/table_doitac',compact('doitac'));
    }
    public function geteditdoitac($id){
    	$doitac = Doitac::where('id',$id)->get();
    	return view('admin/edit_doitac',compact('doitac'));
    }
    public function posteditdoitac(Request $request, $id){
    	if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);
            $doitac = Doitac::find($id);
            $doitac->name_doitac = $request->name_doitac;
            $doitac->image = $file_name =$file->getClientOriginalName('file');
            $doitac->note = $request->note;
            $doitac->updated_at = new DateTime();
            $doitac->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Sửa đối tác';
            $nhatky->save();
        }else{
        	$doitac = Doitac::find($id);
            $doitac->name_doitac = $request->name_doitac;
            $doitac->note = $request->note;
            $doitac->updated_at = new DateTime();
            $doitac->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Sửa đối tác';
            $nhatky->save();
        }
        return redirect()->back();
    }
    public function getdeledoitac($id){
    	try{
             
            DB::beginTransaction();
            
             //Delete Role
            $doitac = Doitac::find($id);
            
            $doitac->delete($id);
            
            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Xóa đối tác';
            $nhatky->save();
            DB::commit(); 
       
            return redirect()->route('admin/table_doitac');
        }catch(\Exception $exception){
        DB::rollback();
         \Log::error('loi:'.$exception->getMessage().$exception->getLine());

    } 
    }







    public function getdanhgia_dt(){
        $danhgia_dt= Danhgiadt::select('danhgia_dts_lang.name','danhgia_dts_lang.noidung','languages.title','danh_gia_dts.image')
        ->join('danhgia_dts_lang','danhgia_dts_lang.id_danhgia_dts','=','danh_gia_dts.id')
        ->join('languages','danhgia_dts_lang.id_lang','=','languages.id')
        ->where('danhgia_dts_lang.id_lang',1)
        ->get();
        $lang = Language::get();
        $lang1 = Language::get();
        return view('admin/danhgia_doitac',compact('danhgia_dt','lang','lang1'));
    }
    public function postdanhgia_dt(Request $request){
        if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);
            $danhgia_dt = New Danhgiadt();
            $danhgia_dt->image = $file_name =$file->getClientOriginalName('file');
            $danhgia_dt->created_at = new DateTime();
            $danhgia_dt->save();

            $danhgia_dt_vn = New Danhgiadt_lang();
            $danhgia_dt_vn->name = $request->name_vn;
            $danhgia_dt_vn->noidung = $request->note_vn;
            $danhgia_dt_vn->id_lang = $request->id_lang;
            $danhgia_dt_vn->id_danhgia_dts = $danhgia_dt->id;
            $danhgia_dt_vn->created_at = new DateTime();
            $danhgia_dt_vn->save();
           
            $danhgia_kh_en = New Danhgiadt_lang();
            $danhgia_kh_en->name = $request->name_en;
            $danhgia_kh_en->noidung = $request->note_en;
            $danhgia_kh_en->id_lang = $request->id_lang1;
            $danhgia_kh_en->id_danhgia_dts = $danhgia_dt->id;
            $danhgia_kh_en->created_at = new DateTime();
            $danhgia_kh_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'thêm đánh giá đối tác';
            $nhatky->save();
        }else{
            $danhgia_dt = New Danhgiadt();
            $danhgia_dt->created_at = new DateTime();
            $danhgia_dt->save();

            $danhgia_dt_vn = New Danhgiadt_lang();
            $danhgia_dt_vn->name = $request->name_vn;
            $danhgia_dt_vn->noidung = $request->note_vn;
            $danhgia_dt_vn->id_lang = $request->id_lang;
            $danhgia_dt_vn->id_danhgia_dts = $danhgia_dt->id;
            $danhgia_dt_vn->created_at = new DateTime();
            $danhgia_dt_vn->save();

            $danhgia_kh_en = New Danhgiadt_lang();
            $danhgia_kh_en->name = $request->name_en;
            $danhgia_kh_en->noidung = $request->note_en;
            $danhgia_kh_en->id_lang = $request->id_lang1;
            $danhgia_kh_en->id_danhgia_dts = $danhgia_dt->id;
            $danhgia_kh_en->created_at = new DateTime();
            $danhgia_kh_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'thêm đánh giá đối tác';
            $nhatky->save();
        }
        return redirect()->back();
    }
    public function getdeletedanhgia_dt($id){
     try{
             
            DB::beginTransaction();
            
             //Delete Role
            $danhgia_dt = Danhgiadt::find($id);
            $danhgia_dt_lang = Danhgiadt_lang::select('id')->where('id_danhgia_dts',$danhgia_dt->id)->first();
            $danhgia_dt_lang_vien = Danhgiadt_lang::findOrFail($danhgia_dt_lang->id);
            $danhgia_dt_lang_vien->delete($id);
            $danhgia_dt->delete($id);
            
            DB::commit(); 
       
            return redirect()->route('admin/danhgia_dt');
        }catch(\Exception $exception){
        DB::rollback();
         \Log::error('loi:'.$exception->getMessage().$exception->getLine());

    }    
    }
    public function getdanhsachdanhgiakhachhang(){
        $danhgia_kh = Danhgiakh::select('danhgias.star','danhgias.image','danhgias_lang.name','danhgias_lang.noidung'
        ,'languages.title')
        ->join('danhgias_lang','danhgias_lang.id_danhgia','=','danhgias.id')
        ->join('languages','danhgias_lang.id_lang','=','languages.id')
        ->where('danhgias_lang.id_lang',1)
        ->get();
        $lang = Language::get();
        $lang1 = Language::get();
        return view('admin/danhgia_khachhang',compact('danhgia_kh','lang','lang1'));
    }
    public function postdanhsachdanhgiakhachhang(Request $request){
        if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);
            $danhgia_kh = New Danhgiakh();
            $danhgia_kh->image = $file_name =$file->getClientOriginalName('file');
            $danhgia_kh->star = $request->star;
            $danhgia_kh->created_at = new DateTime();
            $danhgia_kh->save();

            $danhgia_kh_vn = New Danhgiakh_lang();
            $danhgia_kh_vn->name = $request->name_vn;
            $danhgia_kh_vn->noidung = $request->note_vn;
            $danhgia_kh_vn->id_lang = $request->id_lang;
            $danhgia_kh_vn->id_danhgia = $danhgia_kh->id;
            $danhgia_kh_vn->created_at = new DateTime();
            $danhgia_kh_vn->save();

            $danhgia_kh_en = New Danhgiakh_lang();
            $danhgia_kh_en->name = $request->name_en;
            $danhgia_kh_en->noidung = $request->note_en;
            $danhgia_kh_en->id_lang = $request->id_lang1;
            $danhgia_kh_en->id_danhgia = $danhgia_kh->id;
            $danhgia_kh_en->created_at = new DateTime();
            $danhgia_kh_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm một khách hàng';
            $nhatky->save();

        }else{
            $danhgia_kh = New Danhgiakh();
            $danhgia_kh->star = $request->star;
            $danhgia_kh->created_at = new DateTime();
            $danhgia_kh->save();

            $danhgia_kh_vn = New Danhgiakh_lang();
            $danhgia_kh_vn->name = $request->name_vn;
            $danhgia_kh_vn->noidung = $request->note_vn;
            $danhgia_kh_vn->id_lang = $request->id_lang;
            $danhgia_kh_vn->id_danhgia = $danhgia_kh->id;
            $danhgia_kh_vn->created_at = new DateTime();
            $danhgia_kh_vn->save();

            $danhgia_kh_en = New Danhgiakh_lang();
            $danhgia_kh_en->name = $request->name_en;
            $danhgia_kh_en->noidung = $request->note_en;
            $danhgia_kh_en->id_lang = $request->id_lang1;
            $danhgia_kh_en->id_danhgia = $danhgia_kh->id;
            $danhgia_kh_en->created_at = new DateTime();
            $danhgia_kh_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm một khách hàng';
            $nhatky->save();
        }
        return redirect()->back();
    }
    public function getdeletedanhsachdanhgiakhachhang($id){
        try{
             
            DB::beginTransaction();
            
             //Delete Role
            $danhgia_kh = Danhgiakh::find($id);
            $danhgia_kh_lang = Danhgiakh_lang::select('id')->where('id_danhgia',$danhgia_kh->id)->first();
            $danhgia_kh_lang_vien = Danhgiakh_lang::findOrFail($danhgia_kh_lang->id);
            $danhgia_kh_lang_vien->delete($id); 
            $danhgia_kh->delete($id);
            
            DB::commit(); 
       
            return redirect()->route('admin/danhsachdanhgiakhachhang');
        }catch(\Exception $exception){
        DB::rollback();
         \Log::error('loi:'.$exception->getMessage().$exception->getLine());

    }     
    }
}
