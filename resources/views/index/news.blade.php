@extends('index.master')
@section('content')
@section('title','Tin Tức')
<section id="banner">
	<div class="full-container">
		<div class="bannernew">
			<img src="{!! asset('index/img/Mask_Group_23_fh_pattern.png')!!}" alt="hình banner tin tức">
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
	                <li class="">{{ trans('messages.news') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<section id="chuyenmuc">
	<div class="container">
		<div id="Group_1340">
			<div id="CHUY_N_M_C">
				<h1>{{ trans('messages.news') }}</h1>
			</div>
			<div id="PATCM">
				<span>PAT</span>
			</div>
		</div>
		<div class="space20">&nbsp;</div>
		<div class="hinhcm">
				

				<div class="tabs tabs-style-linemove">
					<nav>
						<ul>
							<li><a href="#section-linemove-1" class="icon"><span><i class="fa fa-newspaper-o" style="font-size:24px;padding-right: 10px"></i>{{ trans('messages.news1') }}</span></a></li>
							<li><a href="#section-linemove-2" class="icon icon-box"><span>{{ trans('messages.news2') }}</span></a></li>
							
						</ul>
					</nav>
					<div class="content-wrap">
						<section id="section-linemove-1">
							<div class="col-md-12">
						  		<div class="row">
						  			@foreach($baivietcamnang as $baivietcamnang)
						  			@if($baivietcamnang->title == $lang)
						  			<div class="col-md-3">
						  				<div class="viencm">
						  					<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baivietcamnang->slug])}}">
						  						<div class="anhcm">
						  						<img src="../public/img/{{$baivietcamnang->image}}" alt="hình tin tức">
						  					</div>
						  					<div class="ndcm">
						  					
												<div class="tdcm">
													<p>{{$baivietcamnang->name_baiviet}}</p>
												</div>
												<div class="tmcm">
													<p>{{$baivietcamnang->tomtat}}...</p>
												</div>
						  					</div>
						  					</a>
						  					
						  				</div>
						  			</div>
						  			@elseif($baivietcamnang->title == $lang)
						  			<div class="col-md-3">
						  				<div class="viencm">
						  					<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baivietcamnang->slug])}}">
						  						<div class="anhcm">
						  						<img src="../public/img/{{$baivietcamnang->image}}" alt="hình tin tức">
						  					</div>
						  					<div class="ndcm">
						  					
												<div class="tdcm">
													<p>{{$baivietcamnang->name_baiviet}}</p>
												</div>
												<div class="tmcm">
													<p>{{$baivietcamnang->tomtat}}...</p>
												</div>
						  					</div>
						  					</a>
						  					
						  				</div>
						  			</div>
						  			@endif
							  		@endforeach
						  		</div>
						  		
						  		<br>				  		
						  	</div>
						</section>
						<section id="section-linemove-2">
							<div class="col-md-12">
						  		<div class="row">
						
						  			@foreach($baivietvecty as $baivietvecty)
						  			@if($baivietvecty->title == $lang)
						  			<div class="col-md-3">
						  				<div class="viencm">
						  					<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baivietvecty->slug])}}" style="text-decoration: none;">
							  					<div class="anhcm">
							  						<img src="../public/img/{{$baivietvecty->image}}" alt="hình tin tức">
							  					</div>
							  					<div class="ndcm">
													<div class="tdcm">
														<p>{{$baivietvecty->name_baiviet}}</p>
													</div>
													<div class="tmcm">
														<p>{{$baivietvecty->tomtat}}...</p>
													</div>
							  					</div>
						  					</a>
						  				</div>
						  				<br>
						  			</div>
						  			@elseif($baivietvecty->title == $lang)
						  			<div class="col-md-3">
						  				<div class="viencm">
						  					<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baivietvecty->slug])}}" style="text-decoration: none;">
							  					<div class="anhcm">
							  						<img src="../public/img/{{$baivietvecty->image}}" alt="hình tin tức">
							  					</div>
							  					<div class="ndcm">
													<div class="tdcm">
														<p>{{$baivietvecty->name_baiviet}}</p>
													</div>
													<div class="tmcm">
														<p>{{$baivietvecty->tomtat}}...</p>
													</div>
							  					</div>
						  					</a>
						  				</div>
						  				<br>
						  			</div>
						  			@endif
						  			@endforeach
						  		</div>
						  		<br>				  		
						  	</div>
						</section>
					</div><!-- /content -->
				</div><!-- /tabs -->
	
		</div>
		
	</div>
</section>
@endsection