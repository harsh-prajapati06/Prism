@extends('admin.layouts.app')
@section('content')
    @php
        $categories = getCategories();
    @endphp

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Terms & Condition</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item">Terms & Condition</li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Terms & Condition</h5>
                            <form class="row g-3" id="submit_form" action="{{ url('admin/terms_condition') }}"
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="col-md-12">
                                    <label for="terms_condition" class="form-label">Terms & Condition</label>
                                    <textarea class="form-control ckeditor" id="ckeditor1" placeholder="Terms & Condition"
                                        name="terms_condition"
                                        value="{!! $data->terms_condition ?? '' !!}">{!! $data->terms_condition ?? '' !!}</textarea>
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

    <script src="{{ asset('assets/admin/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.editorConfig = function (config) {
            config.extraPlugins = 'confighelper';
        };
        CKEDITOR.replace('editor1');

    </script>

@endsection