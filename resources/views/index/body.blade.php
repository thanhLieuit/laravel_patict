@extends('index.master')
@section('content')
<section id="banner1">
	<div class="full-container">
		<!-- <div id="Mask_Group_15">	
			<img src="{!! asset('index/img/Mask_Group_15_bfl_pattern.png')!!}" alt="" style="width: 100%;">
		</div> -->
		<div class="w3-content w3-section" style="">

		  	<img class="mySlides w3-animate-fading" src="{!! asset('index/img/Mask Group 70-min.png')!!}" alt="hình banner" style="width:100%">
		  	<img class="mySlides w3-animate-fading" src="{!! asset('index/img/Mask Group 69-min.png')!!}" alt="hình banner" style="width:100%">
		  	<img class="mySlides w3-animate-fading" src="{!! asset('index/img/Mask_Group_15_bfl_pattern-min.png')!!}" alt="hình banner" style="width:100%">
		</div>

		<div class="container">

			<div id="Group_268">
				
					<div id="Lorem_ipsum_dolor_sit_amet__co">
						<h3>{{ trans('messages.sologan4') }}</h3>
						<p><a style="color: #1e1e1e" href="https://patict.vn/"><strong >PATICT</strong></a> {{ trans('messages.sologan') }}</p>
					</div>
		
				
				<div id="Btn___i_t_c">
					<div id="Group_264">
						<div id="LI_N_H__T__V_N_NGAY">
							<a href="https://www.facebook.com/messages/t/patict.vn"><p>{{ trans('messages.lienhetuvan') }}</p></a>
						</div>
					</div>
				</div>
			</div>
			<div id="D_CH_V_">
				<h1>{{ trans('messages.service') }}</h1>
			</div>
			<div id="PAT">
				<p>PAT</p>
			</div>
			<div class="space10">&nbsp;</div>
			<div id="Nh_ng_d_ch_v__c_a_ch_ng_t_i_">
				<p>{{ trans('messages.nhungdichvu') }}</p>
			</div>
		</div>
	</div>
</section>
<div class="space100">&nbsp;</div>
@include('index.dichvu')
<br>
<section id="tamnhin">
	<div class="container">
		<div id="Group_279">
			<div id="T_M_NH_N">
				<h1>{{ trans('messages.tamnhin') }}</h1>
			</div>
			<div id="PAT_c">
				<p>PAT</p>
			</div>
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
						<div class="Rectangle_136">
							<div class="Rectangle_137">
								<div id="T_o_ra_nh_ng_s_n_ph_m_tinh_hoa">
									@foreach($tn as $tn)
									@if($tn->title == $lang)
										{!! $tn->content !!}
									@elseif($tn->title == $lang)
										{!! $tn->content !!}
									@endif
									@endforeach
								</div>
							</div>
						</div>		
					</div>
				</div>
				<div class="col-md-6">
					<div id="tamnhin">
						<img src="{!! asset('index/img/avt-tam-nhin-patictvn.jpg') !!}" alt="hình tầm nhìn">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="space50">&nbsp;</div>
<section id="giatricotloi">
	<div class="container">
		<div id="Group_280">
			<div id="GI__TR__C_T_L_I">
				<h1>{{ trans('messages.giatricotloi') }}</h1>
			</div>
			<div id="PAT_db">
				<p>PAT</p>
			</div>
		</div>

		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="tamnhin1">
						<img src="{!! asset('index/img/avt-gia-tri-cot-loi-patictvn.jpg')!!}" alt="hình tầm nhìn" style="">
					</div>
					<br>
				</div>
				<div class="col-md-6">
					<div class="cauchu">
						<!-- 
						<img src="{!! asset('index/img/Group5459.png')!!}" alt="hình câu chữ"> -->
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
			<br>
			<div id="Btn___i_t_c_bfd">
				<div id="Group_264_bfg">
					<div id="XEM_TH_M_V__PAT">
						<a href="{{route('gioi-thieu')}}" style="text-decoration: none;color: white"><p>{{ trans('messages.xemthemvepat') }}</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<section id="bietgi">
	<div class="full-container">
		<div class="hinhbietgi" >
			
		
			<div id="B_n_bi_t_g__v__d___n_c_a_PAT_">
				<p>{{ trans('messages.banbietgiveduan') }}<span style="font-style:normal;font-weight:bold;"> PAT</span>?</p>
			</div>
			<div id="PAT_COMPANY___C_NG_NGH__TO_N_C">
				<p>{{ trans('messages.patcompany') }}</p>
			</div>
			
			<div class="card">
			    <a data-fancybox href="https://www.youtube.com/watch?v=1QxHKFMmEgk">
			        <img id="Shape" class="card-img-top img-fluid" src="{!! asset('index/img/Shape.png')!!}" alt="hình khối" />
			    </a>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="kh-dtbody">
			<div class="owl-carousel owl-theme kh-dt-body">
				@foreach($danhgia_kh as $danhgia_kh)
					@if($danhgia_kh->title == $lang)
			    	<div class="item">
			    		<div class="phongnen">
				      		<div class="khungavartc">
				      			<div class="avartc" style="">
				              		<img src="../public/img/{{$danhgia_kh->image}}" alt="hình avart" >
				            	</div>
				      		</div>
				            
				            <center><h4 style="color: #1e1e1e;">{{$danhgia_kh->name}}</h4></center>
				            <div class="sao">
				            @if($danhgia_kh->star == 5)
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				            @elseif($danhgia_kh->star == 4)
				            	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star "></span>
				            @elseif($danhgia_kh->star == 3)
				            	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star "></span>
				              	<span class="fa fa-star "></span>
				            @elseif($danhgia_kh->star == 2)
				            	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star "></span>
				              	<span class="fa fa-star "></span>
				              	<span class="fa fa-star "></span>
				            @elseif($danhgia_kh->star == 1)
				            	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star "></span>
				              	<span class="fa fa-star "></span>
				              	<span class="fa fa-star "></span>
				              	<span class="fa fa-star "></span>
				            @endif
				            </div>
				            <div class="chu" style="text-align: center;">
				              <p style="color: #1e1e1e;">{{$danhgia_kh->noidung}}</p>
				            </div>
				        </div>
			    	</div>
			    	 @elseif($danhgia_kh->title == $lang)
			    	<div class="item">
			    		<div class="phongnen">
				      		<div class="khungavartc">
				      			<div class="avartc" style="">
				              		<img src="../public/img/{{$danhgia_kh->image}}" alt="hình avart" >
				            	</div>
				      		</div>
				            
				            <center><h4 style="color: #1e1e1e;">{{$danhgia_kh->name}}</h4></center>
				            <div class="sao">
				            @if($danhgia_kh->star == 5)
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				            @elseif($danhgia_kh->star == 4)
				            	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star "></span>
				            @elseif($danhgia_kh->star == 3)
				            	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star "></span>
				              	<span class="fa fa-star "></span>
				            @elseif($danhgia_kh->star == 2)
				            	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star "></span>
				              	<span class="fa fa-star "></span>
				              	<span class="fa fa-star "></span>
				            @elseif($danhgia_kh->star == 1)
				            	<span class="fa fa-star checkedd"></span>
				              	<span class="fa fa-star "></span>
				              	<span class="fa fa-star "></span>
				              	<span class="fa fa-star "></span>
				              	<span class="fa fa-star "></span>
				            @endif
				            </div>
				            <div class="chu" style="text-align: center;">
				              <p style="color: #1e1e1e;">{{$danhgia_kh->noidung}}</p>
				            </div>
				        </div>
			    	</div>
			    	@endif
			   	@endforeach
			</div>
		</div>		
	</div>

</section>

<div class="section">
	<div class="container">
		<img src="{!! asset('index/img/danh-gia-khach-hang-patictvn.jpg')!!}" alt="hình viền" style="    width: 100%;">
	</div>
</div>

<div class="space40">&nbsp;</div>
<section id="doitac">
	<div class="container">
		<div id="Group_1466">
			<div id="__I_T_C">
				<h1>{{ trans('messages.doitac') }}</h1>
			</div>
			<div id="PAT_bfk">
				<p>PAT</p>
			</div>
		</div>
		<div class="space40">&nbsp;</div>
			<div id="owl-example" class="owl-carousel owl-theme">
				@foreach($doitac as $doitac)
			  	<div class="item"><img src="../public/img/{{$doitac->image}}" alt="hình đối tác"> </div>
				@endforeach
			</div>
		<div class="space40">&nbsp;</div>
	</div>
</section>
<br>
<section id="baogia">
	<div class="container">
		<div id="Group_825">
			<div id="B_O_GI__D_CH_V_">
				<h1>{{ trans('messages.baogiadichvu') }}</h1>
			</div>
			<div id="PAT_w">
				<p>PAT</p>
			</div>
		</div>
		<div class="space40">&nbsp;</div>
		<div class="col-md-12">
			<div class="row">
				@foreach($baogia as $baogia)
				@if($baogia->title == $lang)
				<div class="col-md-3">
					<div class="vien" style="background-color: rgba(153,201,61,1);padding: 10px;color: white">
						<div class="logo1">
							<img src="../public/img/{{$baogia->image}}" alt="hình logo" style="">
						</div>
						<div class="title" style="text-align: center;">
							<h4>{{$baogia->name_baogia}}</h4>
						</div>
						<hr style="border-top: 1px solid rgb(255, 255, 255) !important;">
						<div class="nd" style="text-align: center;">
							<p>{!!$baogia->noidung!!}</p>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div id="XEM_GIAO_DI_N">
										<a href="{{route('xem-tat-ca')}}" style="text-decoration: none;color: rgba(153,201,61,1)"><span>{{ trans('messages.xemgiaodien') }}</span></a>
									</div>
								</div>
								<div class="col-md-6">
									<div id="LI_N_H_">
										<a href="https://www.facebook.com/messages/t/patict.vn" style="text-decoration: none;color: rgba(153,201,61,1)"><span>{{ trans('messages.lienhe') }}</span></a>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
				@elseif($baogia->title == $lang)
				<div class="col-md-3">
					<div class="vien" style="background-color: rgba(153,201,61,1);padding: 10px;color: white">
						<div class="logo1">
							<img src="../public/img/{{$baogia->image}}" alt="hình logo" style="">
						</div>
						<div class="title" style="text-align: center;">
							<h4>{{$baogia->name_baogia}}</h4>
						</div>
						<hr style="border-top: 1px solid rgb(255, 255, 255) !important;">
						<div class="nd" style="text-align: center;">
							<p>{!!$baogia->noidung!!}</p>
						</div>
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-8">
									<div id="XEM_GIAO_DI_N">
										<a href="{{route('xem-tat-ca')}}" style="text-decoration: none;color: rgba(153,201,61,1)"><span>{{ trans('messages.xemgiaodien') }}</span></a>
									</div>
								</div>
								<div class="col-md-4">
									<div id="LI_N_H_">
										<a href="https://www.facebook.com/messages/t/patict.vn" style="text-decoration: none;color: rgba(153,201,61,1)"><span>{{ trans('messages.lienhe') }}</span></a>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
</section>
<div class="space50">&nbsp;</div>
<section id="lienhe">
	<div class="container">
		<div class="rol-md-12">
			<div class="row">
				<div class="col-md-6">
					<div id="Group_906">
						<div id="LI_N_H__T__V_N">
							<h1>{{ trans('messages.lienhetuvan') }}</h1>
						</div>
						<div id="PAT_bdq">
							<p>PAT</p>
						</div>
					</div>
					<div class="space20">&nbsp;</div>

					<div id="Group_265">
						<div id="Lorem_ipsum_dolor_sit_amet__co_bds">
							<p>{{ trans('messages.sologan1') }} <a href="https://patict.vn/">patict.vn</a> {{ trans('messages.sologan5') }}</p>
						</div>
						<br>
						<div id="Group_264_bdv">
							
							<div id="LI_N_H__NGAY">
								<a href="https://www.facebook.com/messages/t/patict.vn" style="text-decoration: none;color: white"><h4>{{ trans('messages.lienhengay') }}</h4></a>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="hinh">
						<img src="{!! asset('index/img/su-min.png')!!}" alt="hình ảnh">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<script>
var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000); // Change image every 2 seconds
}
</script>

@endsection