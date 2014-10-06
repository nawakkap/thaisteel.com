<?php

	class ProductUserMapping extends Eloquent
	{
		protected $guarded = array();
	
		public function user() 
		{
			return $this->belongTo("User");
		}
		
	}