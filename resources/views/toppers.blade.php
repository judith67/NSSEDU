@extends('master')
	
@section('content')
	<div id="topper-banner">
		<h1 class="topper-title"><span>Meet Our Toppers</span></h1>
	</div>	
	<div id="fh5co-staff">
		<div class="container">
			<div class="row">

			@if(isset($toppers))

			@foreach ($toppers as $topper)

					<div class="col-md-3 text-center">
						<div class="staff">
							<div class="staff-img" style="background-image: url({{ asset('storage/'.$topper->image ?? '') }}); background-size: contain;">
								
							</div>
							<span>Class {{ $topper->class ?? '' }}</span>
							<h3><a>{{ $topper->name ?? '' }}</a></h3>
							<!-- <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.</p> -->
						</div>
					</div>
				@endforeach

			@endif		

			</div>
		</div>
	</div>

	
	@endsection	

