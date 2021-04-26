@extends('index.master')
@section('content')

<section id="banner">
	<div class="full-container">
		<div class="bannerdv2">
			<!-- <img src="{!! asset('index/img/Mask_Group_18_rr_pattern.png')!!}" alt="hình banner lập trình phần mềm"> -->
			<div id="Group_268">
				
					<div id="tieudedv">
						<br>
						<h1>{{ trans('messages.laptrinhpm') }}</h1>
						<p>{{ trans('messages.laptrinhpm1') }}</p>
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
	                <li class="">{{ trans('messages.service8') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<section id="dichvu_laptrinh">
	<div class="container">
		<div id="D_CH_V_U">
			<h1>{{ trans('messages.laptrinhpm2') }}</h1>
		</div>
		<div id="PATdv">
			<p>PAT</p>
		</div>
		<div id="Nh_ng_d_ch_v__c_a_ch_ng_t_i_O">
			<p>{{ trans('messages.laptrinhpm3') }}</p>
		</div>
		<div class="nddvlaptrinh">
			<div class="tab">
				  	<button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen" style="border-right: 1px solid">{{ trans('messages.quanly') }}</button>
				  	<button class="tablinks" onclick="openCity(event, 'Paris')" style="border-right: 1px solid">{{ trans('messages.ungdung') }}</button>
				  	<button class="tablinks" onclick="openCity(event, 'Tokyo')">{{ trans('messages.trinhbiendich') }}</button>
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
				  					<img src="../img/{{$baivietweb->image}}" alt="hình lập tình phần mềm">
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
				  					<img src="../img/{{$baivietweb->image}}" alt="hình lập tình phần mềm">
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
												<img src="../index/img/Group 824.png" alt="hình lập tình phần mềm">
											</div>
											<br>
											<div id="xemtatca">
												<a href="{{route('xem-tat-ca')}}"><p>XEM TẤT CẢ</p></a>
												
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
				  					<img src="../img/{{$baivietapp->image}}" alt="hình lập tình phần mềm">
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
				  					<img src="../img/{{$baivietapp->image}}" alt="hình lập tình phần mềm">
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
												<img src="../index/img/Group 824.png" alt="hình lập tình phần mềm">
											</div>
											<br>
											<div id="xemtatca">
												<a href="{{route('xem-tat-ca')}}"><p>XEM TẤT CẢ</p></a>
												
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
				  					<img src="../img/{{$baivietsoft->image}}" alt="hình lập tình phần mềm">
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
				  					<img src="../img/{{$baivietsoft->image}}" alt="hình lập tình phần mềm">
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
												<img src="../index/img/Group 824.png" alt="hình lập tình phần mềm">
											</div>
											<br>
											<div id="xemtatca">
												<a href="{{route('xem-tat-ca')}}"><p>XEM TẤT CẢ</p></a>
												
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
<section id="thietke_laptrinh">
	<div class="container">
		<div class="gachli1"></div>
		<div class="title_thietke">
			<p>{{ trans('messages.laptrinhpm4') }}</p>
		</div>
		<div id="H_y_cho_ch_ng_t_i_bi_t_ng_nh_h">
			<p>{{ trans('messages.laptrinhpm5') }} <span style="font-style:normal;font-weight:bold;">PAT</span></p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="hinh_thietke">
					<img src="{!! asset('index/img/Image_94.png')!!}" alt="hình lập tình phần mềm">
				</div>
			</div>
			<div class="col-md-6">
				<div id="Thi_t_k__s_n_ph_m___p__ng_t_t_">
				<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình tích"><p>{{ trans('messages.laptrinhpm6') }}</p>
				<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình tích"><p>{{ trans('messages.laptrinhpm7') }}</p>
				<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình tích"><p>{{ trans('messages.laptrinhpm8') }}</p>
				<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình tích"><p>{{ trans('messages.laptrinhpm9') }}</p>
				<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình tích"><p>{{ trans('messages.laptrinhpm10') }}</p>
				<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình tích"><p>{{ trans('messages.laptrinhpm11') }}</p>
				<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình tích"><p>{{ trans('messages.laptrinhpm12') }}</p>
				<img src="{!! asset('index/img/check-mark.png')!!}" alt="hình tích"><p>{{ trans('messages.laptrinhpm13') }}</p>
				</div>
				<div class="space50">&nbsp;</div>
				<div id="Group_5192">
					<div id="B_T___U">
						<a href="{{route('dich-vu/laptrinh/batdau')}}">{{ trans('messages.batdau') }}</a>
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
@endsection