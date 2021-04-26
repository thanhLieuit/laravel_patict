@extends('admin.master')
@section('content')
@section('title','Sửa bài viết')
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
                    @foreach($baiviet_vn as $baiviet_vn)
                    <div class="form-group">
                        <label>Chọn ngôn ngữ</label>
                        <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang">
                            <option value="">{{$baiviet_vn->name_lang}}</option> 

                        </select>
                    </div>
                    <div class="form-group">
					    <label>Tiêu đề bài viết</label>
					    <input type="text" class="form-control" value="{{$baiviet_vn->name_baiviet}}" name="name_baiviet_vn">
					</div>
					<!-- <div class="form-group">
					    <label>Đường dẫn tĩnh</label>
					    <input type="text" class="form-control" value="{{$baiviet_vn->slug}}" name="slug_vn">
					</div> -->
					<div class="form-group">
						<label>nội dung</label>
						<textarea name="text_vn" id="text" cols="30" rows="10">{{$baiviet_vn->noidung}}</textarea>
					</div>
					<div class="form-group">
					    <label>Mô tả ngắn</label>
					    <textarea class="form-control" rows="5" name="note_vn">{{$baiviet_vn->tomtat}}</textarea>
					</div>
					<div class="card-block">
	                	<h4 class="card-title">Từ Khóa</h4>
	                    <h6 class="card-subtitle">Thêm Keywork</h6>
	                    <div class="tags-default">
	                        <input type="text" name="key_vn" value="{{ $baiviet_vn->keywork }}" data-role="tagsinput" placeholder="add tags" />
	                    </div>
	                </div>
					@endforeach
					<div class="row">
						@foreach($tag_vn as $tag_vns)
						<div class="col-md-3">
					      	<li>
					        	<input  {{ $getAllbaivietoftagvn->contains( $tag_vns->id ) ? 'checked' : '' }}
	                          type="checkbox" 
	                          class="form-check-input" name="tag_vns[]" value="{{ $tag_vns->id }}">
					        	<label for="form-check-label">{{ $tag_vns->name }}</label>
					      	</li>
					    </div>
				  		@endforeach
					</div>
                </div>

                <div id="english" class="tabcontent">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                    @foreach($baiviet_en as $baiviet_en)
                    <div class="form-group">
                        <label>Chọn ngôn ngữ</label>
                        <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang1">
                            <option value="">{{$baiviet_en->name_lang}}</option> 

                        </select>
                    </div>
                    <div class="form-group">
					    <label>Tiêu đề bài viết</label>
					    <input type="text" class="form-control" value="{{$baiviet_en->name_baiviet}}" name="name_baiviet_en">
					</div>
					<!-- <div class="form-group">
					    <label>Đường dẫn tĩnh</label>
					    <input type="text" class="form-control" value="{{$baiviet_en->slug}}" name="slug_en">
					</div> -->
					<div class="form-group">
						<label>nội dung</label>
						<textarea name="text_en" id="text1" cols="30" rows="10">{{$baiviet_en->noidung}}</textarea>
					</div>
					<div class="form-group">
					    <label>Mô tả ngắn</label>
					    <textarea class="form-control" rows="5" name="note_en">{{$baiviet_en->tomtat}}</textarea>
					</div>
					<div class="card-block">
	                	<h4 class="card-title">Từ Khóa</h4>
	                    <h6 class="card-subtitle">Thêm Keywork</h6>
	                    <div class="tags-default">
	                        <input type="text" name="key_en" value="{{ $baiviet_en->keywork }}" data-role="tagsinput" placeholder="add tags" />
	                    </div>
	                </div>
					@endforeach
					<div class="row">
						@foreach($tag_en as $tag_ens)
						<div class="col-md-3">
					      	<li>
					        	<input  {{ $getAllbaivietoftagen->contains( $tag_ens->id ) ? 'checked' : '' }}
	                          type="checkbox" 
	                          class="form-check-input" name="tag_ens[]" value="{{ $tag_ens->id }}">
					        	<label for="form-check-label">{{ $tag_ens->name }}</label>
					      	</li>
					    </div>
				  		@endforeach
					</div>
                </div>

                <div id="Tokyo" class="tabcontent">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                   
                </div>		
			</div>
			<div class="col-md-4">
				<div class="form-group">
	                <h5 class="">Menu cấp 1</h5>

	                <select class="selectpicker" data-style="form-control btn-secondary" name="id_menu_baiviet">
							<option value="{{$baiviet_vn->id_menu_baiviet}}">{{$baiviet_vn->name_menu_baiviet}}</option>
	                    @foreach($menu_baiviet as $menu_baiviet)    	  
	                        <option value="{{$menu_baiviet->id}}">{{$menu_baiviet->name_menu_baiviet}}</option>
	                    @endforeach
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
                    <img src="../../img/{{ $baiviet_vn->image }}" alt="" style="width: 50%">
                    <br>
                    
                </div>
           
			</div>
		</div>
		<button type="submit" class="btn btn-info">Thêm</button>
	</form>
</div>
@endsection