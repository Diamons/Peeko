<!DOCTYPE HTML>
<html>
<head>
<title>{{ $title }} - Peeko</title>
<link href='http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic' rel='stylesheet' type='text/css'>
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
<script type="text/javascript">
  window.heap=window.heap||[];heap.load=function(a){window._heapid=a;var b=document.createElement("script");b.type="text/javascript",b.async=!0,b.src=("https:"===document.location.protocol?"https:":"http:")+"//cdn.heapanalytics.com/js/heap.js";var c=document.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c);var d=function(a){return function(){heap.push([a].concat(Array.prototype.slice.call(arguments,0)))}},e=["identify","track"];for(var f=0;f<e.length;f++)heap[e[f]]=d(e[f])};
  heap.load("1094769445");
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2509553-11', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>