@extends('index.master')
@section('content')
@section('title','Chi tiết bài viết')

<section id="banner">
	<div class="full-container">
		<div class="bannernew">
			<img src="{!! asset('../index/img/Mask_Group_23_fh_pattern.png')!!}" alt="hình banner bài viết">
		</div>
	</div>		
</section>
<section id="duongdan" style="background-color: #eee "u>
	<div class="container">
		<div class="row page-titles">
	        <div class="col-md-6 align-self-center">  
	            <ul class="breadcrumb" style="background-color: #e9ecef00;">
	                <li class=""><a href="{{ route('/')}}">{{ trans('messages.home') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class=""><a href="{{ route('tin-tuc')}}">{{ trans('messages.news') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class="">{{ trans('messages.news1') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<section id="news_chtiet">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!-- Your share button code -->
				@foreach($baiviet as $baiviet)
				@if($baiviet->title == $lang)
				<h1 style="font-weight: bold;">{{$baiviet->name_baiviet}}</h1>
				<p style="font-weight: bold;">{{$baiviet->updated_at}} || {{ trans('messages.nguoidang') }} : {{$baiviet->name}}</p>
				<div class="socials-share">
				    <a class="bg-facebook share " href="https://www.facebook.com/sharer/sharer.php?u=https://patict.vn/chi-tiet-tin-tuc/{{$baiviet->slug}}" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i> Share</a>
				    <a class="bg-twitter share " href="https://twitter.com/share?text=&url=https://patict.vn/chi-tiet-tin-tuc/{{$baiviet->slug}}" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i> Tweet</a>
    				<a class="bg-email share " href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to&su={{$baiviet->name}}&body=https://patict.vn/chi-tiet-tin-tuc/{{$baiviet->slug}}" target="_blank"><span class="fa fa-envelope"></span> Gmail</a>
				</div>
				<p>{!!$baiviet->noidung!!}</p>
				@elseif($baiviet->title == $lang)
				<h1 style="font-weight: bold;">{{$baiviet->name_baiviet}}</h1>
				<p>{!!$baiviet->noidung!!}</p>
				@endif
				@endforeach
				<hr>
				<p><i class="fa fa-tags" aria-hidden="true"></i>
				@foreach($tag2 as $tag2)
				@if($tag2->title == $lang)
				<a href="{{route('tag',['slug'=>$tag2->slug])}}">
				{!!$tag2->name!!}</a>, 
				@elseif($tag2->title == $lang)
				<a href="{{route('tag',['slug'=>$tag2->slug])}}">
				{!!$tag2->name!!}</a>,
				@endif
				@endforeach
				</p>
			</div>
			<div class="col-md-4">
				<div class="bvlienquan">
					<div class="tieudebv">
						<p>Bài viết mới</p>
					</div>
					@if($baiviet->id_menu_baiviet == 12)
						@foreach($baivietmoivn as $baivietmoivn)
						@if($baivietmoivn->title == $lang)
						<div class="bv">
							<div class="row">
								
									<div class="col-md-4">
									<div class="hinhbvlq">
										<img src="../../img/{{$baivietmoivn->image}}" alt="hình bài viết" style="width: 100%">
									</div>
								</div>
								<div class="col-md-8">
									
									<div class="ndlq">
										<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baivietmoivn->slug])}}">
										<p>{{$baivietmoivn->name_baiviet}}</p>
										</a>
										<div class="ngaygio">
											<i class="fa fa-calendar"></i>
											<div id="ID25_06_2019">
												<span>{{$baivietmoivn->created_at}}</span>
											</div>
										</div>
										
									</div>
									
								</div>
								
								
							</div>
							<hr>
						</div>
						@elseif($baivietmoivn->title == $lang)
						<div class="bv">
							<div class="row">
								
									<div class="col-md-4">
									<div class="hinhbvlq">
										<img src="../../img/{{$baivietmoivn->image}}" alt="hình bài viết" style="width: 100%">
									</div>
								</div>
								<div class="col-md-8">
									
									<div class="ndlq">
										<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baivietmoivn->slug])}}">
										<p>{{$baivietmoivn->name_baiviet}}</p>
										</a>
										<div class="ngaygio">
											<i class="fa fa-calendar"></i>
											<div id="ID25_06_2019">
												<span>{{$baivietmoivn->created_at}}</span>
											</div>
										</div>
										
									</div>
									
								</div>
								
								
							</div>
							<hr>
						</div>
						@endif
						@endforeach
					@elseif($baiviet->id_menu_baiviet == 13)
						@foreach($baivietmoien as $baivietmoien)
						@if($baivietmoien->title == $lang)
						<div class="bv">
							<div class="row">
								
									<div class="col-md-4">
									<div class="hinhbvlq">
										<img src="../../img/{{$baivietmoien->image}}" alt="hình bài viết" style="width: 100%">
									</div>
								</div>
								<div class="col-md-8">
									
									<div class="ndlq">
										<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baivietmoien->slug])}}">
										<p>{{$baivietmoien->name_baiviet}}</p>
										</a>
										<div class="ngaygio">
											<i class="fa fa-calendar"></i>
											<div id="ID25_06_2019">
												<span>{{$baivietmoien->created_at}}</span>
											</div>
										</div>
										
									</div>
									
								</div>
								
								
							</div>
							<hr>
						</div>
						@elseif($baivietmoien->title == $lang)
						<div class="bv">
							<div class="row">
								
									<div class="col-md-4">
									<div class="hinhbvlq">
										<img src="../../img/{{$baivietmoien->image}}" alt="hình bài viết" style="width: 100%">
									</div>
								</div>
								<div class="col-md-8">
									
									<div class="ndlq">
										<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baivietmoien->slug])}}">
										<p>{{$baivietmoien->name_baiviet}}</p>
										</a>
										<div class="ngaygio">
											<i class="fa fa-calendar"></i>
											<div id="ID25_06_2019">
												<span>{{$baivietmoien->created_at}}</span>
											</div>
										</div>
										
									</div>
									
								</div>
								
								
							</div>
							<hr>
						</div>
						@endif
						@endforeach
					@endif
				</div>
				<div class="bvlienquan">
					<div class="tieudebv">
						<p>Bài viết liên quan</p>
					</div>
					@if($baiviet->id_menu_baiviet == 12)
						@foreach($baivietlienquanvn as $baivietlienquanvn)
						@if($baivietlienquanvn->title == $lang)
						<div class="bv">
							<div class="row">
								
									<div class="col-md-4">
									<div class="hinhbvlq">
										<img src="../../img/{{$baivietlienquanvn->image}}" alt="hình bài viết" style="width: 100%">
									</div>
								</div>
								<div class="col-md-8">
									
									<div class="ndlq">
										<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baivietlienquanvn->slug])}}">
										<p>{{$baivietlienquanvn->name_baiviet}}</p>
										</a>
										<div class="ngaygio">
											<i class="fa fa-calendar"></i>
											<div id="ID25_06_2019">
												<span>{{$baivietlienquanvn->created_at}}</span>
											</div>
										</div>
										
									</div>
									
								</div>
								
								
							</div>
							<hr>
						</div>
						@elseif($baivietlienquanvn->title == $lang)
						<div class="bv">
							<div class="row">
								
									<div class="col-md-4">
									<div class="hinhbvlq">
										<img src="../../img/{{$baivietlienquanvn->image}}" alt="hình bài viết" style="width: 100%">
									</div>
								</div>
								<div class="col-md-8">
									
									<div class="ndlq">
										<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baivietlienquanvn->slug])}}">
										<p>{{$baivietlienquanvn->name_baiviet}}</p>
										</a>
										<div class="ngaygio">
											<i class="fa fa-calendar"></i>
											<div id="ID25_06_2019">
												<span>{{$baivietlienquanvn->created_at}}</span>
											</div>
										</div>
										
									</div>
									
								</div>
								
								
							</div>
							<hr>
						</div>
						@endif
						@endforeach
					@elseif($baiviet->id_menu_baiviet == 13)
						@foreach($baivietlienquanen as $baivietlienquan1)
						@if($baivietlienquan1->title == $lang)
						<div class="bv">
							<div class="row">
								
									<div class="col-md-4">
									<div class="hinhbvlq">
										<img src="../../img/{{$baivietlienquan1->image}}" alt="hình bài viết" style="width: 100%">
									</div>
								</div>
								<div class="col-md-8">
									
									<div class="ndlq">
										<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baivietlienquan1->slug])}}">
										<p>{{$baivietlienquan1->name_baiviet}}</p>
										</a>
										<div class="ngaygio">
											<i class="fa fa-calendar"></i>
											<div id="ID25_06_2019">
												<span>{{$baivietlienquan1->created_at}}</span>
											</div>
										</div>
										
									</div>
									
								</div>
								
								
							</div>
							<hr>
						</div>
						@elseif($baivietlienquan1->title == $lang)
						<div class="bv">
							<div class="row">
								
									<div class="col-md-4">
									<div class="hinhbvlq">
										<img src="../../img/{{$baivietlienquan->image}}" alt="hình bài viết" style="width: 100%">
									</div>
								</div>
								<div class="col-md-8">
									
									<div class="ndlq">
										<a href="{{route('chi-tiet-tin-tuc',['slug'=>$baivietlienquan->slug])}}">
										<p>{{$baivietlienquan->name_baiviet}}</p>
										</a>
										<div class="ngaygio">
											<i class="fa fa-calendar"></i>
											<div id="ID25_06_2019">
												<span>{{$baivietlienquan->created_at}}</span>
											</div>
										</div>
										
									</div>
									
								</div>
								
								
							</div>
							<hr>
						</div>
						@endif
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>

</section>
@endsection