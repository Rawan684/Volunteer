@extends('layouts.app-master')



@section('content')
<body  style="background-image: url(images/bg.jpg);background-repeat: no-repeat;
background-size: cover;height:100%; ">
<div  style="margin-top: 0px;">
</br>
</br>
</br>


			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-3">
					<h2 class="heading-section">Add Donations</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	
    <form method="get" action="{{ route('home.storeRec') }}">

    


        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}"  required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
        <input type="text" class="form-control" name="donationstype"  placeholder="donations type" required="required" autofocus>
   
        </div>
		<div class="form-group">
        <input type="text" class="form-control" name="phone"  placeholder="phone" required="required">
           
        </div>
        <div class="form-group">
        <input type="text" class="form-control" name="posttitle"  placeholder="title" required="required">
           
        </div>
		<div class="form-group">
        <textarea rows="4" cols="50" type="text" class="form-control" name="posttext"  placeholder="post text" required="required">
</textarea>
        </div>
       
		<input type=hidden name="confirm" value="false"/>          
      
        <input type="file" class="form-control" name="image_1"  placeholder="image 1" required="required">
           
        <input type="file" class="form-control" name="image_2"  placeholder="image 2" required="required">
              
		<div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Add</button>
	            </div>        
               
    </form>
	         
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