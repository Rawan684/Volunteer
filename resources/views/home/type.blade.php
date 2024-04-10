@extends('layouts.app-master')



@section('content')
<body  style="background-image: url(images/bg.jpg);background-repeat: no-repeat;
background-size: cover;height:100%; ">
<div  style="margin-top: 60px;">
</br>
</br>
</br>
</br>
</br>
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-3">
					<h2 class="heading-section">Send Reqguest</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	
   

    


      
      
        
 


    
                <div class="form-group">

				<a class="form-control btn btn-primary submit px-3" href="{{ route('home.AddRec') }}">Recipients</a>
	            <a class="form-control btn btn-primary submit px-3" href="{{ route('home.AddDon') }}">Donations</a>	
	            </div>
	            
     
		      </div>
				</div>
			</div>
		</div>
	</section>


	<script src="master-js/jquery.min.js"></script>
  <script src="master-js/popper.js"></script>
  <script src="master-js/bootstrap.min.js"></script>
  <script src="master-js/main.js"></script>
</body>
  
@endsection