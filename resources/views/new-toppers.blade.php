@extends('master')
	
@section('content')
	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url({{ asset('images/toppers.jpg') }});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Our Toppers</h1>
								
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	
	<div id="fh5co-staff">
		<div class="container">
			<div class="row">

			

                    <div class="col-md-3 text-center">
						<div class="staff">
							<div class="staff-img" style="background-image: url({{ asset( 'images/25.jpg') }});">
								
							</div>
							<span>Class 12</span>
							<h3><a>KAHKASHA NAZ</a></h3>
							<p>Percentage: 95.40%</p>
						</div>
					</div>

                    <div class="col-md-3 text-center">
						<div class="staff">
							<div class="staff-img" style="background-image: url({{ asset( 'images/9.jpg') }});">
								
							</div>
							<span>Class 12</span>
							<h3><a>KHUSHI AWASTHI</a></h3>
							<p>Percentage: 94.20%</p>
						</div>
					</div>

                    <div class="col-md-3 text-center">
						<div class="staff">
							<div class="staff-img" style="background-image: url({{ asset( 'images/7.jpg') }});">
								
							</div>
							<span>Class 12</span>
							<h3><a>SHREYA SINGH YADAV</a></h3>
							<p>Percentage: 92.00%</p>
						</div>
					</div>

                    <div class="col-md-3 text-center">
						<div class="staff">
							<div class="staff-img" style="background-image: url({{ asset( 'images/57.jpg') }});">
								
							</div>
							<span>Class 12</span>
							<h3><a>MUSKAN</a></h3>
							<p>Percentage: 91.20%</p>
						</div>
					</div>

                    <div class="col-md-3 text-center">
						<div class="staff">
							<div class="staff-img" style="background-image: url({{ asset( 'images/3.jpg') }});">
								
							</div>
							<span>Class 12</span>
							<h3><a>TARANG MISHRA</a></h3>
							<p>Percentage: 90.40%</p>
						</div>
					</div>

                    <div class="col-md-3 text-center">
						<div class="staff">
							<div class="staff-img" style="background-image: url({{ asset( 'images/11.jpg') }});">
								
							</div>
							<span>Class 12</span>
							<h3><a>ADITYA PRATAP SINGH</a></h3>
							<p>Percentage: 90.00%</p>
						</div>
					</div>
						

			</div>
		</div>
	</div>

	
	@endsection	

