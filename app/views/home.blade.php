@extends('layouts.default')
@section('content')
	<div id="peekomain">
		<h1>Take a Peek</h1>
		<div id="deals" class="clearfix">
			<div class="deal-container">
				<div class="single-deal animated fadeInDown">
					<img class="icon" src="/img/icons/appetizer.png" />Free Appetizer with Entree
				</div>
				<div class="single-deal animated fadeInDown">
					<img class="icon" src="/img/icons/lunch.png" /> $6.95 Lunch Special
				</div>
				<div class="single-deal animated fadeInDown">
					<div class="icon">15%</div> 15% Off Our Famous Pad Thai
				</div>
				<div class="single-deal animated fadeInDown">
					<img class="icon" src="/img/icons/drink.png" />Happy Hour Drink Specials
				</div>
			</div>

			<div class="about">
				<a class="ios" href="https://itunes.apple.com/us/app/peeko/id781198595?ls=1&mt=8"><img src="/img/iosapp.png" class="appstore" alt="Peeko On the iTunes App Store for iPhone" /></a>
				<a target="_blank" class="android" href="https://play.google.com/store/apps/details?id=com.peekoapp.android"><img src="/img/playstore.png" class="appstore" alt="Peeko On the Google Play Store for Android" /></a>
				<p>Peeko is an iPhone app that brings you Peeks at stores nearby.</p>

				<p>
					Try something new today with our Peeks!
				</p>
				<p>No coupons or vouchers to buy beforehand. Simply walk in and present the Peek.</p>
			</div>
		</div>
	</div>
@stop