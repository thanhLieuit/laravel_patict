<div class="topnav" id="myTopnav">
	<div class="full-container">
		<div class="container">
  			<div class="logo" id="logo">
	  			<a href="{{route('/')}}" ><img id="logogo" src="{!! asset('index/img/logogo.png') !!}" alt="hình logo công ty" style="margin: 3px;"></a>
	  		</div>
	  	
	  		<a class="the"  href="{{route('gioi-thieu')}}" style="margin-top: 20px;margin-right: 15px;">{{ trans('messages.about') }}</a>
	  		<div class="dropdown ">
			    <!-- <a class="dropbtn the" href="{{route('dich-vu')}}" style="margin-top: 20px;margin-right: 15px;">{{ trans('messages.service') }} 
			      <i class="fa fa-caret-down"></i>
			    </a> -->
			    <button class="dropdown-d the dropbtn" style="margin-top: 20px;margin-right: 15px;width: 100%;"><a class="drop-sub" href="{{route('dich-vu')}}" >{{ trans('messages.service') }}</a>
    					<i class="fa fa-caret-down"></i>
  				</button>
			    <div class="dropdown-content">
			    @foreach($menu_c1 as $menu_c1)
				@if($menu_c1->title == $lang)
			      <a href="{{route('dich-vu/{id}',['slug'=>$menu_c1->slug])}}">{{$menu_c1->name_menu_c1}}</a>
			     @elseif($menu_c1->title == $lang)
			     <a href="{{route('dich-vu/{id}',['slug'=>$menu_c1->slug])}}">{{$menu_c1->name_menu_c1}}</a>
			    @endif
			    @endforeach
			    </div>

			</div> 
			<a class="the" href="{{route('du-an')}}" style="margin-top: 20px;margin-right: 15px;">{{ trans('messages.project') }}</a>
			
			<div class="dropdown">
			    <!-- <a class="dropbtn the" href="{{route('giai-phap')}}" style="margin-top: 20px;margin-right: 15px;">{{ trans('messages.solution') }}
			      <i class="fa fa-caret-down"></i>
			    </a> -->
			    <button class="dropdown-d the dropbtn" style="margin-top: 20px;margin-right: 15px;width: 100%;"><a class="drop-sub" href="{{route('giai-phap')}}" >{{ trans('messages.solution') }}</a>
    					<i class="fa fa-caret-down"></i>
  				</button>
			    <div class="dropdown-content">
			    	@foreach($menu_bv as $menu_bv)
			    	@if($menu_bv->title == $lang)
			      	<a href="{{route('chi-tiet-giai-phap',['slug'=>$menu_bv->slug])}}">{{$menu_bv->name_menu_baiviet}}</a>
			      	@elseif($menu_bv->title == $lang)
			      	<a href="{{route('chi-tiet-giai-phap',['slug'=>$menu_bv->slug])}}">{{$menu_bv->name_menu_baiviet}}</a>
			      	@endif
			   		@endforeach
			    </div>
			</div>
	  		
	  		<a class="the" href="{{route('tin-tuc')}}" style="margin-top: 20px;margin-right: 15px;">{{ trans('messages.news') }}</a>
	  		<a class="the" href="{{route('tuyen-dung')}}" style="margin-top: 20px;margin-right: 15px;">{{ trans('messages.recruitment') }}</a>
	  		<a class="the" href="{{route('lien-he')}}" style="margin-top: 20px;margin-right: 15px;">{{ trans('messages.contact') }}</a>
	  		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
	   		<i class="fa fa-bars"></i>
	 		</a>
	       <a class="menu-vi" href="{{ route('change-language', ['en']) }}"><img src="{!! asset('index/img/flag.png') !!}" alt="hình lá cờ" style="padding-right: 10px;margin-top: 20px"></a>
           <a href="{{ route('change-language', ['vi']) }}"><img src="{!! asset('index/img/vietnam.png') !!}" alt="hình lá cờ" style="margin-top: 20px"></a>

  		</div>
	</div>
  	

</div>

