@extends('admin.master')
@section('content')
@section('title','chuyên mục')
<div class="full-container">
	<div class="row">
		<div class="col-md-6">
			<div class="card card-block">
                <h4 class="card-title">Chuyên Mục</h4>
                <h6 class="card-subtitle"><a href="{{route('admin/themchuyenmuccha')}}">Thêm Chuyên Mục Cha</a></h6>
                <form class="form-horizontal m-t-40" action="" enctype="multipart/form-data" method="POST">
                	<input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" class="form-control" value="" name="name_con">
                    </div>
                    <div class="form-group">
                        <label>Đường dẫn tĩnh</label>
                        <input type="text" class="form-control" value="" name="slug">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" rows="5" name="note"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Chuyên mục hiện tại</label>
                        <select class="custom-select col-12" id="inlineFormCustomSelect" name="menu_cha">
                            <option selected>Trống</option>
                            @foreach($menu_cha as $menu_cha)
                            <option value="{{$menu_cha->id}}">{{$menu_cha->name_menu_cha}}</option>
                            @endforeach
                        </select>
                    </div>
                    <fieldset class="form-group">
                        <label>Default file upload</label>
                        <label class="custom-file d-block">
                            <input type="file" id="file" class="custom-file-input" name="file">
                            <span class="custom-file-control"></span>
                        </label>
                    </fieldset>
					<button type="submit" class="btn btn-info">Thêm</button>
                </form>
            </div>
		</div>
		<div class="col-md-6">
			<div class="card">
	            <div class="card-block">
	                <h4 class="card-title">Chuyên mục</h4>
	                <div class="table-responsive m-t-40">
	                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
	                        <thead>
	                            <tr>
	                                <th>Tên</th>
	                                <th>Mô tả</th>
	                                <th>Chuổi đường dẫn</th>
	                            </tr>
	                        </thead>
	                        <tfoot>
	                            <tr>
	                                <th>Tên</th>
	                                <th>Mô tả</th>
	                                <th>Chuổi đường dẫn</th>
	                            </tr>
	                        </tfoot>
	                        <tbody>
	                        	@foreach($menu as $menu)
	                            <tr>
	                                <td>{{$menu->name_menu}}</td>
	                                <td>{{$menu->note_con}}</td>
	                                <td>{{$menu->slug_con}}</td>
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