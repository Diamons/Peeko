<!DOCTYPE HTML>
<html>
<head>
<title>{{ $title }} - Peeko</title>

{{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'); }}
{{ HTML::style('css/stylesheet.css'); }}


</head>
<body>
	<div id="container">
	<header class="clearfix">
		<a id="logo" href="/"><img src="/img/peeko.png" alt="Peeko Logo" /></a>
		<a id="register" href="/business/register" class="pretty-button">Signup for Business</a>
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
</body>
</html>