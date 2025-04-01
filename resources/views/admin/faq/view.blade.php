@extends('admin.layouts.app')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>View Faqs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                    <li class="breadcrumb-item">Faq</li>
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
                                        <th>Question</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!empty($faq))
                                                                    @php
                                                                        $i = 1;
                                                                    @endphp
                                                                    @foreach($faq as $item)
                                                                        <tr>
                                                                            <td>{{ $i++ }}</td>
                                                                            <td>{{ $item->question ?? '' }}</td>
                                                                            <td>{{ $item->answer ?? '' }}</td>
                                                                            <td>
                                                                                @if($item->status == 1)
                                                                                    <button class="btn btn-success change_status" data-id="{{ $item->id ?? '' }}"
                                                                                        data-status="0" data-bs-toggle="modal"
                                                                                        data-bs-target="#status_modal">Active</span>
                                                                                @else
                                                                                    <button class="btn btn-danger change_status" data-id="{{ $item->id ?? '' }}"
                                                                                        data-status="1" data-bs-toggle="modal"
                                                                                        data-bs-target="#status_modal">Inactive</span>
                                                                                @endif
                                                                            </td>
                                                                            <td>
                                                                                <div class="d-flex align-items-center gap-3">
                                                                                    <a href="{{ url('admin/edit_faqs') }}/{{ $item->id }}">
                                                                                        <button class="btn btn-primary">
                                                                                            <i class="bi bi-pencil"></i>
                                                                                        </button>
                                                                                    </a>

                                                                                    <button type="button" class="btn btn-danger deleteData"
                                                                                        data-id="{{ $item->id ?? '' }}" data-bs-toggle="modal"
                                                                                        data-bs-target="#verticalycentered">
                                                                                        <i class="bi bi-trash"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>


    <div class="modal fade" id="verticalycentered" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('admin/delete_faqs') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="delete_id" name="id">
                        <p>Are You Sure You Want To Delete ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="status_modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Status Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('admin/change_faq_status') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" id="status_id" name="id">
                        <input type="hidden" id="status" name="status">
                        <p>Are You Sure You Want To Change This ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.deleteData').click(function () {
                var delete_id = $(this).data('id');
                $('#delete_id').val(delete_id);
            });
            $('.change_status').click(function () {
                var status_id = $(this).data('id');
                var status = $(this).data('status');
                $('#status_id').val(status_id);
                $('#status').val(status);
            });
        });
    </script>
@endsection