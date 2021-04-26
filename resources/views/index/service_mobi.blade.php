@extends('index.master')
@section('content')

<section id="banner">
	<div class="full-container">
		<div class="bannerdv3">
			<!-- <img src="{!! asset('index/img/Mask_Group_18_rr_pattern.png')!!}" alt="hình banner ứng dụng mobie"> -->
			<div id="Group_268">
				
					<div id="tieudedv">
						<br>
						<h1>{{ trans('messages.service39') }}</h1>
						<p>{{ trans('messages.service40') }}</p>
					</div>
			</div>
		</div>	
	</div>		
</section>

<section id="duongdan" style="background-color: #eee ">
	<div class="container ">
		<div class="row page-titles">
	        <div class="col-md-12 col-12 align-self-center">  
	            <ul class="breadcrumb" style="background-color: #e9ecef00;">
	                <li class=""><a href="{{ route('/')}}">{{ trans('messages.home') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class=""><a href="{{ route('dich-vu')}}">{{ trans('messages.service') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class="">{{ trans('messages.service11') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<section id="dvmobie">
	<div class="container noidungdv">
		<div id="D_CH_V_U">
				<h1>{{ trans('messages.service13') }}</h1>
			</div>
			<div id="PATdv">
				<p>PAT</p>
			</div>
		<br>
			<p style="text-align: center;font-size: 20px">{{ trans('messages.service14') }} <br> {{ trans('messages.service15') }}</p>
		
		<div class="row">
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/mobi-2.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service18') }}</h5>
					<p>{{ trans('messages.service19') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/mobi-3.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service20') }}</h5>
					<p>{{ trans('messages.service21') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/mobi-4.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service22') }}</h5>
					<p>{{ trans('messages.service23') }}</p>
				</div>
			</div>
		</div>
		<div class="row">
			
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/mobi-5.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service24') }}</h5>
					<p>{{ trans('messages.service25') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/mobi-1.png') !!}" alt="">
				</div>
				
				<div class="dv-ndd">
					<h5>{{ trans('messages.service26') }}</h5>
					<p>{{ trans('messages.service27') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/mobi-6.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service16') }}</h5>
					<p>{{ trans('messages.service17') }}</p>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6 noidungphan">	
				<h2>{{ trans('messages.service28') }}</h2>
				<P>{{ trans('messages.service29') }}</P>
				<p>{{ trans('messages.service30') }}</p>
				<p>{{ trans('messages.service31') }}</p>	
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
					<img src="{!! asset('index/img/mobi-7.png') !!}" alt="">
				</div>
				
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">
				<div class="hinh-dv">
					<img src="{!! asset('index/img/mobi-8.png') !!}" alt="">
				</div>
			</div>
			<div class="col-md-6 noidungphan">
				<h2>{{ trans('messages.service32') }}</h2>
				<p>{{ trans('messages.service38') }}</p>
				<p>{{ trans('messages.service33') }}</p>
				<p>{{ trans('messages.service34') }}</p>
				<p>{{ trans('messages.service35') }}</p>
				<p>{{ trans('messages.service36') }}</p>
				<p>{{ trans('messages.service37') }}</p>
			</div>
		</div>
	</div>
</section>
<br>
@include('index.ytuong');
<br>
@endsection