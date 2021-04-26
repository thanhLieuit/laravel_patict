@extends('admin.master')
@section('content')
@section('title','Thêm chuyên mục con')
<div class="full-container">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-block">
                <h4 class="card-title">Menu con</h4>
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
                            <input type="text" class="form-control" value="" name="menu_con_vn">
                        </div>
                        
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" rows="5" name="note_vn"></textarea>
                        </div>
                        <!-- <div class="form-group">
                        <label>Đường dẫn tĩnh</label>
                        <input type="text" class="form-control" value="" name="slug_vn">
                    </div> -->
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
                            <input type="text" class="form-control" value="" name="menu_con_en">
                        </div>
                        
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" rows="5" name="note_en"></textarea>
                        </div>
                        <!-- <div class="form-group">
                        <label>Đường dẫn tĩnh</label>
                        <input type="text" class="form-control" value="" name="slug_en">
                    </div> -->
                    </div>

                    <div id="Tokyo" class="tabcontent">
                        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                       
                    </div>
                    <br>
                    
                    <div class="form-group">
                        <h5 class="">Menu cha</h5>
                        <select class="selectpicker" data-style="form-control btn-secondary" name="id_menu_c1">
                            @foreach($menu_c1 as $menu_c1)
                                <option value="{!! $menu_c1['id']; !!}">{!! $menu_c1['name_menu_c1']; !!}</option>
                             @endforeach
                        </select>
                    </div>
                    <fieldset class="form-group">
                        <label>Default file upload</label>
                        <label class="custom-file d-block">
                            <input type="file" id="file" class="custom-file-input" name="file">
                            <span class="custom-file-control"></span>
                        </label>
                    </fieldset>
                    <button type="submit" class="btn btn-info">Thêm</button>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Chuyên mục</h4>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Ngôn Ngữ</th>
                                    <th>Tên</th>
                                    <th>Danh mục cha</th>
                                    <th>Tác vụ</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Ngôn Ngữ</th>
                                    <th>Tên</th>
                                    <th>Danh mục cha</th>
                                    <th>Tác Vụ</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($menu_con as $menu_con)
                                <tr>
                                    <td>{{$menu_con->title}} <br></td>
                                    <td>{{$menu_con->menu_con}} <br></td>
                                    <td>{{$menu_con->name_menu_c1}}</td>
                                    <td><a href="{{url('admin/edit_menu_con',['id'=>$menu_con->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="{{url('admin/del_menu_con',['id'=>$menu_con->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
</div>

@endsection