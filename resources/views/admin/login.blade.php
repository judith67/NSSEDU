<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>Login </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/Logo.jpg') }}">

    <!-- Template -->
    <link rel="stylesheet" href="{{ asset('admin/public/graindashboard/css/graindashboard.css') }}">
  </head>

  <body class="">

    <main class="main">

      <div class="content">

			<div class="container-fluid pb-5">

				<div class="row justify-content-md-center">
					<div class="card-wrapper col-12 col-md-4 mt-5">
						<div class="brand text-center mb-3">
							<a href="/"><img width="200" height="200" src="{{ asset('images/Logo.jpg') }}"> </a>
						</div>
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Login</h4>
								<form action="/login_post" method="post">
									<div class="form-group">
										<label for="email">username</label>
										<input id="email" type="text" class="form-control" name="email" required="true" autofocus="">
									</div>

									<div class="form-group">
										<label for="password">Password
										</label>
										<input id="password" type="password" class="form-control" name="password" required="true">
										<!-- <div class="text-right">
											<a href="password-reset.html" class="small">
												Forgot Your Password?
											</a>
										</div> -->
									</div>

									<!-- <div class="form-group">
										<div class="form-check position-relative mb-2">
										  <input type="checkbox" class="form-check-input d-none" id="remember" name="remember">
										  <label class="checkbox checkbox-xxs form-check-label ml-1" for="remember"
												 data-icon="&#xe936">Remember Me</label>
										</div>
									</div> -->

									<div class="form-group no-margin">
										<button type="submit" class="btn btn-primary btn-block">
											Log In
										</button>
										<p style="text-align: center; color: red;">{{ $err_msg ?? ''}}</p>
									</div>
									<!-- <div class="text-center mt-3 small">
										Don't have an account? <a href="register.html">Sign Up</a>
									</div> -->
									{{ csrf_field()}}
								</form>
							</div>
						</div>
						<footer class="footer mt-3">
							<div class="container-fluid">
								<div class="footer-content text-center small">
									<span class="text-muted">&copy; 2021 Mismo Solutions. All Rights Reserved.</span>
								</div>
							</div>
						</footer>
					</div>
				</div>



			</div>

      </div>
    </main>

	<script src="{{ asset('admin/public/graindashboard/js/graindashboard.js') }}"></script>
    <script src="{{ asset('admin/public/graindashboard/js/graindashboard.vendor.js') }}"></script>
  </body>
</html>