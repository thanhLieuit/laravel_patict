<img src="{!! asset('index/img/Group5460.png')!!}" alt="hình viền gạch" style="width: 100%">
<br>
<br>
<br>
<section id="footer">
	   <!-- Your Chat Plugin code -->
     
      
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3">
					<div class="logon" style="width: 123px">
						<img src="{!! asset('index/img/Asset_1_bd.png')!!}" alt="hình logo" style="width: 100%">
					</div>
					<br>
					<div class="chu">
						<p style=""><a style="color: #1e1e1e" href="https://patict.vn/"> <strong>PAT Company </strong></a>{{ trans('messages.sologan2') }}<a style="color: #1e1e1e" href="https://patict.vn/"><strong>PAT Company </strong></a>{{ trans('messages.sologan3') }}</p>
					</div>
				</div>
				<div class="col-md-2">
					<div class="tieude2">
						<h3>{{ trans('messages.danhmuc') }}</h3>
					</div>
					<div class="space30">&nbsp;</div>
					<div class="dm" style="float: left">
						<a href="{{route('/')}}"><img src="{!! asset('index/img/Group 27.png') !!}" alt="hình mũi tên" style="width: 12px;float: left;margin-top: 6px;"><p style="margin-left: 20px;color: #1e1e1e">{{ trans('messages.home') }}</p></a>
						<a href="{{route('gioi-thieu')}}"><img src="{!! asset('index/img/Group 27.png') !!}" alt="hình mũi tên" style="width: 12px;float: left;margin-top: 6px;"><p style="margin-left: 20px;color: #1e1e1e">{{ trans('messages.about') }}</p></a>
						<a href="{{route('dich-vu')}}"><img src="{!! asset('index/img/Group 27.png') !!}" alt="hình mũi tên" style="width: 12px;float: left;margin-top: 6px;"><p style="margin-left: 20px;color: #1e1e1e">{{ trans('messages.service') }}</p></a>
						<a href="{{route('du-an')}}"><img src="{!! asset('index/img/Group 27.png') !!}" alt="hình mũi tên" style="width: 12px;float: left;margin-top: 6px;"><p style="margin-left: 20px;color: #1e1e1e">{{ trans('messages.project') }}</p></a>
						<a href="{{route('giai-phap')}}"><img src="{!! asset('index/img/Group 27.png') !!}" alt="hình mũi tên" style="width: 12px;float: left;margin-top: 6px;"><p style="margin-left: 20px;color: #1e1e1e">{{ trans('messages.solution') }}</p></a>
						<a href="{{route('tin-tuc')}}"><img src="{!! asset('index/img/Group 27.png') !!}" alt="hình mũi tên" style="width: 12px;float: left;margin-top: 6px;"><p style="margin-left: 20px;color: #1e1e1e">{{ trans('messages.news') }}</p></a>
						<a href="{{route('tuyen-dung')}}"><img src="{!! asset('index/img/Group 27.png') !!}" alt="hình mũi tên" style="width: 12px;float: left;margin-top: 6px;"><p style="margin-left: 20px;color: #1e1e1e">{{ trans('messages.recruitment') }}</p></a>
						<a href="{{route('lien-he')}}"><img src="{!! asset('index/img/Group 27.png') !!}" alt="hình mũi tên" style="width: 12px;float: left;margin-top: 6px;"><p style="margin-left: 20px;color: #1e1e1e">{{ trans('messages.contact') }}</p></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="tieude3">
						<h3>Fanpage</h3>
					</div>
					<div class="space30">&nbsp;</div>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpatict.vn%2F&tabs=timeline&width=340&height=250px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=291397554876889" width="240" height="250px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>
				<div class="col-md-4">
					<div id="Group_31">
						<div class="tieude4">
							<h3>{{ trans('messages.dangkynhantin') }}</h3>
						</div>
						<div class="space30">&nbsp;</div>
						<form action="{{route('nhan-tin')}}" enctype="multipart/form-data" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							@if(session()->has('success'))
					        <div class="alert alert-success">
					          {{ session()->get('success') }}
					        </div>
					      	@endif
					    	<div class="input-group nhantin">
					      		<input type="text" class="form-control" placeholder="Email của bạn" name="search" name="email">
					      		<div class="input-group-btn">
					        		<button class="btn btn-default bttgui" type="submit"><img src="{!! asset('index/img/next.png')!!}" alt="hình mũi tên" style="width: 12px;float: left;margin-top: 5px;margin-right: 5px;">{{ trans('messages.gui') }}</button>
					      		</div>
					    	</div>
					  	</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<br>
<footer>
	<div class="full-container">
		<div class="mau" style="background-color: black;height: 40px;">
			<p style="text-align: center;color: white;padding-top: 7px;margin-bottom: 0rem !important;">Copyright 2020 © <a href="{{ route('/')}}" style="color: #fff">PATICT </a></p>
		</div>
	</div>
</footer>  