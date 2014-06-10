@extends('layouts.dashboard')
@section('head')

    <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
      #lat, #long{
      	display: none;
      }
    </style>
@stop
@section('content')
	<div class="wrap">
		{{ Form::open(array('url' => 'business/add')); }}
		<div id="locationField">
      		<input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text" />
    	</div>

	    <table id="address">
	      <tr>
	        <td class="label">Street address</td>
	        <td class="slimField"><?php echo Form::text('address', false, array('id' => 'street_number')); ?></td>
	        <td class="wideField" colspan="2"><?php echo Form::text('address1', false, array('id' => 'route')); ?></td>
	      </tr>
	      <tr>
	        <td class="label">City</td>
	        <td class="wideField" colspan="3"><?php echo Form::text('city', false, array('id' => 'sublocality')); ?></td>
	      </tr>
	      <tr>
	        <td class="label">State</td>
	        <td class="slimField"><?php echo Form::text('state', false, array('id' => 'administrative_area_level_1')); ?></td>
	        <td class="label">Zip code</td>
	        <td class="wideField"><?php echo Form::text('zipcode', false, array('id' => 'postal_code')); ?></td>
	      </tr>
	      <tr>
	        <td class="label">Country</td>
	        <td class="wideField" colspan="3"><?php echo Form::text('country', false, array('id' => 'country')); ?></td>
	      </tr>
	       <tr>
	        <td class="label">Store Name</td>
	        <td class="wideField" colspan="3"><?php echo Form::text('name'); ?></td>
	        <td class="label">Website</td>
	        <td class="wideField" colspan="3"><?php echo Form::text('website'); ?></td>
	      </tr>
	    </table>
		<?php 
			echo Form::text('latitude', false, array('id' => 'lat'));
			echo Form::text('longitude', false, array('id' => 'long'));
			echo Form::label('Promotion Name');
			echo Form::text('promotion[name]', false);
		?>
		<br />
		<?php
			echo Form::label('Promotion Description');
			echo Form::text('promotion[description]', false);
		?>
		<br />
		<?php
			echo Form::submit('Submit Listing', array('class' => 'btn btn-default'));
			echo Form::token();
			//echo Form::label('email', 'E-Mail Address');
		?>
	</div>
		{{ Form::close(); }}
	
@stop

@section('footerscripts')
{{ HTML::script('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places'); }}
{{ HTML::script('js/add.js'); }}
@stop