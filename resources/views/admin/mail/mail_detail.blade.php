@extends('admin.email')
@section('contentmail')
@section('title','Chi tiết liên hệ')
@foreach($lienhe as $lienhe)
<div class="card-block">
    <h3 class="card-title m-b-0">{{$lienhe->tieude}}</h3>
</div>
<div>
    <hr class="m-t-0">
</div>

<div class="card-block">
    <div class="d-flex m-b-40">
        <div>
            <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user" width="40" class="img-circle" /></a>
        </div>
        <div class="p-l-10">
            <h4 class="m-b-0">{{$lienhe->name_khachhang}}</h4>
            <small class="text-muted">From: {{$lienhe->email}}</small>
        </div>
    </div>
    <p><b>Dear You</b></p>
    <p>{{$lienhe->noidung}}</p>
</div>
<div>
    <hr class="m-t-0">
</div>

<div class="card-block">
    <div class="b-all m-t-20 p-20">
        <p class="p-b-20">Chọn để <a href="{{ url('admin/relay_chitiet_email',['id'=>$lienhe->id])}}">trả lời</a> or <a href="{{ url('admin/dele_email',['id'=>$lienhe->id])}}">Bỏ qua</a></p>
    </div>
</div>
@endforeach
                        
@endsection