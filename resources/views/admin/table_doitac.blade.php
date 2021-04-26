@extends('admin.master')
@section('content')
@section('title','Danh sách đối tác')
<div class="full-container">
	<div class="col-md-12">
		<div class="card">
            <div class="card-block">
                <h4 class="card-title">Danh sách đối tác</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Tên</th>
                                <th>Ảnh</th>
                                <th>note</th>
                                <th>Ngày thêm</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Tên</th>
                                <th>Ảnh</th>
                                <th>note</th>
                                <th>Ngày thêm</th>
                                <th>Thao tác</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        	@foreach($doitac as $doitac)
                            <tr>
                                <td>{{$doitac->name_doitac}}</td>
                           		<td><img src="../img/{{$doitac->image}}" alt="" style="width: 20%;"></td>
                                <td>{{$doitac->note}}</td>
                                <td>{{$doitac->created_at}}</td>
                                <td><a href="{{url('admin/edit_doitac',['id'=>$doitac->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="{{url('admin/del_doitac',['id'=>$doitac->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                
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