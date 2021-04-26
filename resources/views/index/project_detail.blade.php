@extends('index.master')
@section('content')
@section('title','chi tiết dự án')
<section id="banner">
	<div class="full-container">
		<div class="bannerproject">
			<img src="{!! asset('index/img/Group 5476.png')!!}" alt="hình banner dự án">
		</div>
	</div>
</section>
<br>
<section id="tenduan">
	<div class="container">
		@foreach($baiviet as $baiviet)
		<div id="T_N_D___N_">
			<p>{{$baiviet->name_sanpham}}</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="hinhtduan">
					<img src="../../img/{{$baiviet->image}}" alt="hình dự án">
				</div>
			</div>
			<div class="col-md-6">
				<div id="M__T__CHUNG">
					<p>MÔ TẢ CHUNG</p>
				</div>
				<div class="ndduant">
					<p>{!!$baiviet->noidung!!}</p>
				</div>
				<div id="Group_5480">
	
					<div id="Group_264_ba">
						<div id="XEM_DEMO">
							<a href="{{$baiviet->link_baiviet}}">XEM DEMO</a>
						</div>
					</div>

	
					<div id="Group_264_bb">
						<div id="LI_N_H__bb">
							<a href="https://www.facebook.com/messages/t/patict.vn">LIÊN HỆ</a>
						</div>
					</div>
	
				</div>
			</div>
		</div>
		@endforeach
	</div>
</section>
<div class="space50">&nbsp;</div>
<section id="khachhangdoitac">
	<div class="container">
		<div id="Group_5195">
			<div id="KH_CH_H_NG_V____I_T_C">
				<h1>KHÁCH HÀNG VÀ ĐỐI TÁC</h1>
			</div>
			<div id="PAT_vf">
				<p>PAT</p>
			</div>
		</div>
		<div id="PAT____c__h_n_100__kh_ch_h_ng_">
			<p>PAT đã có hơn 100+ khách hàng sử dụng dịch vụ. Hãy xem họ cảm nhận về chúng tôi</p>
		</div>
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
							  	<div class="item">
							  		<div class="Rectangle_1371">
										<div class="tendoi">
											<div id="Lorem_ipsum_dolor_sit_amet_vx">
												<span>{{$danhgiadt->name}}</span>
											</div>
											<div class="Group_823">
												<img src="../../img/{{$danhgiadt->image}}" alt="hình đánh giá dự án">
											</div>
										</div>
										<hr style="border: 0.5px solid #99c93d;width: 50%;margin-left: 1px;margin-top: 0rem;">
										<div id="T_o_ra_nh_ng_s_n_ph_m_tinh_hoa_da">
											<p>{{$danhgiadt->noidung}}</p>
										</div>
									</div>
							  	</div>
							  	@endforeach
							</div>
						</div>		
					</div>
				</div>
				<div class="col-md-6">
					<div class="hinhdt">
						<img src="{!! asset('index/img/re.png')!!}" alt="hình dự án">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
@include('index.ytuong')

@endsection