@extends('master')
	@section('content')
	<div id="certificate-banner">
		<h1 class="topper-title">Transfer Certificate</h1>
	</div>


	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">

				</div>
				<div class="col-md-6 animate-box">
					<h3 >Download Certificate</h3>
					<form action="/transfer_certificate" method="post">
						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" name="name" id="studentName" class="form-control" placeholder="Your name">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input required type="text" id="tcNumber" name="tcNumber" class="form-control" placeholder="Your Registration number">
							</div>
						</div>
						<div style="float: right;" class="form-group">
							<input  type="submit" value="Submit" class="btn btn-primary">
						</div>
						<p style="text-align: center; color: red;">{{ $err_msg ?? ''}}</p>
						{{ csrf_field()}}
					</form>		
				</div>
			</div>
			
		</div>
	</div>

	
	@endsection
	