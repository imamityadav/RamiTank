@extends('home.layout.master')
@section('content')

	<!-- Start Blog Area -->
	<div class="blog-area ptb-80">
		<div class="container">
			<div class="section-title">
				<h2>The News from Our Blog</h2>
				<div class="bar"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-post">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="public/home/img/blog-image/1.jpg" alt="image">
							</a>

							<div class="date">
								<i data-feather="calendar"></i> March 15, 2019
							</div>
						</div>

						<div class="blog-post-content">
							<h3><a href="single-blog.html">The security risks of changing package owners</a></h3>

							<span>by <a href="#">admin</a></span>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

							<a href="#" class="read-more-btn">Read More <i data-feather="arrow-right"></i> </a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="single-blog-post">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="public/home/img/blog-image/2.jpg" alt="image">
							</a>

							<div class="date">
								<i data-feather="calendar"></i> March 17, 2019
							</div>
						</div>

						<div class="blog-post-content">
							<h3><a href="single-blog.html">Tips to Protecting Your Business and Family</a></h3>

							<span>by <a href="#">smith</a></span>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

							<a href="#" class="read-more-btn">Read More <i data-feather="arrow-right"></i> </a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
					<div class="single-blog-post">
						<div class="blog-image">
							<a href="single-blog.html">
								<img src="public/home/img/blog-image/3.jpg" alt="image">
							</a>

							<div class="date">
								<i data-feather="calendar"></i> March 19, 2019
							</div>
						</div>

						<div class="blog-post-content">
							<h3><a href="single-blog.html">Protect Your Workplace from Cyber Attacks</a></h3>

							<span>by <a href="#">john</a></span>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

							<a href="#" class="read-more-btn">Read More <i data-feather="arrow-right"></i> </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Blog Area -->

@endsection