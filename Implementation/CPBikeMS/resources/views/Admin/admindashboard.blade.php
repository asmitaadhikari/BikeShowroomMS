<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin </title>
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="Admin/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="Admin/css/fullcalendar.min.css">
    <!-- https://fullcalendar.io/ -->
    <link rel="stylesheet" href="Admin/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="Admin/css/tooplate.css">
</head>

<body id="reportsPage">
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="/admindashboard">
                            <i class="fas fa-3x fa-tachometer-alt tm-site-icon"></i>
                            <h1 class="tm-site-title mb-0">Bike-Shop</h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">

                            <li class="nav-item active">
                                <a class="nav-link" href="/admindashboard">Dashboard
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Add
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/InsertProductCategory">Add Product Category</a>
                                        <a class="dropdown-item" href="/Insertproduct">Add Product</a>
                                       
                                    </div>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="/Viewbooking">View Booking
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/ViewOrder">View Order
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Settings
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Profile</a>
                                        <a class="dropdown-item" href="/Billing">Billing</a>
                                    </div>
                                </li>
                               
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="{{ route('logout')}}" 
                                    
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i>Logout</a></a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{@csrf_field()}}
                                        <i class="far fa-user mr-2 tm-logout-icon"></i>
                                        
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- row -->
          
            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block">User List</h2>

                            </div>
                           
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3">
                                <thead>
                                    <tr class="tm-bg-gray">
                                    <th scope="col">S No.</th>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Email Address</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($user->count())
	                                @foreach($user as $key=>$users)
                                    <tr>
                                    <td>{!!$key + 1 !!}</td>
                                       
                                        <td class="tm-product-name">{!! $users->name !!}</td>
                                        <td class="tm-product-name">{!! $users->email !!}</td>
                                       
                                    </tr>
                                   
                                    @endforeach

                                    @else
                <tr>
                    <td colspan="4"> No record found</td>
                </tr>
            @endif
                                    
                                   
                                  
                                </tbody>
                            </table>
                        </div>
          
        </div>
    </div>
    <footer class="row tm-mt-small">
                <div class="col-12 font-weight-light">
                    <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                        Copyright &copy; 2019 Admin Dashboard . Created by Asmita Adhikari
                        <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link"></a>
                    </p>
                </div>
            </footer>
    <script src="Admin/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="Admin/js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="Admin/js/utils.js"></script>
    <script src="Admin/js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="Admin/js/fullcalendar.min.js"></script>
    <!-- https://fullcalendar.io/ -->
    <script src="Admin/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="Admin/js/tooplate-scripts.js"></script>
    <script>
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            updateChartOptions();
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart
            drawCalendar(); // Calendar

            $(window).resize(function () {
                updateChartOptions();
                updateLineChart();
                updateBarChart();
                reloadPage();
            });
        })
    </script>
</body>
</html>