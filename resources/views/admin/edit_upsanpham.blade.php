@extends('admin.master')
@section('content')
@section('title','Sửa web demo')
<div class="full-container">
	<h3>Thêm bài viết</h3>
	<form class="form-horizontal m-t-40" action="" enctype="multipart/form-data" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="row">
			<div class="col-md-8">
				
				<div class="tab">
                    <a class="tablinks" onclick="openCity(event, 'vietnam')" id="defaultOpen">Việt Nam |</a>
                    <a class="tablinks" onclick="openCity(event, 'english')">English |</a>
                    <a class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a>
                </div>

                <div id="vietnam" class="tabcontent">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                    @foreach($khosanphamvn as $khosanphamvn)
                    <div class="form-group">
                        <label>Chọn ngôn ngữ</label>
                        <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang">
                            <option value="">{{$khosanphamvn->name_lang}}</option> 
                           
                        </select>
                    </div>
                    <div class="form-group">
	                    <label>Tiêu đề </label>
	                    <input type="text" class="form-control" value="{{ $khosanphamvn->name_sanpham }}" name="name_sanpham_vn">
	                </div>
	                
	                <div class="form-group">
	                	<label>nội dung</label>
						<textarea name="text_vn" id="text" cols="30" rows="10">{{ $khosanphamvn->noidung }}</textarea>
					</div>
					<div class="form-group">
	                    <label>Mô tả ngắn</label>
	                    <textarea class="form-control" rows="5" name="note_vn">{{ $khosanphamvn->tomtat }}</textarea>
	                </div>
                	<div class="card-block">
	                	<h4 class="card-title">Từ Khóa</h4>
	                    <h6 class="card-subtitle">Thêm Keywork</h6>
	                    <div class="tags-default">
	                        <input type="text" name="key_vn" value="{{ $khosanphamvn->keywork }}" data-role="tagsinput" placeholder="add tags" />
	                    </div>
	                </div>
	                @endforeach
                </div>

                <div id="english" class="tabcontent">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                    @foreach($khosanphamen as $khosanphamen)
                    <div class="form-group">
                        <label>Chọn ngôn ngữ</label>
                        <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang1">
                            <option value="">{{$khosanphamen->name_lang}}</option> 
                           
                        </select>
                    </div>
                    <div class="form-group">
	                    <label>Tiêu đề </label>
	                    <input type="text" class="form-control" value="{{ $khosanphamen->name_sanpham }}" name="name_sanpham_en">
	                </div>
	                
	                <div class="form-group">
	                	<label>nội dung</label>
						<textarea name="text_en" id="text1" cols="30" rows="10">{{ $khosanphamen->noidung }}</textarea>
					</div>
					<div class="form-group">
	                    <label>Mô tả ngắn</label>
	                    <textarea class="form-control" rows="5" name="note_en">{{ $khosanphamen->tomtat }}</textarea>
	                </div>
                	<div class="card-block">
	                	<h4 class="card-title">Từ Khóa</h4>
	                    <h6 class="card-subtitle">Thêm Keywork</h6>
	                    <div class="tags-default">
	                        <input type="text" name="key_en" value="{{ $khosanphamen->keywork }}" data-role="tagsinput" placeholder="add tags" />
	                    </div>
	                </div>
	                @endforeach
                </div>

                <div id="Tokyo" class="tabcontent">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                   
                </div>
                <br>
              	
			</div>
			<div class="col-md-4">
				 <div class="form-group form-chec">
	                <h5 class="">Menu Danh Mục</h5>
					
	                <ul>
	                	@foreach($menu_c1 as $menu_c11)
					  	<li>
						    <input type="checkbox" name="tall" id="{!! $menu_c11['id']; !!}">
						    <label for="tall">{!! $menu_c11['name_menu_c1']; !!}</label>
							
						    <ul>
						    	@foreach($menu_c11->menu_con as $menu_conss)
						      	<li>
						        	<input  {{ $getAllkhosanphamOfmenucon->contains( $menu_conss->id ) ? 'checked' : '' }}
                                  type="checkbox" 
                                  class="form-check-input" name="menu_conss[]" value="{{ $menu_conss->id }}">

                                  	@foreach($menu_conss->menu_con_lang as $menu_consss)
						        		@if($menu_consss->id_lang == 1)
						        		<label for="form-check-label">{{ $menu_consss->menu_con }}</label>
						        		@endif
						        	@endforeach

						      	</li>
						  		@endforeach
						    </ul>
						   
					  	</li>
					  	@endforeach
					</ul>
					
	            </div>
	          
				<div class="form-group">
	                <h5 class="">Ghi chú</h5>
	                <select class="selectpicker" data-style="form-control btn-secondary" name="ghichu">
	                	@if($khosanphamvn->note == null)
	                	<option value="">trống</option>
	                	<option value="Đã hoàn thành">Đã hoàn thành</option>
	                    <option value="Đang tiến hành">Đang tiến hành</option>
	                	@else
	                    <option value="{{$khosanphamvn->note}}">{{$khosanphamvn->note}}</option>
	                    <option value="">trống</option>
	                    <option value="Đã hoàn thành">Đã hoàn thành</option>
	                    <option value="Đang tiến hành">Đang tiến hành</option>
	                 	@endif

	                </select>
	            </div>
                <div class="form-group">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Ảnh Bài viết</h4>
                            <label for="input-file-now"></label>
                            <input type="file" id="input-file-now" class="dropify" name="file"/>
                        </div>
                    </div>
                    <img src="../../img/{{ $khosanphamvn->image }}" alt="" style="width: 50%">
                </div>
                <div class="form-group">
                    <label>link demo</label>
                    <input type="text" class="form-control" value="{{ $khosanphamvn->link }}" name="link">
                </div>
			</div>
		</div>
		<button type="submit" class="btn btn-info">Thêm</button>
	</form>
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