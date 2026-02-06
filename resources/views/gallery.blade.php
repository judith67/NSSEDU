@extends('master')
	
	@section('content')
	
	<div id="gallery-banner">
		<h1 class="topper-title">Gallery</h1>
	</div>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Gallery</h2>
					<p>Here are some highlights from our school.</p>
				</div>
			</div>
			
			<div class="row">
				@if(isset($images))

					@foreach($images as $image)

					<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#" data-toggle="modal" data-target="#exampleModalCenter{{ $image->id}}" class="blog-img-holder" style="background-image: url({{ asset('storage/'.$image->image ?? '') }});"></a>
							
						</div>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="exampleModalCenter{{ $image->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
						<div style="width: 90%; height: 90%; " class="modal-dialog modal-dialog-centered" role="document">
						<img style="width: 100%; height: 100%; " src="{{ asset('storage/'.$image->image ?? '') }}" alt="Image">
							<!-- <div class="modal-content">
							<div class="modal-header">
								
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body" style=" height: 300px; background-image: url({{ asset('storage/'.$image->image ?? '') }});">
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
							</div> -->
						</div>
					</div>

					@endforeach

				@endif
				
			</div>
		</div>
	</div>

	
	@endsection




