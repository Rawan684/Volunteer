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
					<h2 class="heading-section">Register</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	
    <form method="post" action="{{ route('register.perform') }}">

    


        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      
        
 


        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}"  required="required" >
            <label for="floatingEmail">Email address</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group">
        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
           
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group">
        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
           
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
	            </div>
       

                <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

    
                <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            
                @include('auth.partials.copy')
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