@extends('master')
	
	@section('content')

	
	<div id="media-banner">
		<h1 class="topper-title">News &amp; Media</h1>
	</div>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>News &amp; Media</h2>
					<p>Here are some news about events that are happening in our school</p>
				</div>
			</div>
			
			<div class="row">

			@if(isset($medias))

				@foreach($medias as $media)

					<div class="col-lg-4 col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="#" data-toggle="modal" data-target="#exampleModalCenter{{ $media->id}}" class="blog-img-holder" style="background-image: url({{ asset('storage/'.$media->image ?? '') }});"></a>
							<div class="blog-text">
								<h3 style=" text-align: center;"><a href="#" data-toggle="modal" data-target="#exampleModalCenter{{ $media->id}}" ></a>{{ $media->title ?? ''}}</h3>
								
							</div> 
						</div>
					</div>

					<!-- Modal -->
					<div class="modal fade" id="exampleModalCenter{{ $media->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						<div class="modal-header">
							
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<img style=" margin-bottom: 20px;" src="{{ asset('storage/'.$media->image ?? '') }}" alt="Image" height="200" width="100%">
							<h5 style="text-align: center;  margin-bottom: 20px;" class="modal-title" id="exampleModalLongTitle">{{ $media->title ?? ''}}</h5>
							<p >{{ $media->content ?? ''}}</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
						</div>
					</div>
					</div>

				@endforeach

			@endif
				
				
			</div>
		</div>
	</div>

	
	@endsection