@extends('admin.master')
@section('content')
@section('title','Email')
 <div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Liên hệ</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">Liên hệ</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="row">
                    @include('admin/mail/menumail')
                    <div class="col-xlg-10 col-lg-8 col-md-8">
                        @include('admin/mail/header')
                        <div class="card-block p-t-0">
                            <div class="card b-all shadow-none">
                                 @yield('contentmail')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection