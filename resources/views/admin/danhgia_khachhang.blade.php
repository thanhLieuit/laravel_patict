@extends('admin.master')
@section('content')
@section('title','Đánh giá khách hàng')
<div class="full-container">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6">
				<div class="card card-block">
	                <h4 class="card-title">Đánh giá của khách hàng</h4>
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
		                        <label>Tên</label>
		                        <input type="text" class="form-control" value="" name="name_vn">
		                    </div>
		                    <div class="form-group">
		                        <label>Nội dung</label>
		                        <textarea class="form-control" rows="5" name="note_vn"></textarea>
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
		                        <label>Tên</label>
		                        <input type="text" class="form-control" value="" name="name_en">
		                    </div>
		                    <div class="form-group">
		                        <label>Nội dung</label>
		                        <textarea class="form-control" rows="5" name="note_en"></textarea>
		                    </div>
		                    
	                    </div>

	                    <div id="Tokyo" class="tabcontent">
	                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
	                       
	                    </div>
	                    <br>
	                    <div class="form-group">
	                    	<label>Đánh giá của khách hàng</label>
	                    	<div class="cont">
								<div class="stars">
								      	<input class="star star-5" id="star-5-2" type="radio" name="star"value="5" />
								      	<label class="star star-5" for="star-5-2"></label>
								      	<input class="star star-4" id="star-4-2" type="radio" name="star"value="4" />
								      	<label class="star star-4" for="star-4-2"></label>
								      	<input class="star star-3" id="star-3-2" type="radio" name="star"value="3" />
								      	<label class="star star-3" for="star-3-2"></label>
								      	<input class="star star-2" id="star-2-2" type="radio" name="star"value="2" />
								      	<label class="star star-2" for="star-2-2"></label>
								      	<input class="star star-1" id="star-1-2" type="radio" name="star" value="1" />
								      	<label class="star star-1" for="star-1-2"></label> 
								</div>
							</div>
	                    </div>
	                    <div class="form-group">
		                    <div class="card">
		                        <div class="card-block">
		                            <h4 class="card-title">Ảnh đối tác</h4>
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
                    <h4 class="card-title">Danh sách đánh giá của khách hàng</h4>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                	<th>Ngôn ngữ</th>
                                    <th>Tên</th>
                                    <th>Nội dung</th>
                                    <th>Ảnh</th>
                                    <th>Star</th>
                                    <th>Tác vụ</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                	<th>Ngôn ngữ</th>
                                    <th>Tên</th>
                                    <th>Nội dung</th>
                                    <th>Ảnh</th>
                                    <th>Star</th>
                                    <th>Tác Vụ</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($danhgia_kh as $danhgia_kh)
                                <tr>
                                	<td>{{$danhgia_kh->title}}</td>
                                    <td>{{$danhgia_kh->name}}</td>
                                    <td>{{$danhgia_kh->noidung}}</td>
                                    <td><img src="../img/{{$danhgia_kh->image}}" alt="" style="width: 100%"></td>
                                    <td>{{$danhgia_kh->star}}</td>
                                    <td><a href="{{url('admin/del_danhsachdanhgiakhachhang',['id'=>$danhgia_kh->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

@endsection