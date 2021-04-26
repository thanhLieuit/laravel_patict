<section id="ytuong">
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6" >
					<div id="Group_1896">
						<div id="B_n_c__m_t____T__NG_">
							<span>{{ trans('messages.ytuong') }}</span><span style="font-size:20px;"> </span><span style="font-style:normal;font-weight:bold;font-size:40px;color:rgba(235,33,6,1);"> </span><span style="font-style:normal;font-weight:bold;font-size:40px;color:rgba(235,33,6,1);">{{ trans('messages.ytuong1') }}</span>
						</div>
						<div id="Ch_ng_t_i_c__th__gi_p_b_n">
							<span>{{ trans('messages.ytuong2') }}</span>
						</div>
						<div id="TH_C_HI_N_n__">
							<p>{{ trans('messages.ytuong3') }}<span style="font-style:normal;font-weight:normal;font-size:30px;color:rgba(30,30,30,1);"> {{ trans('messages.ytuong4') }}</span></p>
						</div>
					</div>
					<div class="hinhytuong">
						<img src="{!! asset('index/img/3255467.png')!!}" alt="hình ý tưởng">
					</div>
				</div>
				<br>
				<div class="col-md-6" >
					<form action="{{route('y-tuong')}}" enctype="multipart/form-data" method="POST">
						 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group">
					      <input type="text" class="form-control" id="" placeholder="{{ trans('messages.ytuong5') }}" name="ten" style="background-color: #f7f7f7">
					    </div>
					    <div class="form-group">
					      <input type="text" class="form-control" id="" placeholder="Email " name="email" style="background-color: #f7f7f7">
					    </div>
					    
						<div class="form-group">
					      <input type="text" class="form-control" id="" placeholder="{{ trans('messages.ytuong6') }}" name="phone" style="background-color: #f7f7f7">
					    </div>
					    <div class="form-group fom1">
					    	<textarea id="w3mission " rows="6" cols="56" placeholder="{{ trans('messages.ytuong7') }}" name="noidung" style="background-color: #f7f7f7; "></textarea>
						</div>

					     <button type="submit" class="btt btn btn-default " onclick="abc()"><img src="{!! asset('index/img/next.png')!!}" alt="hình gửi" style="width: 12px;float: left;margin-top:9px;margin-right: 5px;">    {{ trans('messages.gui') }}</button>
					</form>
				</div>
			</div>
		</div>
	</div>

   	<script>
        var msg = '{{Session::get('alert')}}';
  		var exist = '{{Session::has('alert')}}';
  		if(exist){
    		alert(msg);
  		}
    </script>

</section>
