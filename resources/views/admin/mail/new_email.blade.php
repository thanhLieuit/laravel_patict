@extends('admin.email')
@section('contentmail')
@section('title','Gửi email')
    <div class="card-block">
    	<form action="" enctype="multipart/form-data" method="POST">
		    <input type="hidden" name="_token" value="{{csrf_token()}}">
	        <h3 class="card-title">Compose New Message</h3>
	        <div class="form-group">
	            <input class="form-control" placeholder="To:" name="email">
	        </div>
	        <div class="form-group">
	            <input class="form-control" placeholder="Subject:" name="title">
	        </div>
	        <div class="form-group">
	            <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..." name="text"></textarea>
	        </div>
	        <h4><i class="ti-link"></i> ảnh</h4>
	        <!-- <form action="app-compose.html#" class="dropzone">
	            <div class="fallback">
	                <input name="file" type="file" multiple />
	            </div>
	        </form> -->
	          <button type="submit" class="btn btn-success m-t-20"><i class="fa fa-envelope-o"></i> Send</button>
	        <button class="btn btn-inverse m-t-20"><i class="fa fa-times"></i> Discard</button>
        </form>
    </div>
@endsection