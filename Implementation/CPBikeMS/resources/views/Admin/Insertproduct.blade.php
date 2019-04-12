<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product|Dashboard Admin</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="Admin/css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="Admin/jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="Admin/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="Admin/css/tooplate.css">
</head>

<body class="bg02">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-xl navbar-light bg-light">
                    <a class="navbar-brand" href="/admindashboard">
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
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Insert
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/InsertProductCatogory">Insert Product Category</a>
                                    <a class="dropdown-item" href="/products">Insert Product</a>
                                    
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/products">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="">Accounts</a>
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
        <div class="row tm-mt-big">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add Product</h2>
                        </div>
                    </div>
                    <div class="row mt-4 tm-edit-product-row">
                        <div class="col-xl-7 col-lg-7 col-md-12">
                            <form action="" class="tm-edit-product-form" method="post" action="{{url('/Admin.Insertproduct')}}" enctype="multipart/form-data" >
                {{ csrf_field() }}
                                <div class="input-group mb-3">
                                    <label for="name" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Product
                                        Name
                                    </label>
                                    <input id="name" name="name" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="cc" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 mb-2"> Displacement</label>
                                    
                                    <input id="cc" name="cc" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7">
                                </div>
                                
                                 <div class="input-group mb-3">
                                
                                    <label for="category" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Product Category</label>
                                   
                                    <select class="custom-select col-xl-9 col-lg-8 col-md-8 col-sm-7" name="category">
                                    
                                    <option value="">Select Category</option>
                                     @foreach( $product as $data ) 
                                        <option value={{ $data->producttypeid}}>{{$data->producttypename}}</option>
    
                                     @endforeach
                                    
                                    </select>
                                    
                                </div>  
                                <div class="input-group mb-3">
                                    <label for="fuel" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Fuel Economy
                                        
                                    </label>
                                    <input id="fuel" name="fuel" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7"
                                        data-large-mode="true">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="gear" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">No Of Gears
                                        
                                    </label>
                                    <input id="gear" name="gear" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="speed" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Speedometer
                                        
                                    </label>
                                    <input id="speed" name="speed" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="technology" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Latest Technology
                                        
                                    </label>
                                    <input id="technology" name="technology" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="tyre" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Tyre Type
                                        
                                    </label>
                                    <input id="tyre" name="tyre" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="price" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Price
                                        
                                    </label>
                                    <input id="price" name="price" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="price" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Stroke
                                        
                                    </label>
                                    <input id="stroke" name="stroke" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="price" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Clutch
                                        
                                    </label>
                                    <input id="clutch" name="clutch" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <label for="price" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Warranty
                                        
                                    </label>
                                    <input id="warranty" name="warranty" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-7 col-sm-7">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="ml-auto col-xl-8 col-lg-8 col-md-8 col-sm-7 pl-0">
                                        <button type="submit" class="btn btn-primary">Add
                                        </button>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 mx-auto mb-4">
                            <div class="tm-product-img-dummy mx-auto">
                                <i class="fas fa-5x fa-cloud-upload-alt" onclick="document.getElementById('fileInput').click();"></i>
                            </div>
                            <div class="custom-file mt-3 mb-3">
                                <!-- <input id="fileInput" name="img" type="file" style="display:none;" /> -->
                                <input type="file" accept=".png, .jpg, .jpeg"  id="uploadImage" name="image" class="form-control{{ $errors->has('img') ? ' is-invalid' : '' }} style="display:none;" / required >
                             <!-- <input type="button" class="btn btn-primary d-block mx-auto" value="Upload ..." onclick="document.getElementById('fileInput').click();"> -->
                                
                             <button type="submit" class="btn btn-primary" value="Upload ..." onclick="document.getElementById('fileInput').click();">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>

         
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
                                        <th scope="col">&nbsp;</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col" class="text-center">Price</th>
                                        <th scope="col" class="text-center">Category</th>
                                        <th scope="col">Engine Displacement</th>
                                       
                                        <th scope="col">Control</th>
                                        <th scope="col">&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if($product->count())
	                                @foreach($product as $key=>$products)
                                    <tr>
                                    <td>{!!$key + 1 !!}</td>
                                       
                                        <td class="tm-product-name">{!! $products->name !!}
                                        <a  style="color:red;" class="viewmore"  data-toggle="collapse" data-parent="#accordion" href="#{{ $products->productid}}"> View More</a>
                                            
                    <div id="{{$products->productid}}" class="panel-collapse collapse in">
                    <h6>
                   Gear:
                    <label style="font-weight:400;">{!! $products->gear !!}</label>
                    </h6>
                    </div>
                                         </td>
                                        <td class="tm-product-name">{!! $products->price!!}</td>
                                        <td class="tm-product-name">{!! $products->producttypename!!}</td>
                                        <td class="tm-product-name">{!! $products->cc!!}</td>
                                       
                                     
                                        <td> 
                                        <form action="{{url('/Insertproduct',$products->productid)}}" method="POST">
		                                    {{ csrf_field() }} 
   
                                            {!! method_field('DELETE') !!}
                                                <button class="btn btn-primary btn-lg" type="submit" >
                                                <i class="fas fa-trash-alt tm-trash-icon"></i>
                                                </button>
                                            
                                            </form>
                                            
                                       </td>
                                       
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

                        <div class="tm-table-mt tm-table-actions-row">
                           
                            
                        </div>
                    </div>
                </div>
    
        <footer class="row tm-mt-big">
            <div class="col-12 font-weight-light">
                <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright &copy; 2019 Admin Dashboard . Created by|Asmita Adhikari
                    <a rel="nofollow" href="https://www.tooplate.com" class="text-white tm-footer-link"></a>
                </p>
            </div>
        </footer>
    </div>

    

    <script src="Admin/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="Admin/jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="Admin/js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('#expire_date').datepicker();
        });
    </script>
</body>

</html>