@extends('admin.master')
@section('content')
@section('title','edit menu cha')
<div class="container">
	<div class="col-md-12">
		<div class="card card-block">
            <h4 class="card-title">Menu cha</h4>
            <form class="form-horizontal m-t-40" action="" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
               
                    <div class="tab">
                        <a class="tablinks" onclick="openCity(event, 'vietnam')" id="defaultOpen">Việt Nam |</a>
                        <a class="tablinks" onclick="openCity(event, 'english')">English |</a>
                        <a class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a>
                    </div>

                    <div id="vietnam" class="tabcontent"> 
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                         @foreach($menu_c1_vn as $menu_c1_vn)
                        <div class="form-group">
                            <label>Chọn ngôn ngữ</label>
                            <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang">
                                @if($menu_c1_vn->title == 'vi')
                                <option value="">{{$menu_c1_vn->name_lang}}</option> 
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control" value="{{$menu_c1_vn->name_menu_c1}}" name="name_c1_vn">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" rows="5" name="note_vn">{{$menu_c1_vn->note}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Đường dẫn tĩnh</label>
                            <input type="text" class="form-control" value="{{$menu_c1_vn->slug}}" name="slug_vn">
                        </div>
                         @endforeach
                    </div>

                    <div id="english" class="tabcontent">
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                        @foreach($menu_c1_en as $menu_c1_en)
                        <div class="form-group">
                            <label>Chọn ngôn ngữ</label>
                            <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang1">
                                @if($menu_c1_en->title == 'en')
                                <option value="">{{$menu_c1_en->name_lang}}</option> 
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control" value="{{$menu_c1_en->name_menu_c1}}" name="name_c1_en">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" rows="5" name="note_en">{{$menu_c1_en->note}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Đường dẫn tĩnh</label>
                            <input type="text" class="form-control" value="{{$menu_c1_en->slug}}" name="slug_en">
                        </div>
                        @endforeach
                    </div>

                    <div id="Tokyo" class="tabcontent">
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                       
                    </div>
                    
                    <fieldset class="form-group">
                        <label>Default file upload</label>
                        <label class="custom-file d-block">
                            <input type="file" id="file" class="custom-file-input" name="file" value="{{$menu_c1_vn->image}}">
                            <span class="custom-file-control"></span>      
                        </label>  
                    </fieldset>
                    <center><img id="avatar" class="thumbnail" width="300px" src="../../img/{{ $menu_c1_vn->image }}"></center>
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