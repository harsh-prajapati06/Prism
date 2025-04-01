@extends('admin.layouts.app')
@section('content')
@php
$roles = getRoles();
@endphp
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Banner</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Banner</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit User</h5>
                        <form class="row g-3" action="{{ url('admin/edit_banner') }}/{{ $banner->id }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="col-md-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" placeholder="Title" class="form-control" name="title" id="title" value="{{ $banner->title ?? '' }}">
                            </div>
                            <div class="col-md-5">
                                <label for="photo" class="form-label">Photo</label>
                                <input type="file" class="form-control" name="photo" id="photo">
                            </div>
                            <div class="col-md-1">
                                <label>&nbsp;</label><br>
                                @if(!empty($banner->photo))
                                <img src="{{ env('IMAGE_SHOW_PATH').'banner/'.$banner->photo }}" alt="Profile" width="50px" height="50px">
                                @else
                                <img src="{{ env('IMAGE_SHOW_PATH').'default/banner.png' }}" alt="Profile" width="50px" height="50px">
                                @endif
                            </div>
                            <div class="col-md-12">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" rows="5" name="description" id="description" placeholder="Description" value="{{ $banner->description ?? '' }}">{{ $banner->description ?? '' }}</textarea>
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