@extends('admin.master')
@section('content')
@section('title','content')
<div class="full-container">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6">
				<div class="card card-block">
	                <h4 class="card-title">thêm thông tin</h4>
	                <form class="form-horizontal m-t-40" action="" enctype="multipart/form-data" method="POST">
	                    <input type="hidden" name="_token" value="{{csrf_token()}}">
	                 
	                    <div class="form-group">
	                        <label>Title</label>
	                        <input type="text" class="form-control" value="" name="title">
	                    </div>
                       <div class="form-group">
                            <label>Chọn ngôn ngữ</label>
                            <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang">
                                <option value="">trống</option> 
                                @foreach($lang as $lang)       
                                    <option value="{{$lang->id}}">{{$lang->name_lang}}</option>
                                @endforeach
                            </select>
                        </div>
	                    <div class="form-group">
	                        <label>Nội dung</label>
	                        <textarea name="text" id="text" class="form-control" rows="5" ></textarea>
	                    </div>
	               
	                    <button type="submit" class="btn btn-info">Thêm</button>
	                </form>
	            </div>
			</div>
			<div class="col-md-6">
                <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Danh sách </h4>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Nội dung</th>
                                    <th>Tác vụ</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                     <th>Title</th>
                                    <th>Nội dung</th>
                                    <th>Tác vụ</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            	
                             	@foreach($inf as $inf)
                             	<tr>
                             		<td>{{$inf->title}}</td>
                             		<td>{{$inf->content}}</td>
                             		<td><a href="{{url('admin/edit-content',['id'=>$inf->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="{{url('admin/dele_baogia',['id'=>$inf->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
</div>
@endsection