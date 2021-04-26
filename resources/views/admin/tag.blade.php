@extends('admin.master')
@section('content')
@section('title','Thêm Tag')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form class="form-horizontal m-t-40" action="" enctype="multipart/form-data" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="tab">
                    <a class="tablinks" onclick="openCity(event, 'vietnam')" id="defaultOpen">Việt Nam |</a>
                    <a class="tablinks" onclick="openCity(event, 'english')">English |</a>
                    <a class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a>
                </div>

                <div id="vietnam" class="tabcontent">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
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
					    <label>Thẻ Tag</label>
					    <input type="text" class="form-control" value="" name="name_tag_vn">
					</div>

                </div>
                <div id="english" class="tabcontent">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                    <div class="form-group">
                        <label>Chọn ngôn ngữ</label>
                        <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang1">
                            <option value="">trống</option> 
                            @foreach($lang1 as $lang1)       
                            <option value="{{$lang1->id}}">{{$lang1->name_lang}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
					    <label>Thẻ Tag</label>
					    <input type="text" class="form-control" value="" name="name_tag_en">
					</div>

                </div>
                <button type="submit" class="btn btn-info">Thêm</button>
			</form>
		</div>
		<div class="col-md-6">
			<div class="card">
		        <div class="card-block">
		            <h4 class="card-title">Thẻ Tag</h4>
		            <h6 class="card-subtitle"></h6>
		            <div class="table-responsive m-t-40">
		                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
		                    <thead>
		                        <tr>
		                            <th>Ngôn ngữ</th>
		                            <th>Tên</th>
		                            <th>Thao tác</th>
		                        </tr>
		                    </thead>
		                    <tfoot>
		                        <tr>
		                            <th>Ngôn ngữ</th>
		                            <th>Tên</th>
		                            <th>Thao tác</th>
		                        </tr>
		                    </tfoot>
		                    <tbody>

		                    	@foreach($tag as $tag)
		                    	<tr>
		                    		<td>{{$tag->title}}</td>
		                    		<td>{{$tag->name}}</td>
		                    		<td><a href="{{url('admin/edit_tag',['id'=>$tag->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
		                    			<a href="{{url('admin/del_tag',['id'=>$tag->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
</div>
@endsection