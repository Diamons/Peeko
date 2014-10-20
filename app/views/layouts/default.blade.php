<!DOCTYPE HTML>
<html>
<head>
<title>{{ $title }} - Peeko</title>
<link href='http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic' rel='stylesheet' type='text/css'>
{{ HTML::style('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'); }}
{{ HTML::style('css/animate.css'); }}
{{ HTML::style('css/default.css'); }}
{{ HTML::style('css/stylesheet.css'); }}


</head>
<body>
	<div id="container" class="wrap">
		<div class="peeko-main">
			<a href="/" id="logo">
				<img src="/peeko-logo-alt.png" />
			</a>
			<p class="peeko-story">
				We've introduced several new features and improvements in our upcoming version of Peeko.
			</p>

			<div class="features">
				<div class="feature clearfix">
					<div class="feature__icon">
						<span class="glyphicon glyphicon-gift"></span>
					</div>
					<div class="feature__info">
						<span class="feature__name">Peeko Offers</span> lets you use exclusive offers and try thousands of new local businesses for free. No coupons to print or vouchers to purchase ahead of time.
					</div>
				</div>
				<div class="feature clearfix">
					<div class="feature__icon">
						<span class="glyphicon glyphicon-credit-card"></span>
					</div>
					<div class="feature__info">
						<span class="feature__name">Peeko Wallet</span> is the most convenient way to pay on the Peeko Shopping Network. Earn <span class="peeko-points">Peeko Points</span> while shopping on the Peeko Shopping Network.
					</div>
				</div>
				<div class="feature clearfix">
					<div class="feature__icon">
						<span class="glyphicon glyphicon-star-empty"></span>
					</div>
					<div class="feature__info">
					<span class="feature__name peeko-points">Peeko Points</span> can be used to get free prizes like gift cards, drinks, and more. Collect <span class="peeko-points">Peeko Points</span> to unlock higher level Peeko Offers.
					</div>
				</div>
				<div class="feature clearfix">
					<div class="feature__icon">
						<span class="glyphicon glyphicon-shopping-cart"></span>
					</div>
					<div class="feature__info">
					<span class="feature__name">Peeko Takeout</span> lets you order food and even split the bill with a friend through our app. Get notified automatically when your order is ready.
					</div>
				</div>
			</div>
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