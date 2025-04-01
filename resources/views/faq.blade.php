@extends('layouts.app')
@section('content')

 <style>   
    .faq_wrapper {
        /* width: 60%; */
    }
    
        @media only screen and (max-width: 450px) {
            .question::after {
              font-size: 16px !important;
            }
            
            .question{
              font-size: 16px !important;
            }
        }

    .faq_container {
        background-color: #4b89c7;
        color: white;
        border-radius: 20px;
        box-shadow: 0 5px 10px 0 rgb(0, 0, 0, 0.25);
        margin: 20px 0;
    }

    .question {
        font-size: 1.2rem;
        font-weight: 600;
        padding: 20px 80px 20px 20px;
        position: relative;
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .question::after {
        content: "\002B";
        font-size: 2.2rem;
        position: absolute;
        right: 20px;
        transition: 0.2s;
    }

    .question.active::after {
        transform: rotate(45deg);
    }

    .answercont {
        max-height: 0;
        overflow: hidden;
        transition: 0.3s;
    }

    .answer {
        padding: 0 20px 20px;
        line-height: 1.5rem;
    }
</style>
		<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>FAQ</h2>
							<ul class="bread-list">
								<li><a href="{{ url('/') }}">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">FAQ</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<section class="contact-us section">
			<div class="container">
					@if(!empty($faqs))
					<div class="row flex_Center">
                        <div class="col-md-12">
                            <div class="faq_wrapper">
                                @php
                                    $sr = 1;
                                @endphp
                                @foreach($faqs as $faq)
                                <div class="faq_container" data-aos="fade-up" data-aos-duration="500">
                                    <div class="question">
                                        {{ $sr++ }}. {{ $faq->question ?? ''}}
                                    </div>
                                    <div class="answercont">
                                        <div class="answer">
                                            {{ $faq->answer ?? ''}}<br>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
					@else
					    <div class="row">
					        <div class="col-md-12 text-center">
					            <h3>Coming Soon.....</h3>
					        </div>
					    </div>
					@endif
			</div>
		</section>

@endsection