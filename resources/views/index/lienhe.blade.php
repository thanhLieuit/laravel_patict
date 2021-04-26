@extends('index.master')
@section('content')
@section('title','Liên Hệ')
<section id="tranglienhe">
	<div class="full-container">
		<div class="backgroundlh">
			<div class="container">
				<div class="khunglh">
					<div class="vienlh">
						<div class="row">
							<div class="col-md-6">
								<div id="C_NG_TY_TNHH_MTV_C_NG_NGH__TH_">
									<p>{{ trans('messages.name1') }}<br/>{{ trans('messages.name2') }}</p>
								</div>
								<div id="Li_n_h__ngay_h_m_nay_______c_t">
									<p>{{ trans('messages.lh-nd') }}</p>
								</div>
								<div id="Hotline__0905277898">
									<i class="fa fa-phone" style="float: left;margin-right: 10px;color: red"></i><p>{{ trans('messages.phone') }}</p>
								</div>
								<div id="__a_ch___76_Nguy_n_Th_i_B_nh__">
									<i class='fas fa-map-marker' style="float: left;margin-right: 10px;color: red"></i><p>{{ trans('messages.add') }}<br/> {{ trans('messages.add-nd') }}</p>
								</div>
								<div class="iconlh">
									<i class="fab fa-facebook-f"  style='font-size:24px;color: rgb(3, 57, 230);margin-left: 5px;'></i>
									<img src="{!! asset('index/img/instagram.svg')!!}" alt="" style="width: 24px;margin-top: -10px;margin-left: 6px;">
									<i class="fab fa-twitter" style='font-size:24px;color: #0654e2;margin-left: 10px;'></i>
								</div>
							</div>
							<div class="col-md-6">
								<br>
								<form action=""  role="form" enctype="multipart/form-data" method="POST">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" id="" placeholder="{{ trans('messages.name-your') }}" name="tenkh">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" id="" placeholder="{{ trans('messages.name-cty') }}" name="tencty">
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" id="" placeholder="Email" name="email">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" id="" placeholder="{{ trans('messages.tele') }}" name="phone">
												</div>
											</div>
										</div>
										
									</div>

									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="" placeholder="{{ trans('messages.mta') }}" name="title">
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group form2">
											<textarea id="w3mission" rows="5" cols="53" name="noidung" placeholder="{{ trans('messages.tdd') }}"></textarea>
										</div>
									</div>
									
									<button type="submit" class=" btn-success nut"><img src="{!! asset('img/next1.png')!!}" alt="" style="width: 12px;float: left;margin-top: 6px;margin-right: 5px;">{{ trans('messages.gui') }}</button>
									
								</form>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>
@endsection