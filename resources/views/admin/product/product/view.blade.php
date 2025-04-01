@extends('admin.layouts.app')
@section('content')

<style>
    .datatable-container{
        overflow:scroll;
    }
    
    .bordered{
        border: 1px solid #d1d1d1;
        padding: 5px;
        border-radius: 5px;
        box-shadow: 0px 4px 4px #b4b4b4;
    }
    
    .flex_centered{
        display:flex;
        align-items:center;
    }
    
    .img_container{
        border-radius: 5px;
        position: relative;
        display:flex;
        align-items:center;
        justify-content:center;
        transition:0.3s;
    }
    
    .img_container img{
        transition:0.3s;
    }
    
    .deleteButtonImg{
        display:none;
    }
    
    .deleteButtonImg{
        position: absolute;
    }
    
    .img_container:hover .deleteButtonImg{
        display:block;
    }
    .img_container:hover img{
        opacity:0.3;
    }
</style>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>View Products</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item active">View</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <table class="table datatable nowrap table_font_14">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Short Description</th>
                                    <th>Photo</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($product))
                                @php
                                $i = 1;
                                @endphp
                                @foreach($product as $item)
                                @php
                                    $category_name = getCategoryName($item->category_id ?? null);
                                @endphp
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $category_name->name ?? '' }}</td>
                                    <td>{{ $item->name ?? '' }}</td>
                                    <td>{{ $item->short_description ?? '' }}</td>
                                    <td>
                                        @if(!empty($item->image))
                                        <img src="{{ env('IMAGE_SHOW_PATH').'products/'.$category_name->name.'/'.$item->image }}" width="50px" height="50px">
                                        @else
                                        <img src="{{ env('IMAGE_SHOW_PATH').'default/profileDom.jpg' }}" width="50px" height="50px">
                                        @endif
                                    </td>
                                    </td>
                                    <td>
                                        @if($item->status == 1)
                                        <button class="btn btn-success change_status" data-id="{{ $item->id ?? '' }}" data-status="0" data-bs-toggle="modal" data-bs-target="#status_modal">Active</span>
                                        @else
                                        <button class="btn btn-danger change_status" data-id="{{ $item->id ?? '' }}" data-status="1" data-bs-toggle="modal" data-bs-target="#status_modal">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('admin/edit_product') }}/{{ $item->id }}">
                                            <button class="btn btn-primary">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-info view_details" data-image="{{ env('IMAGE_SHOW_PATH').'products/'.$category_name->name.'/'.$item->image }}" data-id="{{ $item->id ?? '' }}" data-category_name="{{ $category_name->name ?? '' }}" data-name="{{ $item->name ?? '' }}" data-long_des="{{ $item->long_description ?? '' }}">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger deleteData" data-id="{{ $item->id ?? '' }}" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                            <i class="bi bi-trash"></i>
                                        </button>
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


<div class="modal fade" id="product_details_modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="product_name"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row flex_centered">
                    <div class="col-md-4">
                        <img id="product_image" src="" alt="product_image" class="img-fluid bordered">
                    </div>
                    
                    <div class="col-md-8">
                        <p id="long_description"></p>
                    </div>
                </div>
                
               
                <div class="row" id="product_details"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('admin/delete_product') }}" method="POST">
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
            <form action="{{ url('admin/change_product_status') }}" method="POST">
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
    $(document).ready(function() {
        var BASEURL = "{{ url('admin') }}";
        
        $('.deleteData').click(function() {
            var delete_id = $(this).data('id');
            $('#delete_id').val(delete_id);
        });
        $('.change_status').click(function() {
            var status_id = $(this).data('id');
            var status = $(this).data('status');
            $('#status_id').val(status_id);
            $('#status').val(status);
        });
        
        $(document).on('click','.deleteButtonImg',function(){
           var photo = $(this);
           var detail_id = $(this).data('detail_id'); 
           
           $.ajax({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: BASEURL + '/deleteProductDetails',
                data: {
                    id: detail_id,
                },
                // dataType: 'json', // Uncomment if expecting JSON response
                success: function(data) {
                    toastr.success("Photo Delete Successfully");
                    photo.parents('.col-md-3').remove();
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching product details:', error);
                }
            });
        });
        
        
        $('.view_details').click(function() {
            var product_id = $(this).data('id');
            var name = $(this).data('name');
            var long_des = $(this).data('long_des');
            var image_url = $(this).data('image');
            var category_name = $(this).data('category_name');
            var image_show_path = "{{ env('IMAGE_SHOW_PATH') }}";
          
            // Clear the contents of the specified elements
            $('#product_name').html("");
            $('#long_description').html("");
            $('#product_details').html("");
            $('#product_image').attr("src","");
            
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: BASEURL + '/getProductDetails',
                data: {
                    product_id: product_id,
                },
                // dataType: 'json', // Uncomment if expecting JSON response
                success: function(data) {
                    if (data.length != 0) {
                        $('#product_name').html(name);
                        $('#long_description').html(long_des);
                        $('#product_image').attr('src',image_url);
                        
                        for (var i = 0; i < data.length; i++) {
                            var code = "<div class='col-md-3 mt-3'><div class='img_container'><img src='" + image_show_path + "products/" + category_name + "/" + data[i].documents + "' alt='product_image' class='img-fluid bordered'><button class='btn btn-danger deleteButtonImg' data-detail_id='"+ data[i].id +"'><i class='bi bi-trash'></i></button></div>";

                            $('#product_details').append(code);
                        }
                        
                        $('#product_details_modal').modal('show');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching product details:', error);
                }
            });
        });

    });
</script>
@endsection