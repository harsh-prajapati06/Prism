@extends('admin.layouts.app')
@section('content')
@php
$categories = getCategories();
@endphp

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Product</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Product</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Product</h5>
                        <form class="row g-3" id="submit_form" action="{{ url('admin/edit_product') }}/{{ $product->id }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="col-md-4">
                                <label for="category_id" class="form-label">Category</label>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option value="">Select</option>
                                    @if(!empty($categories))
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $product->category_id ? 'selected' : '' }}>{{ $item->name ?? '' }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" placeholder="Name" class="form-control" name="name" id="name" value="{{ $product->name ?? '' }}">
                            </div>
                            <div class="col-md-4">
                                <label for="photo" class="form-label">Photo</label>
                                <input type="file" class="form-control" name="photo" id="photo">
                            </div>
                            <div class="col-md-6">
                                <label for="short_description" class="form-label">Short Description</label>
                                <textarea rows="5" placeholder="Description" class="form-control" name="short_description" id="short_description" value="{{ $product->short_description ?? '' }}">{{ $product->short_description ?? '' }}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="photo" class="form-label">Product Images</label>
                                <input type="file" multiple class="form-control" name="documents[]" id="documents">
                            </div>
                            <div class="col-md-12">
                                <label for="long_description" class="form-label">Long Description</label>
                                 <textarea class="form-control ckeditor" id="ckeditor1" placeholder="Long Description" name="long_description" value="{!! $product->long_description ?? '' !!}">{!! $product->long_description ?? '' !!}</textarea>
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

<script src="{{URL::asset('public/assets/ckeditor/ckeditor.js')}}"></script>
<script>
	CKEDITOR.editorConfig = function (config) {
    config.extraPlugins = 'confighelper';
  };
  CKEDITOR.replace('editor1');

</script>

@endsection