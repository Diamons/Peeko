@extends('layouts.dashboard')
@section('content')
	<div id="main" class="dashboard wrap">
		<table class="listings">
			<tr>
				<th> </th>
				<th>Store Name</th>
				<th>Street Address</th>
				<th>Current Promotion</th>
			</tr>
			<?php for($i = 0; $i < count($stores); $i++){ ?>
			<tr class="store listing">
				<td><img class="icon" src="<?php echo $stores[$i]->icon; ?>" alt="<?php echo $stores[$i]->name; ?>" /></td>
				<td><h3><a href="/business/add/<?php echo $stores[$i]->id; ?>"><?php echo $stores[$i]->name; ?></a></h3></td>
				<td><address><?php echo $stores[$i]->address; ?><br /><?php echo $stores[$i]->city; ?>, <?php echo $stores[$i]->state; ?> <?php echo $stores[$i]->zipcode; ?></address>
				</td>
				<?php $promotion = $stores[$i]['promotions']; ?>
				<td>
					<img class="banner small" src="<?php echo $promotion[0]->image; ?>" alt="<?php echo $promotion[0]->name; ?>" />
					<p><b><?php echo $promotion[0]->name; ?></b></p>
					<p>
						<?php echo $promotion[0]->description; ?>
					</p>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
@stop