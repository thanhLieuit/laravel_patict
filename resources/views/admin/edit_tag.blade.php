@extends('admin.master')
@section('content')
@section('title','Sửa bài viết')
<div class="container">
	<form class="form-horizontal m-t-40" action="" enctype="multipart/form-data" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="tab">
                    <a class="tablinks" onclick="openCity(event, 'vietnam')" id="defaultOpen">Việt Nam |</a>
                    <a class="tablinks" onclick="openCity(event, 'english')">English |</a>
                    <a class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</a>
                </div>

                <div id="vietnam" class="tabcontent">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                    @foreach($tag_lang_vn as $tag_lang_vn)
                    <div class="form-group">
                        <label>ngôn ngữ</label>
                        <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang">
                            <option value="">{{$tag_lang_vn->title}}</option> 
                            
                        </select>
                    </div>
                    <div class="form-group">
					    <label>Thẻ Tag</label>
					    <input type="text" class="form-control" value="{{$tag_lang_vn->name}}" name="name_tag_vn">
					</div>
					@endforeach
                </div>
                <div id="english" class="tabcontent">
                    <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                    @foreach($tag_lang_en as $tag_lang_en)
                    <div class="form-group">
                        <label>ngôn ngữ</label>
                        <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang">
                            <option value="">{{$tag_lang_en->title}}</option> 
                           
                        </select>
                    </div>
                    <div class="form-group">
					    <label>Thẻ Tag</label>
					    <input type="text" class="form-control" value="{{$tag_lang_en->name}}" name="name_tag_en">
					</div>
					@endforeach
                </div>
                <button type="submit" class="btn btn-info">Thêm</button>
			</form>
</div>	
@endsection