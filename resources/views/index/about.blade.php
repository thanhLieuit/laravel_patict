@extends('index.master')
@section('content')

<section id="banner">
	<div class="full-container">
		<div class="bannerslide">
			<div class="banner" style="">
			
				<div id="Qua_m_t_ch_ng____ng_x_y_d_ng_v">
					<p>{{ trans('messages.about1') }} <a style="color: #1e1e1e" href="https://patict.vn/"><span style="font-style:normal;font-weight:bold;">PAT</span></a>{{ trans('messages.about2') }} <a style="color: #1e1e1e" href="https://patict.vn/"><span style="font-style:normal;font-weight:bold;">PAT</span></a> {{ trans('messages.about26') }}</p><br>
				</div>
				<div id="SLOGAN___S_N_PH_M_MANG_GI__TR_">
					<p>{{ trans('messages.about3') }}<br/>{{ trans('messages.about4') }}</p>
				</div>
				<div id="Btn___i_t_c_jg">

						<div id="LI_N_H__V_I_CH_NG_T_I">
							<a href="https://www.facebook.com/messages/t/patict.vn" style="text-decoration: none;color: white"><p>{{ trans('messages.about5') }}</p></a>
						</div>

				</div>
			</div>
			<div class="slide" >
				<div id="owl-demo" class="owl-carousel owl-theme">
				  	<div class="item"><img src="{!! asset('index/img/ID3002634.png')!!}" alt="Hình ảnh banner"></div>
				  	<div class="item"><img src="{!! asset('index/img/ID3002634.png')!!}" alt="Hình ảnh banner"></div>
				  	<div class="item"><img src="{!! asset('index/img/ID3002634.png')!!}" alt="Hình ảnh banner"></div> 
				</div>
			</div>	
		</div>
		
		
			
	</div>		
</section>
<section id="duongdan" style="background-color: #eee ">
	<div class="container">
		 <div class="row page-titles">
	        <div class="col-md-12 align-self-center">  
	            <ul class="breadcrumb" style="background-color: #e9ecef00;">
	                <li class=""><a href="{{ route('/')}}">{{ trans('messages.home') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class=" ">{{ trans('messages.about') }}</li>
	            </ul>

	        </div>
	        
	    </div>
	</div>
</section>
<section id="tamnhin">
	<div class="full-container">
		<div class="Mask_Group_16">
			<div class="container">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<div class="space50">&nbsp;</div>
							<div id="Group_2791">
								<div id="T_M_NH_N_S__M_NH">
									<h1>{{ trans('messages.about6') }}</h1>
								</div>
								<div id="PAT1">
									<p>PAT</p>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<div class="hinh">
										<img src="{!! asset('index/img/Group 1312.png')!!}" alt="hình ảnh nền" style="width: 100%">
									</div>
									<div class="tn">
										<p>{{ trans('messages.tamnhin') }}</p>
									</div>
								</div>
								<div class="col-md-8">
									<div id="T_o_ra_nh_ng_s_n_ph_m_tinh_hoa12">
									@foreach($tn1 as $tn1)
									@if($tn1->title == $lang)
										{!! $tn1->content !!}
									@elseif($tn1->title == $lang)
										{!! $tn1->content !!}
									@endif
									@endforeach
									</div>
								</div>
							</div>
							<div class="space50">&nbsp;</div>
							
							<div class="row">
								<div class="col-md-4 order-md-2">
									<div class="traiabout">
										<div class="hinh">
											<img src="{!! asset('index/img/Group 1312.png')!!}" alt="hình seo" style="width: 100%">
										</div>
										<div class="tn">
											<p>{{ trans('messages.sumenh') }}</p>
										</div>
									</div>
								</div>
								<div class="col-md-8 order-md-1">
									<div id="T_o_ra_nh_ng_s_n_ph_m_tinh_hoa12">
										@foreach($sm as $sm)
									@if($sm->title == $lang)
										{!! $sm->content !!}
									@elseif($sm->title == $lang)
										{!! $sm->content !!}
									@endif
									@endforeach
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="hinhphai">
								<img src="{!! asset('index/img/Untitled-3.png')!!}" alt="hình seo">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="giatri">
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="hinh" style="width: 100%">
						<img src="{!! asset('index/img/Mask_Group_60_wn_pattern.png')!!}" alt="hình seo" >
					</div>
				</div>
				<div class="col-md-6">
					<div id="Group_2801">
						<div id="GI__TR__C_T_L_I_">
							<h1>{{ trans('messages.giatricotloi') }}</h1>
						</div>
						<div id="PAT_jn">
							<p>PAT</p>
						</div>
					</div>
					<div class="gtcl">
						<!-- <img src="{!! asset('index/img/check-mark.png')!!}" alt="nút check"><p>Sự hài lòng của khách hàng</p>
						<img src="{!! asset('index/img/check-mark.png')!!}" alt="nút check"><p>Sáng tạo mọi lúc – mọi nơi</p>
						<img src="{!! asset('index/img/check-mark.png')!!}" alt="nút check"><p>Chất lượng tốt nhất</p>
						<img src="{!! asset('index/img/check-mark.png')!!}" alt="nút check"><p>Con người là nền tảng phát triển – tài sản quý giá nhất</p>
						<img src="{!! asset('index/img/check-mark.png')!!}" alt="nút check"><p>Chia sẻ lợi ích – hợp tác dài lâu</p> -->
							@foreach($gtcl as $gtcl)
									@if($gtcl->title == $lang)
										{!! $gtcl->content !!}
									@elseif($gtcl->title == $lang)
										{!! $gtcl->content !!}
									@endif
									@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<section id="thongtin">
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div id="Group_4898">
						<div id="TH_NG_TIN_C_NG_TY">
							<p>{{ trans('messages.about7') }}</p>
						</div>
						<div id="T_n_c_ng_ty">
							<p class="left">{{ trans('messages.about8') }}</p>
							<p class="right">{{ trans('messages.about10') }}</p>
						</div>

						<div id="Ng_y_th_nh_l_p">
							<p class="left">{{ trans('messages.about11') }}</p>
							<p class="right">03/03/2015</p>
						</div>
					
						<div id="Tr__s__ch_nh">
							<p class="left">{{ trans('messages.about13') }}</p>
							<p class="right">{{ trans('messages.about14') }}</p>
						</div>
						
						<div id="L_nh_v_c_ho_t___ng">
							<p class="left">{{ trans('messages.about15') }}<br/>{{ trans('messages.about16') }}</p>
							<p class="right">{{ trans('messages.about17') }}<br/>{{ trans('messages.about18') }}<br/>{{ trans('messages.about19') }}<br/>{{ trans('messages.about20') }}<br/>{{ trans('messages.about21') }}<br/>{{ trans('messages.about22') }}<br/>{{ trans('messages.about23') }}</p>
						</div>

						
					</div>
				</div>
				<div class="col-md-6">
					<div class="Group_1331" style="width: 100%">
						<img src="{!! asset('index/img/Mask_Group_17_wl_pattern.png')!!}" alt="hình seo" >
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<br>
<section id="nhantin">
	<div id="Group_5018" style="background-color: #add464bf;margin-bottom: -11px;">
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-8">
						<div id="Nh_n_th_ng_tin_chuy_n_s_u_v__c">
							<p>{{ trans('messages.about24') }}</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="Rectangle_7_i">
							<div id="__NG_K__NH_N_TIN">
								<a href="https://www.facebook.com/messages/t/patict.vn" style="text-decoration: none;color: white"><p>{{ trans('messages.about25') }}</p></a>
							</div>
						</div>
							
					</div>
				</div>
			</div>
		</div>	
	</div>
</section>
@endsection