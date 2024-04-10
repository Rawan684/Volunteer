
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <!-- <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> -->
    <link rel="stylesheet" href="master-css/bootstrap.min.css">
    <link rel="stylesheet" href="master-css/all.css">
    <link rel="stylesheet" href="master-css/dash.css">
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="sidebar position-fixed p-3 vh-100 bg-dark">
                    <div class="heading mb-5 d-flex justify-content-center align-items-center">
                        <h2 class="text-white p-2">Admin</h2>
                    </div>
                    <div class="links">
                        <ul>
                            <li class="test">
                                <a href="{{ route('home.Dash') }}" class="">
                                    <i class="fa-regular fa-chart-bar"></i>
                                    <span>طلبات التلقي</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('home.dashdon') }}">
                                    <i class="fa-solid fa-gear"></i>
                                    <span>طلبات التبرع</span>
                                </a>
                            </li>
                           
                            
                        </ul>
                    </div>
                </div>
                <div class="receive p-3">
                    <div class="mb-5 ">
                        <h1>طلبات التلقي</h1>
                    </div>
                    <div class="requests">
                        <table class="table text-center w-100 table-striped table-dark overflow-auto">
                            <thead>
                                <tr>
                                
                                    
                                    <th scope="col">email</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">post title</th>
                                    <th scope="col">post text</th>
                                    <th scope="col" class="text-center">confirm</th>
                                    <th scope="col" class="text-center">control</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($data) > 0)

                            @foreach($data as $row)
                                <tr class="">
                                    
                                    <td>{{ $row->email}}</td>
                                    <td>{{ $row->phone}}</td>
                                    <td>{{ $row->posttitle}}</td>
                                    <td>{{ $row->posttext}}</td>
                                    <td>{{ $row->confirm}}</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="{{ route('home.destroyr') }}" class="btn btn-danger">Refuse</a>
                                        <button id="accept" class="btn btn-success">Accept</button>
                                       
                                    </td>
                                </tr>
                                @endforeach

@else
	<tr>
		<td colspan="5" class="text-center">No Data Found</td>
	</tr>
@endif
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="master-js/bootstrap.bundle.min.js"></script>
    <script src="master-js/jquery.min.js"></script>
    <script src="master-js/dash.js"></script>
</body>
</html>