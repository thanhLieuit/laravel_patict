@extends('admin.master')
@section('content')
@section('title','up sản phẩm')
<div class="full-container">
	<h3>Thêm web demo</h3>
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
	                    <label>Tiêu đề </label>
	                    <input type="text" class="form-control" value="" name="name_sanpham_vn">
	                </div>
	                
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
	                        <input type="text" name="key_vn" value="" data-role="tagsinput" placeholder="add tags" />
	                    </div>
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
	                    <label>Tiêu đề </label>
	                    <input type="text" class="form-control" value="" name="name_sanpham_en">
	                </div>
	                
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
	                        <input type="text" name="key_en" value="" data-role="tagsinput" placeholder="add tags" />
	                    </div>
	                </div>
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
						        	<input type="checkbox" name="menu_conss[]" value="{{ $menu_conss->id }}">
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
	            <div class="form-group ">
	                <h5 class="">Ghi chú</h5>
	                <select class="selectpicker" data-style="form-control btn-secondary" name="ghichu">
	                	<option value="">trống</option> 
	                    <option value="Đã hoàn thành">Đã hoàn thành</option>
	                    <option value="Đang tiến hành">Đang tiến hành</option>
	                </select>
	            </div>
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">Up Ảnh</h4>
                        <input type="file" id="input-file-now" class="dropify" name="file" />
                    </div>
                </div>
                <div class="form-group">
                    <label>link demo</label>
                    <input type="text" class="form-control" value="" name="link">
                </div>
			</div>
		</div>
		<button type="submit" class="btn btn-info">Thêm</button>
	</form>
</div>
@endsection