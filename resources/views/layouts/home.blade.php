@extends('layouts.app')
@section('content')
	@php
		$getBanners = getBanners();
		$getFaqs = getFaqs(5);
	@endphp

	<style>
		.bordered_section {
			border-top: 5px solid white;
			border-bottom: 5px solid white;
		}
	</style>


	@if(!empty($getBanners))
		<section class="home_banner_01">
			<div class="home-carousel owl-theme owl-carousel">
				@foreach($getBanners as $banner)
					@php
						$img_path = $banner->photo ? asset('documents/banner/' . $banner->photo) : '';
					@endphp
					<div class="slide-item">
						<div class="image-layer" data-background="{{ $img_path }}"></div>
						<div class="auto-container">
							<div class="row clearfix">
								<div class="col-xl-8 col-lg-12 col-md-12 content-column">
									<div class="content-box">
										<h1 class="home-carousel-title">{{ $banner->title ?? '' }}</span>
										</h1>
										<p class="home-carousel-text">{{ $banner->description ?? '' }}</p>
										<div class="btn-box">
											<a href="{{ url('contact') }}" class="animate-btn-style3">Get In Touch</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</section>
	@endif

	<section class="about-section pdt-110 pdb-105 bg-no-repeat bg-cover bg-pos-cb"
		data-background="{{ asset('assets/images/bg/abs-bg3.png') }}" data-overlay-light="4" id="about_us">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="about-image-box-style1 about-side-line mrr-60 mrr-lg-0">
						<figure class="about-image2">
							<img class="img-full" src="{{ asset('assets/images/about/about-lg1.jpg') }}" alt="" />
						</figure>
					</div>
				</div>
				<div class="col-md-12 col-lg-10 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
					<h5 class="side-line-left subtitle text-primary-color">About Our Company</h5>
					<h2 class="mrb-45 mrb-lg-35">Prism <br> <span class="text-primary-color">Interior</span> &
						Decor</h2>
					<p class="about-text-block mrb-40">Prism Interior and Decor is a premier provider of end-to-end
						construction, renovation, and interior design services. With a focus on quality, creativity, and
						innovation, we strive to deliver projects that are not only aesthetically pleasing but also
						functional and long-lasting. Our team of highly skilled professionals works with you at every stage
						to ensure your vision is brought to life seamlessly.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="service-title-section bg-silver bg-no-repeat bg-cover bg-pos-cb pdt-105 pdb-50"
		data-background="{{ asset('assets/images/bg/abs-bg2.png') }}" id="our-services">
		<div class="service-title-section-obj1">
			<img src="{{ asset('assets/images/objects/3.png') }}" alt="" />
		</div>
		<div class="section-title mrb-55 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-6 col-lg-7 col-md-12">
						<div class="title-box-center">
							<h5 class="side-line-left text-primary-color mrb-10">Our Services</h5>
							<h2 class="mrb-25">Our <span class="text-primary-color">Expertise </span> <br> Includes
							</h2>
						</div>
					</div>
					<div class="col-xl-6 col-lg-5 col-md-12">
						<p class="mrb-0 mrb-md-40">At Prism, we specialize in delivering high-quality solutions for
							construction, interiors, and technical services. With a team of skilled professionals, we ensure
							precision, durability, and aesthetic excellence in every project.</p>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="why-choose-us-style1-section pdt-110 pdb-110 bg-no-repeat bg-cover bg-pos-cb" id="civil-works">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="about-image-box-style3 dot-circle mrb-lg-60">
						<img class="about-image2 img-full" src="{{ asset('assets/images/service/service_01.jpg') }}"
							alt="" />

					</div>
				</div>
				<div class="col-md-12 col-lg-10 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<h5 class="side-line-left text-primary-color mrb-10">Construction and Civil Works</h5>
					<h2 class="mrb-35 mrb-lg-40">Building <span class="text-primary-color stylish-font1">
							Excellence</span> with Innovation & Precision</h2>
					<p class="mrb-40">We offer comprehensive construction services, from the foundation to the final
						touches, ensuring every detail is executed to perfection. Whether you're building a new structure or
						renovating an existing one, we provide reliable, high-quality construction solutions.</p>
					<div class="row">
						<div class="col-md-12">
							<ul class="order-list primary-color mrb-35">
								<li><b>Full-Scale Construction –</b> From foundation to completion, we handle all aspects of
									construction with precision.</li>
								<li><b>Residential & Commercial Development –</b> Designing and building modern, functional
									spaces tailored to your needs.</li>
								<li><b>Renovation & Remodeling -</b> Upgrading existing structures with cutting-edge designs
									and durable materials.</li>
								<li><b>Structural Engineering –</b> Ensuring long-lasting strength and safety with expert
									engineering.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-85"
		data-background="{{ asset('assets/images/bg/abs-bg4.png') }}" data-overlay-dark="4" id="modular-furniture">
		<div class="section-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
						<h5 class="side-line-left text-primary-color mrb-10">Modular Kitchens and Furniture</h5>
						<h2 class="text-white mrb-20 mrb-sm-30">
							Elevating <span class="text-primary-color">Spaces</span> with Style & Functionality
						</h2>
						<p class="text-white mrb-20">We design and install modular kitchens and furniture that maximize
							space and enhance the functionality of your home or office. Our solutions are tailored to fit
							your specific requirements, ensuring both practicality and style.</p>

						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="feature-box-style2 wow fadeInUp" data-wow-delay="200ms"
									data-wow-duration="800ms">
									<div class="inner-box">
										<div class="feature-box-icon">
											<span class="webextheme-icon-interior-design-1"></span>
										</div>
										<h6 class="title">Smart Living</h6>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="feature-box-style2 wow fadeInUp" data-wow-delay="300ms"
									data-wow-duration="800ms">
									<div class="inner-box">
										<div class="feature-box-icon">
											<span class="webextheme-icon-kitchen"></span>
										</div>
										<h6 class="title">Elegant Spaces</h6>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="feature-box-style2 wow fadeInUp" data-wow-delay="400ms"
									data-wow-duration="800ms">
									<div class="inner-box">
										<div class="feature-box-icon">
											<span class="webextheme-icon-architect-4"></span>
										</div>
										<h6 class="title">Modern Comfort</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
						<div class="shine-effect">
							<img class="img-full" src="{{ asset('assets/images/about/about-sm5.jpg') }}" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="why-choose-us-style1-section bg-silver pdt-110 pdb-110 bg-no-repeat bg-cover bg-pos-cb" id="carpentry">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-10 col-xl-8 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<h5 class="side-line-left text-primary-color mrb-10">Carpentry and Woodwork</h5>
					<h2 class="mrb-35 mrb-lg-40">Crafting <span class="text-primary-color stylish-font1">
							Elegance </span> with Precision & Expertise</h2>
					<p class="mrb-40">Our custom woodwork services add a touch of elegance and functionality to your space.
						From bespoke furniture pieces to intricate carpentry, we create beautiful and durable wooden
						elements that suit your taste and needs.</p>
					<div class="row">
						<div class="col-md-12">
							<ul class="order-list primary-color mrb-35">
								<li><b>Custom Woodwork –</b> Designing unique furniture, cabinetry, and décor to match your
									style.</li>
								<li><b>Interior Wood Finishing –</b> Elegant wooden paneling, flooring, and decorative
									elements for refined interiors.</li>
								<li><b>Doors & Windows Fabrication -</b> Durable and stylish wooden doors, frames, and
									window fittings.</li>
								<li><b>Bespoke Furniture –</b> Handcrafted wooden tables, wardrobes, kitchen cabinets, and
									more.</li>
								<li><b>Structural Woodwork -</b> Sturdy wooden frameworks, staircases, and pergolas for
									long-lasting support.</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-12 col-lg-8 col-xl-4 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="about-image-box-style3 mrb-lg-60">
						<img class="about-image2 img-full" src="{{ asset('assets/images/service/service_03.jpg') }}"
							alt="" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="electrical-ac">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-xl-6 bg-cover" data-background="{{ asset('assets/images/bg/12.jpg') }}"></div>
				<div class="col-lg-12 col-xl-6 p-0">
					<div class="divider-gap bg-silver-light">
						<h2 class="mrb-25">Electrical and AC Services</h2>
						<p class="mrb-40 mrb-sm-60">We offer a full range of electrical services, including installations,
							repairs, and maintenance, as well as air conditioning services to keep your space comfortable
							and energy-efficient.</p>
						<div class="icon-box-two mrb-40">
							<div class="icon bg-primary-color f-left">
								<span class="webexflaticon webextheme-icon-measure"></span>
							</div>
							<div class="icon-details">
								<h4 class="icon-box-title mrb-10">Reliable Customer Support</h4>
								<p>Our dedicated team ensures prompt and efficient service, addressing your electrical and
									AC concerns with professionalism and care.</p>
							</div>
						</div>

						<div class="icon-box-two mrb-40">
							<div class="icon bg-primary-color f-left">
								<span class="webexflaticon webextheme-icon-architect-4"></span>
							</div>
							<div class="icon-details">
								<h4 class="icon-box-title mrb-10">Skilled & Certified Technicians</h4>
								<p>Our experienced professionals bring expertise and precision to every project, ensuring
									top-quality installations, repairs, and maintenance.</p>
							</div>
						</div>

						<div class="icon-box-two">
							<div class="icon bg-primary-color f-left">
								<span class="webexflaticon webextheme-icon-013-sketch1"></span>
							</div>
							<div class="icon-details">
								<h4 class="icon-box-title mrb-10">Advanced Technology & Tools</h4>
								<p>We use the latest equipment and innovative techniques to deliver efficient, safe, and
									long-lasting electrical and AC solutions.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="why-choose-us-style2-section bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-lg-80" id="ceiling-interiors"
		data-background="{{ asset('assets/images/bg/16.jpg') }}" data-overlay-dark="98">
		<div class="why-choose-us-style2-obj1">
			<img src="{{ asset('assets/images/objects/why-choose-us-style2-obj1.png') }}" alt="" />
		</div>
		<div class="why-choose-us-style2-obj2">
			<img src="{{ asset('assets/images/objects/why-choose-us-style2-obj2.png') }}" alt="" />
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row mrb-110">
					<div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
						<h5 class="side-line-left text-primary-color mrb-10">False Ceiling and Interior Design</h5>
						<h2 class="text-white mrb-30 mrb-sm-30">
							Enhancing <span class="text-primary-color">Spaces<br /> </span>with Elegance & Functionality
						</h2>
						<p class="text-white mrb-40">We specialize in creating beautiful false ceilings that not only
							enhance the aesthetics of a room but also improve acoustics and lighting. Our interior design
							services focus on creating cohesive, inspiring spaces that reflect your personal style.</p>
					</div>
					<div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
						<div class="before-after-slider1 style2 mrt-lg-60">
							<img src="{{ asset('assets/images/before-after/3.jpg') }}" alt="img1" />
							<img src="{{ asset('assets/images/before-after/4.jpg') }}" alt="img1" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-secondary-color bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-85" id="flooring-tiles"
		data-background="{{ asset('assets/images/bg/abs-bg4.png') }}" data-overlay-dark="4">
		<div class="section-content">
			<div class="container">
				<div class="row">

					<div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp d-flex align-items-center" data-wow-delay="200ms"
						data-wow-duration="800ms">
						<div class="shine-effect">
							<img class="img-full" src="{{ asset('assets/images/about/divider-img1.jpg') }}" alt="" />
						</div>
					</div>

					<div class="col-md-12 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
						<h5 class="side-line-left text-primary-color mrb-10">Stone, Tiles, and Flooring</h5>
						<h2 class="text-white mrb-20 mrb-sm-30">
							Timeless, <span class="text-primary-color">Elegant</span> , & Durable Floors
						</h2>
						<p class="text-white mrb-20">With a wide selection of high-quality materials, we provide stone,
							tiles, and flooring solutions that are both durable and visually appealing. Our expert
							installation services ensure a flawless finish every time.</p>

						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="feature-box-style2 wow fadeInUp" data-wow-delay="200ms"
									data-wow-duration="800ms">
									<div class="inner-box">
										<div class="feature-box-icon">
											<span class="webextheme-icon-interior-design-1"></span>
										</div>
										<h6 class="title">Elegant Surfaces</h6>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="feature-box-style2 wow fadeInUp" data-wow-delay="300ms"
									data-wow-duration="800ms">
									<div class="inner-box">
										<div class="feature-box-icon">
											<span class="webextheme-icon-002-living-room"></span>
										</div>
										<h6 class="title">Durable Finish</h6>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="feature-box-style2 wow fadeInUp" data-wow-delay="400ms"
									data-wow-duration="800ms">
									<div class="inner-box">
										<div class="feature-box-icon">
											<span class="webextheme-icon-office"></span>
										</div>
										<h6 class="title">Stylish Floors</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="painting-decor">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-xl-6 p-0">
					<div class="divider-gap">
						<h2 class="mrb-25">Painting and Decorating</h2>
						<p class="mrb-40 mrb-sm-60">Our painting and decorating services transform spaces with a fresh,
							vibrant look. We take care of every detail, ensuring flawless finishes that breathe new life
							into your home or office.
						</p>
						<div class="icon-box-two mrb-40">
							<div class="icon bg-primary-color f-left">
								<span class="webexflaticon webextheme-icon-measure"></span>
							</div>
							<div class="icon-details">
								<h4 class="icon-box-title mrb-10">Reliable Customer Support</h4>
								<p>Our expert team is always available to guide you through the painting process, offering
									advice on colors, finishes, and ensuring a smooth and timely completion of your project.
								</p>
							</div>
						</div>

						<div class="icon-box-two mrb-40">
							<div class="icon bg-primary-color f-left">
								<span class="webexflaticon webextheme-icon-architect-4"></span>
							</div>
							<div class="icon-details">
								<h4 class="icon-box-title mrb-10">Skilled & Certified Technicians</h4>
								<p>Our professional painters and decorators are trained to deliver exceptional
									craftsmanship. They work with precision to provide flawless finishes on walls, ceilings,
									and other surfaces.</p>
							</div>
						</div>

						<div class="icon-box-two">
							<div class="icon bg-primary-color f-left">
								<span class="webexflaticon webextheme-icon-013-sketch1"></span>
							</div>
							<div class="icon-details">
								<h4 class="icon-box-title mrb-10">Advanced Technology & Tools</h4>
								<p>We use modern equipment, premium-quality paints, and innovative techniques to ensure that
									every painting project is done efficiently, with a long-lasting and professional finish.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-xl-6 bg-cover" data-background="{{ asset('assets/images/bg/1.jpg') }}"></div>
			</div>
		</div>
	</section>

	<section class="why-choose-us-style2-section bordered_section bg-no-repeat bg-cover bg-pos-cb pdt-110 pdb-lg-80"
		id="it-networking" data-background="{{ asset('assets/images/bg/16.jpg') }}" data-overlay-dark="98">
		<div class="section-content">
			<div class="container">
				<div class="row mrb-110">
					<div class="col-md-12 col-lg-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
						<h5 class="side-line-left text-primary-color mrb-10">IT and Networking Solutions </h5>
						<h2 class="text-white mrb-30 mrb-sm-30">
							Empowering <span class="text-primary-color">Businesses<br /> </span>with Cutting-Edge IT &
							Networking Solutions
						</h2>
						<p class="text-white mrb-40">We provide advanced IT and networking services, helping you stay
							connected and optimize your home or office’s technology infrastructure. From wiring and cabling
							to smart home installations, we have you covered.
						</p>
					</div>
					<div class="col-md-10 col-lg-10 col-xl-6 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
						<img src="{{ asset('assets/images/before-after/2.jpg') }}" alt="img1" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="why-choose-us-style1-section bg-silver pdt-110 pdb-110 bg-no-repeat bg-cover bg-pos-cb">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="about-image-box-style3 dot-circle mrb-lg-60">
						<img class="about-image1 img-full js-tilt d-none d-md-block d-lg-block d-xl-block"
							src="{{ asset('assets/images/about/about-sm2.jpg') }}" alt="" />
						<img class="about-image2 img-full" src="{{ asset('assets/images/about/about-lg2.jpg') }}" alt="" />
						<img class="about-badge1 img-full js-tilt" src="{{ asset('assets/images/about/certificate2.png') }}"
							alt="" />
					</div>
				</div>
				<div class="col-md-12 col-lg-10 col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<h5 class="side-line-left text-primary-color mrb-10">Why Choose Us</h5>
					<h2 class="mrb-35 mrb-lg-40">We Provide Unique Creative<span class="text-primary-color stylish-font1">
							Interior</span> Design</h2>
					<p class="mrb-40">
						At Prism Interior and Decor, we are passionate about turning your ideas into reality. Whether you’re
						building, renovating, or just need expert advice, we are here to guide you through every step of the
						process.
					</p>
					<div class="row">
						<div class="col-xl-12 col-lg-7 col-md-12">
							<ul class="order-list primary-color mrb-35">
								<li><b>Expert Team : </b>Our skilled professionals have years of experience in the
									construction
									and design industry.</li>
								<li><b>Tailored Solutions : </b> We listen to your needs and deliver customized solutions to
									fit
									your space, style, and budget.</li>
								<li><b>Commitment to Quality : </b> We use only the highest quality materials and the latest
									techniques to ensure outstanding results.</li>
								<li><b>End-to-End Service: </b> From consultation to completion, we handle every aspect of
									your project, offering a seamless and hassle-free experience.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	@if(!empty($getFaqs))
		<section class="request-a-call-back pdt-50 pdt-md-100 pdb-95 bg-silver-light">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-11 col-lg-11">
						<h2 class="title mrb-30">Frequently Asked <span class="text-primary-color">Questions</span> (FAQs)
						</h2>
						<div class="faq-block">
							<div class="accordion">
								@php
									$sr = 1;
								@endphp
								@foreach($getFaqs as $faq)
									<div class="accordion-item">
										<div class="accordion-header active">
											<h5 class="title">{{ $sr++ }}. {{ $faq->question ?? ''}}</h5>
											<span class="fas fa-arrow-right"></span>
										</div>
										<div class="accordion-body">
											<p class="text-white">
												{{ $faq->answer ?? ''}}<br>
											</p>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	@endif
@endsection