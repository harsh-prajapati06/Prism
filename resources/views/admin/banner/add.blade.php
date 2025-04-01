@extends('admin.layouts.app')
@section('content')
@php
$roles = getRoles();
@endphp
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Banner</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Banner</li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Banner</h5>
                        <form class="row g-3" action="{{ url('admin/add_banner') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" placeholder="Title" class="form-control" name="title" id="title" value="{{ old('title') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="photo" class="form-label">Photo</label>
                                <input type="file" class="form-control" name="photo" id="photo">
                            </div>
                            <div class="col-md-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description" row="3" placeholder="Description" value="{{ old('description') }}"></textarea>
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