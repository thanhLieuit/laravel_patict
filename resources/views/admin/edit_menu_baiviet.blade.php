@extends('admin.master')
@section('content')
@section('title','edit menu bài viết')
<div class="container">
	<div class="col-md-12">
		<div class="card card-block">
            <h4 class="card-title">Menu bài viết</h4>
            <form class="form-horizontal m-t-40" action="" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="tab">
                        <a class="tablinks" onclick="openCity(event, 'vietnam')" id="defaultOpen">Việt Nam |</a>
                        <a class="tablinks" onclick="openCity(event, 'english')">English |</a>
                        <a class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a>
                    </div>

                    <div id="vietnam" class="tabcontent">
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                        @foreach($menu_baiviet_vn as $menu_baiviet_vn)
                        <div class="form-group">
                            <label>Chọn ngôn ngữ</label>
                            <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang">
                                <option value="">{{$menu_baiviet_vn->name_lang}}</option> 
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control" value="{{$menu_baiviet_vn->name_menu_baiviet}}" name="name_menu_baiviet_vn">
                        </div>
                        <div class="form-group">
                            <label>Đường dẫn tĩnh</label>
                            <input type="text" class="form-control" value="{{$menu_baiviet_vn->slug}}" name="slug_vn">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" rows="5" name="note_vn">{{$menu_baiviet_vn->note}}</textarea>
                        </div>
                        @endforeach
                    </div>

                    <div id="english" class="tabcontent">
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                        @foreach($menu_baiviet_en as $menu_baiviet_en)
                        <div class="form-group">
                            <label>Chọn ngôn ngữ</label>
                            <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang1">
                                <option value="">{{$menu_baiviet_en->name_lang}}</option> 
                               
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control" value="{{$menu_baiviet_en->name_menu_baiviet}}" name="name_menu_baiviet_en">
                        </div>
                        <div class="form-group">
                            <label>Đường dẫn tĩnh</label>
                            <input type="text" class="form-control" value="{{$menu_baiviet_en->slug}}" name="slug_en">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" rows="5" name="note_en">{{$menu_baiviet_en->note}}</textarea>
                        </div>
                        @endforeach
                    </div>

                    <div id="Tokyo" class="tabcontent">
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                       
                    </div>
                    <br>
                    <fieldset class="form-group">
                    <label>Default file upload</label>
                    <label class="custom-file d-block">
                        <input type="file" id="file" class="custom-file-input" name="file" value="{{$menu_baiviet_vn->image}}">
                        <span class="custom-file-control"></span>      
                    </label>  
                    </fieldset>
                    <center><img id="avatar" class="thumbnail" width="300px" src="../../img/{{ $menu_baiviet_vn->image }}"></center>
                <button type="submit" class="btn btn-info">sửa</button>
            </form>
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