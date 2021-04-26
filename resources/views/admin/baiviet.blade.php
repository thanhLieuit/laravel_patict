@extends('admin.master')
@section('content')
@section('title','bài viết')

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
					    <label>Tiêu đề bài viết</label>
					    <input type="text" class="form-control" value="" name="name_baiviet_vn">
					</div>
				<!-- 	<div class="form-group">
					    <label>Đường dẫn tĩnh</label>
					    <input type="text" class="form-control" value="" name="slug_vn">
					</div> -->
					<div class="form-group">
						<label>nội dung</label>
						<textarea name="text_vn" id="text" cols="30" rows="10"></textarea>
					</div>
					<div class="form-group">
					    <label>Mô tả ngắn</label>
					    <textarea class="form-control" rows="5" name="note_vn"></textarea>
					</div>	
					<div class="card-block">
	                	<h4 class="card-title">Từ Khóa</h4>
	                    <h6 class="card-subtitle">Thêm Keywork</h6>
	                    <div class="tags-default">
	                        <input type="text" name="key_vn" value="" data-role="tagsinput" placeholder="add keys" />
	                    </div>
	                </div>
	                <div class="card-block">
						<h5 class="m-t-20">Thẻ Tag</h5>
                        <select class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose" name="tag_vn[]">
                        	@foreach($tag_vn as $tag_vn)
                            	<option value="{{$tag_vn->id}}">{{$tag_vn->name}}</option>
                            @endforeach
                        </select>
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
					    <label>Tiêu đề bài viết</label>
					    <input type="text" class="form-control" value="" name="name_baiviet_en">
					</div>
					<!-- <div class="form-group">
					    <label>Đường dẫn tĩnh</label>
					    <input type="text" class="form-control" value="" name="slug_en">
					</div> -->
					<div class="form-group">
						<label>nội dung</label>
						<textarea name="text_en" id="text1" cols="30" rows="10"></textarea>
					</div>
					<div class="form-group">
					    <label>Mô tả ngắn</label>
					    <textarea class="form-control" rows="5" name="note_en"></textarea>
					</div>	
					<div class="card-block">
	                	<h4 class="card-title">Từ Khóa</h4>
	                    <h6 class="card-subtitle">Thêm Keywork</h6>
	                    <div class="tags-default">
	                        <input type="text" name="key_en" value="" data-role="tagsinput" placeholder="add keys" />
	                    </div>
	                </div>
	     			<div class="card-block">
						<h5 class="m-t-20">Thẻ Tag</h5>
                        <select class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose" name="tag_en[]">
                        	@foreach($tag_en as $tag_en)
                            	<option value="{{$tag_en->id}}">{{$tag_en->name}}</option>
                            @endforeach
                        </select>
					</div>
                </div>

                <div id="Tokyo" class="tabcontent">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                   
                </div>		
			</div>
			<div class="col-md-4">
				<div class="form-group">
	                <h5 class="">Menu Danh Mục</h5>
	                <select class="selectpicker" data-style="form-control btn-secondary" name="id_menu_baiviet">
	                	<option value="">trống</option> 
	                    @foreach($menu_baiviet as $menu_baiviet)    
	                    	  
	                        <option value="{{$menu_baiviet->id}}">{{$menu_baiviet->name_menu_baiviet}}</option>
	                    @endforeach
	                </select>
	            </div>
	            <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Up Ảnh</h4>
                        <input type="file" id="input-file-now" class="dropify" name="file" />
                    </div>
                </div>
                
			</div>
		</div>
		<button type="submit" class="btn btn-info">Thêm</button>
	</form>
</div>


@endsection