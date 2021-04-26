<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu_c1;
use App\Menu_c1_lang;
use App\Menu_con;
use App\Menu_con_lang;
use App\Baiviet;
use App\Baiviet_lang;
use App\Khosanpham;
use App\Khosanpham_lang;
use auth;
use DateTime;
use DB;
use App\nhatky;
use Carbon\Carbon;
use App\Menu_baiviet;
use App\Menu_baiviet_lang;
use App\Language;
use App\Tag;
use App\Tag_lang;


class WriteController extends Controller
{
    private $menu_cons;
    private $kho_sanphams;
    private $kho_sanphams_lang;
    private $tags;
    public function __construct(Menu_con $menu_cons, Khosanpham $kho_sanphams,Khosanpham_lang $kho_sanphams_lang,Tag $tags)
    {
      
        $this->menu_cons = $menu_cons;
        $this->kho_sanphams = $kho_sanphams;
        $this->kho_sanphams_lang = $kho_sanphams_lang;
        $this->tags = $tags;
    }

    public function getmenu_baiviet(){
        $menu_baiviet = Menu_baiviet::select('menu_baiviets.id',
            'menu_baiviets_lang.name_menu_baiviet','menu_baiviets_lang.slug','menu_baiviets_lang.note',
            DB::raw('GROUP_CONCAT(languages.title) as title'))
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->join('languages','languages.id','=','menu_baiviets_lang.id_lang')
        ->where('title','vi')
        ->GroupBY('menu_baiviets.id', 'menu_baiviets_lang.name_menu_baiviet','menu_baiviets_lang.slug','menu_baiviets_lang.note')
        ->get();

        $lang = Language::get();
        $lang1 = Language::get();
    	return view('admin.menu_baiviet',compact('menu_baiviet','lang','lang1'));
    }
    public function postmenu_baiviet(Request $request){
    	if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);

            $slug_vn = Menu_baiviet_lang()::get();


            $menu_baiviet = new Menu_baiviet;
            $menu_baiviet->image = $file_name =$file->getClientOriginalName('file');
            $menu_baiviet->id_user = auth::user()->id;
            $menu_baiviet->created_at = new DateTime();
            $menu_baiviet->save();
            
            $menu_baiviet_vn = new Menu_baiviet_lang;
            $menu_baiviet_vn->name_menu_baiviet = $request->name_menu_baiviet_vn;
            $menu_baiviet_vn->slug = str_slug($request->name_menu_baiviet_vn);
            $menu_baiviet_vn->note = $request->note_vn;
            $menu_baiviet_vn->id_menu_baiviets = $menu_baiviet->id;
            $menu_baiviet_vn->id_lang = $request->id_lang;
            $menu_baiviet_vn->created_at = new DateTime();
            $menu_baiviet_vn->save();

            $menu_baiviet_en = new Menu_baiviet_lang;
            $menu_baiviet_en->name_menu_baiviet = $request->name_menu_baiviet_en;
            $menu_baiviet_en->slug = str_slug($request->name_menu_baiviet_en);
            $menu_baiviet_en->note = $request->note_en;
            $menu_baiviet_en->id_menu_baiviets = $menu_baiviet->id;
            $menu_baiviet_en->id_lang = $request->id_lang1;
            $menu_baiviet_en->created_at = new DateTime();
            $menu_baiviet_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm Menu bài viết';
            $nhatky->save();
        }else{
            $menu_baiviet = new Menu_baiviet;
            $menu_baiviet->id_user = auth::user()->id;
            $menu_baiviet->created_at = new DateTime();
            $menu_baiviet->save();

            $menu_baiviet_vn = new Menu_baiviet_lang;
            $menu_baiviet_vn->name_menu_baiviet = $request->name_menu_baiviet_vn;
            $menu_baiviet_vn->slug = str_slug($request->name_menu_baiviet_vn);
            $menu_baiviet_vn->note = $request->note_vn;
            $menu_baiviet_vn->id_menu_baiviets = $menu_baiviet->id;
            $menu_baiviet_vn->id_lang = $request->id_lang;
            $menu_baiviet_vn->created_at = new DateTime();
            $menu_baiviet_vn->save();

            $menu_baiviet_en = new Menu_baiviet_lang;
            $menu_baiviet_en->name_menu_baiviet = $request->name_menu_baiviet_en;
            $menu_baiviet_en->slug = str_slug($request->name_menu_baiviet_en);
            $menu_baiviet_en->note = $request->note_en;
            $menu_baiviet_en->id_menu_baiviets = $menu_baiviet->id;
            $menu_baiviet_en->id_lang = $request->id_lang1;
            $menu_baiviet_en->created_at = new DateTime();
            $menu_baiviet_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm Menu bài viết';
            $nhatky->save();
        }
        return redirect()->back();
    }
    public function geteditmenu_baiviet($id){
        $menu_baiviet_vn = Menu_baiviet::select('menu_baiviets.id','menu_baiviets_lang.name_menu_baiviet','menu_baiviets_lang.slug','menu_baiviets_lang.note','languages.name_lang','menu_baiviets.image')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->join('languages','languages.id','=','menu_baiviets_lang.id_lang')
        ->where('languages.title','vi')
        ->where('menu_baiviets.id',$id)  
        ->get();
       // dd($menu_baiviet_vn);
        $menu_baiviet_en = Menu_baiviet::select('menu_baiviets.id','menu_baiviets_lang.name_menu_baiviet','menu_baiviets_lang.slug','menu_baiviets_lang.note','languages.name_lang')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->join('languages','languages.id','=','menu_baiviets_lang.id_lang')
        ->where('menu_baiviets.id',$id)
        ->where('languages.title','en')
        ->get();

        return view('admin.edit_menu_baiviet',compact('menu_baiviet_vn','menu_baiviet_en'));
    }
    public function posteditmenu_baiviet(Request $request,$id){
        if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);

            $menu_baiviet = Menu_baiviet::find($id);
            $menu_baiviet->image = $file_name =$file->getClientOriginalName('file');
            $menu_baiviet->id_user = auth::user()->id;
            $menu_baiviet->updated_at = new DateTime();   
            $menu_baiviet->save();

            $menu_baiviet_lang_vn1 = Menu_baiviet_lang::select('menu_baiviets_lang.id')->join('languages','menu_baiviets_lang.id_lang','=','languages.id')->where('languages.title','vi')->where('menu_baiviets_lang.id_menu_baiviets',$menu_baiviet->id)->first();
            $menu_baiviet_lang_vn = Menu_baiviet_lang::findOrFail($menu_baiviet_lang_vn1->id);
            $menu_baiviet_lang_vn->name_menu_baiviet = $request->name_menu_baiviet_vn;
            $menu_baiviet_lang_vn->slug = $request->slug_vn;
            $menu_baiviet_lang_vn->note = $request->note_vn;
            $menu_baiviet_lang_vn->id_menu_baiviets = $menu_baiviet->id;
            $menu_baiviet_lang_vn->updated_at = new DateTime();
            $menu_baiviet_lang_vn->save();

            $menu_baiviet_lang_en1 = Menu_baiviet_lang::select('menu_baiviets_lang.id')->join('languages','menu_baiviets_lang.id_lang','=','languages.id')->where('languages.title','en')->where('menu_baiviets_lang.id_menu_baiviets',$menu_baiviet->id)->first();
            $menu_baiviet_lang_en = Menu_baiviet_lang::findOrFail($menu_baiviet_lang_en1->id);
            $menu_baiviet_lang_en->name_menu_baiviet = $request->name_menu_baiviet_en;
            $menu_baiviet_lang_en->slug = $request->slug_en;
            $menu_baiviet_lang_en->note = $request->note_en;
            $menu_baiviet_lang_en->id_menu_baiviets = $menu_baiviet->id;
            $menu_baiviet_lang_en->updated_at = new DateTime();
            $menu_baiviet_lang_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Sửa Menu bài viết';
            $nhatky->save();
        }else {
            $menu_baiviet = Menu_baiviet::find($id);
            $menu_baiviet->id_user = auth::user()->id;
            $menu_baiviet->updated_at = new DateTime();   
            $menu_baiviet->save();

            $menu_baiviet_lang_vn1 = Menu_baiviet_lang::select('menu_baiviets_lang.id')
            ->join('languages','menu_baiviets_lang.id_lang','=','languages.id')
            ->where('languages.title','vi')
            ->where('menu_baiviets_lang.id_menu_baiviets',$menu_baiviet->id)->first();
           
            $menu_baiviet_lang_vn = Menu_baiviet_lang::findOrFail($menu_baiviet_lang_vn1->id);
            $menu_baiviet_lang_vn->name_menu_baiviet = $request->name_menu_baiviet_vn;
            $menu_baiviet_lang_vn->slug = $request->slug_vn;
            $menu_baiviet_lang_vn->note = $request->note_vn;
            $menu_baiviet_lang_vn->id_menu_baiviets = $menu_baiviet->id;
            $menu_baiviet_lang_vn->updated_at = new DateTime();
            $menu_baiviet_lang_vn->save();

            $menu_baiviet_lang_en1 = Menu_baiviet_lang::select('menu_baiviets_lang.id')->join('languages','menu_baiviets_lang.id_lang','=','languages.id')->where('languages.title','en')->where('menu_baiviets_lang.id_menu_baiviets',$menu_baiviet->id)->first();
            $menu_baiviet_lang_en = Menu_baiviet_lang::findOrFail($menu_baiviet_lang_en1->id);
            $menu_baiviet_lang_en->name_menu_baiviet = $request->name_menu_baiviet_en;
            $menu_baiviet_lang_en->slug = $request->slug_en;
            $menu_baiviet_lang_en->note = $request->note_en;
            $menu_baiviet_lang_en->id_menu_baiviets = $menu_baiviet->id;
            $menu_baiviet_lang_en->updated_at = new DateTime();
            $menu_baiviet_lang_en->save();


            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Sửa Menu bài viết';
            $nhatky->save();
        }
        return redirect()->route('admin/menu_baiviet');
    }
    public function postdeletemenu_baiviet($id){
        try{
             
            DB::beginTransaction();
            
             //Delete Role
            $menu_baiviet = Menu_baiviet::find($id);
            $menu_baiviet_lang = Menu_baiviet_lang::select('id')->where('id_menu_baiviets',$menu_baiviet->id)->first();
            $menu_baiviet_lang_vien = Menu_baiviet_lang::findOrFail($menu_baiviet_lang->id);
            $menu_baiviet_lang_vien->delete($id);
            $menu_baiviet->delete($id);
            
            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Xóa Menu bài viết';
            $nhatky->save();

            DB::commit(); 
       
            return redirect()->route('admin/menu_baiviet');
        }catch(\Exception $exception){
        DB::rollback();
         \Log::error('loi:'.$exception->getMessage().$exception->getLine());

        } 

    }



    public function gettatcabaiviet(){
        $baiviet = Baiviet::select('baiviets.id','baiviets.created_at','users.name','baiviets_lang.name_baiviet','menu_baiviets_lang.name_menu_baiviet')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->join('menu_baiviets','menu_baiviets.id','=','baiviets.id_menu_baiviet')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->join('languages','languages.id','=','baiviets_lang.id_lang')
        ->join('users','users.id','=','baiviets.id_user')
        ->where('languages.title','vi')
        ->where('menu_baiviets_lang.id_lang',1)
        ->get();

        return view('admin.tatcabaiviet',compact('baiviet'));
    }
    public function getbaiviet(){
        $menu_baiviet = Menu_baiviet::select('menu_baiviets.id','menu_baiviets_lang.name_menu_baiviet')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->whereIn('menu_baiviets.id',[12,13])
        ->where('menu_baiviets_lang.id_lang',1)
        ->get();

        $lang = Language::get();
        $lang1 = Language::get();
        $tag_vn = Tag::select('tags.id','tags_lang.name','languages.title')
        ->join('tags_lang','tags_lang.id_tag','=','tags.id')
        ->join('languages','tags_lang.id_lang','=','languages.id')
        ->where('languages.title','vi')
        ->get();
        $tag_en = Tag::select('tags.id','tags_lang.name','languages.title')
        ->join('tags_lang','tags_lang.id_tag','=','tags.id')
        ->join('languages','tags_lang.id_lang','=','languages.id')
        ->where('languages.title','en')
        ->get();
      
        return view('admin.baiviet',compact('menu_baiviet','lang','lang1','tag_vn','tag_en' ));
    }
    public function postbaiviet(Request $request){
        if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);

            $baiviet = new Baiviet();
            $baiviet->id_menu_baiviet = $request->id_menu_baiviet;
            $baiviet->image = $file_name =$file->getClientOriginalName('file');
            $baiviet->id_user = auth::user()->id;
            $baiviet->created_at = new DateTime();
            $baiviet->save();

            $baiviet_vn = new Baiviet_lang();
            $baiviet_vn->name_baiviet = $request->name_baiviet_vn;
            $baiviet_vn->slug = str_slug($request->name_baiviet_vn);
            $baiviet_vn->tomtat = $request->note_vn;
            $baiviet_vn->noidung = $request->text_vn;
            $baiviet_vn->keywork = $request->key_vn;
            $baiviet_vn->id_baiviets = $baiviet->id;
            $baiviet_vn->id_lang = $request->id_lang;
            $baiviet_vn->created_at = new DateTime();
            $baiviet_vn->save();

            $baiviet_en = new Baiviet_lang();
            $baiviet_en->name_baiviet = $request->name_baiviet_en;
            $baiviet_en->slug = str_slug($request->name_baiviet_en);
            $baiviet_en->tomtat = $request->note_en;
            $baiviet_en->noidung = $request->text_en;
            $baiviet_en->keywork = $request->key_en;
            $baiviet_en->id_baiviets = $baiviet->id;
            $baiviet_en->id_lang = $request->id_lang1;
            $baiviet_en->created_at = new DateTime();
            $baiviet_en->save();

            $baiviet_vn->tags()->attach($request->tag_vn);
            $baiviet_en->tags()->attach($request->tag_en);

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm một bài viết';
            $nhatky->save();
        }else {
             $baiviet = new Baiviet();
            $baiviet->id_menu_baiviet = $request->id_menu_baiviet;
            $baiviet->id_user = auth::user()->id;
            $baiviet->created_at = new DateTime();
            $baiviet->save();

            $baiviet_vn = new Baiviet_lang();
            $baiviet_vn->name_baiviet = $request->name_baiviet_vn;
            $baiviet_vn->slug = str_slug($request->name_baiviet_vn);
            $baiviet_vn->tomtat = $request->note_vn;
            $baiviet_vn->noidung = $request->text_vn;
            $baiviet_vn->keywork = $request->key_vn;
            $baiviet_vn->id_baiviets = $baiviet->id;
            $baiviet_vn->id_lang = $request->id_lang;
            $baiviet_vn->created_at = new DateTime();
            $baiviet_vn->save();

            $baiviet_en = new Baiviet_lang();
            $baiviet_en->name_baiviet = $request->name_baiviet_en;
            $baiviet_en->slug = str_slug($request->name_baiviet_en);
            $baiviet_en->tomtat = $request->note_en;
            $baiviet_en->noidung = $request->text_en;
            $baiviet_en->keywork = $request->key_en;
            $baiviet_en->id_baiviets = $baiviet->id;
            $baiviet_en->id_lang = $request->id_lang1;
            $baiviet_en->created_at = new DateTime();
            $baiviet_en->save();

            $baiviet_vn->tags()->attach($request->tag_vn);
            $baiviet_en->tags()->attach($request->tag_en);

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm một bài viết';
            $nhatky->save();
        }

        return redirect()->back();
    }
    public function geteditbaiviet($id){
        $menu_baiviet = Menu_baiviet::select('menu_baiviets.id','menu_baiviets_lang.name_menu_baiviet')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->whereIn('menu_baiviets.id',[12,13])
        ->where('menu_baiviets_lang.id_lang',1)->get();

        $baiviet_vn = Baiviet::select('baiviets.id','baiviets_lang.name_baiviet','menu_baiviets_lang.name_menu_baiviet','languages.name_lang','baiviets.image','baiviets_lang.name_baiviet','baiviets_lang.noidung','baiviets_lang.tomtat','baiviets_lang.slug','baiviets.id_menu_baiviet','baiviets_lang.keywork')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->join('menu_baiviets','menu_baiviets.id','=','baiviets.id_menu_baiviet')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->join('languages','baiviets_lang.id_lang','=','languages.id')
        ->where('menu_baiviets_lang.id_lang',1)
        ->where('languages.title','vi')
        ->where('baiviets.id',$id)
        ->get();

        $baiviet_en = Baiviet::select('baiviets.id','baiviets_lang.name_baiviet','menu_baiviets_lang.name_menu_baiviet','languages.name_lang','baiviets.image','baiviets_lang.name_baiviet','baiviets_lang.noidung','baiviets_lang.tomtat','baiviets_lang.slug','baiviets.id_menu_baiviet','baiviets_lang.keywork')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->join('menu_baiviets','menu_baiviets.id','=','baiviets.id_menu_baiviet')
        ->join('menu_baiviets_lang','menu_baiviets_lang.id_menu_baiviets','=','menu_baiviets.id')
        ->join('languages','baiviets_lang.id_lang','=','languages.id')
        ->where('menu_baiviets_lang.id_lang',2)
        ->where('languages.title','en')
        ->where('baiviets.id',$id)
        ->get();

        $tag_vn = Tag::select('tags.id','tags_lang.name','languages.title')
        ->join('tags_lang','tags_lang.id_tag','=','tags.id')
        ->join('languages','tags_lang.id_lang','=','languages.id')
        ->where('languages.title','vi')
        ->get();
        $tag_en = Tag::select('tags.id','tags_lang.name','languages.title')
        ->join('tags_lang','tags_lang.id_tag','=','tags.id')
        ->join('languages','tags_lang.id_lang','=','languages.id')
        ->where('languages.title','en')
        ->get();
        $tag_lang_vn = Baiviet::select('baiviets_lang.id')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->join('languages','baiviets_lang.id_lang','=','languages.id')
        ->where('languages.title','vi')
        ->where('baiviets.id',$id)
        ->first();
        $tag_lang_en = Baiviet::select('baiviets_lang.id')
        ->join('baiviets_lang','baiviets_lang.id_baiviets','=','baiviets.id')
        ->join('languages','baiviets_lang.id_lang','=','languages.id')
        ->where('languages.title','en')
        ->where('baiviets.id',$id)
        ->first();

        $getAllbaivietoftagvn = DB::table('tags_baiviet')->where('id_baiviets_lang', $tag_lang_vn->id)
        ->pluck('id_tag');
         $getAllbaivietoftagen = DB::table('tags_baiviet')->where('id_baiviets_lang', $tag_lang_en->id)
        ->pluck('id_tag');
        return view('admin/edit_baiviet',compact('menu_baiviet','baiviet_vn','baiviet_en','tag_vn','tag_en','getAllbaivietoftagvn','getAllbaivietoftagen','getAllbaivietoftagvn','getAllbaivietoftagen'));
    }
    public function posteditbaiviet(Request $request, $id){
        if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);

            $baiviet =  Baiviet::find($id);
            $baiviet->id_menu_baiviet = $request->id_menu_baiviet;
            $baiviet->image = $file_name =$file->getClientOriginalName('file');
            $baiviet->id_user = auth::user()->id;
            $baiviet->updated_at = new DateTime();
            $baiviet->save();

            $baiviet_lang_vn1 = Baiviet_lang::select('baiviets_lang.id')->join('languages','baiviets_lang.id_lang','=','languages.id')->where('languages.title','vi')->where('baiviets_lang.id_baiviets',$baiviet->id)->first();

            $baiviet_lang_vn =Baiviet_lang::findOrFail($baiviet_lang_vn1->id);
            $baiviet_lang_vn->name_baiviet = $request->name_baiviet_vn;
            $baiviet_lang_vn->slug = str_slug($request->name_baiviet_vn);
            $baiviet_lang_vn->tomtat = $request->note_vn;
            $baiviet_lang_vn->noidung = $request->text_vn;
            $baiviet_lang_vn->keywork = $request->key_vn;
            $baiviet_lang_vn->id_baiviets = $baiviet->id;
            $baiviet_lang_vn->updated_at = new DateTime();
            $baiviet_lang_vn->save();

            DB::table('tags_baiviet')->where('id_baiviets_lang',$baiviet_lang_vn1->id)->delete();
            $baiviet_vn = Baiviet_lang::findOrFail($baiviet_lang_vn1->id);
            $baiviet_vn->tags()->attach($request->tag_vns);

            $baiviet_lang_en1 = Baiviet_lang::select('baiviets_lang.id')->join('languages','baiviets_lang.id_lang','=','languages.id')->where('languages.title','en')->where('baiviets_lang.id_baiviets',$baiviet->id)->first();
            $baiviet_lang_en =Baiviet_lang::findOrFail($baiviet_lang_en1->id);
            $baiviet_lang_en->name_baiviet = $request->name_baiviet_en;
            $baiviet_lang_en->slug = str_slug($request->name_baiviet_en);
            $baiviet_lang_en->tomtat = $request->note_en;
            $baiviet_lang_en->noidung = $request->text_en;
            $baiviet_lang_en->keywork = $request->key_en;
            $baiviet_lang_en->id_baiviets = $baiviet->id;
            $baiviet_lang_en->updated_at = new DateTime();
            $baiviet_lang_en->save();

            DB::table('tags_baiviet')->where('id_baiviets_lang',$baiviet_lang_en1->id)->delete();
            $baiviet_en = Baiviet_lang::findOrFail($baiviet_lang_en1->id);
            $baiviet_en->tags()->attach($request->tag_ens);

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Sửa bài viết';
            $nhatky->save();
        }else {
            $baiviet =  Baiviet::find($id);
            $baiviet->id_menu_baiviet = $request->id_menu_baiviet;
            $baiviet->id_user = auth::user()->id;
            $baiviet->updated_at = new DateTime();
            $baiviet->save();

            $baiviet_lang_vn1 = Baiviet_lang::select('baiviets_lang.id')->join('languages','baiviets_lang.id_lang','=','languages.id')->where('languages.title','vi')->where('baiviets_lang.id_baiviets',$baiviet->id)->first();

            $baiviet_lang_vn =Baiviet_lang::findOrFail($baiviet_lang_vn1->id);
            $baiviet_lang_vn->name_baiviet = $request->name_baiviet_vn;
            $baiviet_lang_vn->slug = str_slug($request->name_baiviet_vn);
            $baiviet_lang_vn->tomtat = $request->note_vn;
            $baiviet_lang_vn->noidung = $request->text_vn;
            $baiviet_lang_vn->keywork = $request->key_vn;
            $baiviet_lang_vn->id_baiviets = $baiviet->id;
            $baiviet_lang_vn->updated_at = new DateTime();
            $baiviet_lang_vn->save();

            DB::table('tags_baiviet')->where('id_baiviets_lang',$baiviet_lang_vn1->id)->delete();
            $baiviet_vn = Baiviet_lang::findOrFail($baiviet_lang_vn1->id);
            $baiviet_vn->tags()->attach($request->tag_vns);

            $baiviet_lang_en1 = Baiviet_lang::select('baiviets_lang.id')->join('languages','baiviets_lang.id_lang','=','languages.id')->where('languages.title','en')->where('baiviets_lang.id_baiviets',$baiviet->id)->first();
            $baiviet_lang_en =Baiviet_lang::findOrFail($baiviet_lang_en1->id);
            $baiviet_lang_en->name_baiviet = $request->name_baiviet_en;
            $baiviet_lang_en->slug = str_slug($request->name_baiviet_en);
            $baiviet_lang_en->tomtat = $request->note_en;
            $baiviet_lang_en->noidung = $request->text_en;
            $baiviet_lang_en->keywork = $request->key_en;
            $baiviet_lang_en->id_baiviets = $baiviet->id;
            $baiviet_lang_en->updated_at = new DateTime();
            $baiviet_lang_en->save();

            DB::table('tags_baiviet')->where('id_baiviets_lang',$baiviet_lang_en1->id)->delete();
            $baiviet_en = Baiviet_lang::findOrFail($baiviet_lang_en1->id);
            $baiviet_en->tags()->attach($request->tag_ens);

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Sửa bài viết';
            $nhatky->save();
        }
        return redirect()->route('admin/tatcabaiviet');
    }
    public function getdelebaiviet($id){
        try{
             
            DB::beginTransaction();
            
             //Delete Role
            $baiviet = Baiviet::find($id);
            $baiviet_lang = Baiviet_lang::select('id')->where('id_baiviets',$baiviet->id)->first();
            $baiviet_lang_vien = Baiviet_lang::findOrFail($baiviet_lang->id);
            $baiviet_lang_vien->delete($id);
            $baiviet->delete($id);
            
            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Xóa bài viết';
            $nhatky->save();
            DB::commit(); 
       
            return redirect()->route('admin/tatcabaiviet');
        }catch(\Exception $exception){
        DB::rollback();
         \Log::error('loi:'.$exception->getMessage().$exception->getLine());

    } 
    }

    public function gettag(){
        $lang = Language::get();
        $lang1 = Language::get();
        $tag = Tag::select('tags.id','tags_lang.name','languages.title')
        ->join('tags_lang','tags_lang.id_tag','=','tags.id')
        ->join('languages','tags_lang.id_lang','=','languages.id')
        ->where('tags_lang.id_lang',1)
        ->get();
      
        return view('admin/tag',compact('lang','lang1','tag'));
    }
    public function posttag(Request $request){
        $tag = new Tag;
        $tag->note = 'gắn thẻ';
        $tag->created_at = new DateTime();   
        $tag->save();

        $tag_vn = new Tag_lang;
        $tag_vn->name = $request->name_tag_vn;
        $tag_vn->id_tag = $tag->id;
        $tag_vn->id_lang = $request->id_lang;
        $tag_vn->slug = str_slug($request->name_tag_vn);
        $tag_vn->created_at = new DateTime();
        //dd($tag_vn);
        $tag_vn->save();

        $tag_en = new Tag_lang;
        $tag_en->name = $request->name_tag_en;
        $tag_en->id_tag = $tag->id;
        $tag_en->id_lang = $request->id_lang1;
        $tag_en->slug = str_slug($request->name_tag_en);
        $tag_en->created_at = new DateTime();
        //dd($tag_en);
        $tag_en->save();

        return redirect()->back();
    }
    public function getedittag($id){
        $tag_lang_vn = Tag::select('tags.id','tags_lang.name','languages.title')
        ->join('tags_lang','tags_lang.id_tag','=','tags.id')
        ->join('languages','tags_lang.id_lang','=','languages.id')
        ->where('languages.title','vi')
        ->where('tags.id',$id)
        ->get();
        $tag_lang_en = Tag::select('tags.id','tags_lang.name','languages.title')
        ->join('tags_lang','tags_lang.id_tag','=','tags.id')
        ->join('languages','tags_lang.id_lang','=','languages.id')
        ->where('languages.title','en')
        ->where('tags.id',$id)
        ->get();
        return view('admin/edit_tag',compact('tag_lang_vn','tag_lang_en'));
    }
    public function postedittag(Request $request, $id){
        $tag = Tag::find($id);
        $tag->note = 'gắn thẻ';
        $tag->updated_at = new DateTime();   
        $tag->save();

        $tag_lang_vn1 = Tag_lang::select('tags_lang.id')->join('languages','tags_lang.id_lang','=','languages.id')->where('languages.title','vi')->where('tags_lang.id_tag',$tag->id)->first();
        $tag_lang_vn =Tag_lang::findOrFail($tag_lang_vn1->id);
        $tag_lang_vn->name = $request->name_tag_vn;
        $tag_lang_vn->slug = str_slug($request->name_tag_vn);
        $tag_lang_vn->updated_at = new DateTime();
        //dd($tag_lang);
        $tag_lang_vn->save();

        $tag_lang_en1 = Tag_lang::select('tags_lang.id')->join('languages','tags_lang.id_lang','=','languages.id')->where('languages.title','en')->where('tags_lang.id_tag',$tag->id)->first();
        $tag_lang_en =Tag_lang::findOrFail($tag_lang_en1->id);
        $tag_lang_en->name = $request->name_tag_en;
        $tag_lang_en->slug = str_slug($request->name_tag_en);
        $tag_lang_en->updated_at = new DateTime();
        //dd($tag_lang);
        $tag_lang_en->save();
        return redirect()->route('admin/tag');

    }
    public function getdeltag($id){
        try{
             
            DB::beginTransaction();
            
             //Delete Role
            $tag = Tag::find($id);
            $tag_lang = Tag_lang::select('id')->where('id_tag',$tag->id)->first();
            $tag_lang_vien = Tag_lang::findOrFail($tag_lang->id);
            $tag_lang_vien->delete($id);
            $tag->delete($id);
            


            DB::commit(); 
       
            return redirect()->route('admin/tag');
        }catch(\Exception $exception){
        DB::rollback();
         \Log::error('loi:'.$exception->getMessage().$exception->getLine());

    } 
    }
    
    public function getmenu_cha(){
        $menu_c1 = Menu_c1::select('menus_c1.id','menus_c1_lang.name_menu_c1', 'menus_c1_lang.note', 'menus_c1_lang.slug','languages.title')
        ->join('menus_c1_lang','menus_c1_lang.id_menus_c1','=','menus_c1.id')
        ->join('languages','menus_c1_lang.id_lang','=','languages.id')
        ->where('title','vi')
        ->get();
        //dd($menu_c1);
        $lang = Language::get();
        $lang1 = Language::get();
        return view('admin.menu_cha',compact('menu_c1','lang','lang1'));
    }
    public function postmenu_cha(Request $request){
        if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);

            $menu_c1 = new Menu_c1;    
            $menu_c1->image = $file_name =$file->getClientOriginalName('file');
            $menu_c1->id_user = auth::user()->id;
            $menu_c1->created_at = new DateTime();
            $menu_c1->save();

            $menu_c1_lang_vn = new Menu_c1_lang;
            $menu_c1_lang_vn->name_menu_c1 = $request->name_c1_vn;
            $menu_c1_lang_vn->note = $request->note_vn;
            $menu_c1_lang_vn->slug = str_slug($request->name_c1_vn);
            $menu_c1_lang_vn->id_menus_c1 = $menu_c1->id;
            $menu_c1_lang_vn->id_lang = $request->id_lang;
            $menu_c1_lang_vn->save();

            $menu_c1_lang_en = new Menu_c1_lang;
            $menu_c1_lang_en->name_menu_c1 = $request->name_c1_en;
            $menu_c1_lang_en->note = $request->note_en;
            $menu_c1_lang_en->slug = str_slug($request->name_c1_vn);
            $menu_c1_lang_en->id_menus_c1 = $menu_c1->id;
            $menu_c1_lang_en->id_lang = $request->id_lang1;
            $menu_c1_lang_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm Menu cha';
            $nhatky->save();
        }else {
            $menu_c1 = new Menu_c1;
            $menu_c1->id_user = auth::user()->id;
            $menu_c1->created_at = new DateTime();
            $menu_c1->save();

            $menu_c1_lang_vn = new Menu_c1_lang;
            $menu_c1_lang_vn->name_menu_c1 = $request->name_c1_vn;
            $menu_c1_lang_vn->note = $request->note_vn;
            $menu_c1_lang_vn->slug = str_slug($request->name_c1_vn);
            $menu_c1_lang_vn->id_menus_c1 = $menu_c1->id;
            $menu_c1_lang_vn->id_lang = $request->id_lang;
            $menu_c1_lang_vn->save();

            $menu_c1_lang_en = new Menu_c1_lang;
            $menu_c1_lang_en->name_menu_c1 = $request->name_c1_en;
            $menu_c1_lang_en->note = $request->note_en;
            $menu_c1_lang_en->slug = str_slug($request->name_c1_en);
            $menu_c1_lang_en->id_menus_c1 = $menu_c1->id;
            $menu_c1_lang_en->id_lang = $request->id_lang1;
            $menu_c1_lang_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm Menu cha';
            $nhatky->save();
        }
        return redirect()->back();
    }
    public function geteditmenu_cha($id){
        $menu_c1_vn = Menu_c1::select('menus_c1.id','menus_c1_lang.name_menu_c1','menus_c1_lang.note','menus_c1_lang.slug','languages.title','menus_c1.image','languages.name_lang')
        ->join('menus_c1_lang','menus_c1_lang.id_menus_c1','=','menus_c1.id')->join('languages','menus_c1_lang.id_lang','=','languages.id')
        ->where('languages.title','vi')->where('menus_c1.id',$id)->get();
        $menu_c1_en = Menu_c1::select('menus_c1.id','menus_c1_lang.name_menu_c1','menus_c1_lang.note','menus_c1_lang.slug','languages.title','menus_c1.image','languages.name_lang')->join('menus_c1_lang','menus_c1_lang.id_menus_c1','=','menus_c1.id')->join('languages','menus_c1_lang.id_lang','=','languages.id')->where('languages.title','en')->where('menus_c1.id',$id)->get();
       // dd($menu_c1);
        return view('admin.edit_menu_cha',compact('menu_c1_vn','menu_c1_en'));
    }
    public function posteditmenu_cha(Request $request,$id){
        if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);

            $menu_c1 = Menu_c1::find($id);    
            $menu_c1->image = $file_name =$file->getClientOriginalName('file');
            $menu_c1->id_user = auth::user()->id;
            $menu_c1->updated_at = new DateTime();
            $menu_c1->save();
            
            $menu_c1_lang_vn1 = Menu_c1_lang::select('menus_c1_lang.id')->join('languages','menus_c1_lang.id_lang','=','languages.id')->where('languages.title','vi')->where('menus_c1_lang.id_menus_c1',$menu_c1->id)->first();
            $menu_c1_lang_vn =Menu_c1_lang::findOrFail($menu_c1_lang_vn1->id);
            $menu_c1_lang_vn->name_menu_c1 = $request->name_c1_vn;
            $menu_c1_lang_vn->note = $request->note_vn;
            $menu_c1_lang_vn->slug = $request->slug_vn;
            $menu_c1_lang_vn->id_menus_c1 = $menu_c1->id;
            $menu_c1_lang_vn->updated_at = new DateTime();
            $menu_c1_lang_vn->save();

            $menu_c1_lang_en1 = Menu_c1_lang::select('menus_c1_lang.id')->join('languages','menus_c1_lang.id_lang','=','languages.id')->where('languages.title','en')->where('menus_c1_lang.id_menus_c1',$menu_c1->id)->first();
            $menu_c1_lang_en = Menu_c1_lang::findOrFail($menu_c1_lang_en1->id);
            $menu_c1_lang_en->name_menu_c1 = $request->name_c1_en;
            $menu_c1_lang_en->slug = $request->slug_en;
            $menu_c1_lang_en->note = $request->note_en;
            $menu_c1_lang_en->id_menus_c1 = $menu_c1->id;

            $menu_c1_lang_en->updated_at = new DateTime();
            $menu_c1_lang_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Sửa Menu Cha';
            $nhatky->save();
        }else {
            $menu_c1 = Menu_c1::find($id);    
            $menu_c1->id_user = auth::user()->id;
            $menu_c1->updated_at = new DateTime();
            $menu_c1->save();
            
            $menu_c1_lang_vn1 = Menu_c1_lang::select('menus_c1_lang.id')->join('languages','menus_c1_lang.id_lang','=','languages.id')->where('languages.title','vi')->where('menus_c1_lang.id_menus_c1',$menu_c1->id)->first();
            $menu_c1_lang_vn =Menu_c1_lang::findOrFail($menu_c1_lang_vn1->id);
            $menu_c1_lang_vn->name_menu_c1 = $request->name_c1_vn;
            $menu_c1_lang_vn->note = $request->note_vn;
            $menu_c1_lang_vn->slug = $request->slug_vn;
            $menu_c1_lang_vn->id_menus_c1 = $menu_c1->id;
            $menu_c1_lang_vn->updated_at = new DateTime();
            $menu_c1_lang_vn->save();

            $menu_c1_lang_en1 = Menu_c1_lang::select('menus_c1_lang.id')->join('languages','menus_c1_lang.id_lang','=','languages.id')->where('languages.title','en')->where('menus_c1_lang.id_menus_c1',$menu_c1->id)->first();
            $menu_c1_lang_en = Menu_c1_lang::findOrFail($menu_c1_lang_en1->id);
            $menu_c1_lang_en->name_menu_c1 = $request->name_c1_en;
            $menu_c1_lang_en->note = $request->note_en;
            $menu_c1_lang_en->slug = $request->slug_en;
            $menu_c1_lang_en->id_menus_c1 = $menu_c1->id;
            $menu_c1_lang_en->updated_at = new DateTime();
            $menu_c1_lang_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Sửa Menu Cha';
            $nhatky->save();
        }
        return redirect()->route('admin/menu_cha');
    }
    public function postdeletemenu_cha($id){
        try{
             
            DB::beginTransaction();
            
             //Delete Role
            $menu_c1 = Menu_c1::find($id);
           
            
            $menu_c1_lang = Menu_c1_lang::select('id')->where('id_menus_c1',$menu_c1->id)->first();
            $menu_c1_lang_vien = Menu_c1_lang::findOrFail($menu_c1_lang->id);
            $menu_c1_lang_vien->delete($id);
            $menu_c1->delete($id);

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Xóa Menu Cha';
            $nhatky->save();
            DB::commit(); 
       
            return redirect()->route('admin/menu_cha');
        }catch(\Exception $exception){
        DB::rollback();
         \Log::error('loi:'.$exception->getMessage().$exception->getLine());
    } 

    }


    public function getmenu_con(){
        $menu_con = Menu_con::select('menu_cons.id','menus_c1_lang.name_menu_c1',
            DB::raw('GROUP_CONCAT(menu_cons_lang.menu_con) as menu_con'),
            DB::raw('GROUP_CONCAT(languages.title) as title'))
        ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
        ->join('menus_c1_lang','menus_c1_lang.id_menus_c1','=','menus_c1.id')
        ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
        ->join('languages','menu_cons_lang.id_lang','=','languages.id')
        ->GroupBY('menu_cons.id','menus_c1_lang.name_menu_c1')
        ->where('menus_c1_lang.id_lang', 1)
        ->where('menu_cons_lang.id_lang', 1)
        ->get();
       // dd($menu_con);
        $menu_c1 = Menu_c1::select('menus_c1.id','menus_c1_lang.name_menu_c1')->join('menus_c1_lang','menus_c1_lang.id_menus_c1','=','menus_c1.id')
        ->join('languages','menus_c1_lang.id_lang','=','languages.id')->where('title','vi')
        ->get();
        $lang = Language::get();
        $lang1 = Language::get();
        return view('admin.menu_con',compact('menu_c1','menu_con','lang','lang1'));
    }
    public function postmenu_con(Request $request){
        if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);

            $menu_con = new Menu_con;
            $menu_con->id_menu_c1 = $request->id_menu_c1;
            $menu_con->image = $file_name =$file->getClientOriginalName('file');
            $menu_con->created_at = new DateTime();
            $menu_con->save();

            $menu_con_lang_vn = new Menu_con_lang;
            $menu_con_lang_vn->menu_con = $request->menu_con_vn;
            $menu_con_lang_vn->note = $request->note_vn;
            $menu_con_lang_vn->slug = str_slug($request->menu_con_vn);
            $menu_con_lang_vn->id_menu_cons = $menu_con->id;
            $menu_con_lang_vn->id_lang = $request->id_lang;
            $menu_con_lang_vn->created_at = new DateTime();
            $menu_con_lang_vn->save();

            $menu_con_lang_en = new Menu_con_lang;
            $menu_con_lang_en->menu_con = $request->menu_con_en;
            $menu_con_lang_en->note = $request->note_en;
            $menu_con_lang_en->slug = str_slug($request->menu_con_en);
            $menu_con_lang_en->id_menu_cons = $menu_con->id;
            $menu_con_lang_en->id_lang = $request->id_lang1;
            $menu_con_lang_en->created_at = new DateTime();
            $menu_con_lang_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm Menu cpn';
            $nhatky->save();
        }else {
            $menu_con = new Menu_con;
            $menu_con->id_menu_c1 = $request->id_menu_c1;
            $menu_con->created_at = new DateTime();
            $menu_con->save();

            $menu_con_lang_vn = new Menu_con_lang;
            $menu_con_lang_vn->menu_con = $request->menu_con_vn;
            $menu_con_lang_vn->note = $request->note_vn;
            $menu_con_lang_vn->slug = str_slug($request->menu_con_vn);
            $menu_con_lang_vn->id_menu_cons = $menu_con->id;
            $menu_con_lang_vn->id_lang = $request->id_lang;
            $menu_con_lang_vn->created_at = new DateTime();
            $menu_con_lang_vn->save();

            $menu_con_lang_en = new Menu_con_lang;
            $menu_con_lang_en->menu_con = $request->menu_con_en;
            $menu_con_lang_en->note = $request->note_en;
            $menu_con_lang_en->slug = str_slug($request->menu_con_en);
            $menu_con_lang_en->id_menu_cons = $menu_con->id;
            $menu_con_lang_en->id_lang = $request->id_lang1;
            $menu_con_lang_en->created_at = new DateTime();
            $menu_con_lang_en->save();

            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm Menu con';
            $nhatky->save();
        }
        return redirect()->back();
    }
    public function geteditmenu_con($id){
        $menu_c1 = Menu_c1::select('menus_c1.id','menus_c1_lang.name_menu_c1')
        ->join('menus_c1_lang','menus_c1_lang.id_menus_c1','=','menus_c1.id')
        ->join('languages','menus_c1_lang.id_lang','=','languages.id')->where('title','vi')
        ->get();

        $menu_con_vn = Menu_con::select('menu_cons.id','menu_cons_lang.menu_con','menu_cons_lang.slug','menu_cons_lang.note','menus_c1_lang.name_menu_c1','menu_cons.image','menu_cons.id_menu_c1','languages.title','languages.name_lang')
        ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
        ->join('menus_c1_lang','menus_c1_lang.id_menus_c1','=','menus_c1.id')
        ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
        ->join('languages','menu_cons_lang.id_lang','=','languages.id')
        ->where('menus_c1_lang.id_lang', 1)
        ->where('languages.title','vi')
        ->where('menu_cons.id',$id)->get();

        $menu_con_en = Menu_con::select('menu_cons.id','menu_cons_lang.menu_con','menu_cons_lang.slug','menu_cons_lang.note','menus_c1_lang.name_menu_c1','menu_cons.image','menu_cons.id_menu_c1','languages.title','languages.name_lang')
        ->join('menus_c1','menus_c1.id','=','menu_cons.id_menu_c1')
        ->join('menus_c1_lang','menus_c1_lang.id_menus_c1','=','menus_c1.id')
        ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
        ->join('languages','menu_cons_lang.id_lang','=','languages.id')
        ->where('menus_c1_lang.id_lang', 2)
        ->where('languages.title','en')
        ->where('menu_cons.id',$id)->get();

        //dd($menu_con_vn);
        return view('admin.edit_menu_con',compact('menu_con_vn','menu_c1','menu_con_en'));
    }
    public function posteditmenu_con(Request $request,$id){
      
        $menu_con = Menu_con::find($id);
        $menu_con->id_menu_c1 = $request->id_menu_c1;
        $menu_con->created_at = new DateTime();
        $menu_con->save();

        $menu_con_lang_vn1 = Menu_con_lang::select('menu_cons_lang.id')->join('languages','menu_cons_lang.id_lang','=','languages.id')->where('languages.title','vi')->where('menu_cons_lang.id_menu_cons',$menu_con->id)->first();
        $menu_con_lang_vn = Menu_con_lang::findOrFail($menu_con_lang_vn1->id);
        $menu_con_lang_vn->menu_con = $request->menu_con_vn;
        $menu_con_lang_vn->note = $request->note_vn;
        $menu_con_lang_vn->slug = $request->slug_vn;
        $menu_con_lang_vn->id_menu_cons = $menu_con->id;
        $menu_con_lang_vn->updated_at = new DateTime();
        $menu_con_lang_vn->save();

        $menu_con_lang_en1 = Menu_con_lang::select('menu_cons_lang.id')->join('languages','menu_cons_lang.id_lang','=','languages.id')->where('languages.title','en')->where('menu_cons_lang.id_menu_cons',$menu_con->id)->first();
        $menu_con_lang_en = Menu_con_lang::findOrFail($menu_con_lang_en1->id);
        $menu_con_lang_en->menu_con = $request->menu_con_en;
        $menu_con_lang_en->note = $request->note_en;
        $menu_con_lang_en->slug = $request->slug_en;
        $menu_con_lang_en->id_menu_cons = $menu_con->id;
        $menu_con_lang_en->updated_at = new DateTime();
        $menu_con_lang_en->save();

        $dt = Carbon::now();
        $nhatky = new nhatky();
        $nhatky->user_id = Auth::user()->id;
        $nhatky->thoigian = $dt;
        $nhatky->thaotac = 'Sửa Menu con';
        $nhatky->save();
    
        return redirect()->route('admin/menu_con');
    }
    public function postdeletemenu_con($id){
        try{
             
            DB::beginTransaction();
            
             //Delete Role
            $menu_con = Menu_con::find($id);

            $menu_con_lang = Menu_con_lang::select('id')->where('id_menu_cons',$menu_con->id)->first();
            $menu_con_lang_vien = Menu_con_lang::findOrFail($menu_con_lang->id);
            $menu_con_lang_vien->delete($id);
            $menu_con->delete($id);
            
            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Xóa Menucon';
            $nhatky->save();

            DB::commit(); 
       
            return redirect()->route('admin/menu_con');
        }catch(\Exception $exception){
        DB::rollback();
         \Log::error('loi:'.$exception->getMessage().$exception->getLine());

    } 

    }
  

    public function getkho_sanpham(){
        $khosanpham= Khosanpham::select('kho_sanphams.id',
            DB::raw('GROUP_CONCAT(kho_sanphams_lang.name_sanpham ) as name_sanpham '),
            DB::raw('GROUP_CONCAT(languages.title ) as title'))
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->join('languages','kho_sanphams_lang.id_lang','=','languages.id')
         ->where('languages.title','vi')
        ->GroupBY( 'kho_sanphams.id')
        ->get();
        //dd($khosanpham);
        $menu_con = Menu_con::select('menu_cons.id','menu_cons_lang.menu_con')
        ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
        ->join('languages','menu_cons_lang.id_lang','=','languages.id')
        ->where('languages.title','vi')
        ->get();
        //dd($menu_con);
        return view('admin.upwebsanpham',compact('khosanpham','menu_con'));
    }
    public function getup_sanpham(){
        $menu_c1 = Menu_c1::SELECT( 'menus_c1.id','menus_c1_lang.name_menu_c1', 
        DB::raw('GROUP_CONCAT(menu_cons.id,menu_cons_lang.menu_con )'))
        ->join('menus_c1_lang','menus_c1_lang.id_menus_c1','=','menus_c1.id')
        ->join('menu_cons','menus_c1.id','=','menu_cons.id_menu_c1')
        ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
        ->join('languages','menu_cons_lang.id_lang','=','languages.id')
        ->GroupBY( 'menus_c1.id','menus_c1_lang.name_menu_c1')
        ->where('menus_c1_lang.id_lang', 1)
        ->where('languages.title','vi')
        ->get();
       // dd($menu_c1);
        $lang = Language::get();
        $lang1 = Language::get();
        return view('admin.upsanpham',compact('menu_c1','lang','lang1'));
    }
    public function postup_sanpham(Request $request){
        if ($request->hasFile('file')){
                $file = $request->file('file');
                $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
                $file->move('img',$file_name);
                
        try{
            DB::beginTransaction();
                $khoCreate = $this->kho_sanphams->create([
                    'image' => $file_name =$file->getClientOriginalName('file'),
                    'note' => $request->ghichu,
                    'link' => $request->link,
                    'id_user' => Auth::user()->id
                ]);
               
                $khoCreatevn = $this->kho_sanphams_lang->create([
                    'name_sanpham' => $request->name_sanpham_vn,
                    'noidung' => $request->text_vn, 
                    'tomtat' => $request->note_vn,
                    'slug' => str_slug($request->name_sanpham_vn),
                    'keywork' =>$request->key_vn,
                    'id_lang' => $request->id_lang,
                    'id_khosanphams' => $khoCreate->id,
                ]);

                $khoCreateen = $this->kho_sanphams_lang->create([
                    'name_sanpham' => $request->name_sanpham_en,
                    'noidung' => $request->text_en,
                    'tomtat' => $request->note_en,
                    'slug' => str_slug($request->name_sanpham_en),
                    'keywork' =>$request->key_en,
                    'id_lang' => $request->id_lang1,
                    'id_khosanphams' => $khoCreate->id,
                ]);
               

            
            $khoCreate->menu_cons()->attach($request->menu_conss);
            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm một sản phẩm';
            $nhatky->save();  
                    DB::commit();
                   return redirect()->route('admin/up_sanpham');

           }catch(\Exception $exception){
            DB::rollback();
            \Log::error('loi:'.$exception->getMessage().$exception->getLine());
           }
        }else {
            try{
                DB::beginTransaction();
                $khoCreate = $this->kho_sanphams->create([
                    
                    'note' => $request->ghichu,
                    'link' => $request->link,
                    'id_user' => Auth::user()->id
                ]);
                $khoCreatevn = $this->kho_sanphams_lang->create([
                    'name_sanpham' => $request->name_sanpham_vn,
                    'noidung' => $request->text_vn,
                    'tomtat' => $request->note_vn,
                    'slug' => str_slug($request->name_sanpham_vn),
                    'keywork' => $request->key_vn,
                    'id_lang' => $request->id_lang,
                    'id_khosanphams' => $khoCreate->id
                ]);
                $khoCreateen = $this->kho_sanphams_lang->create([
                    'name_sanpham' => $request->name_sanpham_en,
                    'noidung' => $request->text_en,    
                    'tomtat' => $request->note_en,
                    'slug' => str_slug($request->name_sanpham_en),
                    'keywork' => $request->key_en,
                    'id_lang' => $request->id_lang1,
                    'id_khosanphams' => $khoCreate->id,
                ]);
          
         
            $khoCreate->menu_cons()->attach($request->menu_conss);
            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Thêm một sản phẩm';
            $nhatky->save();
                    DB::commit();
                   return redirect()->route('admin/up_sanpham');

           }catch(\Exception $exception){
            DB::rollback();
            \Log::error('loi:'.$exception->getMessage().$exception->getLine());
           }
        } 
    }
    public function geteditup_sanpham($id){
        $menu_c1 = Menu_c1::SELECT( 'menus_c1.id','menus_c1_lang.name_menu_c1', 
        DB::raw('GROUP_CONCAT(menu_cons.id,menu_cons_lang.menu_con )'))
        ->join('menus_c1_lang','menus_c1_lang.id_menus_c1','=','menus_c1.id')
        ->join('menu_cons','menus_c1.id','=','menu_cons.id_menu_c1')
        ->join('menu_cons_lang','menu_cons_lang.id_menu_cons','=','menu_cons.id')
        ->join('languages','menu_cons_lang.id_lang','=','languages.id')
        ->GroupBY( 'menus_c1.id','menus_c1_lang.name_menu_c1')
        ->where('menus_c1_lang.id_lang', 1)
        ->where('languages.title','vi')
        ->get();


        $khosanphamvn= Khosanpham::select('kho_sanphams.id','kho_sanphams_lang.name_sanpham','kho_sanphams_lang.noidung','kho_sanphams_lang.tomtat','kho_sanphams.note','kho_sanphams.image','languages.name_lang','kho_sanphams.link','kho_sanphams_lang.slug','kho_sanphams_lang.keywork')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->join('languages','kho_sanphams_lang.id_lang','=','languages.id')
        ->where('languages.title', 'vi')
        ->where('kho_sanphams.id',$id)
        ->get();

        $khosanphamen= Khosanpham::select('kho_sanphams.id','kho_sanphams_lang.name_sanpham','kho_sanphams_lang.noidung','kho_sanphams_lang.tomtat','kho_sanphams.note','kho_sanphams.image','languages.name_lang','kho_sanphams.link','kho_sanphams_lang.slug','kho_sanphams_lang.keywork')
        ->join('kho_sanphams_lang','kho_sanphams_lang.id_khosanphams','=','kho_sanphams.id')
        ->join('languages','kho_sanphams_lang.id_lang','=','languages.id')
        ->where('languages.title', 'en')
        ->where('kho_sanphams.id',$id)
        ->get();

        $getAllkhosanphamOfmenucon = DB::table('menu_khos')->where('id_kho', $id)
        ->pluck('id_menu_con');

        return view('admin/edit_upsanpham',compact('menu_c1','khosanphamvn','getAllkhosanphamOfmenucon','khosanpham_lang','khosanphamen'));
    }
    public function posteditup_sanpham(Request $request, $id){
        if ($request->hasFile('file')){
            // L?y tên file
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName('file');
            // Luu file vào thu m?c upload v?i tên là bi?n $filename
            $file->move('img',$file_name);
        try{
            DB::beginTransaction();
            $this->kho_sanphams->where('id',$id)->update([
                'image' => $file_name =$file->getClientOriginalName('file'),
                'note' => $request->ghichu,
                'link' => $request->link,
                'id_user' => Auth::user()->id
            ]);
 
           $khoupdate = Khosanpham::select('id')->where('id',$id)->first();

            $khoupdatevn =  Khosanpham_lang::select('kho_sanphams_lang.id')->join('languages','kho_sanphams_lang.id_lang','=','languages.id')->where('languages.title','vi')->where('kho_sanphams_lang.id_khosanphams',$khoupdate->id)->first();
            
            $this->kho_sanphams_lang->where('id',$khoupdatevn->id)->update([
                'name_sanpham' => $request->name_sanpham_vn,
                'noidung' => $request->text_vn,
                'tomtat' => $request->note_vn,
                'keywork' => $request->key_vn,     
                'slug' => str_slug($request->name_sanpham_vn),
                'id_khosanphams' => $khoupdate->id
            ]);

            $khoupdateen =  Khosanpham_lang::select('kho_sanphams_lang.id')->join('languages','kho_sanphams_lang.id_lang','=','languages.id')->where('languages.title','en')->where('kho_sanphams_lang.id_khosanphams',$khoupdate->id)->first();

            $this->kho_sanphams_lang->where('id',$khoupdateen->id)->update([
                'name_sanpham' => $request->name_sanpham_en,
                'noidung' => $request->text_en,    
                'tomtat' => $request->note_en,
                'keywork' => $request->key_en,
                'slug' => str_slug($request->name_sanpham_en),
                'id_khosanphams' => $khoupdate->id
            ]);

            DB::table('menu_khos')->where('id_kho',$id)->delete();
            $khoCreate = $this->kho_sanphams->find($id);
    
            $khoCreate->menu_cons()->attach($request->menu_conss);
            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Sửa một sản phẩm';
            $nhatky->save();
            DB::commit();
           return redirect()->route('admin/kho_sanpham');

           }catch(\Exception $exception){
            DB::rollback();
            \Log::error('loi:'.$exception->getMessage().$exception->getLine());
           }
        }else{
             try{
            DB::beginTransaction();
           
            $this->kho_sanphams->where('id',$id)->update([
                'note' => $request->ghichu,
                'link' => $request->link,
                'id_user' => Auth::user()->id
            ]);


            $khoupdate = Khosanpham::select('id')->where('id',$id)->first();
           
            $khoupdatevn =  Khosanpham_lang::select('kho_sanphams_lang.id')->join('languages','kho_sanphams_lang.id_lang','=','languages.id')->where('languages.title','vi')->where('kho_sanphams_lang.id_khosanphams',$khoupdate->id)->first();

            $this->kho_sanphams_lang->where('id',$khoupdatevn->id)->update([
                'name_sanpham' => $request->name_sanpham_vn,
                'noidung' => $request->text_vn,
                'tomtat' => $request->note_vn,
                'keywork' => $request->key_vn,
                'slug' => str_slug($request->name_sanpham_vn),
                'id_khosanphams' => $khoupdate->id
            ]);

            $khoupdateen =  Khosanpham_lang::select('kho_sanphams_lang.id')->join('languages','kho_sanphams_lang.id_lang','=','languages.id')->where('languages.title','en')->where('kho_sanphams_lang.id_khosanphams',$khoupdate->id)->first();

            $this->kho_sanphams_lang->where('id',$khoupdateen->id)->update([
                'name_sanpham' => $request->name_sanpham_en,
                'noidung' => $request->text_en,    
                'tomtat' => $request->note_en,
                'keywork' => $request->key_en,
                'slug' => str_slug($request->name_sanpham_en),
                'id_khosanphams' => $khoupdate->id
            ]);

           
            DB::table('menu_khos')->where('id_kho',$id)->delete();
            $khoCreate = $this->kho_sanphams->find($id);

            $khoCreate->menu_cons()->attach($request->menu_conss);
            $dt = Carbon::now();
            $nhatky = new nhatky();
            $nhatky->user_id = Auth::user()->id;
            $nhatky->thoigian = $dt;
            $nhatky->thaotac = 'Sửa một sản phẩm';
            $nhatky->save();
            DB::commit();
           return redirect()->route('admin/kho_sanpham');

           }catch(\Exception $exception){
            DB::rollback();
            \Log::error('loi:'.$exception->getMessage().$exception->getLine());
           }
        }
    }
    public function getdeleup_sanpham($id){
          try{
             DB::beginTransaction();
             //Delete Role
            $khosanpham = $this->kho_sanphams->find($id);

            $khodelete = Khosanpham::select('id')->first();

           

            $khosanpham->delete($id);
             //Delete role_permission
            $khosanpham->menu_cons()->detach();
            $khosanpham->kho_sanphams_lang()->delete($id);
            DB::commit();
            return redirect()->route('admin/kho_sanpham');
        }catch(\Exception $exception){
        DB::rollback();
         \Log::error('loi:'.$exception->getMessage().$exception->getLine());
        }
    }
}
