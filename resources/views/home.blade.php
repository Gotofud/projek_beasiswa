@extends('layouts.admin.admin')
@section('content')
    <div class="card w-100 bg-light shadow-sm border-0 rounded-3 mb-4"
        style="background-image: url('{{ asset('admin/images/backgrounds/profilebg.jpg') }}')">
        <div class="card-body position-relative">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="d-flex align-items-center">
                        <img src="{{  asset('admin/images/profile/user-1.jpg')  }}"
                            class="rounded-circle me-3" width="75" height="75" alt="profile" />
                        <div>
                            <h1 class="mb-0 fw-bold">Selamat Datang, <b>{{ Auth::user()->name }}!</b></h1>
                            <p class="mb-0 text-muted">Here is a quick summary of your data</p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
@endsection