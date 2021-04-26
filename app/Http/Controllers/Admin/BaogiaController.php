<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Datetime;
use App\Baogia;
use App\Baogia_lang;
use App\nhatky;
use Carbon\Carbon;
use auth;
use App\Language;

class BaogiaController extends Controller
{
    public function getinsertbaogia(){
        $lang = Language::get();
        $lang1 = Language::get();
    	return view('admin.insertbaogia',compact('lang','lang1'));
    }
    public function postinsertbaogia(Request $request){
    	if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);
            $baogia = new Baogia();  
            $baogia->image = $file_name =$file->getClientOriginalName('file');
            $baogia->created_at = new DateTime();
            $baogia->save();

            $baogia_vn = new Baogia_lang();
            $baogia_vn->name_baogia = $request->name_baogia_vn;
            $baogia_vn->noidung = $request->text_vn;
            $baogia_vn->id_lang = $request->id_lang;
            $baogia_vn->id_baogia= $baogia->id;
            $baogia_vn->created_at = new DateTime();
            $baogia_vn->save();

            $baogia_en = new Baogia_lang();
            $baogia_en->name_baogia = $request->name_baogia_en;
            $baogia_en->noidung = $request->text_en;
            $baogia_en->id_lang = $request->id_lang1;
            $baogia_en->id_baogia= $baogia->id;
            $baogia_en->created_at = new DateTime();
            $baogia_en->save();


            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm báo giá';
            $nhatky->save();
        }else{
        	$baogia = new Baogia();  
            $baogia->noidung = $request->text;
            $baogia->created_at = new DateTime();
            $baogia->save();

            $baogia_vn = new Baogia_lang();
            $baogia_vn->name_baogia = $request->name_baogia_vn;
            $baogia_vn->noidung = $request->text_vn;
            $baogia_vn->id_lang = $request->id_lang;
            $baogia_vn->id_baogia= $baogia->id;
            $baogia_vn->created_at = new DateTime();
            $baogia_vn->save();

            $baogia_en = new Baogia_lang();
            $baogia_en->name_baogia = $request->name_baogia_en;
            $baogia_en->noidung = $request->text_en;
            $baogia_en->id_lang = $request->id_lang1;
            $baogia_en->id_baogia= $baogia->id;
            $baogia_en->created_at = new DateTime();
            $baogia_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm báo giá';
            $nhatky->save();
        }
        return redirect()->back();
    }
    public function gettablebaogia(){
    	$baogia = Baogia::select('baogias.id','baogias.image',
        DB::raw('GROUP_CONCAT(baogias_lang.name_baogia, baogias_lang.noidung)'),
        DB::raw('GROUP_CONCAT(languages.title) as title'))
        ->join('baogias_lang','baogias_lang.id_baogia','=','baogias.id')
        ->join('languages','baogias_lang.id_lang','=','languages.id')
        ->GroupBY('baogias.id','baogias.image')
        ->get();
    	return view('admin/table_baogia',compact('baogia'));
    }
    public function geteditbaogia($id){
    	$baogia_vn = Baogia::select('baogias.id','baogias.image','baogias_lang.name_baogia','baogias_lang.noidung','languages.name_lang')
        ->join('baogias_lang','baogias_lang.id_baogia','=','baogias.id')
        ->join('languages','baogias_lang.id_lang','=','languages.id')
        ->where('baogias_lang.id_lang',1)
        ->where('baogias.id',$id)
        ->get();
        $baogia_en = Baogia::select('baogias.id','baogias.image','baogias_lang.name_baogia','baogias_lang.noidung','languages.name_lang')
        ->join('baogias_lang','baogias_lang.id_baogia','=','baogias.id')
        ->join('languages','baogias_lang.id_lang','=','languages.id')
        ->where('baogias_lang.id_lang',2)
        ->where('baogias.id',$id)
        ->get();
    	return view('admin/edit_baogia',compact('baogia_vn','baogia_en'));
    }
    public function posteditbaogia(Request $request, $id){
    	if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);
            $baogia = Baogia::find($id);
            $baogia->image = $file_name =$file->getClientOriginalName('file');
            $baogia->updated_at = new DateTime();
            $baogia->save();

            $baogia_lang_vn1 = Baogia_lang::select('baogias_lang.id')->join('languages','baogias_lang.id_lang','=','languages.id')->where('languages.title','vi')->where('baogias_lang.id_baogia',$baogia->id)->first();
            $baogia_lang_vn = Baogia_lang::findOrFail($baogia_lang_vn1->id);
            $baogia_lang_vn->name_baogia = $request->name_baogia_vn;
            $baogia_lang_vn->noidung = $request->text_vn;
            $baogia_lang_vn->id_baogia= $baogia->id;
            $baogia_lang_vn->updated_at = new DateTime();
            $baogia_lang_vn->save();


            $baogia_lang_en1 = Baogia_lang::select('baogias_lang.id')->join('languages','baogias_lang.id_lang','=','languages.id')->where('languages.title','en')->where('baogias_lang.id_baogia',$baogia->id)->first();
            $baogia_lang_en = Baogia_lang::findOrFail($baogia_lang_en1->id);
            $baogia_lang_en->name_baogia = $request->name_baogia_en;
            $baogia_lang_en->noidung = $request->text_en;
            $baogia_lang_en->id_baogia= $baogia->id;
            $baogia_lang_en->updated_at = new DateTime();
            $baogia_lang_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Sửa báo giá';
            $nhatky->save();
        }else{
        	$baogia = Baogia::find($id);
            $baogia->updated_at = new DateTime();
            $baogia->save();

            $baogia_lang_vn1 = Baogia_lang::select('baogias_lang.id')->join('languages','baogias_lang.id_lang','=','languages.id')->where('languages.title','vi')->where('baogias_lang.id_baogia',$baogia->id)->first();
            $baogia_lang_vn = Baogia_lang::findOrFail($baogia_lang_vn1->id);
            $baogia_lang_vn->name_baogia = $request->name_baogia_vn;
            $baogia_lang_vn->noidung = $request->text_vn;
            $baogia_lang_vn->id_baogia= $baogia->id;
            $baogia_lang_vn->updated_at = new DateTime();
            $baogia_lang_vn->save();


            $baogia_lang_en1 = Baogia_lang::select('baogias_lang.id')->join('languages','baogias_lang.id_lang','=','languages.id')->where('languages.title','en')->where('baogias_lang.id_baogia',$baogia->id)->first();
            $baogia_lang_en = Baogia_lang::findOrFail($baogia_lang_en1->id);
            $baogia_lang_en->name_baogia = $request->name_baogia_en;
            $baogia_lang_en->noidung = $request->text_en;
            $baogia_lang_en->id_baogia= $baogia->id;
            $baogia_lang_en->updated_at = new DateTime();
            $baogia_lang_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Sửa báo giá';
            $nhatky->save();
        }
        return redirect()->back();
    }
    public function getdeledoitac($id){
    	try{
             
            DB::beginTransaction();
            
             //Delete Role
            $baogia = Baogia::find($id);
            $baogia_lang = Baogia_lang::select('id')->where('id_baogia',$menu_c1->id)->first();
            $baogia_lang_vien = Menu_c1_lang::findOrFail($baogia_lang->id);
            $baogia_lang_vien->delete($id);
            $baogia->delete($id);
            
            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Xóa báo giá';
            $nhatky->save();

            DB::commit(); 
       
            return redirect()->route('admin/table_baogia');
        }catch(\Exception $exception){
        DB::rollback();
         \Log::error('loi:'.$exception->getMessage().$exception->getLine());

    } 
    }
}
