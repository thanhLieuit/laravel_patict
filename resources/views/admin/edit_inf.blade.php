@extends('admin.master')
@section('content')
@section('title','edit-content')
<div class="full-container">
	<div class="col-md-12">
		<div class="row">
			
				<div class="card card-block">
	                <h4 class="card-title">Sửa thông tin</h4>
	                <form class="form-horizontal m-t-40" action="" enctype="multipart/form-data" method="POST">
	                    <input type="hidden" name="_token" value="{{csrf_token()}}">
	                    @foreach($inf1 as $inf1)
	                    <div class="form-group">
	                        <label>Title</label>
	                        <input type="text" class="form-control" value="{{$inf1->title}}" name="title">
	                    </div>
	                    <div class="form-group">
                            <label>Chọn ngôn ngữ</label>
                          <select class="selectpicker" data-style="form-control btn-secondary" name="id_lang">
							<option value="{{$inf1->id}}">{{$inf1->name_lang}}</option>
	                    @foreach($lang as $lang)    	  
	                        <option value="{{$lang->id}}">{{$lang->name_lang}}</option>
	                    @endforeach
	                </select>
                        </div>
	                    <div class="form-group">
	                        <label>Nội dung</label>
	                        <textarea name="text" id="text" class="form-control" rows="5" >{{$inf1->content}}</textarea>
	                    </div>
	                	@endforeach
	                    <button type="submit" class="btn btn-info">edit</button>
	                </form>
	            </div>
	
			
		</div>
	</div>
</div>

@endsection