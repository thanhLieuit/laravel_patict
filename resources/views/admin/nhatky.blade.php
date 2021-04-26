@extends('admin.master')
@section('content')
@section('title','Nhật ký hoạt động')
<div class="full-container">
	<div class="col-md-12">
		<div class="card">
            <div class="card-block">
                <h4 class="card-title">Danh sách nhật ký</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Tên</th>  
                                <th>Thời gian</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Tên</th>  
                                <th>Thời gian</th>
                                <th>Thao tác</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        	@foreach($nhatky as $nhatky)
                            <tr>
                                <td>{{$nhatky->name}}</td>
                           		<td>{{$nhatky->thoigian}}</td>
                           		<td>{{$nhatky->thaotac}}</td>
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