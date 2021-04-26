@extends('admin.master')
@section('content')
@section('title','Sửa Quyền')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sửa quyền') }}</div>
                    
                <div class="card-body">
                   <form action="" method="POST" role="form">
                        @csrf
                    
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $role->Name }}" required autofocus>
                            </div>
                        </div>

						<div class="form-group row">
                            <label for="Description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                          
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="description" value="{{ $role->Description }}" required autofocus>
                            </div>
                        </div>

                        @foreach( $permissions as $permission)
	                        <div class="form-check" style="margin-left: 240px">
	  							  <input 
                                    {{ $getAllPermissionOfRole->contains( $permission->id ) ? 'checked' : '' }}
                                  type="checkbox" 
                                  class="form-check-input" name=	"permission[]" value="{{ $permission->id }}" >
	   							 <label class="form-check-label" >{{ $permission->Description }}</label>
	  						</div>
						@endforeach
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                  Sửa
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
