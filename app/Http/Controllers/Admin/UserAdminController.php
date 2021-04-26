<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Auth;
use DateTime;
use DB;
use Hash;
use Carbon\Carbon;


class UserAdminController extends Controller
{

	  private $users;
    private $roles;
    public function __construct(User $users, Role $roles)
    {
       // $this->middleware('auth');
        $this->users = $users;
        $this->roles = $roles;

    }
    public function getadduser()
    {
    	return view('admin.adduser');
    }

    public function postadduser(Request $request)
    {
      try{
      DB::beginTransaction();
      $usersCreate = $this->users->create([
        'name' => $request->name,
        'email'=>$request->email,
        'password'=> bcrypt($request['password']),
      ]);
        DB::commit();
        return redirect()->route('admin/user/listuser');

       }catch(\Exception $exception){
      DB::rollback();
     }
    }

    public function getListInfo(){
       
        
      // $list= User::select('users.name','users.email','roles.Name')->join('role_admins','role_admins.User_id','=','users.id')
      // ->join('roles','roles.id','=','role_admins.Role_id')->get();
       $list= User::all();
       $role = Role::all();
       //dd($list);
      return view('admin.listuser',compact('list','role'));
    }
    public function geteditinfo ($id) {
     
        $roles = $this->roles->all();
        $users = $this->users->findOrfail($id);
        $listroleofuser = DB::table('role_admins')->where('User_id', $id)->pluck('Role_id');
        
       return view('admin.editinfo',compact('roles', 'users','listroleofuser'));
     }
    public function posteditinfo (Request $request , $id) {
  
      try{
      DB::beginTransaction();
      $this->users->where('id', $id)->update([
        'name' => $request->name,
        'email' => $request->email
      ]);
      DB::table('role_admins')->where('User_id', $id)->delete();
      $usersCreate = $this->users->find($id);
      $usersCreate->roles()->attach($request->role);
       DB::commit();
        return redirect()->route('admin/user/listuser');
      }catch(\Exception $exception){
      DB::rollback();
     }
    }


    public function getdeleteinfo($id){
         
        try{
        DB::beginTransaction();

              $users = $this->users->find($id);
              $users->delete($id);
              $users->roles()->detach();
           
         DB::commit();
        return redirect()->back();

     }catch(\Exception $exception){
      DB::rollback();
      \Log::error('loi:'.$exception->getMessage().$exception->getLine());
     }

    }
    public function getcanhan($id){
       $user= User::where('id',$id)->get();
      return view('admin.profile',compact('user'));
    }
    public function postcanhan(Request $request, $id){
      $user = User::find($id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = bcrypt($request['password']);
      $user->save();
      return redirect()->back();
    }
}
