$(function(){
});

// This example displays an address form, using the autocomplete feature
	// of the Google Places API to help users fill in the information.

	var placeSearch, autocomplete, geocoder;
	var componentForm = {
	  street_number: 'short_name',
	  route: 'long_name',
	  administrative_area_level_1: 'short_name',
	  sublocality:  'long_name',
	  country: 'long_name',
	  postal_code: 'short_name'
	};

	function initialize() {
	  // Create the autocomplete object, restricting the search
	  // to geographical location types.
	  geocoder = new google.maps.Geocoder();
	  autocomplete = new google.maps.places.Autocomplete(
	      /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
	      { types: ['geocode'] });
	  // When the user selects an address from the dropdown,
	  // populate the address fields in the form.
	  google.maps.event.addListener(autocomplete, 'place_changed', function() {
	    fillInAddress();
	  });
	}

	// [START region_fillform]
	function fillInAddress() {
	  // Get the place details from the autocomplete object.
	  var place = autocomplete.getPlace();
	  var address = document.getElementById('autocomplete').value;
	  console.log(address); 
  	  geocoder.geocode( { 'address': address}, function(results, status) {
	      if (status == google.maps.GeocoderStatus.OK) {
	      	var lng = results[0].geometry.location.lng();
	      	var lat = results[0].geometry.location.lat();

	     	document.getElementById('long').value = lng; //Longitude
	     	document.getElementById('lat').value = lat; //Latitude
	      }else{
	      	alert('Geocode was not successful for the following reason: ' + status);
	      }
	     });


	  for (var component in componentForm) {
	    document.getElementById(component).value = '';
	    document.getElementById(component).disabled = false;
	  }

	  // Get each component of the address from the place details
	  // and fill the corresponding field on the form.
	  for (var i = 0; i < place.address_components.length; i++) {
	    var addressType = place.address_components[i].types[0];
	    if (componentForm[addressType]) {
	      var val = place.address_components[i][componentForm[addressType]];
	      document.getElementById(addressType).value = val;
	    }
	  }
	}
	// [END region_fillform]

	// [START region_geolocation]
	// Bias the autocomplete object to the user's geographical location,
	// as supplied by the browser's 'navigator.geolocation' object.
	function geolocate() {
	  if (navigator.geolocation) {
	    navigator.geolocation.getCurrentPosition(function(position) {
	      var geolocation = new google.maps.LatLng(
	          position.coords.latitude, position.coords.longitude);
	      autocomplete.setBounds(new google.maps.LatLngBounds(geolocation,
	          geolocation));
	    });
	  }
	}

	initialize();
	// [END region_geolocation]