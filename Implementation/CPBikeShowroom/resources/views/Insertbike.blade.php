@extends('Navigation.layouts')
@section('super_container')


<link rel="stylesheet" type="text/css" href="styles/util.css">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	
	

				<form class="login100-form validate-form" method="post" action="{{url('Bike')}}" >
                {{ csrf_field() }}
                        					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100">Bike Name</span>
						<input class="input100" type="text" name="bikename" placeholder="Enter Your Full Name" required autofocus>
					
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate = "Bike mielage is required">
						<span class="label-input100">Bike mielage</span>
						<input class="input100" type="text" name="mielage" placeholder="Enter Bike miealage"  required autofocus>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18"  data-validate = "Email is required">
						<span class="label-input100">Bike CC</span>
						<input class="input100" type="text" name="cc" placeholder="Enter Bike CC"  required autofocus>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18"  data-validate = "Phoneno is required">
						<span class="label-input100"> Bike weight</span>
						<input class="input100" type="text" name="weight" placeholder="Enter Bike Weight" required autofocus>


						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18"   data-validate = "DOB is required">
						<span class="label-input100"> Bike Price</span>
						<input class="input100" type="text" name="price" placeholder="Enter Bike price"  required autofocus>
						<span class="focus-input100"></span>
					</div>
 </span>


						<button type="submit" class="login100-form-btn">
							Insert
						</button>
				</form>
			</div>
		</div>
	</div>
	
	@endsection
