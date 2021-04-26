@extends('admin.master')
@section('content')
@section('title','Danh sách đối tác')
<div class="container">
	<div class="col-md-12">
		<div class="card card-block">
            <h4 class="card-title"><a href="{{route('admin/table_baogia')}}" style="text-decoration: none;">Danh sách báo giá</a>/ Sửa báo giá</h4>
            <form class="form-horizontal m-t-40" action="" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="tab">
                        <a class="tablinks" onclick="openCity(event, 'vietnam')" id="defaultOpen">Việt Nam |</a>
                        <a class="tablinks" onclick="openCity(event, 'english')">English |</a>
                        <a class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a>
                    </div>

                    <div id="vietnam" class="tabcontent">
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                        @foreach($baogia_vn as $baogia_vn)
                        <div class="form-group">
                            <label>Chọn ngôn ngữ</label>
                            <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang">
                                <option value="">{{$baogia_vn->name_lang}}</option> 

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control" value="{{$baogia_vn->name_baogia}}" name="name_baogia_vn">
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea name="text_vn" id="text" cols="30" rows="10">{{$baogia_vn->noidung}}</textarea>
                        </div>
                        @endforeach
                    </div>

                    <div id="english" class="tabcontent">
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                        @foreach($baogia_en as $baogia_en)
                        <div class="form-group">
                            <label>Chọn ngôn ngữ</label>
                            <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang1">
                                <option value="">{{$baogia_en->name_lang}}</option> 
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên</label>
                            <input type="text" class="form-control" value="{{$baogia_en->name_baogia}}" name="name_baogia_en">
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea name="text_en" id="text1" cols="30" rows="10">{{$baogia_en->noidung}}</textarea>
                        </div>
                        @endforeach
                    </div>

                    <div id="Tokyo" class="tabcontent">
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                       
                    </div>
                    <br>
                      <div class="form-group">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Ảnh báo giá</h4>
                            <label for="input-file-now"></label>
                            <input type="file" id="input-file-now" class="dropify" name="file"/>
                        </div>
                    </div>
                    <img src="../../img/{{ $baogia_vn->image }}" alt="" style="width: 20%">
                </div>
                <button type="submit" class="btn btn-info">Thêm</button>
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