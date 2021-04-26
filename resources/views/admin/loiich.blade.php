@extends('admin.master')
@section('content')
@section('title','Lợi ích')
<div class="full-controller">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6">
				<div class="card card-block">
	                <h4 class="card-title">Lợi ích</h4>
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
	                        <label>tên</label>
	                        <input type="text" class="form-control" value="" name="name_loiich_vn">
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
	                        <label>tên</label>
	                        <input type="text" class="form-control" value="" name="name_loiich_en">
	                    </div>
	                    
                    </div>

                    <div id="Tokyo" class="tabcontent">
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                       
                    </div>
                    <br>
                    <div class="form-group">
		                    <div class="card">
		                        <div class="card-block">
		                            <h4 class="card-title">Ảnh</h4>
		                            <label for="input-file-now"></label>
		                            <input type="file" id="input-file-now" class="dropify" name="file"/>
		                        </div>
		                    </div>
		                </div>
	                    <button type="submit" class="btn btn-info">Thêm</button>
	                </form>
	            </div>
			</div>
			<div class="col-md-6">
	            <div class="card">
	                <div class="card-block">
	                    <h4 class="card-title">Danh sách lợi ích</h4>
	                    <div class="table-responsive m-t-40">
	                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
	                            <thead>
	                                <tr>
	                                	<th>Ngôn ngữ</th>
	                                    <th>Tên</th>
	                                    <th>Ảnh</th>
	                                    <th>Tác vụ</th>
	                                </tr>
	                            </thead>
	                            <tfoot>
	                                <tr>
	                                	<th>Ngôn ngữ</th>
	                                    <th>Tên</th>
	                                    <th>Ảnh</th>
	                                    <th>Tác vụ</th>
	                                </tr>
	                            </tfoot>
	                            <tbody>
	                                @foreach($loiich as $loiich)
	                                <tr>
	                                	<td>{{$loiich->title}}</td>
	                                    <td>{{$loiich->name_loiich}}</td>
	                                   	<td><img src="../img/{{$loiich->image}}" alt="" style="width: 50%"></td>
	                                    <td>
	                                        <a href="{{url('admin/del_loiich',['id'=>$loiich->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
</div>
@endsection