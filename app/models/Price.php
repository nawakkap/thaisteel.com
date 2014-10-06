<?php

	class Price extends Eloquent
	{
		public function product()
		{
			return $this->belongsTo('Product');
		}
	
		public function user()
		{
			return $this->belongsTo('User');
		}
		
		public function scopeProducts($query, $product_id) 
		{
			return $query->where('product_id', $product_id)->orderBy('updated_at', 'DESC');
		}
	}