@extends('layouts.default')
@section('content')
<!--parallax 1 -->
<section class="bg-1 text-center" id="main">
		<br>
	<br>
		<h1>Портфолио</h1>
		<h3>Нусипбекова Райымбека</h3>
		<hr class="intro-divider">
		<ul class="list-inline intro-social-buttons">
			<li>
				<a href="https://www.facebook.com/raiymbek.nussipbekov" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
			</li>
			<li>
				<a href="https://github.com/Raiymbek" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
			</li>
			<li>
				<a href="https://www.linkedin.com/profile/view?id=340063804&trk=nav_responsive_tab_profile_pic" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
			</li>
		</ul>
</section>
<!--/parallax 1-->
<section id = "about">
<div class="container">
	<hr class="">
	<div class="row">
		<div class="col-lg-5 col-sm-6">
            <div class="clearfix"></div>
            <h2 class="section-heading">Обо мне</h2>
            <p class="lead">Я такой то такойI’m a web & user experience designer living in New York City, where I currently work as Chief Product Officer at Schoology (a company I founded in 2009). I lead product design, corporate identity, and get my hands dirty coding the site’s CSS and front-end pages.
                                            At the office I’m teamed up with a group of extremely talented people, and together we make big things happen. We’ve been featured in Forbes, Entrepreneur Magazine, TechCrunch, and WashU Magazine.</p>
        </div>

        <div class="col-lg-6 col-lg-offset-1 col-sm-6">
            <img class="img-responsive" src="img/skills.jpg" alt="" style="margin-top: 70px">
        </div>
	</div>
	<!--/row-->
	<hr class="">
</div>
</section>
<!--/container-->
<div class="divider"></div>
<section class="bg-2">
	<div class="col-sm-10 col-sm-offset-1 text-center">
		<h1 class="">Keep Going</h1>

	</div>
</section>
<div class="divider"></div>
<section id="services">
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="">Hello.</h3>

				</div>
				<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
					varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
					condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
					nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
					accumsan. Aliquam in felis sit amet augue.</div>
				<div class="panel-footer text-right"><a href="#" class="btn btn-default">More</a>

				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="">Hello.</h3>

				</div>
				<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
					varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
					condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
					nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
					accumsan. Aliquam in felis sit amet augue.</div>
				<div class="panel-footer text-right"><a href="#" class="btn btn-default">More</a>

				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="">Hello.</h3>

				</div>
				<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra
					varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt
					condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis
					nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor
					accumsan. Aliquam in felis sit amet augue.</div>
				<div class="panel-footer text-right"><a href="#" class="btn btn-default">More</a>

				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!--/container-->
<div class="divider"></div>
<!--parallax 2 -->
<section class="bg-3 text-center"  >
	<h1>Bootstrap Parallax</h1>


</section>

<section id="contact">
    <div class="container">
    	<div class="row">
    	@include('layouts.contacts');

    </div>
</section>
<!--/parallax 2-->
<div id="footer" class="">
	<div class="container">
		<div class="col-lg-12">
			<p class="text-muted small">Copyright &copy; RAKMA LTD 2015. All Rights Reserved</p>
		</div>
	</div>
</div>
@endsection


