@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="d-lg-flex align-items-center justify-content-between mb-4">
            <div>
                <h2 class="mb-1">Welcome, Admin</h2>
            </div>
            <ul class="table-top-head">
                <li>
                    <div class="input-icon-start position-relative">
                        <span class="input-icon-addon fs-16 text-gray-9">
                            <i class="ti ti-calendar"></i>
                        </span>
                        <input type="text" class="form-control" readonly value="{{ now()->format('F j, Y') }}">
                    </div>
                </li>
            </ul>
        </div>

        

        <!-- Welcome Wrap -->
        <div class="welcome-wrap mb-4">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="mb-3">
                    <h2 class="mb-1 text-white">Welcome Back, {{ Auth::user()->name }}</h2>
                    <p class="text-light">

                            Everything is running smoothly
                    </p>
                </div>
                <div class="d-flex align-items-center flex-wrap mb-1">

                    <a href="" class="btn btn-light btn-md mb-2">All Campaigns</a>
                </div>
            </div>
            <div class="welcome-bg">
                <img src="{{ asset('dashboard_assets/img/bg/welcome-bg-02.svg') }}" alt="img" class="welcome-bg-01">
                <img src="{{ asset('dashboard_assets/img/bg/welcome-bg-01.svg') }}" alt="img" class="welcome-bg-03">
            </div>
        </div>
        <!-- /Welcome Wrap -->
    </div>
@endsection
