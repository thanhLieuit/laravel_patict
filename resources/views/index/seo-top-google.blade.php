@extends('index.master')
@section('content')

<section id="banner">
	<div class="full-container">
		<div class="bannerdv4">
			<!-- <img src="{!! asset('index/img/Mask_Group_18_rr_pattern.png')!!}" alt="hình banner seo"> -->
			<div id="Group_268">
				
					<div id="tieudedv">
						<br>
						<h1>{{ trans('messages.seogg') }}</h1>
						<p>{{ trans('messages.seogg1') }}</p>
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
	                <li class="">{{ trans('messages.service10') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<br>
<section id="dvmobie">
	<div class="container noidungdv">
			<div id="D_CH_V_U">
				<h1>{{ trans('messages.service41') }}</h1>
			</div>
			<div id="PATdv">
				<p>PAT</p>
			</div>

		<p style="text-align: center;font-size: 20px">{{ trans('messages.service42') }}</p>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"><a href="https://www.facebook.com/messages/t/patict.vn" class="button button1">{{ trans('messages.service43') }}</a></div>
			<div class="col-md-4"></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/seo-1.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service44') }}</h5>
					<p>{{ trans('messages.service45') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/seo-2.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service46') }}</h5>
					<p>{{ trans('messages.service47') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/seo-3.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service48') }}</h5>
					<p>{{ trans('messages.service49') }}</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/seo-4.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service50') }}</h5>
					<p>{{ trans('messages.service51') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/seo-5.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service52') }}</h5>
					<p>{{ trans('messages.service53') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="dv-img">
					<img src="{!! asset('index/img/seo-6.png') !!}" alt="">
				</div>
				<div class="dv-ndd">
					<h5>{{ trans('messages.service54') }}</h5>
					<p>{{ trans('messages.service55') }}</p>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6 noidungphan">	
				<h2>{{ trans('messages.service56') }}</h2>
				<strong>{{ trans('messages.service57') }}</strong>
				<p>{{ trans('messages.service58') }}</p>
				<strong>{{ trans('messages.service59') }}</strong>
				<p>{{ trans('messages.service60') }}</p>
				<strong>{{ trans('messages.service61') }}</strong>
				<p>{{ trans('messages.service62') }}</p>
				<div class="row">
					<div class="col-xs-2 col-md-2"></div>
					<div class="col-xs-4 col-md-4">
						<div id="btn_report">
							<a href="https://www.facebook.com/messages/t/patict.vn" style="text-decoration: none;color: #1e1e1e">
								<P>Report</P>
							</a>
						</div>
					</div>
					<div class="col-xs-4 col-md-4">
						<div id="btn_lienhe">
							<a href="https://www.facebook.com/messages/t/patict.vn" style="text-decoration: none;color: #1e1e1e">
								<P>{{ trans('messages.lienhe') }}</P>
							</a>
						</div>
					</div>
					<div class="col-xs-2 col-md-2"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="hinh-dv">
					<img src="{!! asset('index/img/seo-report.jpg') !!}" alt="">
				</div>
				
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">
				<div class="hinh-dv">
					<img src="{!! asset('index/img/seo-danhgia.png') !!}" alt="">
				</div>
			</div>
			<div class="col-md-6 noidungphan">
				<h2>{{ trans('messages.service63') }}</h2>
				<p>{{ trans('messages.service64') }}</p>
				<p>{{ trans('messages.service65') }}</p>
				<p>{{ trans('messages.service66') }}</p>
			</div>
		</div>
	</div>
</section>
<!-- <br>
<section id="khachhangseo">
	<div class="full-container">
		<div class="kh-dv">
			<div class="title-kh">
				<h1>CÁC KHÁCH HÀNG ĐỒNG HÀNH CÙNG PATICT</h1>
			</div>
			<br>
			<div class="nd-kh">
				<div class="owl-carousel owl-theme kh">
				    <div class="item">
				    	<div class="khung-kh">
				    		<div class="img-kh">
				    			<img src="{!! asset('index/img/GPGD-1.png') !!}" alt="">
				    		</div>
				    		
				    	</div>
				    </div>
				   
				</div>
			</div>
		</div>
	</div>
	<br>
</section> -->
<br>
@include('index.ytuong');
<br>
@endsection