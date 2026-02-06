@extends('master')
	
@section('content')
<div id="home-banner">
		<h1 class="topper-title">The Roots of Education are Bitter, </br>But the Fruit is Sweet</h1>
		<p class="topper-btn"><a class="btn btn-primary btn-lg" href="/contact">Start Learning Now!</a></p>
	</div>

	
	<div style="display: none;" id="fh5co-course">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2><span>Our Approach To Education</span></h2>
					<p style="display: none;">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				
			<p style="color: white;">With consistent efforts, honest dedication, passionate pledge to nurture the grassroots and to serve and uplift the native society in terms of
					education, Nalanda Shikshan Sansthan, Shahabad has come forth as a bright reality in the kind guidance of our visionary patron Dr. Som Shekhar Dixit.
					</p>
					<p style="color: white;">I find myself fortunate to be a part of the vast Nalanda family, dedicated to serve the society with the excellent skills it has developed over
					time.Nalanda Shikshan SansthanShahabad is a co-educational English Medium Primary School, affiliated to U.P. Board, Allahabad. We strictly
					follow the syllabi prescribed by NCERT.
					</p>
					<p style="color: white;">As a responsible educational institute, ever since its inception Nalanda Shikshan Sansthan Shahabad, has been working hard to maintain delicate equilibrium between material and human resources to achieve its noble goals in favor of young students. Nalanda Shikshan
Sansthan Shahabad helps provide not only world class infrastructure as well as learned, trained and experienced teachers.</p>
					<p style="color: white;">Along with acquiring literacy, numeracy, creativity and communication skills, we help our young students recognize their individual talents, enjoy learning and retain desire to continue doing. In this rapidly changing world we want our students to have a global learning
experience. We feel that in this digital age it is necessary for learners to acquire new skills and knowledge to help them succeed in future society and workplaces hence we provide a more memorable and immersive learning experience which stays with them life long and helps them apply this knowledge to real life scenarios.</p>
					<p style="color: white;">We instill in them love and care for environment, moral and aesthetic values to appreciate their own and others cultures and the need for
harmonious co-existence.</p>
				
			</div>
		</div>
	</div>

	<div id="fh5co-blog">
		<div class="container-fluid">
		<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Our Existence</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
					<p style="color: black; text-align: center;">Nalanda Shikshan Sansthan is an English medium co-educational school, affiliated CBSE, New Delhi Nursery to Twelfth standard. This is one of the schools run by the Gramin Shiksha Seva Samiti, a non-profit society registered under the society's registration Act of 1860. The members of the society are renowned Doctors, Educationists, Engineers and Administrators. The school promises to replicate the excellence that our parent institution has shown in providing a holistic education to its students.
					We believe in the overall development of a child right from the early childhood years and strive to make learning a fun process by incorporating <strong>'Khel Khel me Padhai'</strong>. The school curriculum is based on NCERT (National Council of Educational Research and Training) thus providing a nationalized curriculum that promotes curiosity, creativity, excellence, respect and responsibility among its students. 
					</p>
					
					</div>
				</div>
			</div>
		</div>
	</div>

	<div  id="fh5co-testimonial" style="background-image: url({{ asset('images/school.jpg') }});">
		<div class="overlay"></div>
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
							<a href="/blog"  class="blog-img-holder" style="background-image: url({{ asset('storage/'.$media->image ?? '') }});"></a>
							<div class="blog-text">
								<h3 style=" text-align: center;"><a href="/blog" ></a>{{ $media->title ?? ''}}</h3>
								
							</div> 
						</div>
					</div>

					

				@endforeach

			@endif
				
				
			</div>
		</div>
	</div>

	<div id="fh5co-gallery" class="fh5co-bg-section">
		<div class="row text-center">
			<h2><span>Gallery</span></h2>
		</div>
		<div class="row">
		@if(isset($images))

			@foreach($images as $image)

				<div class="col-md-3 col-padded">
					<a href="/gallery" class="gallery" style="background-image: url({{ asset('storage/'.$image->image ?? '') }});"></a>
				</div>
			@endforeach

		@endif		
		</div>
	</div>

	<div style="display: none;" id="fh5co-pricing" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Plan </h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt accusamus tenetur et eos? Velit in ipsa repellendus iure eos quam doloribus architecto eum culpa nesciunt inventore amet, assumenda, maiores dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, vero iusto! Ad nobis distinctio alias, placeat dicta quis consectetur deleniti. Repellat tempore reiciendis harum aliquam commodi quos maxime eaque porro. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt at recusandae beatae adipisci distinctio corporis maiores est quaerat possimus atque eos, fuga fugiat vero molestias voluptates iste, exercitationem dignissimos amet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero exercitationem vitae, velit molestiae assumenda eaque illum ex laborum laboriosam ad optio dicta unde deserunt dolor rem accusantium animi ullam similique? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam provident nulla quod numquam facilis fugit, ea suscipit itaque consequatur natus ipsum. Quos, labore optio! Corrupti soluta iste magnam obcaecati nihil! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi reiciendis cupiditate quaerat, a deserunt, voluptatum sapiente iusto, dolore nobis repudiandae porro aliquid quasi laborum eum earum esse quae? Eaque, cupiditate.</p>
            </div>
			</div>
		</div>
	</div>

	<div style="display: none;" id="fh5co-register" style="background-image: url({{ asset('images/img_bg_2.jpg') }});">
		<div class="overlay"></div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 animate-box">
				<div class="date-counter text-center">
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, nam ipsam molestias quam excepturi officiis quod praesentium, facilis nihil placeat beatae ad vitae velit dolore tempore repellat ex. Reprehenderit, eveniet. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est quis, laudantium temporibus minima enim tempore fugiat tenetur dolorem autem eveniet, animi aut facilis fuga maxime, porro vitae beatae aspernatur molestias. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis repellat molestiae ullam ea quidem error. Esse illo dicta quos inventore cupiditate, doloribus dignissimos officia magni voluptatibus culpa distinctio, ipsa et. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque ex debitis, nemo magnam dolor cum placeat deserunt, aperiam laborum quam laboriosam ipsa, ducimus illo! Dolorem ut sequi mollitia vel consequuntur? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem labore architecto, quo nisi maxime dolorem a sit. Vero sapiente incidunt maxime cupiditate fuga, ducimus, corporis, commodi placeat laborum possimus officia.</p>
				</div>
			</div>
		</div>
	</div>

	
@endsection

