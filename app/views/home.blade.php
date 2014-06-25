@extends('layouts.default')
@section('content')
	<div id="peekomain">
		<h1>Instant Local Deals</h1>
		<div id="deals" class="clearfix">
			<div class="deal-container">
				<div class="single-deal animated fadeInDown">
					<div class="icon">Free</div>Buy 1 Get 1 Free
				</div>
				<div class="single-deal animated fadeInDown">
					<img class="icon" src="/img/icons/appetizer.png" />Free Appetizer with Entree
				</div>
				<div class="single-deal animated fadeInDown">
					<img class="icon" src="/img/icons/lunch.png" /> $6.95 Lunch Special
				</div>
				<div class="single-deal animated fadeInDown">
					<div class="icon">15%</div> Take 15% Off Your Order
				</div>
				<div class="single-deal animated fadeInDown">
					<img class="icon" src="/img/icons/drink.png" />Happy Hour Specials
				</div>
			</div>

			<div class="about">
				<a href="https://itunes.apple.com/us/app/peeko/id781198595?ls=1&mt=8"><img src="/img/app_store_badge.png" class="appstore" alt="Peeko On the iTunes App Store for iPhone" /></a>
				<a target="_blank" href="https://docs.google.com/forms/d/1ZCeyJ5bl2ZiM0NMEqSihIsz19lh3ZscLa38e3FDoafs/viewform"><img src="http://eutobaptist.com/wp-content/uploads/2014/04/google-play.png" class="appstore" alt="Peeko On the iTunes App Store for iPhone" /></a>
				<p>Peeko is an iPhone app that brings you deals at stores nearby.</p>
				<p>Businesses offer discounts to local customers to grow their business.</p>
				<p>No coupons or vouchers to buy beforehand. Simply walk in, present the deal, and redeem.</p>
				<p>Save money and take advantage of great promotions nearby!</p>
			</div>
		</div>
	</div>
@stop