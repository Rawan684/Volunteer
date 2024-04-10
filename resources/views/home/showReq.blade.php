@extends('layouts.app-master')

@section('content')



	<div class="hero overlay" style="background-image: url('images/im3.jpg')">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 text-center mx-auto">
					<span class="subheading-white text-white mb-3" data-aos="fade-up">Recipients</span>

					<h1 class="heading text-white mb-2" data-aos="fade-up">posts</h1>
					<p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">more details</p>
					
				</div>

				
			</div>
		</div>
	</div>

	

	<div class="section bg-light">
		<div class="container">

		<div class="col-md-12 text-center mb-5">
					<h2 class="">Recipients</h2>
				</div>

			<div class="row">



			@if(count($data) > 0)

				@foreach($data as $row)

					
				<div class="col-lg-4 col-md-6">
					<div class="causes-item bg-white">
						<a href="#"><img src="images/im1.jpg" height=100 alt="Image" class="img-fluid mb-4 rounded"></a>
						<div class="px-4 ">
						
							<h3>{{ $row->posttitle}}</h3>
							<p>{{$row->posttext}}</p>
						

							
						</div>
					</div>
				</div>	
				
				

				@endforeach

@else
	<tr>
		<td colspan="5" class="text-center">No Data Found</td>
	</tr>
@endif

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
	</div> <!






	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>


@endsection