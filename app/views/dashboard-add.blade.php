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
		<?php //var_dump($store); ?>
		@if(isset($store))
			{{ Form::model($store, array('url' => 'business/add/'.$store->id, 'files' => true)); }}
		@else
			{{ Form::open(array('url' => 'business/add', 'files' => true)); }}
		@endif
		<div id="locationField">
      		<input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text" />
    	</div>

	    <table id="address">
	      <tr>
	        <td class="label">Street address</td>
	        <td class="slimField"><?php echo Form::text('address', null, array('id' => 'street_number')); ?></td>
	        <td class="wideField" colspan="2"><?php echo Form::text('address1', null, array('id' => 'route')); ?></td>
	      </tr>
	      <tr>
	        <td class="label">City</td>
	        <td class="wideField" colspan="3"><?php echo Form::text('city', null, array('id' => 'sublocality')); ?></td>
	      </tr>
	      <tr>
	        <td class="label">State</td>
	        <td class="slimField"><?php echo Form::text('state', null, array('id' => 'administrative_area_level_1')); ?></td>
	        <td class="label">Zip code</td>
	        <td class="wideField"><?php echo Form::text('zipcode', null, array('id' => 'postal_code')); ?></td>
	      </tr>
	      <tr>
	        <td class="label">Country</td>
	        <td class="wideField" colspan="3"><?php echo Form::text('country', null, array('id' => 'country')); ?></td>
	      </tr>
	       <tr>
	        <td class="label">Store Name</td>
	        <td class="wideField" colspan="3"><?php echo Form::text('name'); ?></td>
	        <td class="label">Website</td>
	        <td class="wideField" colspan="3"><?php echo Form::text('menu'); ?></td>
	      </tr>
	      <tr>
	      <td class="label">Expiration Date</td>
	      <td class="wideField" colspan="3"><?php echo Form::input('date', 'promotion[end_date]', null); ?></td>
	      <td class="label">Phone Number</td>
	      <td class="wideField" colspan="3"><?php echo Form::text('phone'); ?></td>
	      </tr>
	    </table>
	    Icon Selected: <?php echo Form::text('icon', null, array('id' => 'icon')); ?>
	    <br />
		<?php 
			echo Form::text('latitude', null, array('id' => 'lat'));
			echo Form::text('longitude', null, array('id' => 'long'));
			echo Form::label('Promotion Name');
			echo Form::text('promotion[name]', null);
		?>
		<br />
		<?php
			echo Form::label('Promotion Description');
			echo Form::text('promotion[description]', false);
		?>
		<br />
		ICON: <select id="icon-picker">
		<option>None</option>
		<?php
	    $files = File::files(public_path().'/stores');
	    foreach($files as $file){
	    	echo "<option>".str_replace(public_path(), '', $file)."</option>";
	    }
		?>
		</select>
		<br />
		ICON UPLOAD: <input type="file" name="iconUpload" />
		BANNER UPLOAD: <input type="file" name="bannerUpload" />
		<?php
			echo Form::submit('Submit Listing', array('class' => 'btn btn-default'));
			echo Form::token();
			//echo Form::label('email', 'E-Mail Address');
		?>
	</div>
	<img id="icon-selected" src="" />
		{{ Form::close(); }}
	
@stop

@section('footerscripts')
<script>
	jQuery(function($){
		$("#icon-selected").attr('src',$("#icon").val());
		
		$("#icon-picker").change(function(e){
			if($(this).val() == "None"){
				$("#icon").val('');
				$("#icon-selected").attr('src', '#');
			}else{
				$("#icon-selected").attr('src', $(this).val());
				$("#icon").val($(this).val());
			}
			
		});
	});
</script>
{{ HTML::script('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places'); }}
{{ HTML::script('js/add.js'); }}
<script>
    jQuery(document).ready(function($) {
		  $('form').submit(function(e){
		  	if($("#long").val() == "" || $("#lat").val() == "" || $("#street_number") == ""){
		  			return false;

		  	}
		  });
	});
    </script>
@stop