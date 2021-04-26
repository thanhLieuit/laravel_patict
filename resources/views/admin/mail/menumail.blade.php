<div class="col-xlg-2 col-lg-4 col-md-4">
    <div class="card-block inbox-panel"><a href="{{route('admin/new_email')}}" class="btn btn-danger m-b-20 p-10 btn-block waves-effect waves-light">Trả lời</a>
        <ul class="list-group list-group-full">
            <li class="list-group-item active"> <a href="{{route('admin/nhan_email')}}"><i class="mdi mdi-gmail"></i> Liên hệ mới </a><span class="badge badge-success ml-auto">{{$countlh}}</span></li>
            <!-- <li class="list-group-item">
                <a href="javascript:void(0)"> <i class="mdi mdi-star"></i> Liên hệ gắn sao </a>
            </li> -->
            <li class="list-group-item ">
                <a href="{{route('admin/datl_email')}}"> <i class="mdi mdi-file-document-box"></i> Đã trả lời </a><span class="badge badge-success ml-auto">{{$countlh1}}</span>
            </li>
            <li class="list-group-item">
                <a href="{{route('admin/delete_email')}}"> <i class="mdi mdi-delete"></i> Xóa </a>
            </li>
        </ul>
        <h3 class="card-title m-t-40">Đánh dấu liên hệ</h3>
        <div class="list-group b-0 mail-list"> 
            <a href="app-email.html#" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Work</a>
            <a href="app-email.html#" class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>ý tưởng</a> 

        </div>
    </div>
</div>