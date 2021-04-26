@extends('index.master')
@section('content')
@section('title','Tuyển dụng SALE & MARKETING')
<section id="banner">
	<div class="full-container">
		<div class="bannernew">
			<img src="{!! asset('index/img/Mask_Group_23_fh_pattern.png')!!}" alt="">
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
	                <li class=""><a href="{{ route('tuyen-dung')}}">{{ trans('messages.recruitment') }}</a></li>
	                <li style="padding-left: 10px;padding-right: 10px;"><i class='fas fa-angle-double-right'></i></li>
	                <li class="">{{ trans('messages.recruitment3') }}</li>
	            </ul>
	        </div>
	        
	    </div>
	</div>
</section>
<section id="muctieu">
	<div class="container">
		<div id="Group_1340">
			<div id="CHUY_N_M_C">
				<h1>{{ trans('messages.td-sale') }}</h1>
			</div>
			<div id="PATCM">
				<span>PAT</span>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-6">
				<div class="ndtuyendungdesign">
					<div class="titledesign">
						<h3>{{ trans('messages.title1') }}</h3>
						<p>{{ trans('messages.psale1-1') }}</p>
						<p>{{ trans('messages.psale1-2') }}</p>
						<p>{{ trans('messages.psale1-3') }}</p>
						<p>{{ trans('messages.psale1-4') }}</p>
						<p>{{ trans('messages.psale1-5') }}</p>
						<p>{{ trans('messages.psale1-6') }}</p>
						<p>{{ trans('messages.psale1-7') }}</p>
						<p>{{ trans('messages.psale1-8') }}</p>
						<br>
						<h3>{{ trans('messages.title2') }}</h3>
						<p>{{ trans('messages.p2-1') }}	</p>
						<p>{{ trans('messages.psale2-2') }}</p>
						<p>{{ trans('messages.psale2-3') }}</p>
						<p>{{ trans('messages.psale2-4') }}</p>
						<p>{{ trans('messages.psale2-5') }}</p>
						<p>{{ trans('messages.p2-6') }}</p>
						<p>{{ trans('messages.p2-7') }}</p>
						<p>{{ trans('messages.p2-8') }}</p>
						<p>{{ trans('messages.p2-9') }}</p>
						<p>{{ trans('messages.p2-10') }}</p>
						<br>
						<h3>{{ trans('messages.title3') }}</h3>
						<p>{{ trans('messages.p3-1') }}</p>
						<br>
						<h3>{{ trans('messages.title4') }} </h3>
						<p>{{ trans('messages.psale4-1') }}</p>
						<br>
						<h3>{{ trans('messages.title5') }}</h3>
						<p>{{ trans('messages.p5-1') }}	</p>
						<p>{{ trans('messages.p5-2') }}</p>
						<p>{{ trans('messages.p5-3') }}</p>
						<p>{{ trans('messages.p5-4') }}</p>
						<p>{{ trans('messages.p5-5') }}</p>
						<p>{{ trans('messages.p5-6') }}</p>
						<p>{{ trans('messages.p5-7') }}</p>
						<p>{{ trans('messages.p5-8') }}</p>
						<br>
						<h5>{{ trans('messages.h5-form') }} (<strong style="color: red">*</strong>) </h5>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="designdk">
					<form action="" enctype="multipart/form-data" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						@if(session()->has('success'))
					        <div class="alert alert-success">
					          {{ session()->get('success') }}
					        </div>
					      @endif
					        @if ($errors->any())
							    <div class="alert alert-danger">
							        <ul>
							            @foreach ($errors->all() as $error)
							                <li>{{ $error }}</li>
							            @endforeach
							        </ul>
							    </div>
							@endif
						<div class="form-group cn">	
							<label><h5>{{ trans('messages.form-1') }} (<strong style="color: red">*</strong>) </h5></label><br>
							<input class="form-control" type="text" placeholder="{{ trans('messages.name-1') }}" name="hoten" value="{{ old('hoten') }}">
							<br>
							<input class="form-control" type="email" placeholder="EMAIL" name="email" value="{{ old('email') }}">
							<br>
							<input class="form-control" type="text" placeholder="{{ trans('messages.sdt-1') }}" name="phone" value="{{ old('phone') }}">
						</div>
						<div class="form-group ut">	
							<label><h5>{{ trans('messages.form-2') }} (<strong style="color: red">*</strong>) </h5></label><br>
							<div class="row">
								<div class="col-md-6">
									<div class="radio" style="float: left;margin-right: 20px;">
						    			<input type="radio" name="optradio" value="sale">Sale
						    		</div>
								</div>
								<div class="col-md-6">
									<div class="radio">
						     			<input type="radio" name="optradio" value="marketing">Marketing
						    		</div>
								</div>
							</div>    
						</div>
						<!-- <div class="form-group knlm">	
							<label><h5>3. CÔNG CỤ VÀ CHIẾN LƯỢC BẠN ĐÃ TỪNG ÁP DỤNG? (<strong style="color: red">*</strong>) </h5></label><br>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Word? Exel?" name="congcu"  value="{{ old('congcu') }}"></textarea>
						</div> -->
						<div class="form-group knlm">	
							<label><h5>{{ trans('messages.form-3') }} (<strong style="color: red">*</strong>) </h5></label><br>
							
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{ trans('messages.f3-nd') }}" name="congcu" value="{{ old('congcu') }}"></textarea>
						</div>
						<div class="form-group knlm">
							<label for=""><h5>{{ trans('messages.form-4') }} (<strong style="color: red">*</strong>) </h5></label><br>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{ trans('messages.f4-nd') }}" value="{{ old('kinhnghiem') }}"></textarea>
						</div>
						<div class="form-group knlm">
							<label for=""><h5>{{ trans('messages.form-5') }} (<strong style="color: red">*</strong>) </h5></label><br>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{ trans('messages.f5-nd') }}" name="mongmuon" value="{{ old('mongmuon') }}"></textarea>
						</div>
						<div class="form-group knlm">
							<label for=""><h5>{{ trans('messages.form-6') }} (<strong style="color: red">*</strong>) </h5></label><br>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{ trans('messages.f6-nd') }}" name="muctieu" value="{{ old('muctieu') }}"></textarea>
						</div>
						<div class="form-group knlm">
							<label for=""><h5>{{ trans('messages.form-7') }} (<strong style="color: red">*</strong>) </h5></label><br>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{ trans('messages.f7-nd') }}" name="lydo" value="{{ old('lydo') }}"></textarea>
						</div>
						<div class="form-group prof">
							<label for=""><h5>{{ trans('messages.form-8') }} (<strong style="color: red">*</strong>) </h5></label><br>
							<p>{{ trans('messages.f8-nd') }}</p>
							<input class="form-control" type="text" placeholder="" name="port">
						</div>
						<div class="form-group linkcv">
							<label for=""><h5>{{ trans('messages.form-9') }} (<strong style="color: red">*</strong>) </h5></label><br>
						
							<input class="form-control" type="text" placeholder="http://" name="linkcv">
						</div>
						<div class="form-group knlm">
							<label for=""><h5>{{ trans('messages.form-10') }} (<strong style="color: red">*</strong>) </h5></label><br>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="{{ trans('messages.f10-nd') }}" name="cauhoi"></textarea>
						</div>
						<button type="submit" class="btn btn-success">{{ trans('messages.btn-ut') }}</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<br>
<section id="chuyenbai">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<a href="https://patict.vn/tuyen-dung-engineering">
					<div class="traicb">
						<i class='fas fa-angle-double-left' style=''></i>
						<p style="">{{ trans('messages.ct-back') }}</p>
					</div>
				</a>
				
			</div>
			<div class="col-md-6">
				<a href="https://patict.vn/tuyen-dung-seo">
					<div class="phaicb2" >
						<p style="">{{ trans('messages.ct-front') }}</p>
						<i class='fas fa-angle-double-right' style=''></i>
						
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
@endsection