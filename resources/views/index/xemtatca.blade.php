@extends('index.master')
@section('content')
@section('title','Xem tất cả web demo')
<section id="banner">
	<div class="full-container">
		<div class="bannernew">
			<img src="{!! asset('index/img/Mask_Group_23_fh_pattern.png')!!}" alt="banner">
		</div>
	</div>		
</section>
<section id="duongdan" style="background-color: #eee ">
	<div class="container">
		<div class="row page-titles">
	        <div class="col-md-6 col-8 align-self-center">  
	            <ul class="breadcrumb" style="background-color: #e9ecef00;">
	                <li class=""><a href="{{ route('/')}}">{{ trans('messages.home') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class="">{{ trans('messages.ttcsp') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<section id="giaodiendemo">
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				@foreach($khosanpham as $khosanpham)
				@if($khosanpham->title == $lang)
		  			<div class="col-md-4">
		  				<div class="anda">
		  					<a href="{{route('chi-tiet-san-pham',['slug'=>$khosanpham->slug])}}">
		  						<div class="Mask_Group_9">
			  					<img src="../public/img/{{$khosanpham->image}}" alt="hình">
			  					<div class="khuung1">
				  					<div class="Rectangle_93">
				  						<div id="Lorem_ipsum_dolor_sit_amet">
											<p>{{$khosanpham->name_sanpham}}</p>
										</div>
										<div id="Lorem_ipsum_dolor_sit_amet__co_da">
											<i>{{$khosanpham->tomtat}}...</i>
										</div>
				  					</div>
			  					</div>
			  				</div>
		  					</a>	
		  				</div>				  				
		  			</div>
		  			@elseif($khosanpham->title == $lang)
		  			<div class="col-md-4">
		  				<div class="anda">
		  					<a href="{{route('chi-tiet-san-pham',['slug'=>$khosanpham->slug])}}">
		  						<div class="Mask_Group_9">
			  					<img src="../public/img/{{$khosanpham->image}}" alt="hình">
			  					<div class="khuung1">
				  					<div class="Rectangle_93">
				  						<div id="Lorem_ipsum_dolor_sit_amet">
											<p>{{$khosanpham->name_sanpham}}</p>
										</div>
										<div id="Lorem_ipsum_dolor_sit_amet__co_da">
											<i>{{$khosanpham->tomtat}}...</i>
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
	</div>
</section>
@endsection