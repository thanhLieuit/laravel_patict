@extends('index.master')
@section('content')

<section id="banner">
	<div class="full-container">
		<div class="bannerdv5">
			<!-- <img src="{!! asset('index/img/Mask_Group_18_rr_pattern.png')!!}" alt="hình banner quản trị web"> -->
			<div id="Group_268">
				
					<div id="tieudedv">
						<br>
						<h1>{{ trans('messages.qtwebsite') }}</h1>
						<p>{{ trans('messages.qtwebsite1') }}</p>
					</div>
			</div>
		</div>	
	</div>		
</section>
<section id="duongdan" style="background-color: #eee ">
	<div class="container">
		<div class="row page-titles">
	        <div class="col-md-6 align-self-center">  
	            <ul class="breadcrumb" style="background-color: #e9ecef00;">
	                <li class=""><a href="{{ route('/')}}">{{ trans('messages.home') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class=""><a href="{{ route('dich-vu')}}">{{ trans('messages.service') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class="">{{ trans('messages.service9') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<section id="dvmobie">
	<div class="container noidungdv">
			<div id="D_CH_V_U">
				<h1>{{ trans('messages.service9') }}</h1>
			</div>
			<div id="PATdv">
				<p>PAT</p>
			</div>

		<p style="text-align: center;font-size: 20px">{{ trans('messages.service67') }} <br>{{ trans('messages.service68') }}</p>
		
		<div class="row">
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/web-1.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service69') }}</h5>
					<p>{{ trans('messages.service70') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/web-2.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service71') }}</h5>
					<p>{{ trans('messages.service72') }} </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/web-3.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service73') }}</h5>
					<p>{{ trans('messages.service74') }}</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/web-4.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service75') }}</h5>
					<p>{{ trans('messages.service76') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/seo-2.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service78') }}</h5>
					<p>{{ trans('messages.service79') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/web-6.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service80') }}</h5>
					<p>{{ trans('messages.service81') }}</p>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6 noidungphan">	
				<h2>{{ trans('messages.service82') }}</h2>
				<P>{{ trans('messages.service83') }}<span style="font-weight: bold;"> PAT </span>{{ trans('messages.service84') }}</P>
				<p>{{ trans('messages.service85') }}</p>
				<p>{{ trans('messages.service86') }}</p>	
				<p>{{ trans('messages.service87') }}</p>
				<P>{{ trans('messages.service88') }}</P>
				<P>{{ trans('messages.service89') }}</P>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-4 ">
						<div id="btn_report">
							<a href="https://www.facebook.com/messages/t/patict.vn" style="text-decoration: none;color: #1e1e1e">
								<P>Report</P>
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div id="btn_lienhe">
							<a href="https://www.facebook.com/messages/t/patict.vn" style="text-decoration: none;color: #1e1e1e">
								<P>{{ trans('messages.lienhe') }}</P>
							</a>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="hinh-dv">
					<img src="{!! asset('index/img/web-quantri.jpg') !!}" alt="">
				</div>
				
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">
				<div class="hinh-dv">
					<img src="{!! asset('index/img/web-des.png') !!}" alt="">
				</div>
			</div>
			<div class="col-md-6 noidungphan">
				<h2>{{ trans('messages.service90') }}</h2>
				<p>{{ trans('messages.service91') }}</p>
				<p>{{ trans('messages.service92') }} </p>
				<p>{{ trans('messages.service93') }}</p>
				<p>{{ trans('messages.service94') }}</p>
				<p>{{ trans('messages.service95') }}</p>
				<p>{{ trans('messages.service96') }}</p>
				<p>{{ trans('messages.service97') }}</p>
			</div>
		</div>
	</div>
</section>
<br>
@include('index.ytuong');
<br>
@endsection