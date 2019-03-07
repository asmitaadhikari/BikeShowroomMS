@extends('Navigation.layouts')
@section('super_container')
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="styles/util.css">
	<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					 <span class="login100-form-title-1"> 
					<h1><a href="/Registration">SignUp</a></h1>
					
						
					 </span> 
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}>
					<div class="wrap-input100 validate-input m-b-26 {{ $errors->has('Username') ? ' has-error' : '' }}" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username"  value="{{ old('email') }}" required autofocus>
						@if ($errors->has('Username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Username') }}</strong>
                                    </span>
                                @endif
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18 {{ $errors->has('password') ? ' has-error' : '' }}" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password"    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1" name="remember" {{ old('remember') ? 'checked' : '' }}>
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	@endsection

	

