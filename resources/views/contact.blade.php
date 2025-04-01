@extends('layouts.app')
@section('content')
	@php
		$setting = getSetting();
	@endphp

	<section class="page-title-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb-area">
						<h2 class="page-title">Contact Us</h2>
						<ul class="breadcrumbs-link">
							<li><a href="{{ url('/') }}">Home</a></li>
							<li class="active">Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact-section bg-secondary-color pdt-110 pdb-110" data-background="{{ asset('assets/images/bg/abs-bg7.png') }}"
		data-overlay-light="2">
		<div class="container">
			<div class="row mrb-80">
				<div class="col-md-12 col-lg-12 col-xl-4">
					<h5 class="side-line-left text-primary-color mrt-0 mrb-5">Get In Touch</h5>
					<h2 class="faq-title mrb-30">Have Any Questions?</h2>
					<ul class="social-list list-lg list-primary-color list-flat mrb-lg-60 clearfix">
						<li>
							<a href="{{ $setting->facebook_link ?? '#' }}" target="_blank"><i
									class="fab fa-facebook-f"></i></a>
						</li>
						<li>
							<a href="{{ $setting->twitter_link ?? '#' }}" target="_blank"><i class="fab fa-twitter"></i></a>
						</li>
						<li>
							<a href="{{ $setting->instagram_link ?? '#' }}" target="_blank"><i
									class="fab fa-instagram"></i></a>
						</li>
						<li>
							<a href="{{ $setting->youtube_link ?? '#' }}" target="_blank"><i class="fab fa-youtube"></i></a>
						</li>
					</ul>
				</div>
				<div class="col-md-12 col-lg-12 col-xl-8">
					<div class="row">
						<div class="col-lg-12 col-xl-12">
							<div class="contact-block d-flex mrb-30">
								<div class="contact-icon">
									<i class="base-icon-map"></i>
								</div>
								<div class="contact-details mrl-30">
									<h5 class="icon-box-title mrb-10">Our Address</h5>
									<p class="mrb-0">{{ $setting->address ?? ''}}</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-6">
							<div class="contact-block d-flex mrb-30">
								<div class="contact-icon">
									<i class="base-icon-094-email-2"></i>
								</div>
								<div class="contact-details mrl-30">
									<h5 class="icon-box-title mrb-10">Email Us</h5>
									<p class="mrb-0">
										<a href="mailto:{{ $setting->email ?? ''}}">{{ $setting->email ?? ''}}</a>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-xl-6">
							<div class="contact-block d-flex mrb-30">
								<div class="contact-icon">
									<i class="base-icon-phone-2"></i>
								</div>
								<div class="contact-details mrl-30">
									<h5 class="icon-box-title mrb-10">Phone Number</h5>
									<p class="mrb-0"><a
											href="tel:{{ $setting->mobile ?? ''}}">+91{{ $setting->mobile ?? ''}}</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-6">
					<div class="contact-form">
						<form class="form" method="post" action="{{ url('contact') }}">
							@csrf
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group mrb-25">
										<input class="form-control" type="text" name="name" placeholder="Name" required="">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mrb-25">
										<input class="form-control" type="email" name="email" placeholder="Email"
											required="">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mrb-25">
										<input class="form-control" type="text" name="mobile" placeholder="Phone"
											required="">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group mrb-25">
										<input class="form-control" type="text" name="subject" placeholder="Subject"
											required="">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group mrb-25">
										<textarea class="form-control" name="message" placeholder="Your Message"
											required=""></textarea>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group mrb-25 login-btn">
										<button type="submit" class="animate-btn-style3 btn-md mrb-lg-60">Submit
											Now</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="mapouter fixed-height">
						<div class="gmap_canvas">
							<iframe id="gmap_canvas"
								src="https://maps.google.com/maps?q=Graz&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
							<a href="https://www.whatismyip-address.com/"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection