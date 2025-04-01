@extends('admin.layouts.app')
@section('content')
@php
$roles = getRoles();
@endphp
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit Faq</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Faq</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Faq</h5>
                        <form class="row g-3" action="{{ url('admin/edit_faqs') }}/{{ $faq->id }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="col-md-12">
                                <label for="question" class="form-label">Question</label>
                                <input type="text" placeholder="Question" class="form-control" name="question" id="question" value="{{ $faq->question ?? '' }}">
                            </div>
                            <div class="col-md-12">
                                <label for="answer" class="form-label">Answer</label>
                                <textarea class="form-control" name="answer" id="answer" placeholder="Answer" value="{{ $faq->answer ?? '' }}">{{ $faq->answer ?? '' }}</textarea>
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