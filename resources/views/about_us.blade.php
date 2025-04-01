@extends('layouts.app')
@section('content')
@php
$setting = getSetting();
@endphp

<style>
	.about_us_div p {
		margin-top: 20px;
		font-size: 16px;
		font-weight: 500;
	}

	.about_us_description {
		font-size: 14px !important;
		font-weight: 400 !important;
	}

	p,
	.about_us_listing {
		margin-top: 20px;
	}

	.top_space {
		margin-top: 20px;
	}

	.about_us_boxes {
		border: 1px solid #cdcdcd;
		border-radius: 4px;
		padding: 24px;
		box-shadow: 0px 0px 10px darkgray;
		height:400px;
		cursor:pointer;
		transition:0.3s;
	}
	
	.about_us_boxes:hover{
	    background: #1a76d1;
	}
	
	.about_us_boxes:hover .heading_hov{
	    color:white;
	}
	.about_us_boxes:hover .about_us_boxes_text{
	    color:white;
	}

	.about_us_boxes_text {
		text-align: justify;
		transition:0.3s;
	}
</style>
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
	<div class="container">
		<div class="bread-inner">
			<div class="row">
				<div class="col-12">
					<h2>About Us</h2>
					<ul class="bread-list">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><i class="icofont-simple-right"></i></li>
						<li class="active">About Us</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->


<section class="about-us section">
	<div class="container">
		<div class="inner">
			<div class="row flex_centered">
				<div class="col-lg-5">
					<img src="{{URL::asset('public/assets/website/img/teamwork.png')}}" class="img-fluid">
				</div>
				<div class="col-lg-7">
					<div class="about_us_div">
						<h2>Our Services</h2>
						<p>We deliver innovative, reliable solutions with a customer-centric approach, ensuring your success in every project.</p>

						<p class="about_us_description">
							Welcome to NEO DERMA LIFE SCIENCES, where innovation meets dedication, and passion fuels progress. Founded in 2018, our company has been at the forefront of the life sciences industry, committed to delivering exceptional products and services that not only meet but exceed our customers' expectations.
						</p>

						<p class="about_us_description">
							NEO DERMA LIFE SCIENCES offers a comprehensive range of products and services designed to meet the unique needs of our customers. Whether it's advanced dermatological treatments, innovative skincare solutions, or cutting-edge research and development, we are dedicated to delivering solutions that are innovative, reliable, and tailored to our customers' specific requirements.
						</p>
					</div>
				</div>
			</div>

			<hr>

			<div class="row top_space">
				<div class="col-md-12">
					<h2 class="text-center">Our Values</h2>
					<p>Our core values are the foundation of our company culture and guide our actions and decisions:</p>

					<div class="about_us_listing">
						<ul>
							<li><b>Integrity :</b> We conduct our business with the highest ethical standards, ensuring transparency and accountability in all our interactions.</li>
							<li><b>Innovation:</b> We foster a culture of creativity and encourage our team to think outside the box, pushing the boundaries of what's possible.</li>
							<li><b>Customer-Centricity :</b> We believe in the power of teamwork and collaborate closely with our partners and stakeholders to achieve common goals.</li>
							<li><b>Sustainability :</b> We are committed to sustainable practices that minimize our environmental impact and contribute to the well-being of our communities.</li>
						</ul>
					</div>
				</div>
			</div>

			<hr>

			<div class="row top_space">
				<div class="col-md-4">
					<div class="about_us_boxes">
						<h2 class="text-center heading_hov">Our Team</h2>
						<p class="about_us_boxes_text">
							Our team is composed of highly skilled and passionate professionals who bring diverse perspectives
							and expertise to the table. We are united by a shared commitment to excellence and a drive to make a
							difference. Our employees are our greatest asset, and we invest in their growth and development to
							ensure they have the tools and opportunities to succeed.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="about_us_boxes">
						<h2 class="text-center heading_hov">Our Mission</h2>
						<p class="about_us_boxes_text">
							At the heart of NEO DERMA LIFE SCIENCES is a clear and compelling mission: to improve lives through
							groundbreaking dermatological solutions. This mission drives everything we do and inspires us to continually
							seek new ways to improve and innovate. We believe in creating value not just for our customers, but for our
							employees, partners, and the communities we serve.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="about_us_boxes">
						<h2 class="text-center heading_hov">Our Vision</h2>
						<p class="about_us_boxes_text">
							Our vision is to be a global leader in life sciences, recognized for our quality, integrity,
							and commitment to excellence. We aim to build a sustainable future through innovative solutions
							that address the challenges of today and anticipate the needs of tomorrow. We envision a world
							where our contributions make a significant impact, leading to a better, more connected, and more
							sustainable future for all.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



@endsection