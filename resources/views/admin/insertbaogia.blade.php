@extends('admin.master')
@section('content')
@section('title','Thêm Báo giá dịch vụ')
<div class="full-container">
	<div class="col-md-12">
		<div class="card card-block">
            <h4 class="card-title">Thêm Báo giá</h4>
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
                                <input type="text" class="form-control" value="" name="name_baogia_vn">
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea name="text_vn" id="text" cols="30" rows="10"></textarea>
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
                                <input type="text" class="form-control" value="" name="name_baogia_en">
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea name="text_en" id="text1" cols="30" rows="10"></textarea>
                            </div>
                            
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
                        </div>
                <button type="submit" class="btn btn-info">Thêm</button>
            </form>
        </div>
	</div>
</div>
@endsection