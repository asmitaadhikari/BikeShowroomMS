@extends('Navigation.layouts')
@section('super_container')

<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="styles/util.css">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In Here!!!
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="{{ url('/regis') }}">
                        {{ csrf_field() }}
					<div class="wrap-input100 validate-input m-b-26 {{ $errors->has('name') ? ' has-error' : '' }}" >
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="name" placeholder="Enter Your Full Name" value="{{ old('name') }}" required autofocus>
						@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26{{ $errors->has('address') ? ' has-error' : '' }}" data-validate = "Address is required">
						<span class="label-input100">Address</span>
						<input class="input100" type="text" name="address" placeholder="Enter Address" value="{{ old('address') }}" required autofocus>

@if ($errors->has('address'))
	<span class="help-block">
		<strong>{{ $errors->first('address') }}</strong>
	</span>
@endif
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18 { $errors->has('email') ? ' has-error' : '' }}"  data-validate = "Email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter Your Adress" value="{{ old('email') }}" required autofocus>

@if ($errors->has('email'))
	<span class="help-block">
		<strong>{{ $errors->first('address') }}</strong>
	</span>
@endif
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18 { $errors->has('number') ? ' has-error' : '' }}"   data-validate = "Phoneno is required">
						<span class="label-input100"> Number</span>
						<input class="input100" type="text" name="number" placeholder="Enter Phone Number" value="{{ old('number') }}" required autofocus>

@if ($errors->has('number'))
	<span class="help-block">
		<strong>{{ $errors->first('number') }}</strong>
	</span>
@endif
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18 { $errors->has('dob') ? ' has-error' : '' }}"  data-validate = "DOB is required">
						<span class="label-input100"> DOB</span>
						<input class="input100" type="date" name="dob" placeholder="Enter DOB" value="{{ old('dob') }}" required autofocus>

@if ($errors->has('dob'))
	<span class="help-block">
		<strong>{{ $errors->first('dob') }}</strong>
	</span>
@endif
						<span class="focus-input100"></span>
					</div>
					

				
					<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26 data-validate="Name is required">
						<span class="label-input100" required autofocus>

	
 </span>
 <div class="form-group row">
              <label class="col-sm-2 font-weight-bold text-secondary">Gender: </label>
              <div class="col-sm-10">
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="gender" id="optMale" value="Male" checked>
                      <label class="form-check-label" for="optMale">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="gender" id="optFemale" value="Female">
                      <label class="form-check-label" for="optFemale">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" type="radio" name="gender" id="optOthers" value="Others">
                      <label class="form-check-label" for="optOthers">Others</label>
                  </div>

                  @if ($errors->has('gender'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
              </div>
            </div>

						<button type="submit" class="login100-form-btn">
							Sign-Up
						</button>
				</form>
			</div>
		</div>
	</div>
	
	@endsection

	