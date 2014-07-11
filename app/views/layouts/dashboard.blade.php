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