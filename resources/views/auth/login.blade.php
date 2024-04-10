@extends('layouts.app-master')



@section('content')


<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section vh-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
	


{{ csrf_field() }}

    <form method="post" action="{{ route('login.perform') }}">
    
        @include('layouts.partials.messages')
       
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Email" required="required" autofocus>
           
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
           
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        
        @include('auth.partials.copy')
    </form>

    </div>
				</div>
			</div>
		</div>
	</section>
@endsection