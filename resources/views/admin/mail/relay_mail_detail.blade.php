@extends('admin.email')
@section('contentmail')
@section('title','trả lời liên hệ')
 <div class="card-block">
 	<form action="" enctype="multipart/form-data" method="POST">
	    <input type="hidden" name="_token" value="{{csrf_token()}}">
	    @foreach($lienhe as $lienhe)
	    <h3 class="card-title">Trả lời liên hệ của khách hàng {{$lienhe->name_khachhang}}</h3>
	    <div class="form-group">
	        <input class="form-control" placeholder="To:" value="{{$lienhe->email}}" name="email">
	    </div>
	    <div class="form-group">
	        <input class="form-control" placeholder="Subject:" name="title">
	    </div>
	    <div class="form-group">
	        <textarea name="text" id="text" class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
	    </div>
	    <h4><i class="ti-link"></i> Ảnh</h4>
	    <div class="form-group">
	        <div class="card">
	            <div class="card-block">
	                <label for="input-file-now"></label>
	                <input type="file" id="input-file-now" class="dropify" name="file"/>
	            </div>
	        </div>
	    </div>
	    @endforeach
	    <button type="submit" class="btn btn-success m-t-20"><i class="fa fa-envelope-o"></i> Send</button>
	    <button class="btn btn-inverse m-t-20"><i class="fa fa-times"></i> Discard</button>
	</form>
</div>
@endsection