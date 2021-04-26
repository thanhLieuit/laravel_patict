@extends('admin.email')
@section('contentmail')
@section('title','email đã xóa')
<div class="inbox-center table-responsive">
    <table class="table table-hover no-wrap">
        <tbody>
        	@foreach($lienhe as $lienhe)
            <tr class="unread">
                <td style="width:40px">
                    <div class="checkbox">
                        <input type="checkbox" id="checkbox0" value="check">
                        <label for="checkbox0"></label>
                    </div>
                </td>
                <td style="width:40px" class="hidden-xs-down"><i class="fa fa-star-o"></i></td>
                <td class="hidden-xs-down">{{$lienhe->name_khachhang}}</td>
                <td class="max-texts"> <a href="{{url('admin/chitiet_emial',['id'=>$lienhe->id])}}" />@if($lienhe->tieude == 'ý tưởng mới')
                    <span class="label label-warning m-r-10">Ý Tưởng</span>
                    @else
                    <span class="label label-info m-r-10">Công Việc</span>
                    @endif{{$lienhe->tieude}}</td>
                <td class="hidden-xs-down"><i class="fa fa-paperclip"></i></td>
                <td class="text-right"> {{$lienhe->created_at}} </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
@endsection