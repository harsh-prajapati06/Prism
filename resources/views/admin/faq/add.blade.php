@extends('admin.layouts.app')
@section('content')
@php

<style>
    #faqs_list tr td{
        padding:10px;
    }
</style>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Faqs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                <li class="breadcrumb-item">Faq</li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Faqs</h5>
                        <form class="row g-3" action="{{ url('admin/add_faqs') }}" method="POST">
                            @csrf
                                
                            <div class="col-md-12">
                                <table class="w-100">
                                    <thead>
                                        <tr>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody id="faqs_list">
                                        <tr>
                                            <td>
                                                <input type="text" placeholder="Question" class="form-control" name="question[]">
                                            </td>
                                            <td>
                                                <input type="text" placeholder="Answer" class="form-control" name="answer[]">
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success" id="add_row">
                                                    <i class="bi bi-plus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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


<script>
    $(document).ready(function(){
       $('#add_row').click(function(){
          var code = '<tr><td><input type="text" placeholder="Question" class="form-control" name="question[]"></td><td>'
                      +'<input type="text" placeholder="Answer" class="form-control" name="answer[]"></td>'
                      +'<td><button type="button" class="btn btn-danger delete_row"><i class="bi bi-trash"></i></button></td></tr>'; 
                      
            $('#faqs_list').append(code);          
       }); 
       
       $(document).on('click','.delete_row',function(){
          $(this).parents('tr').remove(); 
       });
    });
</script>

@endsection