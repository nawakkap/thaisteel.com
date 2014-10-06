<?php

	class ProductName extends Eloquent
	{
		protected $guarded = array();
		
		protected $hidden = array('id', 'product_id', 'created_at', 'updated_at');
	
		public function product()
		{
			return $this->belongsTo('Product');
		}
	}