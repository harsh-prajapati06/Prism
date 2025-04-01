@extends('admin.layouts.app')
@section('content')
    @php
        $roles = getRoles();
    @endphp
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Edit Setting</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                    <li class="breadcrumb-item">Setting</li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit Setting</h5>
                            <form class="row g-3" action="{{ url('admin/edit_setting') }}/{{ $setting->id }}"
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="col-md-4">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" placeholder="Name" class="form-control" name="name" id="name"
                                        value="{{ $setting->name ?? '' }}">
                                </div>
                                <div class="col-md-4">
                                    <label for="mobile" class="form-label">Mobile No.</label>
                                    <input type="text" class="form-control" name="mobile" id="mobile"
                                        placeholder="Mobile No." value="{{ $setting->mobile ?? '' }}">
                                </div>
                                <div class="col-md-4">
                                    <label for="mobile_2" class="form-label">Mobile No. 2</label>
                                    <input type="text" class="form-control" name="mobile_2" id="mobile_2"
                                        placeholder="Mobile No. 2" value="{{ $setting->mobile_2 ?? '' }}">
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                        value="{{ $setting->email ?? '' }}">
                                </div>

                                <div class="col-md-4">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" id="address"
                                        placeholder="Address" value="{{ $setting->address ?? '' }}">
                                </div>

                                <div class="col-md-4">
                                    <label for="instagram_link" class="form-label">Instagram Link</label>
                                    <input type="text" class="form-control" name="instagram_link" id="instagram_link"
                                        placeholder="Instagram Link" value="{{ $setting->instagram_link ?? '' }}">
                                </div>

                                <div class="col-md-4">
                                    <label for="facebook_link" class="form-label">Facebook Link</label>
                                    <input type="text" class="form-control" name="facebook_link" id="facebook_link"
                                        placeholder="Facebook Link" value="{{ $setting->facebook_link ?? '' }}">
                                </div>

                                <div class="col-md-4">
                                    <label for="twitter_link" class="form-label">Twitter Link</label>
                                    <input type="text" class="form-control" name="twitter_link" id="twitter_link"
                                        placeholder="Twitter Link" value="{{ $setting->twitter_link ?? '' }}">
                                </div>

                                <div class="col-md-4">
                                    <label for="youtube_link" class="form-label">Youtube Link</label>
                                    <input type="text" class="form-control" name="youtube_link" id="youtube_link"
                                        placeholder="Youtube Link" value="{{ $setting->youtube_link ?? '' }}">
                                </div>

                                <div class="col-md-4">
                                    <label for="photo" class="form-label">Logo</label>
                                    <input type="file" class="form-control" name="logo" id="logo">
                                </div>

                                <div class="col-md-1">
                                    <label>&nbsp;</label><br>
                                    @if(!empty($setting->logo))
                                        <img src="{{ env('IMAGE_SHOW_PATH') . 'logo/' . $setting->logo }}" alt="Logo"
                                            class="rounded-circle" width="50px" height="50px">
                                    @else
                                        <img src="{{ env('IMAGE_SHOW_PATH') . 'default/profileDom.jpg' }}" alt="Logo"
                                            class="rounded-circle" width="50px" height="50px">
                                    @endif
                                </div>

                                <div class="col-12 text-center">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection