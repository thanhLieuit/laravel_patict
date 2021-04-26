<section id="dichvu">
	<div class="container">
		
		<div class="col-md-12">
			<div class="row">
				@foreach($menu_c1 as $menu_c1)
				@if($menu_c1->title == $lang)
				<div class="col-md-4">
					<div class="Rectangle_135">
						<div class="hinhdv">
							<img id="web_design" src="../public/img/{{$menu_c1->image}}" alt="hình dịch vụ">
						</div>
						<div id="THI_T_K__WEBSITE">
							<h4>{{$menu_c1->name_menu_c1}}</h4>
						</div>
						
						<div id="Group_264_c">
							<a href="{{route('dich-vu/{id}',['slug'=>$menu_c1->slug])}}" style="text-decoration: none;">
								<div id="XEM_CHI_TI_T">
									<span style="padding-right: 4px;">{{ trans('messages.xemchitiet') }} </span><img src="../public/index/img/Path 3.png" alt="hình chi tiết" style="width: 5%">
								</div>
							</a>
							
						</div>	
					</div>
				</div>
				@elseif($menu_c1->title == $lang)
				<div class="col-md-4">
					<div class="Rectangle_135">
						<div class="hinhdv">
							<img id="web_design" src="../public/img/{{$menu_c1->image}}" alt="hình dịch vụ">
						</div>
						<div id="THI_T_K__WEBSITE">
							<h4>{{$menu_c1->name_menu_c1}}</h4>
						</div>
						
						<div id="Group_264_c">
							<a href="{{route('dich-vu/{id}',['slug'=>$menu_c1->slug])}}" style="text-decoration: none;">
								<div id="XEM_CHI_TI_T">
									<span style="padding-right: 4px;">{{ trans('messages.xemchitiet') }} </span><img src="../public/index/img/Path 3.png" alt="hình chi tiết" style="width: 5%">
								</div>
							</a>
							
						</div>	
					</div>
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
</section>
<br>