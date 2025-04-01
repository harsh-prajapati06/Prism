@extends('admin.layouts.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>View Contacts</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Contacts</li>
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
                                    <th>Sr No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile No</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($contact))
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($contact as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->name ?? '' }}</td>
                                    <td>{{ $item->email ?? '' }}</td>
                                    <td>{{ $item->mobile ?? '' }}</td>
                                    <td>{{ $item->subject ?? '' }}</td>
                                    <td>{{ $item->message ?? '' }}</td>
                                    <td>@if(!empty($item->date)){{ date('d-M-Y', strtotime($item->date)) }}@endif</td>
                                </tr>
                                @endforeach
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