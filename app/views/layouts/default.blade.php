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
			<form class="peeko-signup">
				<div class="peeko-special">
					The new version of Peeko is launching December 2015.<br />
					Signup for early access and get $6 to spend. 
				</div>
				<div class="peeko-signup__fields">
					<input type="text" class="btn--transparent" value="" placeholder="E-mail address" />
					<input type="submit" class="submit--transparent" value="Signup" />
				</div>
			</form>
			<p class="peeko-story">
				Peeko is a new way to do lunch. Restaurants on Peeko offer instant deals so you can always try something new. Every restaurant on the app supports mobile payments and online ordering so you never have to waste time looking for cash or waiting.
			</p>
			<div class="features">
				<div class="feature clearfix">
					<div class="feature__icon">
						<span class="glyphicon glyphicon-gift"></span>
					</div>
					<div class="feature__info">
						<div class="feature__name">Instant Offers</div>
						Every store has a deal you can use without having to schedule or print out in advance. Just show the offer and try something new today.
					</div>
				</div>
				<div class="feature clearfix">
					<div class="feature__icon">
						<span class="glyphicon glyphicon-credit-card"></span>
					</div>
					<div class="feature__info">
						<div class="feature__name">Mobile Payments</div>
						Use your phone to make payments using Peeko Wallet and help keep your credit cards safe. Businesses never get to see your payment information and instead receive an instant payment from Peeko.
					</div>
				</div>
				<div class="feature clearfix">
					<div class="feature__icon">
						<span class="glyphicon glyphicon-star-empty"></span>
					</div>
					<div class="feature__info">
						<div class="feature__name">Earn Rewards</div>
						Earn <span class="peeko-points">Peeko Points</span> for transactions, leaving helpful comments, submitting tips, and more. Redeem them for cool prizes like movie tickets, tshirts, gadgets, and more.
					</div>
				</div>
				<div class="feature clearfix">
					<div class="feature__icon">
						<span class="glyphicon glyphicon-shopping-cart"></span>
					</div>
					<div class="feature__info">
					<div class="feature__name">Online Orders</div>
						Order on your phone and pickup at the store. We don't charge businesses any fees for this service so you know you're helping support local businesses when using Peeko.
					</div>
				</div>
			</div>
		</div>
		@yield('content')
	</div>
{{ HTML::script('http://code.jquery.com/jquery-2.1.0.min.js'); }}
{{ HTML::script('//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'); }}
{{ HTML::script('/js/vendor/jquery.validate.min.js'); }}
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