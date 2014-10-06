<?php
class Order extends Eloquent  
{
	public function product()
	{
		return $this->belongsTo('Product');
	}
}