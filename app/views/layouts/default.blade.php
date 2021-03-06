<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            {{$title}}
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS are placed here -->
      	<!-- Bootstrap Core CSS -->
      	<link href="css/bootstrap.min.css" rel="stylesheet">
      	<!-- Custom CSS -->
      	<link href="css/landing-page.css" rel="stylesheet">
      	<link href="css/parallax.css" rel="stylesheet">
      	<!-- Custom Fonts -->
      	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

      <!-- Scripts are placed here -->

           <!-- jQuery -->
           <script src="js/jquery.js"></script>

           <!-- Bootstrap Core JavaScript -->
           <script src="js/bootstrap.min.js"></script>
           <script src="js/perehod.js"></script>

    </head>

    <body>
<!-- {literal} -->
<link rel="stylesheet" href="//cdn.callbackhunter.com/widget/tracker.css">
<script type="text/javascript" src="//cdn.callbackhunter.com/widget/tracker.js" charset="UTF-8"></script>
<script type="text/javascript">var hunter_code="a215fc63a08c124f57c7145630af41d3";</script>
<!-- {/literal} -->
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation" id="menu" >
	<div class="container topnav">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand topnav" href="#main">Портфолио Нусипбекова Райымбека</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->


		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#about">Обо мне</a>
				</li>
				<li>
					<a href="#services">Услуги</a>
				</li>
				<li>
					<a href="#contact">Контакты</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>
                 <!-- Content -->
                @yield('content')
     </body>
</html>