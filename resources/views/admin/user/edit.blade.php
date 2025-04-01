@extends('admin.layouts.app')
@section('content')
@php
$roles = getRoles();
@endphp
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Edit User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">User</li>
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
                        <form class="row g-3" action="{{ url('admin/edit_user') }}/{{ $user->id }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="col-md-4">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-control" name="role_id" id="role_id">
                                    <option value="">Select</option>
                                    @if(!empty($roles))
                                    @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{ $role->id == $user->role_id ? 'selected' : '' }}>{{ $role->name ?? '' }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" placeholder="Name" class="form-control" name="name" id="name" value="{{ $user->name ?? '' }}">
                            </div>
                            <div class="col-md-4">
                                <label for="mobile" class="form-label">Mobile No.</label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile No." value="{{ $user->mobile ?? '' }}">
                            </div>
                            <div class="col-md-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $user->email ?? '' }}">
                            </div>
                            <div class="col-md-4">
                                <label for="user_name" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                    <input type="text" class="form-control" placeholder="Username" name="user_name" value="{{ $user->user_name ?? '' }}" id="user_name" aria-describedby="inputGroupPrepend2">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <img src="{{ asset('assets/admin/img/fingerprint.svg') }}" width="22px" alt="fingerprint">
                                    </span>
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="{{ $user->confirm_password ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <img src="{{ asset('assets/admin/img/fingerprint.svg') }}" width="22px" alt="fingerprint">
                                    </span>
                                    <input type="text" class="form-control" placeholder="Confirm Password" name="confirm_password" id="confirm_password" value="{{ $user->confirm_password ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="photo" class="form-label">Photo</label>
                                <input type="file" class="form-control" name="photo" id="photo">
                            </div>
                            <div class="col-md-1">
                                <label>&nbsp;</label><br>
                                @if(!empty($user->photo))
                                <img src="{{ env('IMAGE_SHOW_PATH').'profile/'.$user->photo }}" alt="Profile" class="rounded-circle" width="50px" height="50px">
                                @else
                                <img src="{{ env('IMAGE_SHOW_PATH').'default/profileDom.jpg' }}" alt="Profile" class="rounded-circle" width="50px" height="50px">
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