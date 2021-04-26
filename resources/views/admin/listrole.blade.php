@extends('admin.master')
@section('content')
@section('title','Danh sách Quyền')
<div class="card mb-3">
    <div class="card-header">
       Danh sách Role</div>

  
    <div class="card-body">
      <div class="table-responsive">
        <div class="col-md-12">
            <a href="{{ route('admin/user/addrole') }}" style="    font-size: 20px !important;"><i class="fa fa-plus-circle" style="font-size:24px"></i></a>
        </div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="    font-size: 20px !important;">
      
          <thead>
            <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Tác Vụ</th>
            </tr>
          </thead>
          <tfoot>
             <tr>
              <th>Name</th>
              <th>Description</th>
              <th>Tác Vụ</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($listr as $role)
          <tr>
              
              <td>{!! $role["Name"]; !!}</td>
              <td>{!! $role["Description"]; !!}</td>
              <td>
                <a href="{{ route('admin/user/editrole',['id' =>$role->id]) }}"><a  href="{{ route('admin/user/editrole',['id'=>$role->id]) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="{{ route('admin/user/deleterole',['id' =>$role->id]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
              </td>
            </tr>
       
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
  </div>

  @endsection