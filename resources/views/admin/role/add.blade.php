@extends('admin.layouts.app')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Role</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Role</li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Role</h5>
                        <form class="row g-3" action="{{ url('admin/add_role') }}" method="POST">
                            @csrf
                            <div class="col-md-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" placeholder="Name" class="form-control" name="name" id="name" value="{{ old('name') }}">
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