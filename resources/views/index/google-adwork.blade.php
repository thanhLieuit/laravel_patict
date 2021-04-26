@extends('index.master')
@section('content')

<section id="banner">
	<div class="full-container">
		<div class="bannerdv6">
			<!-- <img src="{!! asset('index/img/Mask_Group_18_rr_pattern.png')!!}" alt="hình banner google adworks"> -->
			<div id="Group_268">
				
					<div id="tieudedv">
						<br>
						<h1>{{ trans('messages.ggfbads') }}</h1>
						<p>{{ trans('messages.ggfbads1') }}</p>
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
	                <li class=""><a href="{{ route('giai-phap')}}">{{ trans('messages.service') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class="">{{ trans('messages.solution36') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<section id="dvmobie">
	<div class="container noidungdv">
			<div id="D_CH_V_U">
			<h1>{{ trans('messages.solution36') }}</h1>
		</div>
		<div id="PATdv">
			<p>PAT</p>
		</div>
		<div id="Nh_ng_d_ch_v__c_a_ch_ng_t_i_O">
			<h3>{{ trans('messages.service98') }}</h3>
			<p style="text-align: center;">{{ trans('messages.service99') }}</p>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/ads-1.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service100') }}</h5>
					<p>{{ trans('messages.service101') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/ADS-2.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service102') }}</h5>
					<p>{{ trans('messages.service103') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/ads-3.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service104') }}</h5>
					<p>{{ trans('messages.service105') }}</p>
				</div>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-6 noidungphan">	
				<h2>{{ trans('messages.service106') }}</h2>
				<p style="margin-bottom: 0rem;"><strong>{{ trans('messages.service107') }}</strong></p>
				<div class="quancao">
					<p>{{ trans('messages.service108') }}</p>
					<p>{{ trans('messages.service109') }}</p>
					<p>{{ trans('messages.service110') }}</p>
					<p>{{ trans('messages.service111') }}</p>
					<p>{{ trans('messages.service112') }}</p>
				</div>
				<p style="margin-top: 1rem;"><strong>{{ trans('messages.service113') }}</strong></p>
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
			<div class="col-md-6 ">
				<div class="hinh-dv">
					<img src="{!! asset('index/img/ads-gg.png') !!}" alt="">
				</div>
				
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6 ">
				<div class="hinh-dv">
					<img src="{!! asset('index/img/ads-fb.png') !!}" alt="">
				</div>
			</div>
			<div class="col-md-6 noidungphan">
				<h2>{{ trans('messages.service114') }}</h2>
				<p>{{ trans('messages.service115') }}</p>
				<p>{{ trans('messages.service116') }}</p>
			</div>
		</div>
	</div>	
</section>
<br>
@include('index.ytuong');
<br>
@endsection