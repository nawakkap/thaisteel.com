<?php

	class Product extends Eloquent
	{
		public function product_names()
		{
			return $this->hasMany('ProductName');
		}
		
		public function prices()
		{
			return $this->hasMany('Price');
		}
		
		public function users() 
		{
			return $this->belongsToMany("User");
		}
	}