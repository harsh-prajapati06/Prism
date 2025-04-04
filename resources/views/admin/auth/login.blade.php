@extends('admin.layouts.app')
@section('content')
    @php
        $setting = getSetting();
    @endphp
    <style>
        .stylish_bg {
            background-color: #0d6efd;
            padding: 10px 20px;
            color: #f6f9ff !important;
            font-weight: 700 !important;
            margin-bottom: 0px;
            font-size: 30px;
            border-radius: 5px;
        }
    </style>
    <main>
        <div class="container">
            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="{{  url('/admin/login') }}" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <h4 class="stylish_bg">{{ $setting->name ?? '' }}</h4>
                                </a>
                            </div>

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your username & password to login</p>
                                    </div>

                                    <form class="row g-3 needs-validation" action="{{ url('admin/login') }}" method="POST"
                                        novalidate>
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">
                                                    <img src="{{ asset('assets/admin/img/user.svg') }}" width="22px"
                                                        alt="user">
                                                </span>
                                                <input type="text" name="user_name" class="form-control"
                                                    value="{{ old('user_name') }}" id="yourUsername" required>
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <img src="{{ asset('assets/admin/img/fingerprint.svg') }}" width="22px"
                                                        alt="fingerprint">
                                                </span>
                                                <input type="password" name="password" placeholder="Password"
                                                    class="form-control" id="password" required>
                                            </div>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>
@endsection