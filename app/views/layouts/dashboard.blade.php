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
{{ HTML::style('css/dashboard.css'); }}
@yield('head')
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
			<a id="list" href="/business/add" class="pretty-button">List Your Business</a>
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