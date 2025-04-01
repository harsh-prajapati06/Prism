@extends('admin.layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>View Setting</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Setting</li>
                <li class="breadcrumb-item active">View</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <table class="table datatable table_font_14 table-responsive">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile No</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($setting))
                                <tr>
                                    <td>
                                        @if(!empty($setting->logo))
                                        <img src="{{ env('IMAGE_SHOW_PATH').'logo/'.$setting->logo }}" alt="logo" width="50px" height="50px">
                                        @else
                                        <img src="{{ env('IMAGE_SHOW_PATH').'default/profileDom.jpg' }}" alt="logo" width="50px" height="50px">
                                        @endif
                                    </td>
                                    <td>{{ $setting->name ?? '' }}</td>
                                    <td>{{ $setting->email ?? '' }}</td>
                                    <td>{{ $setting->mobile ?? '' }}</td>
                                    <td>{{ $setting->address ?? '' }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ url('admin/edit_setting') }}/{{ $setting->id }}">
                                                <button class="btn btn-primary">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

@endsection