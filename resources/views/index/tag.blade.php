@extends('index.master')
@section('content')
@section('title','Tag')
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
	        <div class="col-md-6 col-8 align-self-center">  
	            <ul class="breadcrumb" style="background-color: #e9ecef00;">
	                <li class=""><a href="{{ route('/')}}">{{ trans('messages.home') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class="">TAG</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<div class="space50">&nbsp;</div>
<section id="chuyenmuc">
	<div class="container">
		<div id="Group_1340">
			<div id="CHUY_N_M_C">
				@foreach($tag2 as $tag2)
					@if($tag2->title == $lang)
						<h1 class="uppercase" style="text-transform: uppercase;">{{$tag2->name}}</h1>
					@elseif($tag2->title == $lang)
						<h1 class="uppercase" style="text-transform: uppercase;">{{$tag2->name}}</h1>	
					@endif
				@endforeach
				
			</div>
			<div id="PATCM">
				<span>PAT</span>
			</div>
		</div>
		<div class="space20">&nbsp;</div>
		<div class="hinhcm">
			<div class="col-md-12">
		  		<div class="row">
		  			@foreach($baiviet as $baiviet)
		  			@if($baiviet->title == $lang)
		  			<div class="col-md-3">
		  				<div class="viencm">
		  					<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baiviet->slug])}}">
		  						<div class="anhcm">
		  						<img src="../public/img/{{$baiviet->image}}" alt="hình tin tức">
		  					</div>
		  					<div class="ndcm">
		  					
								<div class="tdcm">
									<p>{{$baiviet->name_baiviet}}</p>
								</div>
								<div class="tmcm">
									<p>{{$baiviet->tomtat}}...</p>
								</div>
		  					</div>
		  					</a>
		  					
		  				</div>
		  			</div>
		  			@elseif($baiviet->title == $lang)
		  			<div class="col-md-3">
		  				<div class="viencm">
		  					<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baiviet->slug])}}">
		  						<div class="anhcm">
		  						<img src="../public/img/{{$baiviet->image}}" alt="hình tin tức">
		  					</div>
		  					<div class="ndcm">
		  					
								<div class="tdcm">
									<p>{{$baiviet->name_baiviet}}</p>
								</div>
								<div class="tmcm">
									<p>{{$baiviet->tomtat}}...</p>
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
		</div>
	</div>
</section>
@endsection