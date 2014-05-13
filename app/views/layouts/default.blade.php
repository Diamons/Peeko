<!DOCTYPE HTML>
<html>
<head>
<title>{{ $title }} - Peeko</title>
{{ HTML::style('//fonts.googleapis.com/css?family=Montserrat:400,700'); }}
{{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'); }}
{{ HTML::style('css/stylesheet.css'); }}
{{ HTML::style('css/animate.css'); }}
{{ HTML::style('css/default.css'); }}


</head>
<body>
	<div id="container">
		<?php
		/*<header>
			<a href="/" id="logo">
				<img src="/img/peeko.png" />
			</a>
			<ul id="menu">
				<li><a href="#"></a>
			</ul>
		</header>*/
		?>
		<a href="/" id="logo">
			<img src="/img/peeko.png" />
		</a>
		@yield('content')
	</div>
{{ HTML::script('http://code.jquery.com/jquery-2.1.0.min.js'); }}
{{ HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'); }}
@yield('footerscripts')
</body>
</html>