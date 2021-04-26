@extends('admin.master')
@section('content')
@section('title','Tất cả web sản phẩm')
<div class="full-container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
	            <div class="card-block">
	                <h4 class="card-title">Danh sách</h4>
	                <div class="table-responsive m-t-40">
	                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
	                        <thead>
	                            <tr>
	                            	<th>Ngôn ngữ</th>
	                                <th>Tiêu đề</th>
	                          		<th>Danh Mục</th>
	                                
	                                <th>Thời Gian</th>
	                                <th>Thao tác</th>
	                            </tr>
	                        </thead>
	                        <tfoot>
	                            <tr>
	                            	<th>Ngôn ngữ</th>
	                                <th>Tiêu đề</th>
	                               	<th>Danh Mục</th>
	                              
	                                <th>Thời Gian</th>
	                                <th>Thao tác</th>
	                            </tr>
	                        </tfoot>
	                        <tbody>
	                        	@foreach($khosanpham as $khosanpham)
	                            <tr>
	                            	<td>{{$khosanpham->title}} </td>
	                                <td>{{$khosanpham->name_sanpham}}</td>
	                        		@if(count($khosanpham->menu_cons)>0)
	                                <td>
	                                    @foreach($khosanpham->menu_cons as $menu_con)
	                                    	@foreach($menu_con->menu_con_lang as $menu_con_langs)
	                                    		@if($menu_con_langs->id_lang == 1)
	                                    			{{$menu_con_langs->menu_con}}<br>
	                                    		@endif
	                                    	@endforeach
	                                    @endforeach
	                                </td>
	                               
	                                @endif
	                               
	                                <td>Đã xuất bản <br>{{$khosanpham->updated_at}}</td>
	                                <td><a href="{{url('admin/edit_up_sanpham',['id'=>$khosanpham->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="{{url('admin/dele_up_sanpham',['id'=>$khosanpham->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
	                                
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