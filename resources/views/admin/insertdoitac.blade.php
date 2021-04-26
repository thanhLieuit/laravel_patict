@extends('admin.master')
@section('content')
@section('title','Thêm đối tác')
<div class="full-container">
	<div class="col-md-12">
		<div class="card card-block">
            <h4 class="card-title">Thêm đối tác</h4>
            <form class="form-horizontal m-t-40" action="" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" class="form-control" value="" name="name_doitac">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" rows="5" name="note"></textarea>
                </div>
                <div class="form-group">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">Ảnh đối tác</h4>
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