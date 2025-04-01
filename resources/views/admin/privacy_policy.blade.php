@extends('admin.layouts.app')
@section('content')
@php
$categories = getCategories();
@endphp

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Privacy Policy</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Privacy Policy</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Privacy Policy</h5>
                        <form class="row g-3" id="submit_form" action="{{ url('admin/privacy_policy') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <label for="privacy_policy" class="form-label">Privacy Policy</label>
                                 <textarea class="form-control ckeditor" id="ckeditor1" placeholder="Privacy Policy" name="privacy_policy" value="{!! $data->privacy_policy ?? '' !!}">{!! $data->privacy_policy ?? '' !!}</textarea>
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