@extends('admin.master')
@section('content')
@section('title','chi tiết tuyển dụng')
<br>
<div class="full-container">
	<div class="container">
		<div class="row">
			@foreach($tuyendung as $tuyendung)
			<div class="col-md-6">
				<div class="form-group cn">	
					<label><h5>1.THÔNG TIN CÁ NHÂN</h5></label><br>
					<div class="row">
						<div class="col-md-3">
							<label>Họ và tên: </label>
						</div>
						<div class="col-md-9">
							<label>{{$tuyendung->hoten}} </label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label>Email: </label>
						</div>
						<div class="col-md-9">
							<label>{{$tuyendung->email}} </label>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label>Phone: </label>
						</div>
						<div class="col-md-9">
							<label>{{$tuyendung->phone}} </label>
						</div>
					</div>
				</div>
				<div class="form-group ut">	
					<label><h5>2. VỊ TRÍ ỨNG TUYỂN</h5></label><br>
					<div class="row">
						<div class="col-md-3">
							<label for="">Vị trí</label>
						</div>
						<div class="col-md-9">
							<label for="">{{$tuyendung->vitri}}</label>
						</div>
					</div>    
				</div>
				<div class="form-group knlm">	
					<label><h5>3. CÔNG CỤ THIẾT KẾ BẠN ĐÃ VÀ ĐANG DÙNG LÀ GÌ?</h5></label><br>
					<div class="row">
						<div class="col-md-3">
							<label for="">Công cụ đã dùng</label>
						</div>
						<div class="col-md-9">
							<label for=""><p>{{$tuyendung->congcu}}</p></label>
						</div>
					</div>
				</div>
				<div class="form-group knlm">	
					<label><h5>4. KINH NGHIỆM LÀM VIỆC CỦA BẠN.</h5></label><br>
					<div class="row">
						<div class="col-md-3">
							<label for="">Kinh nghiệm</label>
						</div>
						<div class="col-md-9">
							<label for="">{{$tuyendung->kinhnghiem}}</label>
						</div>
					</div>
				</div>
				<div class="form-group knlm">	
					<label><h5>5. BẠN MONG MUỐN ĐIỀU GÌ KHI LÀM VIỆC TẠI PAT?</h5></label><br>
					<div class="row">
						<div class="col-md-3">
							<label for="">Mong muốn của bạn:</label>
						</div>
						<div class="col-md-9">
							<label for=""><p>{{$tuyendung->mongmuon}}</p></label>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-md-6">
				<div class="form-group knlm">	
					<label><h5>6. MỤC TIÊU NGHỀ NGHIỆP CỦA BẠN LÀ GÌ?</h5></label><br>
					<div class="row">
						<div class="col-md-3">
							<label for="">Mục Tiêu nghề nghiệp:</label>
						</div>
						<div class="col-md-9">
							<label for=""><p>{{$tuyendung->muctieu}}</p></label>
						</div>
					</div>
				</div>
				<div class="form-group knlm">	
					<label><h5>7. HÃY CHO CHÚNG TÔI BIẾT LÝ DO CHÚNG TÔI NÊN TUYỂN BẠN?</h5></label><br>
					<div class="row">
						<div class="col-md-3">
							<label for="">Lý do:</label>
						</div>
						<div class="col-md-9">
							<label for=""><p>{{$tuyendung->lydo}}</p></label>
						</div>
					</div>
				</div>
				<div class="form-group knlm">	
					<label><h5>8.PORTFOLIO (ĐÍNH KÈM LINK DRIVE/ DROPBOX)</h5></label><br>
					<div class="row">
						<div class="col-md-3">
							<label for="">Portfolio:</label>
						</div>
						<div class="col-md-9">
							<label for=""><a href="{{$tuyendung->portfolio}}">{{$tuyendung->portfolio}}</a></label>
						</div>
					</div>
				</div>
				<div class="form-group knlm">	
					<label><h5>9. VUI LÒNG GỬI LINK CV CỦA BẠN TẠI ĐÂY</h5></label><br>
					<div class="row">
						<div class="col-md-3">
							<label for="">CV:</label>
						</div>
						<div class="col-md-9">
							<label for=""><a href="{{$tuyendung->linkcv}}">{{$tuyendung->linkcv}}</a></label>
						</div>
					</div>
				</div>
				<div class="form-group knlm">	
					<label><h5>10. CÂU HỎI CỦA BẠN DÀNH CHO PAT.</h5></label><br>
					<div class="row">
						<div class="col-md-3">
							<label for="">Câu hỏi:</label>
						</div>
						<div class="col-md-9">
							<label for=""><p>{{$tuyendung->cauhoi}}</p></label>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		
	</div>
</div>
@endsection