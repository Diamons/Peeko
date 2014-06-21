<?php
	class Promotion extends Eloquent{

		protected $fillable = array('name', 'image', 'description', 'end_date', 'start_date');

	}