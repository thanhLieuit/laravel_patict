<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tuyendung;
use Datetime;
use App\nhatky;
use Carbon\Carbon;
use auth;
use App\User;

class TuyendungController extends Controller
{
    public function gettuyendung(){
    	$tuyendung = Tuyendung::get();
    	return view('admin.table_tuyendung',compact('tuyendung'));
    }
    public function getviewchitiet($id){
    	$tuyendung = Tuyendung::where('id',$id)->get();
    	$uptuyendung = Tuyendung::find($id);
    	$uptuyendung->note = 'đã nhận';
    	$uptuyendung->updated_at = new datetime();
    	$uptuyendung->save();

        
        $dt = Carbon::now();
        $nhatky = new nhatky();
        $nhatky->user_id =Auth::user()->id;
        $nhatky->thoigian = $dt;
        $nhatky->thaotac = 'Đã nhận đơn tuyển dụng';
        //dd($nhatky);
        $nhatky->updated_at = new datetime();
        $nhatky->save();
    	return view('admin.view_chitiet_tuyendung',compact('tuyendung'));
    }
}
