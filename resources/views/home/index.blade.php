@extends('layouts.app-master')

@section('content')
<div class="hero overlay" style="background-image: url('images/im2.png')">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 text-left">
					<span class="subheading-white text-white mb-3" data-aos="fade-up">Volunteer</span>
					<h1 class="heading text-white mb-2" data-aos="fade-up">Give a helping hand to those who need it!</h1>
					<p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">text</p>
					<p data-aos="fade-up"  data-aos-delay="100">
						<a href="#" class="btn btn-primary me-4 d-inline-flex align-items-center"> <span class="icon-attach_money me-2"></span><span>Donate Now</span></a> 
						 <a href="https://www.youtube.com/watch?v=mwtbEGNABWU" class="text-white glightbox d-inline-flex align-items-center"><span class="icon-play me-2"></span><span>Watch the video</span></a>
					</p>		
					
				</div>


			</div>
		</div>
	</div>

	<div class="section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-6" data-aos="fade-up">
					<div class="vision">
						<h2>Our Vision</h2>
						<p class="mb-4 lead"> more details</p>
						<p><a href="#" class="link-underline">Learn More</a></p>
					</div>
				</div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
					<div class="mission">
						<h2>Our Mission</h2>
						<p class="mb-4 lead">more details</p>
						<p><a href="#" class="link-underline">Learn More</a></p>
					</div>
				</div>
			</div>		
		</div>		
	</div>


	<div class="section flip-section" style="background-image: url('images/im6.jpg')">
		<div class="blob-1">
			<img src="images/blob.png" alt="Image" class="img-fluid">
		</div>
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-lg-7 text-center" data-aos="fade-up">
					<span class="subheading-white mb-3 text-white">Help Now</span>
					<h2 class="heading text-white">Help Today</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 position-relative" data-aos="fade-up" data-aos-delay="100">
					<div class="card-flip">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								<div class="flip-content-wrap">
									<span class="icon-local_drink"></span>
									<h3>type 1</h3>
								</div>
							</div>
							<div class="back">
								<!-- back content -->
								<div class="flip-content-wrap">
									<h3>type 1 </h3>
									<p>more details</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Card Flip -->
				</div>
				<div class="col-lg-3 position-relative" data-aos="fade-up" data-aos-delay="200">
					<div class="card-flip">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								<div class="flip-content-wrap">
									<span class="icon-graduation-cap"></span>
									<h3>type 2</h3>
								</div>
							</div>
							<div class="back">
								<!-- back content -->
								<div class="flip-content-wrap">
									<h3>type 2</h3>
									<p>more details.</p>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-lg-3 position-relative" data-aos="fade-up" data-aos-delay="300">
					<div class="card-flip">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								<div class="flip-content-wrap">
									<span class="icon-dollar"></span>
									<h3>type 3</h3>
								</div>
							</div>
							<div class="back">
								<!-- back content -->
								<div class="flip-content-wrap">
									<h3>type 3</h3>
									<p>more details</p>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-lg-3 position-relative" data-aos="fade-up" data-aos-delay="400">
					<div class="card-flip">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								<div class="flip-content-wrap">
									<span class="icon-medkit"></span>
									<h3>type 4</h3>
								</div>
							</div>
							<div class="back">
								<!-- back content -->
								<div class="flip-content-wrap">
									<h3>type 4</h3>
									<p>more details</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>		
		</div>		
	</div>




	<div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center justify-content-between">
				<div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
					<span class="subheading mb-3">Who we are</span>
					<h2 class="heading">About Us</h2>
					<p>more details</p>
				</div>

				
			</div>
			<div class="row justify-content-between">
				<div class="col-lg-5 pe-lg-5" data-aos="fade-up" data-aos-delay="200">

					<ul class="nav nav-pills mb-5 custom-nav-pills" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="pills-mission-tab" data-bs-toggle="pill" data-bs-target="#pills-mission" type="button" role="tab" aria-controls="pills-mission" aria-selected="true">Our Mission</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-values-tab" data-bs-toggle="pill" data-bs-target="#pills-values" type="button" role="tab" aria-controls="pills-values" aria-selected="false">Our Values</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-history-tab" data-bs-toggle="pill" data-bs-target="#pills-history" type="button" role="tab" aria-controls="pills-history" aria-selected="false">Our History</button>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-mission" role="tabpanel" aria-labelledby="pills-mission-tab">
							<h2 class="mb-3 text-primary fw-bold">Our Mission</h2>
							<p>more details</p>
							<p class="mt-5">
								<a href="#" class="btn btn-primary me-4">Donate Now</a>
								<a href="#" class="link-more">Learn More <span class="icon-chevron-right"></span></a>
							</p>
						</div>
						<div class="tab-pane fade" id="pills-values" role="tabpanel" aria-labelledby="pills-values-tab">
							<h2 class="mb-3 text-primary fw-bold">Our Values</h2>
							<p>more details</p>
							<p class="mt-5">
								<a href="#" class="btn btn-primary me-4">Be A Volunteer</a>
								<a href="#" class="link-more">Learn More <span class="icon-chevron-right"></span></a>
							</p>
						</div>
						<div class="tab-pane fade" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">

							<h2 class="mb-3 text-primary fw-bold">Our History</h2>
							<p>more details</p>
							<p class="mt-5">
								<a href="#" class="btn btn-primary me-4">Be a Sponsor</a>
								<a href="#" class="link-more">Learn More <span class="icon-chevron-right"></span></a>
							</p>
						</div>
					</div>

				</div>
				<div class="col-lg-6">
					<div class="overlap-imgs">
						<img src="images/im5.jpg" alt="Image" class="img-fluid rounded" data-aos="fade-up" data-aos="100">
						<img src="images/im3.jpg" alt="Image" class="img-fluid rounded" data-aos="fade-up" data-aos="200">
					</div>
				</div>		
			</div>		
		</div>		
	</div>


	

	<div class="site-footer">
		<div class="container">

			<div class="row">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="widget">
						<h3>Navigation</h3>
						<ul class="list-unstyled float-left links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Donate Now</a></li>
							<li><a href="#">Causes</a></li>
							<li><a href="#">Volunteer</a></li>
							<li><a href="#">Terms</a></li>
							
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="widget">
						<h3>Popular Causes</h3>
						<ul class="list-unstyled float-left links">
							<li><a href="#">Food for the Hungry</a></li>
							<li><a href="#">Education for Children</a></li>
							<li><a href="#">Support for Livelihood</a></li>
							<li><a href="#">Medical Mission</a></li>
							<li><a href="#">Education</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="widget">
						<h3>Services</h3>
						<ul class="list-unstyled float-left links">
							<li><a href="#">Causes</a></li>
							<li><a href="#">Volunteer</a></li>
							<li><a href="#">Terms</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->


				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="widget">
						<h3>Contact</h3>
						<address>Address</address>
						<ul class="list-unstyled links mb-4">
							<li><a href="">123456</a></li>
							<li><a href="">123456</a></li>
							<li><a href="">info@mydomain.com</a></li>
						</ul>

						<h3>Connect</h3>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul>

					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

			</div> <!-- /.row -->


			<div class="row mt-5">
				<div class="col-12 text-center">
					<p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed  
					</p>
				</div>
			</div>
		</div> <!-- /.container -->
	</div> <!-- /.site-footer -->







	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>
@endsection