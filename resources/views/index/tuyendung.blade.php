@extends('index.master')
@section('content')
@section('title','Tuyển Dụng')
<section id="banner">
	<div class="full-container">
		<div class="bannernew">
			<img src="{!! asset('index/img/Mask_Group_23_fh_pattern.png')!!}" alt="hình banner tuyển dụng">
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
	                <li class="">{{ trans('messages.recruitment') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<section id="muctieu">
	<div class="container">
		<div id="Group_1340">
			<div id="CHUY_N_M_C">
				<h1>{{ trans('messages.mt') }}</h1>
			</div>
			<div id="PATCM">
				<p>PAT</p>
			</div>
		</div>
		<div class="space20">&nbsp;</div>
		<div class="ndmt">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-2">
						<div class="vienmt">
							<div class="hinhmt">
								<img src="{!! asset('index/img/c.png')!!}" alt="hình tuyển dụng">
							</div>
							<div class="tdmt">
								<h6>{{ trans('messages.mt1') }}</h6>
							</div>
							<div class="ndmt">
								<p>{{ trans('messages.mt1-nd') }}</p>
								<p style="font-style:normal;font-weight:bold;">– Edward de Bono –</p>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="vienmt">
							<div class="hinhmt">
								<img src="{!! asset('index/img/a.png')!!}" alt="hình tuyển dụng">
							</div>
							<div class="tdmt">
								<h6>{{ trans('messages.mt2') }}</h6>
							</div>
							<div class="ndmt">
								<p>{{ trans('messages.mt2-nd') }}</p>
								<p style="font-style:normal;font-weight:bold;">– Anthony Robbins –</p>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="vienmt">
							<div class="hinhmt">
								<img src="{!! asset('index/img/aa.png')!!}" alt="hình tuyển dụng">
							</div>
							<div class="tdmt">
								<h6>{{ trans('messages.mt3') }}</h6>
							</div>
							<div class="ndmt">
								<p>{{ trans('messages.mt3-nd') }}</p>
								<p style="font-style:normal;font-weight:bold;">– {{ trans('messages.mt3-tg') }} –</p>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="vienmt">
							<div class="hinhmt">
								<img src="{!! asset('index/img/aq.png')!!}" alt="hình tuyển dụng">
							</div>
							<div class="tdmt">
								<h6>{{ trans('messages.mt4') }}</h6>
							</div>
							<div class="ndmt">
								<p>{{ trans('messages.mt4-nd') }}</p>
								<p style="font-style:normal;font-weight:bold;">– Dale Carnegie –</p>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="vienmt">
							<div class="hinhmt">
								<img src="{!! asset('index/img/ss.png')!!}" alt="hình tuyển dụng">
							</div>
							<div class="tdmt">
								<h6>{{ trans('messages.mt5') }}</h6>
							</div>
							<div class="ndmt">
								<p>{{ trans('messages.mt5-nd') }}</p>
								<p style="font-style:normal;font-weight:bold;">– Dale Carnegie –</p>
							</div>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>
		<div class="sologanmt">
			<img src="{!! asset('index/img/sologan.png')!!}" alt="hình tuyển dụng">
		</div>
	</div>
</section>
<div class="space50">&nbsp;</div>
<section id="vieclam">
	<div class="container">
		<div id="Group_1340">
			<div id="CHUY_N_M_C">
				<h1>{{ trans('messages.vl') }}</h1>
			</div>
			<div id="PATCM">
				<p>PAT</p>
			</div>
		</div>

		<div id="_ng_tuy_n_ngay_v_o_v__tr__m__b">
			<P>{{ trans('messages.vl-cmt') }}</P>
		</div>
		<div class="space20">&nbsp;</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="vienvl">
						<div class="hinhvl">
							<img src="{!! asset('index/img/monitor.png')!!}" alt="hình tuyển dụng">
						</div>
						<div id="Group_5159">
							<div id="DESIGN___UX">
								<a href="{{route('tuyen-dung-design')}}"><span style="border-bottom: 1px solid;">DESIGN & UX</span></a>
							</div>
							<div id="Thi_t_k_____ho____website_Fron">
								<span>{{ trans('messages.td1') }}<br/>Front-end Developer</span>
							</div>
						</div>
					</div>
					<br>
					<div class="vienvl">
						<div class="hinhvl">
							<img src="{!! asset('index/img/Group 5470.png')!!}" alt="hình tuyển dụng">
						</div>
						<div id="Group_5159">
							<div id="DESIGN___UX">
								<a href="{{route('tuyen-dung-sale-marketing')}}"><span style="border-bottom: 1px solid;">SALE & MARKETING</span></a>
							</div>
							<div id="Thi_t_k_____ho____website_Fron">
								<span>{{ trans('messages.td2') }}</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="vienvl">
						<div class="hinhvl">
							<img src="{!! asset('index/img/data.png')!!}" alt="hình tuyển dụng">
						</div>
						<div id="Group_5159">
							<div id="DESIGN___UX">
								<a href="{{route('tuyen-dung-engineering')}}"><span style="border-bottom: 1px solid;">ENGINEERING</span></a>
							</div>
							<div id="Thi_t_k_____ho____website_Fron">
								<span>Web Developer<br/>iOS App Developer</span>
							</div>
						</div>
					</div>
					<br>
					<div class="vienvl">
						<div class="hinhvl">
							<img src="{!! asset('index/img/Group 5471.png')!!}" alt="hình tuyển dụng">
						</div>
						<div id="Group_5159">
							<div id="DESIGN___UX">
								<a href="{{route('tuyen-dung-seo')}}"><span style="border-bottom: 1px solid;">SEOER</span></a>
							</div>
							<div id="Thi_t_k_____ho____website_Fron">
								<span>{{ trans('messages.td3') }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection