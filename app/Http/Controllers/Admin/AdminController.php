<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lienhe;
use DateTime;
use Mail;
use App\Loiich;
use App\Loiich_lang;
use App\nhatky;
use Carbon\Carbon;
use auth;
use App\Infweb;
use App\Language;
use DB;

class AdminController extends Controller
{
    public function getnhanemail(){
    	$lienhe = Lienhe::where('note','chưa nhận')->get();
    	$countlh = Lienhe::where('note','chưa nhận')->count('id');
        $countlh1 = Lienhe::where('note','đã nhận')->count('id');

        $dt = Carbon::now();
        $nhatky = new nhatky();
        $nhatky->user_id  = Auth::user()->id;
        $nhatky->thoigian = $dt;
        $nhatky->thaotac = 'nhận email mới';
        $nhatky->save();
    	return view('admin.mail.body',compact('lienhe','countlh','countlh1'));
    }
    public function getchitietemail(Request $request, $id){
    	$countlh = Lienhe::where('note','chưa nhận')->count('id');
        $countlh1 = Lienhe::where('note','đã nhận')->count('id');
    	$lienhe = Lienhe::find($id);
    	$lienhe->note ="đã nhận";
    	$lienhe->updated_at = New DateTime();
    	$lienhe->save();
    	$lienhe = Lienhe::where('id',$id)->get();
    	return view('admin.mail.mail_detail',compact('countlh','lienhe','countlh1'));
    }
    public function getrelaychitietemail(Request $request, $id){
    	$countlh = Lienhe::where('note','chưa nhận')->count('id');
        $countlh1 = Lienhe::where('note','đã nhận')->count('id');
    	$lienhe = Lienhe::where('id',$id)->get();
    	return view('admin.mail.relay_mail_detail',compact('countlh','lienhe','countlh1'));
    }
    public function postrelaychitietemail(Request $request, $id){
    	//$lienhe = Lienhe::where('id',$id)->get();
        $lienhe = Lienhe::findOrFail($id);
    	$email = $request->email;
    	$tieude = $request->input('title');
    	$noidung = $request->input('text');
        Mail::send('admin.mailfb', array('tieude'=>$tieude,'noidung'=>$noidung), function($message) use ($lienhe){

            $message->from('qtlieutran@gmail.com', 'admins');
            $message->to('qtlieutran@gmail.com', 'admins');
	        $message->to($lienhe->email)->subject('Visitor Feedback!');

	    });
        return redirect()->back();
    }
    public function getdele_email(Request $request, $id){
        $lienhe = Lienhe::where('note','chưa nhận')->get();
        $countlh = Lienhe::where('note','chưa nhận')->count('id');
        $countlh1 = Lienhe::where('note','đã nhận')->count('id');
        $lienhe1 = Lienhe::find($id);
        $lienhe1->note ="đã xóa";
        $lienhe1->updated_at = New DateTime();
        $lienhe1->save();
        return view('admin.mail.body',compact('lienhe','countlh','countlh1'));
    }
    public function getnew_email(){
        $lienhe = Lienhe::get();
        $countlh = Lienhe::where('note','chưa nhận')->count('id');
        $countlh1 = Lienhe::where('note','đã nhận')->count('id');
        return view('admin.mail.new_email',compact('lienhe','countlh','countlh1'));
    }
    public function postnew_email(Request $request){

        $lienhe = $request->email;
        $email = $request->email;
        $tieude = $request->input('title');
        $noidung = $request->input('text');
        Mail::send('admin.mailfb', array('tieude'=>$tieude,'noidung'=>$noidung), function($message) use ($email) {

            $message->from('qtlieutran@gmail.com', 'PAT');
            $message->to('qtlieutran@gmail.com', 'PAT');
            $message->to($email)->subject('Visitor Feedback!');

        });
        return redirect()->back();
    }
    public function getdatl_email(){
        $lienhe = Lienhe::where('note','đã nhận')->get();
        $countlh = Lienhe::where('note','chưa nhận')->count('id');
        $countlh1 = Lienhe::where('note','đã nhận')->count('id');
        return view('admin.mail.body',compact('lienhe','countlh1','countlh'));
    }
    public function getdelete_email(){
        $lienhe = Lienhe::where('note','đã nhận')->get();
        $countlh = Lienhe::where('note','chưa nhận')->count('id');
        $countlh1 = Lienhe::where('note','đã nhận')->count('id');
        return view('admin.mail.body',compact('lienhe','countlh1','countlh'));
    }
    public function getloiich(){
        $loiich = Loiich::select('loiichs.id','loiichs.image',
            DB::raw('GROUP_CONCAT(loiichs_lang.name_loiich) as name_loiich'),
            DB::raw('GROUP_CONCAT(languages.title) as title'))
        ->join('loiichs_lang','loiichs_lang.id_loiich','=','loiichs.id')
        ->join('languages','languages.id','=','loiichs_lang.id_lang')
        ->GroupBY('loiichs.id','loiichs.image')
        ->get();
        $lang = Language::get();
        $lang1 = Language::get();
        return view('admin.loiich',compact('loiich','lang','lang1'));
    }
    public function postloiich(Request $request){
        if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);
            $loiich = new Loiich();
            $loiich->image = $file_name =$file->getClientOriginalName('file');
            $loiich->created_at = new DateTime();
            $loiich->save();

            $loiich_vn = new Loiich_lang();
            $loiich_vn->name_loiich = $request->name_loiich_vn;
            $loiich_vn->id_lang = $request->id_lang;
            $loiich_vn->id_loiich = $loiich->id;
            $loiich_vn->created_at = new DateTime();
            $loiich_vn->save();

            $loiich_en = new Loiich_lang();
            $loiich_en->name_loiich = $request->name_loiich_en;
            $loiich_en->id_lang = $request->id_lang1;
            $loiich_en->id_loiich = $loiich->id;
            $loiich_en->created_at = new DateTime();
            $loiich_en->save();


            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm một lợi ích ';
            $nhatky->save();
        }else{
             
            $loiich = new Loiich();
            $loiich->created_at = new DateTime();
            $loiich->save();

            $loiich_vn = new Loiich_lang();
            $loiich_vn->name_loiich = $request->name_loiich_vn;
            $loiich_vn->id_lang = $request->id_lang;
            $loiich_vn->id_loiich = $loiich->id;
            $loiich_vn->created_at = new DateTime();
            $loiich_vn->save();

            $loiich_en = new Loiich_lang();
            $loiich_en->name_loiich = $request->name_loiich_en;
            $loiich_en->id_lang = $request->id_lang1;
            $loiich_en->id_loiich = $loiich->id;
            $loiich_en->created_at = new DateTime();
            $loiich_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm một lợi ích';
            $nhatky->save();
        }
        return redirect()->back();
    }
    public function getdeleteloiich($id){
        try{
             
            DB::beginTransaction();
            
             //Delete Role
            $loiich = Loiich::find($id);
            $loiich_lang = Loiich_lang::select('id')->where('id_loiich',$loiich->id)->first();
            $loiich_lang_vien = Loiich_lang::findOrFail($loiich_lang->id);
            $loiich_lang_vien->delete($id);
            $loiich->delete($id);

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Xóa một lợi ích';
            $nhatky->save();

            DB::commit(); 
       
            return redirect()->route('admin/loiich');
        }catch(\Exception $exception){
        DB::rollback();
         \Log::error('loi:'.$exception->getMessage().$exception->getLine());

    } 
    }
    public function getnhatky() {
        $nhatky = nhatky::select('users.name','nhatkys.thoigian','nhatkys.thaotac')->join('users','users.id','=','nhatkys.user_id')->get();
        return view('admin.nhatky',compact('nhatky'));
    }

    public function getcontent(){
        $inf = Infweb::get();
        $lang = Language::get();

        return view('admin.content',compact('inf','lang'));
    }
     public function postcontent(Request $request){
          
            $inf = new Infweb();
            $inf->title = $request->title;
            $inf->content = $request->text;
            $inf->id_lang = $request->id_lang;
           // dd($inf);
            $inf->created_at = new DateTime();
            $inf->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm thông tin';
            $nhatky->save();
        return redirect()->back();
    }

    public function geteditcontent($id){
        $inf1 = Infweb::join('languages','languages.id','=','infweb.id_lang')->where('infweb.id',$id)->get();
       $lang = Language::get();
        return view('admin.edit_inf',compact('inf1','lang'));
    }
    public function posteditcontent(Request $request, $id){
         $inf = Infweb::find($id);
            $inf->title = $request->title;
            $inf->content = $request->text;
            $inf->id_lang = $request->id_lang;
            $inf->updated_at = new DateTime();
            $inf->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'sửa thông tin';
            $nhatky->save();
        return redirect()->route('admin/content');
    }
    public function getdeletecontent($id){
        try{
             
            DB::beginTransaction();
            
             //Delete Role
            $inf = Infweb::find($id);
          
            $inf->delete($id);

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id  = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Xóa thông tin';
            $nhatky->save();

            DB::commit(); 
       
            return redirect()->route('admin/content');
        }catch(\Exception $exception){
        DB::rollback();
         \Log::error('loi:'.$exception->getMessage().$exception->getLine());

    } 
    }
}
