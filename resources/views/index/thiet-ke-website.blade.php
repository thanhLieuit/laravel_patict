@extends('index.master')
@section('content')

<section id="banner">
	<div class="full-container">
		<div class="bannerdv1">
			<div id="Group_268">
					<div id="tieudedv">
						<br>
						<h1>{{ trans('messages.cauthietkeweb1') }}</h1>
						<p>{{ trans('messages.cauthietkeweb2') }}</p>
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
	                <li class="">{{ trans('messages.service12') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<section id="thietketheonganh">
	<div class="container noidungdv">
		<div id="D_CH_V_U">
			<h1>{{ trans('messages.cauthietkeweb3') }}</h1>
		</div>
		<div id="PATdv">
			<p>PAT</p>
		</div>
		<div id="Nh_ng_d_ch_v__c_a_ch_ng_t_i_O">
			<p>{{ trans('messages.cauthietkeweb4') }}</p>
		</div>
		<br>
		<div class="theonganh">
			<div class="tab">
				  	<button class="tablinks" onclick="openCity(event, 'doanhnghiep')" id="defaultOpen" style="border-right: 1px solid">{{ trans('messages.doanhnghiep') }}</button>
				  	<button class="tablinks" onclick="openCity(event, 'banhang')" style="border-right: 1px solid">{{ trans('messages.banhang') }}</button>
				  	<button class="tablinks" onclick="openCity(event, 'tintuc')" style="border-right: 1px solid">{{ trans('messages.tintuc') }}</button>
				  	<button class="tablinks" onclick="openCity(event, 'thuongmaidientu')" style="border-right: 1px solid">{{ trans('messages.thuongmaidientu') }}</button>
				  	<button class="tablinks" onclick="openCity(event, 'thietketheoyeucau')">{{ trans('messages.thietketheoyeucau') }}</button>

			</div>
			<br>
			<div id="doanhnghiep" class="tabcontent">
			  	<div class="col-md-12">
			  		<div class="row">
			  			@foreach($sanphamdn as $sanphamdn)
			  			@if($sanphamdn->title == $lang)
			  			<div class="col-md-4">
			  				
			  				<div class="anda">
			  					<a href="{{route('chi-tiet-san-pham',['slug'=>$sanphamdn->slug])}}">
			  						<div class="Mask_Group_9">
				  					<img src="../img/{{$sanphamdn->image}}" alt="hình thiết kế">
				  					<div class="khuung1">
					  					<div class="Rectangle_93">
					  						<div id="Lorem_ipsum_dolor_sit_amet">
												<p>{{$sanphamdn->name_sanpham}}</p>
											</div>
											<div id="Lorem_ipsum_dolor_sit_amet__co_da">
												<i>{{$sanphamdn->tomtat}}...</i>
											</div>
					  					</div>
				  					</div>
				  				</div>
			  					</a>	
			  				</div>				  				
			  			</div>
			  			@elseif($sanphamdn->title == $lang)
			  			<div class="col-md-4">
			  				
			  				<div class="anda">
			  					<a href="{{route('chi-tiet-san-pham',['slug'=>$sanphamdn->slug])}}">
			  						<div class="Mask_Group_9">
				  					<img src="../img/{{$sanphamdn->image}}" alt="hình thiết kế">
				  					<div class="khuung1">
					  					<div class="Rectangle_93">
					  						<div id="Lorem_ipsum_dolor_sit_amet">
												<p>{{$sanphamdn->name_sanpham}}</p>
											</div>
											<div id="Lorem_ipsum_dolor_sit_amet__co_da">
												<i>{{$sanphamdn->tomtat}}...</i>
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
										<img src="../index/img/Group 824.png" alt="hình thiết kế">
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
			<div id="banhang" class="tabcontent">
			  	<div class="col-md-12">
			  		<div class="row">
			  			@foreach($sanphambh as $sanphambh)
			  			@if($sanphambh->title == $lang)
			  			<div class="col-md-4">
			  				
			  				<div class="anda">
			  					<a href="{{route('chi-tiet-san-pham',['slug'=>$sanphambh->slug])}}">
			  						<div class="Mask_Group_9">
				  					<img src="../img/{{$sanphambh->image}}" alt="hình thiết kế">
				  					<div class="khuung1">
					  					<div class="Rectangle_93">
					  						<div id="Lorem_ipsum_dolor_sit_amet">
												<p>{{$sanphambh->name_sanpham}}</p>
											</div>
											<div id="Lorem_ipsum_dolor_sit_amet__co_da">
												<i>{{$sanphambh->tomtat}}...</i>
											</div>
					  					</div>
				  					</div>
				  				</div>
			  					</a>	
			  				</div>				  				
			  			</div>
			  			@elseif($sanphambh->title == $lang)
			  			<div class="col-md-4">
			  				
			  				<div class="anda">
			  					<a href="{{route('chi-tiet-san-pham',['slug'=>$sanphambh->slug])}}">
			  						<div class="Mask_Group_9">
				  					<img src="../img/{{$sanphambh->image}}" alt="hình thiết kế">
				  					<div class="khuung1">
					  					<div class="Rectangle_93">
					  						<div id="Lorem_ipsum_dolor_sit_amet">
												<p>{{$sanphambh->name_sanpham}}</p>
											</div>
											<div id="Lorem_ipsum_dolor_sit_amet__co_da">
												<i>{{$sanphambh->tomtat}}...</i>
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
												<img src="../index/img/Group 824.png" alt="hình thiết kế">
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

			<div id="tintuc" class="tabcontent">
			  	<div class="col-md-12">
			  		<div class="row">
			  			@foreach($baiviettt as $baiviettt)
			  			@if($baiviettt->title == $lang)
			  			<div class="col-md-4">
			  				
			  				<div class="anda">
			  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baiviettt->slug])}}">
			  						<div class="Mask_Group_9">
				  					<img src="../img/{{$baiviettt->image}}" alt="hình thiết kế">
				  					<div class="khuung1">
					  					<div class="Rectangle_93">
					  						<div id="Lorem_ipsum_dolor_sit_amet">
												<p>{{$baiviettt->name_sanpham}}</p>
											</div>
											<div id="Lorem_ipsum_dolor_sit_amet__co_da">
												<i>{{$baiviettt->tomtat}}...</i>
											</div>
					  					</div>
				  					</div>
				  				</div>
			  					</a>	
			  				</div>				  				
			  			</div>
			  			@elseif($baiviettt->title == $lang)
			  			<div class="col-md-4">
			  				
			  				<div class="anda">
			  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baiviettt->slug])}}">
			  						<div class="Mask_Group_9">
				  					<img src="../img/{{$baiviettt->image}}" alt="hình thiết kế">
				  					<div class="khuung1">
					  					<div class="Rectangle_93">
					  						<div id="Lorem_ipsum_dolor_sit_amet">
												<p>{{$baiviettt->name_sanpham}}</p>
											</div>
											<div id="Lorem_ipsum_dolor_sit_amet__co_da">
												<i>{{$baiviettt->tomtat}}...</i>
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
												<img src="../index/img/Group 824.png" alt="hình thiết kế">
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
			<div id="thuongmaidientu" class="tabcontent">
			  	<div class="col-md-12">
			  		<div class="row">
						@foreach($baiviettmdt as $baiviettmdt)
						@if($baiviettmdt->title == $lang)
			  			<div class="col-md-4">
			  				
			  				<div class="anda">
			  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baiviettmdt->slug])}}">
			  						<div class="Mask_Group_9">
				  					<img src="../img/{{$baiviettmdt->image}}" alt="hình thiết kế">
				  					<div class="khuung1">
					  					<div class="Rectangle_93">
					  						<div id="Lorem_ipsum_dolor_sit_amet">
												<p>{{$baiviettmdt->name_sanpham}}</p>
											</div>
											<div id="Lorem_ipsum_dolor_sit_amet__co_da">
												<i>{{$baiviettmdt->tomtat}}...</i>
											</div>
					  					</div>
				  					</div>
				  				</div>
			  					</a>	
			  				</div>				  				
			  			</div>
			  			@elseif($baiviettmdt->title == $lang)
			  			<div class="col-md-4">
			  				
			  				<div class="anda">
			  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baiviettmdt->slug])}}">
			  						<div class="Mask_Group_9">
				  					<img src="../img/{{$baiviettmdt->image}}" alt="hình thiết kế">
				  					<div class="khuung1">
					  					<div class="Rectangle_93">
					  						<div id="Lorem_ipsum_dolor_sit_amet">
												<p>{{$baiviettmdt->name_sanpham}}</p>
											</div>
											<div id="Lorem_ipsum_dolor_sit_amet__co_da">
												<i>{{$baiviettmdt->tomtat}}...</i>
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
												<img src="../index/img/Group 824.png" alt="hình thiết kế">
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
			<div id="thietketheoyeucau" class="tabcontent">
			  	<div class="col-md-12">
			  		<div class="row">
			  			@foreach($baiviettktyc as $baiviettktyc)
			  			@if($baiviettktyc->title == $lang)
			  			<div class="col-md-4">
			  				
			  				<div class="anda">
			  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baiviettktyc->slug])}}">
			  						<div class="Mask_Group_9">
				  					<img src="../img/{{$baiviettktyc->image}}" alt="hình thiết kế">
				  					<div class="khuung1">
					  					<div class="Rectangle_93">
					  						<div id="Lorem_ipsum_dolor_sit_amet">
												<p>{{$baiviettktyc->name_sanpham}}</p>
											</div>
											<div id="Lorem_ipsum_dolor_sit_amet__co_da">
												<i>{{$baiviettktyc->tomtat}}...</i>
											</div>
					  					</div>
				  					</div>
				  				</div>
			  					</a>	
			  				</div>				  				
			  			</div>
			  			@elseif($baiviettktyc->title == $lang)
			  			<div class="col-md-4">
			  				
			  				<div class="anda">
			  					<a href="{{route('chi-tiet-san-pham',['slug'=>$baiviettktyc->slug])}}">
			  						<div class="Mask_Group_9">
				  					<img src="../img/{{$baiviettktyc->image}}" alt="hình thiết kế">
				  					<div class="khuung1">
					  					<div class="Rectangle_93">
					  						<div id="Lorem_ipsum_dolor_sit_amet">
												<p>{{$baiviettktyc->name_sanpham}}</p>
											</div>
											<div id="Lorem_ipsum_dolor_sit_amet__co_da">
												<i>{{$baiviettktyc->tomtat}}...</i>
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
												<img src="../index/img/Group 824.png" alt="hình thiết kế">
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

</section>
<br>
<section id="noibanhang">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="pc">
					<div class="titlenoiban">
						<div id="Website">
							<h1>Website</h1>
						</div>
						<div id="kh_ng_ch__l__N_I_B_N_H_NG">
							<h1>{{ trans('messages.cauthietkeweb5') }} <span style="font-style:normal;font-weight:bold;color:rgba(255,84,62,1);">{{ trans('messages.cauthietkeweb6') }}</span></h1>
						</div>
						<div id="m__c_n_l__N_I_L_M_VI_C">
							<h1>mà còn là <span style="font-style:normal;font-weight:bold;color:rgba(255,84,62,1);">{{ trans('messages.cauthietkeweb7') }}</span></h1>
						</div>
					</div>
					<div class="nd_dv_tk">
						<div class="nd_dv_tk1">
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb8') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb9') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb10') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb11') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb12') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb13') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb14') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb15') }}</p>
						</div>
					</div>
					<div id="Group_51921">
						<div id="B_T___U">
							<a href="https://docs.google.com/forms/d/e/1FAIpQLSc0dqLk9zh7heOpYe9yRRUOVfkNI0Hr7cCfbtlNZGmFbHAzDA/viewform?usp=sf_link">{{ trans('messages.batdau') }}</a>
						</div>
					</div>
				</div>
				<div class="mobie">
					<div class="titlenoiban">
						<div id="Website">
							<h4>Website</h4>
						</div>
						<div id="kh_ng_ch__l__N_I_B_N_H_NG">
							<h4>không chỉ là <span style="font-style:normal;font-weight:bold;color:rgba(255,84,62,1);">{{ trans('messages.cauthietkeweb5') }}</span></h4>
						</div>
						<div id="m__c_n_l__N_I_L_M_VI_C">
							<h4>{{ trans('messages.cauthietkeweb6') }} <span style="font-style:normal;font-weight:bold;color:rgba(255,84,62,1);">{{ trans('messages.cauthietkeweb7') }}</span></h4>
						</div>
					</div>
					<div class="nd_dv_tk">
						<div class="nd_dv_tk1">
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb8') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb9') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb10') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb11') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb12') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb13') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb14') }}</p>
							<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình check"><p>{{ trans('messages.cauthietkeweb15') }}</p>
						</div>
					</div>
					<div id="Group_51921">
						<div id="B_T___U">
							<a href="https://docs.google.com/forms/d/e/1FAIpQLSc0dqLk9zh7heOpYe9yRRUOVfkNI0Hr7cCfbtlNZGmFbHAzDA/viewform?usp=sf_link">{{ trans('messages.batdau') }}</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="hinhdv_thietke">
					<img src="{!! asset('index/img/Mask_Group_61_fd_pattern.png')!!}" alt="hình thiết kế">
				</div>
				<br>
				<div class="nd_dv_yt">
					<div id="Kh_ch_h_ng_s__nh_n____c_S__y_n">
						<p>{{ trans('messages.cauthietkeweb16') }} <span style="">{{ trans('messages.cauthietkeweb17') }}</span></p>
					</div>
					<div id="khi_thi_t_k__web_v_i_PATICT_VN">
						<p>{{ trans('messages.cauthietkeweb18') }} <span style="font-style:normal;font-weight:bold;font-size: 25px">PATICT.VN</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
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
<br>
<br>
@endsection