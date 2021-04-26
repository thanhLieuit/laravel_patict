<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Truycap;
use Carbon\Carbon;
use App\nhatky;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dt = Carbon::now()->toDateString();
      

        $ngayhomqua = Carbon::now()->subDay()->toDateString();
  

        $bayngay = Carbon::now()->subDay(7)->toDateString();
      

        $nam = Carbon::now()->subDay(365)->toDateString();

      
      $thang = Carbon::now()->month()->toDateString();

      $tchn = Truycap::select('dem')->where('ngay',$dt)->sum('dem');
     
      $tchq = Truycap::select('dem')->where('ngay',$ngayhomqua)->sum('dem');
      $tctuan = Truycap::select('dem')->whereBetween('ngay', array($bayngay, $dt))->sum('dem');
      $tcthang = Truycap::select('dem')->whereBetween('ngay', array($thang, $dt))->sum('dem');
      $tcnam = Truycap::select('dem')->whereBetween('ngay', array($nam, $dt))->sum('dem');
      $nhatky = nhatky::join('users','users.id','=','nhatkys.user_id')->orderBy('nhatkys.thoigian','desc')->limit(4)->get();
     // dd($nhatky);
      return view('admin.body',compact('tchn','tchq','tctuan','tcthang','nhatky'));
    }
}
