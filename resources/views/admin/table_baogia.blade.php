@extends('admin.master')
@section('content')
@section('title','Danh sách báo giá')
<div class="full-container">
	<div class="col-md-12">
		<div class="card">
            <div class="card-block">
                <h4 class="card-title">Danh sách báo giá</h4>
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Ngôn ngữ</th>
                                <th>Tên</th>
                                <th>Ảnh</th>
                                <th>nội dung</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Ngôn ngữ</th>
                                <th>Tên</th>
                                <th>Ảnh</th>
                                <th>nội dung</th>
                                <th>Thao tác</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        	@foreach($baogia as $baogia)
                            <tr>
                                <td>{{$baogia->title}}</td>
                                <td>
                                    @foreach($baogia->baogias_lang as $baogias_lang1)
                                        {{$baogias_lang1->name_baogia}}
                                    @endforeach
                                </td>
                           		<td><img src="../img/{{$baogia->image}}" alt="" style="width: 100%;"></td>
                                <td>
                                    @foreach($baogia->baogias_lang as $baogias_lang2)
                                        {{$baogias_lang2->noidung}}
                                    @endforeach
                                </td>
                                <td><a href="{{url('admin/edit_baogia',['id'=>$baogia->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="{{url('admin/dele_baogia',['id'=>$baogia->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection