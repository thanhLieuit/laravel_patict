@extends('index.master')
@section('content')
<section id="banner">
	<div class="full-container">
		<div class="bannergp">
			<img src="{!! asset('index/img/QLDN-banner (2).png') !!}" alt="hình banner quản lý doanh nghiệp">
		</div>	
	</div>		
</section>
<br>
<section id="duongdan" style="background-color: #eee ">
	<div class="container">
		<div class="row page-titles">
	        <div class="col-md-6 align-self-center">  
	            <ul class="breadcrumb" style="background-color: #e9ecef00;">
	                <li class=""><a href="{{ route('/')}}">{{ trans('messages.home') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class=""><a href="{{ route('giai-phap')}}">{{ trans('messages.solution') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class="">{{ trans('messages.solution31') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<section id="giaiphapthuongmai">
	<div class="container">
		<div id="PAT_MANG___N_NH_NG_GI_I_PH_P_T">
			<p>{{ trans('messages.solution-dn') }}<br/>{{ trans('messages.solution-dn1') }}</p>
		</div>
		<div id="B_t_k__kh_ch_h_ng_c_a_b_n_____">
			<p>{{ trans('messages.solution-dn2') }}</p>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="hinhgptm">
					<img src="{!! asset('index/img/QLDN-1.png') !!}" alt="hình quản lý doanh nghiệp">
				</div>
				<br>
				<div id="GI_I_PH_P_TO_N_DI_N_CHO_DOANH_">
					<p>{{ trans('messages.solution-dn3') }}</p>
				</div>
				<div id="Gi_i_ph_p_th__ng_m_i__i_n_t__c">
					<p>P{{ trans('messages.solution-dn4') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="hinhgptm">
					<img src="{!! asset('index/img/QLDN-2.png') !!}" alt="hình quản lý doanh nghiệp">
				</div>
				<br>
				<div id="GI_I_PH_P_TO_N_DI_N_CHO_DOANH_">
					<p>{{ trans('messages.solution-dn5') }}</p>
				</div>
				<div id="Gi_i_ph_p_th__ng_m_i__i_n_t__c">
					<p>{{ trans('messages.solution-dn6') }}</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="hinhgptm">
					<img src="{!! asset('index/img/QLDN-3.png') !!}" alt="hình quản lý doanh nghiệp">
				</div>
				<br>
				<div id="GI_I_PH_P_TO_N_DI_N_CHO_DOANH_">
					<p>{{ trans('messages.solution-dn7') }} <br>{{ trans('messages.solution-dn8') }}</p>
				</div>
				<div id="Gi_i_ph_p_th__ng_m_i__i_n_t__c">
					<p>{{ trans('messages.solution-dn9') }}</p>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<section id="themthongtin">
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div id="Group_1461">
						<div id="Group_906">
							<div id="B_N_C_N_TH_M_TH_NG_TIN_">
								<h1>{{ trans('messages.solution-dn10') }}</h1>
							</div>
						</div>
						<div id="Group_265">
							<div id="B_n_mu_n_bi_t_r__h_n_v__c_c_d_">
								<p>{{ trans('messages.solution-dn11') }}</p>
								<p>{{ trans('messages.solution-dn12') }}</p>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div id="Btn___i_t_c_dv_gp">
										<a href="https://www.facebook.com/messages/t/patict.vn" style="text-decoration: none;color: black"><p>{{ trans('messages.solution-tm12') }}</p>
										</a>
									</div>
								</div>
								<div class="col-md-6">
									<div id="G_I_CHO_CH_NG_T_I">
										<a href="tel:0903190889" style="text-decoration: none;"><p>{{ trans('messages.solution-tm13') }}</p></a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="hinhttt">
						<img src="{!! asset('index/img/QLDN-4.png')!!}" alt="hình quản lý doanh nghiệp">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="space50">&nbsp;</div>
<section id="duandatrienkhai">
	<div class="container">
		<div id="PAT_MANG___N_NH_NG_GI_I_PH_P_T">
			<p>{{ trans('messages.solution-tm14') }}</p>
		</div>
		
			<div id="owl-thanhcong" class="owl-carousel owl-theme">
				@foreach($khodemo as $khodemo)
				@if($khodemo->title == $lang)
			  	<div class="item">
			  		<div class="anda_gp">
			  			<a href="{{route('chi-tiet-san-pham',['slug'=>$khodemo->slug])}}">
			  				<div class="Mask_Group_9">
		  					<img src="../img/{{$khodemo->image}}" alt="hinh banner giải pháp y tế">
		  					<div class="khuung1_gp">
			  					<div class="Rectangle_93_gp">
			  						<div id="Lorem_ipsum_dolor_sit_amet_gp">
										<h6>{{$khodemo->name_baiviet}}</h6>
									</div>
									<div id="Lorem_ipsum_dolor_sit_amet__co_da_gp">
										<p>{{$khodemo->tomtat}}</p>
									</div>
			  					</div>
			  				</div>
		  				</div>
			  			</a>
	  					
	  				</div>
			  	</div>
			  	@elseif($khodemo->title == $lang)
			  	<div class="item">
			  		<div class="anda_gp">
			  			<a href="{{route('chi-tiet-san-pham',['slug'=>$khodemo->slug])}}">
			  				<div class="Mask_Group_9">
		  					<img src="../img/{{$khodemo->image}}" alt="hinh banner giải pháp y tế">
		  					<div class="khuung1_gp">
			  					<div class="Rectangle_93_gp">
			  						<div id="Lorem_ipsum_dolor_sit_amet_gp">
										<h6>{{$khodemo->name_baiviet}}</h6>
									</div>
									<div id="Lorem_ipsum_dolor_sit_amet__co_da_gp">
										<p>{{$khodemo->tomtat}}</p>
									</div>
			  					</div>
			  				</div>
		  				</div>
			  			</a>
	  					
	  				</div>
			  	</div>
			  	@endif
				@endforeach
			</div>
	</div>	
</section>
<section id="noidunggiapphap">
	<div class="container">
		<div class="col-md-12 noidunggp">
			<div class="row">
				<div class="col-md-6">
					
					<div class="tieudegiapphap1">
						<h2>{{ trans('messages.solution-dn13') }}</h2>
						<p>{{ trans('messages.solution-dn14') }} </p>
						<p>{{ trans('messages.solution-dn15') }}</p>
						<p>{{ trans('messages.solution-dn16') }}</p>
						<p>{{ trans('messages.solution-dn17') }}</p>
						<p>{{ trans('messages.solution-dn18') }}</p>
						<p>{{ trans('messages.solution-dn19') }}</p>
					</div>
				</div>
				<div class="col-md-6">
						<div class="space50">&nbsp;</div>
					<div class="hinhphai1">
						<img src="{!! asset('index/img/erp-banner.png')!!}" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 order-md-2">
						
					<div class="tieudegiapphap1">
						<h2>{{ trans('messages.solution-dn20') }}</h2>
						<p>{{ trans('messages.solution-dn21') }}</p>
						<p>{{ trans('messages.solution-dn22') }}</p>
						<p>{{ trans('messages.solution-dn23') }}</p>
						<p>{{ trans('messages.solution-dn24') }}</p>
						<p>{{ trans('messages.solution-dn25') }}</p>
					</div>
					<div id="Btn___i_t_c_dv_gp">
						<a href="https://www.facebook.com/messages/t/patict.vn" style="text-decoration: none;color: black"><p>{{ trans('messages.about5') }}</p>
						</a>
					</div>
				</div>
				<div class="col-md-6 order-md-1">
					<div class="hinhphai1">
						<img src="{!! asset('index/img/z2011668983946_f8fdc8264d3e04de66e7c11320644207.jpg')!!}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="quytrinhgiapphap">
	<div class="container">
		<div id="PAT_MANG___N_NH_NG_GI_I_PH_P_T">
			<p>{{ trans('messages.solution-tm26') }}</p>
		</div>
		<div id="B_t_k__kh_ch_h_ng_c_a_b_n_____">
			<p>{{ trans('messages.solution-tm27') }}</p>
		</div>
	</div>
</section>

@include('index.ytuong')
@endsection