@extends('admin.master')
@section('content')
@section('title','Danh sách user')
<div class="full-container">
    <div class="col-md-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Danh sách người dùng</h4>
                <a href="{{ route('admin/user/add') }}"><button style="width: 100%;margin-bottom: 30px;text-transform: uppercase;" type="button" class="btn btn-info">Thêm Người dùng Mới</button></a>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Quyền</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Quyền</th>
                                <th>Hành động</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($list as $list)
                            <tr>
                                <td>{{$list->name}}</td>
                                <td>{{$list->email}}</td>
                                @if(count($list->roles)>0)
                                <td >
                                    @foreach($list->roles as $role)
                                    {{$role->Name}}.
                                    @endforeach
                                </td>
                                @else
                                <td>No role</td>
                                @endif
                                <td><a  href="{{ route('admin/user/edituser',['id'=>$list->id]) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>
                                    <a href="{{ route('admin/user/deleteuser',['id'=>$list->id]) }}" ><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
