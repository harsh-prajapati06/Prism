@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-2 mb-2">
            <p>{!! $data->privacy_policy ?? '' !!}</p>
        </div>
    </div>
</div>
	
@endsection