<!doctype html>
<html lang="en">
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="master-css/bootstrap.min.css">
	<link rel="stylesheet" href="master-css/tiny-slider.css">
	<link rel="stylesheet" href="master-css/aos.css">
	<link rel="stylesheet" href="master-css/flatpickr.min.css">
	<link rel="stylesheet" href="master-css/glightbox.min.css">
	<link rel="stylesheet" href="master-css/master.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="master-css/prime.css">

</head>
<body>
    
    @include('layouts.partials.navbar')

    <main >
        @yield('content')
    </main>

   
 <script src="master-js/bootstrap.bundle.min.js"></script>
	<script src="master-js/tiny-slider.js"></script>

	<script src="master-js/flatpickr.min.js"></script>
	<script src="master-js/glightbox.min.js"></script>


	<script src="master-js/aos.js"></script>
	<script src="master-js/navbar.js"></script>
	<script src="master-js/counter.js"></script>
	<script src="master-js/custom.js"></script>   
  </body>
</html>