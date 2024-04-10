@extends('layouts.app-master')

@section('content')
<div class="hero overlay" style="background-image: url('images/im3.jpg')">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 text-center">
					<h1 class="heading text-white mb-2" data-aos="fade-up">Contact Us</h1>
					<p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">details</p>
					<p data-aos="fade-up"  data-aos-delay="100">
						<a href="#" class="btn btn-primary me-4">Donate Now</a> 
					</p>		
					
				</div>

				
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6" data-aos="fade-up">
					<h2 class="heading">contact As</h2>
					<p class="text-black-50">Send message to Admin</p>
				</div>
			</div>

			<form action="" class="row justify-content-between">

				<div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
					<div class="row">

						<div class="mb-3 col-lg-6">
							<label for="name" class="ps-3 fw-bold mb-2">Name</label>
							<input type="text" class="form-control" id="name">
						</div>
						<div class="mb-3 col-lg-6">
							<label for="email" class="ps-3 fw-bold mb-2">Email</label>
							<input type="email" class="form-control" id="email">
						</div>

						<div class="mb-3 col-lg-12">
							<label for="message" class="ps-3 fw-bold mb-2">Message</label>
							<textarea name="" id="message" class="form-control" cols="30" rows="10"></textarea>
						</div>	

						<div class="col-lg-6">
							<input type="submit" class="btn btn-primary text-white py-3" value="Send Message">
						</div>

					</div>
				</div>
				<div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="200">
					<div class="row">
						<div class="col-6 col-lg-6 mb-4">
							<h3 class="h6 fw-bold text-secondary">Address</h3>
							<p>Add</p>
						</div>
						<div class="col-6 col-lg-6 mb-4">
							<h3 class="h6 fw-bold text-secondary">Phone</h3>
							<p>
							1234566
								
							</p>
						</div>

						<div class="col-6 col-lg-6 mb-4">
							<h3 class="h6 fw-bold text-secondary">Follow</h3>
							<ul class="list-unstyled social-custom">
								<li><a href="#"><span class="icon-instagram"></span></a></li>
								<li><a href="#"><span class="icon-twitter"></span></a></li>
								<li><a href="#"><span class="icon-facebook"></span></a></li>
								<li><a href="#"><span class="icon-linkedin"></span></a></li>
								<li><a href="#"><span class="icon-pinterest"></span></a></li>
								<li><a href="#"><span class="icon-dribbble"></span></a></li>
							</ul>
						</div>
						<div class="col-6 col-lg-6 mb-4">
							<h3 class="h6 fw-bold text-secondary">Email</h3>
							<p>
								<a href="#">info@mydomain.com</a>
							</p>
						</div>

					</div>
				</div>
				

			</form>
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