<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accounts Page - Dashboard Template</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="Admin/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="Admin/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="Admin/css/tooplate.css">
</head>

<body class="bg03">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl navbar-light bg-light">
                    <a class="navbar-brand" href="index.html">
                        <i class="fas fa-3x fa-tachometer-alt tm-site-icon"></i>
                        <h1 class="tm-site-title mb-0">Dashboard</h1>
                    </a>
                    <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/admindashboard">Dashboard
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Insert
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/InsertProductCategory"> Insert Product Category</a>
                                    <a class="dropdown-item" href="/Insertproduct"> Insert Product</a>
                                    <a class="dropdown-item" href="index.html">Yearly Report</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/addproducts"> Products</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#">Accounts</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Settings
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Billing</a>
                                    <a class="dropdown-item" href="#">Customize</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="login.html">
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
            <div class="tm-col tm-col-big">
                <div class="bg-black tm-block">
                    <div class="row">
                        <div class="col-12">
                            <!-- <h2 class="tm-block-title d-inline-block">Products List</h2> -->
                        </div>
                    </div>
                    <!-- <ol class="tm-list-group tm-list-group-alternate-color tm-list-group-pad-big">
                        <li class="tm-list-group-item">
                            Donec eget libero
                        </li>
                        
                    </ol> -->
                    <div class="col-12 col-sm-4">
                                        <!-- <button type="submit" class="btn btn-primary">Update
                                        </button> -->
                                    </div>
                                   

                                   
                </div>
            </div>
            <div class="tm-col tm-col-big">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title">Insert Product Category</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form action="" class="tm-signup-form" method="POST" action="{{url('/Admin.InsertProductCategory')}}" >
                            {{ csrf_field() }}
                                <div class="form-group">
                                   
                                    <input type="text" placeholder="Enter Product Name"id="name" name="p_type" type="text" class="form-control validate">
                                   
                                </div>
                               
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <button type="submit" class="btn btn-primary">Insert
                                        </button> <br> <br>
                                       
                                    </div>
                                 
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-col tm-col-small">
                <div class="bg-black tm-block">
                   
                    </div>
                </div>
            </div>
        </div>
        <form action="{{url('/Admin/InsertProductCategory')}}">
        <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-8 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block">Products</h2>

                            </div>
                            <div class="col-md-4 col-sm-12 text-right">
                                <a href="/Insertproduct" class="btn btn-small btn-primary">Add New Product</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped tm-table-striped-even mt-3">
                                <thead>
                                    <tr class="tm-bg-gray">
                                    <th scope="col">S No.</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Control</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($product->count())
	                                @foreach($product as $key=>$products)
                                    <tr>
                                    <td>{!!$key + 1 !!}</td>
                                       
                                        <td class="tm-product-name">{!! $products->producttypename !!}</td>
                                       
                                       <a href="/EditProductCategory/{{$products->producttypeid}}"
                                       class="tm-product-name">Edit
                                       </a>  
                                 
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
                        </form>

        <footer class="row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2019 Admin Dashboard . Created by| Asmita Adhikari
                    <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link"></a>
                </p>
            </div>
        </footer>
    </div>

    <script src="Admin/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="Admin/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
</body>

</html>