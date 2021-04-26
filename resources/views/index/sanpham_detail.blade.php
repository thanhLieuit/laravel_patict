@extends('index.master')
@section('content')
@section('title','chi tiết dự án')
<section id="banner">
	<div class="full-container">
		<div class="bannerproject">
			<img src="{!! asset('index/img/Group 5476.png')!!}" alt="hình banner dịch vụ">
		</div>
	</div>
</section>
<br>
<section id="duongdan" style="background-color: #eee ">
	<div class="container">
		<div class="row page-titles">
	        <div class="col-md-6 col-8 align-self-center">  
	            <ul class="breadcrumb" style="background-color: #e9ecef00;">
	                <li class=""><a href="{{ route('/')}}">{{ trans('messages.home') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class=""><a href="{{ route('xem-tat-ca')}}">{{ trans('messages.ttcsp') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class="">{{ trans('messages.ttcsp1') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<section id="tenduan">
	<div class="container">
		@foreach($baiviet as $baiviet)
		@if($baiviet->title == $lang)
		<div id="T_N_D___N_">
			<p>{{$baiviet->name_sanpham}}</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="hinhtduan">
					<img src="../../img/{{$baiviet->image}}" alt="hình dịch vụ">
				</div>
			</div>
			<div class="col-md-6">
				<div id="M__T__CHUNG">
					<p>{{ trans('messages.product2') }}</p>
				</div>
				<div class="ndduant">
					{!!$baiviet['noidung'];!!}
				</div>
				<br>
				<div id="Group_5480">
	
					<div id="Group_264_ba">

						<div id="XEM_DEMO">
							<a href="{{$baiviet->link}}">{{ trans('messages.product1') }}</a>
						
						</div>
					</div>

	
					<div id="Group_264_bb">
						<div id="LI_N_H__bb">
							<a href="https://www.facebook.com/messages/t/patict.vn">{{ trans('messages.lienhe') }}</a>
						</div>
					</div>
	
				</div>
			</div>
		</div>
		@elseif($baiviet->title == $lang)
		<div id="T_N_D___N_">
			<p>{{$baiviet->name_sanpham}}</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="hinhtduan">
					<img src="../../img/{{$baiviet->image}}" alt="hình dịch vụ">
				</div>
			</div>
			<div class="col-md-6">
				<div id="M__T__CHUNG">
					<p>{{ trans('messages.product2') }}</p>
				</div>
				<div class="ndduant">
					{!!$baiviet['noidung'];!!}
				</div>
				<br>
				<div id="Group_5480">
	
					<div id="Group_264_ba">

						<div id="XEM_DEMO">
							<a href="{{$baiviet->link}}">{{ trans('messages.product1') }}</a>
						
						</div>
					</div>

	
					<div id="Group_264_bb">
						<div id="LI_N_H__bb">
							<a href="https://www.facebook.com/messages/t/patict.vn">{{ trans('messages.lienhe') }}</a>
						</div>
					</div>
	
				</div>
			</div>
		</div>
		@endif
		@endforeach
	</div>
</section>
<div class="space60">&nbsp;</div>
<section id="khachhangdoitac">
	<div class="container">
		<div id="Group_5195">
			<div id="KH_CH_H_NG_V____I_T_C">
				<h1>{{ trans('messages.project2') }}</h1>
			</div>
			<div id="PAT_vf">
				<p>PAT</p>
			</div>
		</div>
		<div id="PAT____c__h_n_100__kh_ch_h_ng_">
			<p>{{ trans('messages.project3') }}</p>
		</div>
		<br>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div id="Group_459">
						<div id="Group_458">
							<svg class="Path_227_li" viewBox="39.793 99.483 25.177 47.707">
								<path fill="rgba(153,201,61,1)" id="Path_227_li" d="M 63.04353332519531 126.4185562133789 L 63.04353332519531 147.1903839111328 L 39.79300308227539 147.1903839111328 L 39.79300308227539 130.7917938232422 C 39.79300308227539 121.9133071899414 41.07936096191406 115.4855041503906 43.65008544921875 111.510383605957 C 47.02304077148438 106.2088928222656 52.36053085327148 102.201774597168 59.66858673095703 99.48300933837891 L 64.97007751464844 106.4429626464844 C 60.55083847045898 107.9653930664063 57.30192565917969 110.2360458374023 55.21334457397461 113.2468795776367 C 53.12476348876953 116.2637405395508 51.96242523193359 120.6509475708008 51.72036743164063 126.4165802001953 L 63.04353332519531 126.4165802001953 Z">
								</path>
							</svg>
							<svg class="Path_228_lj" viewBox="55.698 99.483 25.171 47.707">
								<path fill="rgba(153,201,61,1)" id="Path_228_lj" d="M 78.94453430175781 126.4185562133789 L 78.94453430175781 147.1903839111328 L 55.6980094909668 147.1903839111328 L 55.6980094909668 130.7917938232422 C 55.6980094909668 121.9133071899414 56.98236846923828 115.4855041503906 59.55108261108398 111.510383605957 C 62.9260368347168 106.2088928222656 68.26152801513672 102.201774597168 75.56957244873047 99.48300933837891 L 80.86906433105469 106.4429626464844 C 76.45182800292969 107.9653930664063 73.200927734375 110.2360458374023 71.11432647705078 113.2468795776367 C 69.02774047851563 116.2637405395508 67.86341094970703 120.6509475708008 67.62134552001953 126.4165802001953 L 78.94453430175781 126.4165802001953 Z">
								</path>
							</svg>
						</div>
						<div class="Rectangle_1361">
							
							<div id="owl-demoda" class="owl-carousel owl-theme">
								@foreach($danhgiadt as $danhgiadt)
								@if($danhgiadt->title == $lang)
							  	<div class="item">
							  		<div class="Rectangle_1371">
										<div class="tendoi">
											<div id="Lorem_ipsum_dolor_sit_amet_vx">
												<h4>{{$danhgiadt->name}}</h4>
											</div>
											<div class="Group_823">
												<img src="../../public/img/{{$danhgiadt->image}}" alt="hình dự án">
											</div>
										</div>
										<hr style="border: 1px dotted #99c93d;margin: 0px 0 ">
										<div id="T_o_ra_nh_ng_s_n_ph_m_tinh_hoa_da">
											<p>{{$danhgiadt->noidung}}</p>
										</div>
									</div>
							  	</div>
							  	@elseif($danhgiadt->title == $lang)
							  	<div class="item">
							  		<div class="Rectangle_1371">
										<div class="tendoi">
											<div id="Lorem_ipsum_dolor_sit_amet_vx">
												<h4>{{$danhgiadt->name}}</h4>
											</div>
											<div class="Group_823">
												<img src="../../public/img/{{$danhgiadt->image}}" alt="hình dự án">
											</div>
										</div>
										<hr style="border: 1px dotted #99c93d;margin: 0px 0 ">
										<div id="T_o_ra_nh_ng_s_n_ph_m_tinh_hoa_da">
											<p>{{$danhgiadt->noidung}}</p>
										</div>
									</div>
							  	</div>
							  	@endif
							  	@endforeach
							</div>
						</div>		
					</div>
				</div>
				<div class="col-md-6">
					<div class="hinhdt">
						<img src="{!! asset('index/img/re.png')!!}" alt="hình dịch vụ">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
@include('index.ytuong')

@endsection