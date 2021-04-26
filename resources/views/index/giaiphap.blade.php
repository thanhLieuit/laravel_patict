@extends('index.master')
@section('content')

<section id="banner">
	<div class="full-container">
		<div class="bannergp">
			<img src="{!! asset('index/img/Mask Group 623.png') !!}" alt=" hình banner">
		</div>
		<div class="container">

			<div id="Group_268">
				
					<div id="Lorem_ipsum_dolor_sit_amet__co_gp">
						<br>
						<p>{{ trans('messages.solution1') }}<a style="color: #1e1e1e" href="https://patict.vn/"><strong> PAT </strong></a>{{ trans('messages.solution4') }}</p>
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
	                <li class="">{{ trans('messages.solution') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<div class="space50">&nbsp;</div>
<section id="giaiphap">
	<div class="container">
		<div id="Group_1340_gp">
			<div id="GI_I_PH_P">
				<h1>{{ trans('messages.solution') }}</h1>
			</div>
			<div id="PATgp">
				<p>PAT</p>
			</div>
		</div>
		
			<div class="row">
				<div class="col-md-4">
					<img class="hihhgp" src="../public/img/Rectangle 520.png" alt="hình giải pháp">
					@foreach($menu_c21 as $menu_c21)
					@if($menu_c21->title == $lang)
					<div id="Group_2170">
						<div class="row1">
							<div class="col-md-10">
								<div id="ID1">

									<img src="../public/img/{{$menu_c21->image}}" alt="hình các dịch vụ giải pháp">
								</div>
								<div id="TH__NG_M_I__I_N_T_">
									<h4>{{$menu_c21->name_menu_baiviet}}</h4>
								</div>
								<div id="ndthuongmaidientu">
									<p>{!!$menu_c21->note!!}</p>
								</div>
							</div>
							<div class="col-md-2">
								<div id="TH__NG_M_I__I_N_T__oq">
									<img src="../public/img/Rectangle 518.png" alt="hình các dịch vụ giải pháp">
									<p>{{$menu_c21->name_menu_baiviet}}</p>
								</div>
							</div>
						</div>
						<div id="Group_2169">
							<div id="Xem_chi_ti_t_gp">
								<a href="{{route('chi-tiet-giai-phap',['slug'=>$menu_c21->slug])}}"><p>{{ trans('messages.xemchitiet') }}</p><i class="fa fa-arrow-right" style="font-size: 14px;padding-top: 3px;"></i></a>
								
							</div>
						</div>
					</div>
					<br>
					@elseif($menu_c21->title == $lang)
					<div id="Group_2170">
						<div class="row1">
							<div class="col-md-10">
								<div id="ID1">

									<img src="../public/img/{{$menu_c21->image}}" alt="hình các dịch vụ giải pháp">
								</div>
								<div id="TH__NG_M_I__I_N_T_">
									<h4>{{$menu_c21->name_menu_baiviet}}</h4>
								</div>
								<div id="ndthuongmaidientu">
									<p>{!!$menu_c21->note!!}</p>
								</div>
							</div>
							<div class="col-md-2">
								<div id="TH__NG_M_I__I_N_T__oq">
									<img src="../public/img/Rectangle 518.png" alt="hình các dịch vụ giải pháp">
									<p>{{$menu_c21->name_menu_baiviet}}</p>
								</div>
							</div>
						</div>
						<div id="Group_2169">
							<div id="Xem_chi_ti_t_gp">
								<a href="{{route('chi-tiet-giai-phap',['slug'=>$menu_c21->slug])}}"><p>{{ trans('messages.xemchitiet') }}</p><i class="fa fa-arrow-right" style="font-size: 14px;padding-top: 3px;"></i></a>
								
							</div>
						</div>
					</div>
					<br>
					@endif
					@endforeach
		
				</div>
				<div class="col-md-8">
					<div class="tomtatgp">
						<div class="tieudegp">
							
							<p>{{ trans('messages.solution2') }}</p>
						</div>
					</div>
					<div class="space10">&nbsp;</div>
					<div class="row">
						@foreach($menu_baiviet as $menu_baiviet)
						@if($menu_baiviet->title == $lang)
						<div class="col-md-6">
							<div id="Group_2170">
								<div class="row1">
									<div class="col-md-10">
										<div id="ID1">

											<img src="../public/img/{{$menu_baiviet->image}}" alt="hình các dịch vụ giải pháp">
										</div>
										<div id="TH__NG_M_I__I_N_T_">
											<h4>{{$menu_baiviet->name_menu_baiviet}}</h4>
										</div>
										<div id="ndthuongmaidientu">
											<p>{!!$menu_baiviet->note!!}</p>
										</div>
									</div>
									<div class="col-md-2">
										<div id="TH__NG_M_I__I_N_T__oq">
											<img src="../public/img/Rectangle 518.png" alt="hình các dịch vụ giải pháp">
											<p>{{$menu_baiviet->name_menu_baiviet}}</p>
										</div>
									</div>
								</div>
								<div id="Group_2169">
									<div id="Xem_chi_ti_t_gp">
										<a href="{{route('chi-tiet-giai-phap',['slug'=>$menu_baiviet->slug])}}"><p>{{ trans('messages.xemchitiet') }}</p><i class="fa fa-arrow-right" style="font-size: 14px;padding-top: 3px;"></i></a>
										
									</div>
								</div>
							</div>
							<div class="space20">&nbsp;</div>
						</div>
						@elseif($menu_baiviet->title == $lang)
						<div class="col-md-6">
							<div id="Group_2170">
								<div class="row1">
									<div class="col-md-10">
										<div id="ID1">

											<img src="../public/img/{{$menu_baiviet->image}}" alt="hình các dịch vụ giải pháp">
										</div>
										<div id="TH__NG_M_I__I_N_T_">
											<h4>{{$menu_baiviet->name_menu_baiviet}}</h4>
										</div>
										<div id="ndthuongmaidientu">
											<p>{!!$menu_baiviet->note!!}</p>
										</div>
									</div>
									<div class="col-md-2">
										<div id="TH__NG_M_I__I_N_T__oq">
											<img src="../public/img/Rectangle 518.png" alt="hình các dịch vụ giải pháp">
											<p>{{$menu_baiviet->name_menu_baiviet}}</p>
										</div>
									</div>
								</div>
								<div id="Group_2169">
									<div id="Xem_chi_ti_t_gp">
										<a href="{{route('chi-tiet-giai-phap',['slug'=>$menu_baiviet->slug])}}"><p>{{ trans('messages.xemchitiet') }}</p><i class="fa fa-arrow-right" style="font-size: 14px;padding-top: 3px;"></i></a>
										
									</div>
								</div>
							</div>
							<div class="space20">&nbsp;</div>
						</div>
						@endif
						@endforeach
						<img class="hihhgp1" src="../public/img/Rectangle 521.png" alt="hình các dịch vụ giải pháp">
					</div>

				</div>
			</div>
			<div class="space100">&nbsp;</div>
			<div class="space40">&nbsp;</div>
			<div id="Group_1340_gp">
			<div id="GI_I_PH_P">
				<h1>{{ trans('messages.solution3') }}</h1>
			</div>
			<div id="PATgp">
				<p>PAT</p>
			</div>
		</div>
	</div>
</section>
			<div class="space50">&nbsp;</div>

<section id="thanhcong">
	<div class="container">

			<div id="owl-thanhcong" class="owl-carousel owl-theme">
				@foreach($khodemo as $khodemo)
				@if($khodemo->title == $lang)
			  	<div class="item">
			  		<div class="anda_gp">
			  			<a href="{{route('chi-tiet-san-pham',['slug'=>$khodemo->slug])}}">
			  				<div class="Mask_Group_9">
		  						<img src="../public/img/{{$khodemo->image}}" alt="hình các dịch vụ giải pháp">
			  					<div class="khuung1_gp">
				  					<div class="Rectangle_93_gp">
				  						<div id="Lorem_ipsum_dolor_sit_amet_gp">
											<p>{{$khodemo->name_sanpham}}</p>
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
		  						<img src="../public/img/{{$khodemo->image}}" alt="hình các dịch vụ giải pháp">
			  					<div class="khuung1_gp">
				  					<div class="Rectangle_93_gp">
				  						<div id="Lorem_ipsum_dolor_sit_amet_gp">
											<p>{{$khodemo->name_sanpham}}</p>
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

		<div class="space40">&nbsp;</div>
	</div>
</section>
<div class="space40">&nbsp;</div>
@endsection