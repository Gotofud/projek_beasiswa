@extends('layouts.admin.admin')
@section('content')
    <div class="card w-100 bg-light shadow-sm border-0 rounded-3 mb-4"
        style="background-image: url('{{ asset('admin-asset/images/backgrounds/profilebg.jpg') }}')">
        <div class="card-body position-relative">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="d-flex align-items-center">
                        <img src="{{  asset('admin-asset/images/profile/user-1.jpg')  }}" class="rounded-circle me-3"
                            width="75" height="75" alt="profile" />
                        <div>
                            <h1 class="mb-0 fw-bold">Selamat Datang, <b>{{ Auth::user()->name }}!</b></h1>
                            <p class="mb-0 text-muted">Here is a quick summary of your data</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-group">
        <!-- Column -->
        <div class="card">
            <div class="card-body text-center">
                <h4 class="text-center fs-5 text-info">Pendaftar</h4>
                <h2 class="fs-7">{{ $data['totalUser'] }}</h2>
                <div class="row pt-2 pb-2">
                    <!-- Column -->
                    <div class="col text-center align-self-center">
                        <div data-label="20%" class="css-bar mb-0 css-bar-primary css-bar-20">
                            <i class="display-6 ti ti-user-circle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body text-center">
                <h4 class="text-center fs-5 text-danger">Total Universitas</h4>
                <h2 class="fs-7">{{ $data['totalUniversitas']}}</h2>
                <div class="row pt-2 pb-2">
                    <!-- Column -->
                    <div class="col text-center align-self-center">
                        <div data-label="20%" class="css-bar mb-0 css-bar-danger css-bar-20">
                            <i class="display-6 ti ti-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="card">
            <div class="card-body text-center">
                <h4 class="text-center fs-5 text-success">Total Program Studi</h4>
                <h2 class="fs-7">{{ $data['totalProdi'] }}</h2>
                <div class="row pt-2 pb-2">
                    <!-- Column -->
                    <div class="col text-center align-self-center">
                        <div data-label="20%" class="css-bar mb-0 css-bar-success css-bar-20">
                            <i class="display-6 ti ti-briefcase"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
@endsection