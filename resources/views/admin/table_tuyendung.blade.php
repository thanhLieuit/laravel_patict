@extends('admin.master')
@section('content')
@section('title','Danh sách tuyển dụng')
<div class="full-container">
		<div class="col-md-12">
		<div class="card">
            <div class="card-block">
                <h4 class="card-title">Danh sách tuyển dụng</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Emal</th>
                                <th>Phone</th>
                                <th>Vị Trí</th>
                                <th>Ngày tạo</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Tên</th>
                                <th>Emal</th>
                                <th>Phone</th>
                                <th>Vị Trí</th>
                                <th>Ngày tạo</th>
                                <th>Thao tác</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        	@foreach($tuyendung as $tuyendung)
                            <tr>
                                <td>{{$tuyendung->hoten}}</td>
                                <td>{{$tuyendung->email}}</td>
                                <td>{{$tuyendung->phone}}</td>
                                <td>{{$tuyendung->vitri}}</td>
                                <td>{{$tuyendung->created_at}}</td>
                                <td><a href="{{url('admin/view_chitiet',['id'=>$tuyendung->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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