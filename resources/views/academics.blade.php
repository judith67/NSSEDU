@extends('master')
	
@section('content')
	
	<div id="academics-banner">
		<h1 class="topper-title">Our Academics</h1>
	</div>

	<div id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Classes</h2>
					<p>Here are our various classes and playgroups</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url({{ asset('images/project-1.jpg') }});">
						</a>
						<div class="desc">
							<h3><a href="/contact">Pre Primary Class</a></h3>
							<p>This class group consists of students from Nursery, LKG and UKG.</p>
							<span><a href="/contact" class="btn btn-primary btn-sm btn-course">Enroll</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url({{ asset('images/project-2.jpg') }});">
						</a>
						<div class="desc">
							<h3><a href="/contact">Primary Class</a></h3>
							<p>This class group consists of students from 1st, 2nd, 3rd, 4th and 5th class.</p>
							<span><a href="/contact" class="btn btn-primary btn-sm btn-course">Enroll</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url({{ asset('images/project-3.jpg') }});">
						</a>
						<div class="desc">
							<h3><a href="/contact">Junior Class</a></h3>
							<p>This class group consists of students from 6th, 7th and 8th class.</p>
							<span><a href="/contact" class="btn btn-primary btn-sm btn-course">Enroll</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url({{ asset('images/project-4.jpg') }});">
						</a>
						<div class="desc">
							<h3><a href="/contact">Secondary Class</a></h3>
							<p>This class group consists of students from 9th and 10th class.</p>
							<span><a href="/contact" class="btn btn-primary btn-sm btn-course">Enroll</a></span>
						</div>
					</div>
				</div>
				<div class="col-md-6 animate-box">
					<div class="course">
						<a href="#" class="course-img" style="background-image: url({{ asset('images/project-5.jpg') }});">
						</a>
						<div class="desc">
							<h3><a href="/contact">Higher Secondary School</a></h3>
							<p>This class group consists of students from 11th and 12th class.</p>
							<span><a href="/contact" class="btn btn-primary btn-sm btn-course">Enroll</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
@endsection
