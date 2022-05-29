<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Assets/login-form-20/css/style.css') }}">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
	@if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
      </button>
    </div>
    @endif
	
	</head>
	<body class="img js-fullheight" style="background-image: url({{ asset('Assets/login-form-20/images/bg.jpg') }});">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #10</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form method="POST" action="{{ route('Auth.login.proses') }}" class="signin-form">
					@csrf
                    <div class="form-floating">
                        <input type="username" class="form-control" name="username" id="floatingInput" placeholder="username" required>
                      </div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
							  <input type="checkbox" checked>
								  <span class="checkmark"></span>
								</label>
							</div>
				<div class="w-50 text-md-right">
					<a href="#" class="btn btn-danger" style="color: #fff">register now!</a>
				 	</div>
	            </div>
				<p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
			</form>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('Assets/login-form-20/js/jquery.min.js') }}"></script>
  <script src="{{ asset('Assets/login-form-20/js/popper.js') }}"></script>
  <script src="{{ asset('Assets/login-form-20/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('Assets/login-form-20/js/main.js') }}"></script>

	</body>
</html>

