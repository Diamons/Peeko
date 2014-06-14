<!DOCTYPE HTML>
<html>
<head>
<title>{{ $title }} - Peeko</title>
{{ HTML::style('//fonts.googleapis.com/css?family=Montserrat:400,700'); }}
<link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
{{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'); }}
{{ HTML::style('css/stylesheet.css'); }}
{{ HTML::style('css/animate.css'); }}
{{ HTML::style('css/default.css'); }}


</head>
<body>
	<div id="container" class="wrap">
		<div class="clearfix">
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
		<nav id="mainMenu">
			<ul>
				<li><a href="/business">For Business</a></li>
			</ul>
		</nav>
		</div>
		@yield('content')
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