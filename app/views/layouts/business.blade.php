<!DOCTYPE HTML>
<html>
<head>
<title>{{ $title }} - Peeko</title>
{{ HTML::style('//fonts.googleapis.com/css?family=Montserrat:400,700'); }}
<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=1280">
{{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'); }}
{{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'); }}
{{ HTML::style('css/stylesheet.css'); }}
{{ HTML::style('css/business.css'); }}

</head>
<body>
	<div id="container">
	<header class="clearfix">
		<div class="wrap">
			<a id="logo" href="/"><img src="/img/peeko.png" alt="Peeko Logo" /></a>
			<ul id="menu">
				<li><a href="#whypeeko">Benefits</a></li>
				<li><a href="#faq">FAQ</a></li>
				<li><a href="#pricing">Pricing</a></li>
				<li><a href="/business/support">Support</a></li>
			</ul>
			<a id="register" href="/business/support" class="pretty-button">Signup for Business</a>
			<div id="loginForm">
				@if(Session::has('error'))
					<div class="alert-box error">
						<strong>{{ Session::get('error') }}</strong>
					</div>
				@endif
				{{ Form::open(array('url' => 'business/login')); }}
				<?php 
					echo Form::token();
					//echo Form::label('email', 'E-Mail Address');
					echo Form::email('email', NULL, array('id' => 'email', 'class' => 'form-control', 'placeholder' => 'E-mail Address'));
					//echo Form::label('password', 'Password');
					echo Form::password('password', array('id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password'));
					echo Form::submit('Login', array('class' => 'btn btn-default'));
				?>
				{{ Form::close(); }}
			</div>
		</div>
	</header>
	<div id="content">
		@yield('content')
	</div>

	<footer>

	</footer>
	</div>
{{ HTML::script('http://code.jquery.com/jquery-2.1.0.min.js'); }}
{{ HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'); }}
@yield('footerscripts')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2509553-11', 'peekoapp.com');
  ga('send', 'pageview');

</script>
</body>
</html>