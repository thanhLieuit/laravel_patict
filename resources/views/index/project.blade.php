@extends('index.master')
@section('content')

<section id="banner">
	<div class="full-container">
		<div class="bannerproject">
			<img src="{!! asset('index/img/Group 5476.png') !!}" alt="hình banner dự án">
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
	                <li class="">{{ trans('messages.project') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<section id="duan">
	<div class="full-container">
		<div class="hinhduan">
			<div class="container">
				<div id="Group_1340">
					<div id="D___N">
						<h1>{{ trans('messages.project') }}</h1>
					</div>
					<div id="PATDA">
						<p>PAT</p>
					</div>
				</div>
				<div id="T__b_n_thi_t_k__cho___n_t_o_ra">
					<p>{{ trans('messages.project1') }}</p>
				</div>
				<div class="tab">
				  	<button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Website</button>
				  	<button class="tablinks" onclick="openCity(event, 'Paris')">App mobile</button>
				  	<button class="tablinks" onclick="openCity(event, 'Tokyo')">Software</button>
				  	<button class="tablinks" onclick="openCity(event, 'duankhac')">{{ trans('messages.duankhac') }}</button>
				</div>
				<br>
				<div id="London" class="tabcontent">
				  	<div class="col-md-12">
				  		<div class="row">
				  			@foreach($baivietweb as $baivietweb)
				  			@if($baivietweb->title == $lang)
				  			<div class="col-md-4">
			  				
				  				<div class="anda">
				  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baivietweb->slug])}}">
				  						<div class="Mask_Group_9">
					  					<img src="../public/img/{{$baivietweb->image}}" alt="hình dự án">
					  					<div class="khuung1">
						  					<div class="Rectangle_93">
						  						<div id="Lorem_ipsum_dolor_sit_amet">
													<p>{{$baivietweb->name_sanpham}}</p>
												</div>
												<div id="Lorem_ipsum_dolor_sit_amet__co_da">
													<i>{{$baivietweb->tomtat}}...</i>
												</div>
						  					</div>
					  					</div>
					  				</div>
				  					</a>	
				  				</div>				  				
				  			</div>
				  			@elseif($baivietweb->title == $lang)
				  			<div class="col-md-4">
			  				
				  				<div class="anda">
				  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baivietweb->slug])}}">
				  						<div class="Mask_Group_9">
					  					<img src="../public/img/{{$baivietweb->image}}" alt="hình dự án">
					  					<div class="khuung1">
						  					<div class="Rectangle_93">
						  						<div id="Lorem_ipsum_dolor_sit_amet">
													<p>{{$baivietweb->name_sanpham}}</p>
												</div>
												<div id="Lorem_ipsum_dolor_sit_amet__co_da">
													<i>{{$baivietweb->tomtat}}...</i>
												</div>
						  					</div>
					  					</div>
					  				</div>
				  					</a>	
				  				</div>				  				
				  			</div>
				  			@endif
				  			@endforeach
				  			<div class="col-md-4">
			  				
				  				<div class="anda1">
				  					
				  					
					  					<div class="khuung12">
						  					
						  						<div id="bacham">
													<img src="../public/index/img/Group 824.png" alt="hình dự án">
												</div>
												<br>
												<div id="xemtatca">
													<a href="{{route('xem-tat-ca')}}"><p>{{ trans('messages.xemtatca') }}</p></a>
													
												</div>
						  					
					  					</div>
					  					
					  				
				  					
				  				</div>				  				
				  			</div>
				  		</div>

				  		<br>				  		
				  	</div>
				</div>

				<div id="Paris" class="tabcontent">
				  	<div class="col-md-12">
				  		<div class="row">
				  			@foreach($baivietapp as $baivietapp)
				  			@if($baivietapp->title == $lang)
				  			<div class="col-md-4">
			  				
				  				<div class="anda">
				  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baivietapp->slug])}}">
				  						<div class="Mask_Group_9">
					  					<img src="../public/img/{{$baivietapp->image}}" alt="hình dự án">
					  					<div class="khuung1">
						  					<div class="Rectangle_93">
						  						<div id="Lorem_ipsum_dolor_sit_amet">
													<p>{{$baivietapp->name_sanpham}}</p>
												</div>
												<div id="Lorem_ipsum_dolor_sit_amet__co_da">
													<i>{{$baivietapp->tomtat}}...</i>
												</div>
						  					</div>
					  					</div>
					  				</div>
				  					</a>	
				  				</div>				  				
				  			</div>
				  			@elseif($baivietapp->title == $lang)
				  			<div class="col-md-4">
			  				
				  				<div class="anda">
				  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baivietapp->slug])}}">
				  						<div class="Mask_Group_9">
					  					<img src="../public/img/{{$baivietapp->image}}" alt="hình dự án">
					  					<div class="khuung1">
						  					<div class="Rectangle_93">
						  						<div id="Lorem_ipsum_dolor_sit_amet">
													<p>{{$baivietapp->name_sanpham}}</p>
												</div>
												<div id="Lorem_ipsum_dolor_sit_amet__co_da">
													<i>{{$baivietapp->tomtat}}...</i>
												</div>
						  					</div>
					  					</div>
					  				</div>
				  					</a>	
				  				</div>				  				
				  			</div>
				  			@endif
				  			@endforeach
				  			<div class="col-md-4">
			  				
				  				<div class="anda1">
				  					
				  					
					  					<div class="khuung12">
						  					
						  						<div id="bacham">
													<img src="../public/index/img/Group 824.png" alt="hình dự án">
												</div>
												<br>
												<div id="xemtatca">
													<a href="{{route('xem-tat-ca')}}"><p>{{ trans('messages.xemtatca') }}</p></a>
													
												</div>
						  					
					  					</div>
					  					
					  				
				  					
				  				</div>				  				
				  			</div>
				  		</div>
				  		<br>				  		
				  	</div>
				</div>

				<div id="Tokyo" class="tabcontent">
				  	<div class="col-md-12">
				  		<div class="row">
				  			@foreach($baivietsoft as $baivietsoft)
				  			@if($baivietsoft->title == $lang)
				  			<div class="col-md-4">
			  				
				  				<div class="anda">
				  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baivietsoft->slug])}}">
				  						<div class="Mask_Group_9">
					  					<img src="../public/img/{{$baivietsoft->image}}" alt="hình dự án">
					  					<div class="khuung1">
						  					<div class="Rectangle_93">
						  						<div id="Lorem_ipsum_dolor_sit_amet">
													<p>{{$baivietsoft->name_sanpham}}</p>
												</div>
												<div id="Lorem_ipsum_dolor_sit_amet__co_da">
													<i>{{$baivietsoft->tomtat}}...</i>
												</div>
						  					</div>
					  					</div>
					  				</div>
				  					</a>	
				  				</div>				  				
				  			</div>
				  			@elseif($baivietsoft->title == $lang)
				  			<div class="col-md-4">
			  				
				  				<div class="anda">
				  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baivietsoft->slug])}}">
				  						<div class="Mask_Group_9">
					  					<img src="../public/img/{{$baivietsoft->image}}" alt="hình dự án">
					  					<div class="khuung1">
						  					<div class="Rectangle_93">
						  						<div id="Lorem_ipsum_dolor_sit_amet">
													<p>{{$baivietsoft->name_sanpham}}</p>
												</div>
												<div id="Lorem_ipsum_dolor_sit_amet__co_da">
													<i>{{$baivietsoft->tomtat}}...</i>
												</div>
						  					</div>
					  					</div>
					  				</div>
				  					</a>	
				  				</div>				  				
				  			</div>
				  			@endif
				  			@endforeach
				  			<div class="col-md-4">
			  				
				  				<div class="anda1">
				  					
				  						
					  					<div class="khuung12">
						  					
						  						<div id="bacham">
													<img src="../public/index/img/Group 824.png" alt="hình dự án">
												</div>
												<br>
												<div id="xemtatca">
													<a href="{{route('xem-tat-ca')}}"><p>{{ trans('messages.xemtatca') }}</p></a>
													
												</div>
						  					
					  					</div>
					  					
					  				
				  					
				  				</div>				  				
				  			</div>
				  		</div>
				  		<br>				  		
				  	</div>
				</div>
				<div id="duankhac" class="tabcontent">
				  	<div class="col-md-12">
				  		<div class="row">
				  			@foreach($baivietdakhac as $baivietdakhac)
				  			@if($baivietdakhac->title == $lang)
				  			<div class="col-md-4">
			  				
				  				<div class="anda">
				  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baivietdakhac->slug])}}">
				  						<div class="Mask_Group_9">
					  					<img src="../public/img/{{$baivietdakhac->image}}" alt="hình dự án">
					  					<div class="khuung1">
						  					<div class="Rectangle_93">
						  						<div id="Lorem_ipsum_dolor_sit_amet">
													<p>{{$baivietdakhac->name_sanpham}}</p>
												</div>
												<div id="Lorem_ipsum_dolor_sit_amet__co_da">
													<i>{{$baivietdakhac->tomtat}}...</i>
												</div>
						  					</div>
					  					</div>
					  				</div>
				  					</a>	
				  				</div>				  				
				  			</div>
				  			@elseif($baivietdakhac->title == $lang)
				  			<div class="col-md-4">
			  				
				  				<div class="anda">
				  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baivietdakhac->slug])}}">
				  						<div class="Mask_Group_9">
					  					<img src="../public/img/{{$baivietdakhac->image}}" alt="hình dự án">
					  					<div class="khuung1">
						  					<div class="Rectangle_93">
						  						<div id="Lorem_ipsum_dolor_sit_amet">
													<p>{{$baivietdakhac->name_sanpham}}</p>
												</div>
												<div id="Lorem_ipsum_dolor_sit_amet__co_da">
													<i>{{$baivietdakhac->tomtat}}...</i>
												</div>
						  					</div>
					  					</div>
					  				</div>
				  					</a>	
				  				</div>				  				
				  			</div>
				  			@endif
				  			@endforeach
				  			<div class="col-md-4">
			  				
				  				<div class="anda1">
				  					
				  						
					  					<div class="khuung12">
						  					
						  						<div id="bacham">
													<img src="../public/index/img/Group 824.png" alt="hình dự án">
												</div>
												<br>
												<div id="xemtatca">
													<a href="{{route('xem-tat-ca')}}"><p>{{ trans('messages.xemtatca') }}</p></a>
													
												</div>
						  					
					  					</div>
					  					
					  				
				  					
				  				</div>				  				
				  			</div>
				  		</div>
				  		<br>				  		
				  	</div>
				</div>
			</div>
			

		</div>
	</div>
</section>
<br>
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
												<img src="../public/img/{{$danhgiadt->image}}" alt="hình dự án">
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
												<img src="../public/img/{{$danhgiadt->image}}" alt="hình dự án">
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
						<img src="{!! asset('index/img/re.png')!!}" alt="hình dự án">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
@include('index.ytuong');
@endsection