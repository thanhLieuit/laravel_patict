@extends('index.master')
@section('content')

<section id="banner">
	<div class="full-container">
		<div class="bannerdv">
			<!-- <img src="{!! asset('index/img/banner-DV.png') !!}" alt="hình banner dịch vụ"> -->
			<div id="Group_268">
				
					<div id="tieudedv">
						<br>
						<h1>{{ trans('messages.service1') }}</h1>
						<p>{{ trans('messages.service2') }}</p>
					</div>
			</div>
		</div>	
<!-- 		<div class="container">


			
		</div> -->
	</div>		
</section>
<section id="duongdan" style="background-color: #eee ">
	<div class="container">
		 <div class="row page-titles">
	        <div class="col-md-6 align-self-center">  
	            <ul class="breadcrumb" style="background-color: #e9ecef00;">
	                <li class=""><a href="{{ route('/')}}">{{ trans('messages.home') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class="">{{ trans('messages.service') }}</li>

	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<br>
<br>
<section id="dichvu">
	<div class="container">
		<div id="D_CH_V_U">
				<h1>{{ trans('messages.service') }}</h1>
			</div>
			<div id="PATdv">
				<p>PAT</p>
			</div>
			<div id="Nh_ng_d_ch_v__c_a_ch_ng_t_i_O">
				<p>{{ trans('messages.nhungdichvu') }}</p>
			</div>
		@include('index.dichvu')
	</div>
</section>

<section id="loiich">
	<div class="full-container">
		<div class="hinhli">
			
				<div class="gachli"></div>
				<br>
				<div class="container">
				<div id="T_T_C__NH_NG_L_I__CH_M__B_N_NH">
					<p>{{ trans('messages.service3') }}<br/>{{ trans('messages.service4') }}</p>
				</div>
			
				<div class="col-md-12">
						<div class="row">
							@foreach($loiich as $loiich)
							@if($loiich->title == $lang)
							<div class="col-md-4">
								<div class="hinhservice">
									<img src="../public/img/{{$loiich->image}}" alt="hình dịch vụ">
								</div>
								<br>
								<div class="chuservice">
									<h4>{{$loiich->name_loiich}}</h4>
								</div>
								<br>
							</div>
							@elseif($loiich->title == $lang)
							<div class="col-md-4">
								<div class="hinhservice">
									<img src="../public/img/{{$loiich->image}}" alt="hình dịch vụ">
								</div>
								<br>
								<div class="chuservice">
									<h4>{{$loiich->name_loiich}}</h4>
								</div>
								<br>
							</div>
							@endif
							@endforeach
						</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<div class="space100">&nbsp;</div>
<section id="themthongtin">
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div id="Group_1461">
						<div id="Group_906">
							<div id="B_N_C_N_TH_M_TH_NG_TIN_">
								<h1>{{ trans('messages.service5') }}</h1>
							</div>
						</div>
						<div id="Group_265">
							<div id="B_n_mu_n_bi_t_r__h_n_v__c_c_d_">
								<p>{{ trans('messages.service6') }}</p>
							</div>
							<div id="Btn___i_t_c_dv">						
								<a href="https://www.facebook.com/messages/t/patict.vn" style="text-decoration: none;color: black"><p>{{ trans('messages.service7') }}</p></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="hinhttt">
						<img src="{!! asset('index/img/2761904.png')!!}" alt="hình dịch vụ">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection