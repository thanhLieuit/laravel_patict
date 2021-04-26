@extends('admin.master')
@section('content')
@section('title','Tất cả bài viết')
<div class="full-container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
	            <div class="card-block">
	                <h4 class="card-title">bài viết</h4>
	               
	                <div class="table-responsive m-t-40">
	                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
	                        <thead>
	                            <tr>
	                                <th>Tiêu đề</th>
	                          		<th>Danh Mục</th>
	                                <th>Tác Giả</th>
	                                <th>Thời Gian</th>
	                                <th>Thao tác</th>
	                            </tr>
	                        </thead>
	                        <tfoot>
	                            <tr>
	                                <th>Tiêu đề</th>
	                               	<th>Danh Mục</th>
	                                <th>Tác Giả</th>
	                                <th>Thời Gian</th>
	                                <th>Thao tác</th>
	                            </tr>
	                        </tfoot>
	                        <tbody>
	                        	@foreach($baiviet as $baiviet)
	                            <tr>
	                                <td>{{$baiviet->name_baiviet}}</td>
	                        		<td>{{$baiviet->name_menu_baiviet}}</td>
	                                <td>{{$baiviet->name}}</td>
	                                <td>Đã xuất bản <br>{{$baiviet->created_at}}</td>
	                                <td><a href="{{url('admin/edit_baiviet',['id'=>$baiviet->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="{{url('admin/dele_baiviet',['id'=>$baiviet->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
	                                
	                            </tr>
	                            @endforeach
	                        </tbody>
	                    </table>
	                </div>
	            </div>
	        </div>
		</div>
	</div>
</div>
@endsection