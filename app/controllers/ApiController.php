<?php

class ApiController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}
	
	public function doQueryPrice()
	{
		$success = FALSE;
		$data = "";
		
		// Get Price
		if (Input::has("product")) 
		{
			$product = Input::get("product"); // Expect Id of Name
			$quantity = Input::get('quantity');
			
			if (! is_array($product))
			{
				$product = array($product);
			}
			
			if (! is_array($quantity))
			{
				$quantity = array($quantity);
			}
			
			if (count($product) == count($quantity))
			{
				$user = Input::get('user'); // Expect User Id
				
				$price_result = array();
				
				for($i = 0; $i < count($product); $i++)
				{
					$p_item = $product[$i];
					$q_item = $quantity[$i];
					
					if ($p_item AND $q_item)
					{
						$n = ProductName::find($p_item);

						if ($n)
						{
							// Product Find
							$p = Product::find($n->product_id);
							if ($p)
							{
								// Find Min Price
								$price_kg = 0;
								$price_unit = 0;
								$ready_days = 0;
								
								$ret = DB::table('prices')
												->select('price_kg', 'price_unit')
												->orderBy('updated_at','DESC')
												->orderBy('price_kg','ASC')
												->orderBy('price_unit', 'ASC')
												->where('product_id', '=' , $p->id)
												->first();
								if ($ret) {
									$price_kg = $ret->price_kg;
									$price_unit = $ret->price_unit;
									$ready_days = $ret->delivery_date;
								} else {
									$price_kg = 0;
									$price_unit = 0;
									$ready_days = 0;
								}
								
								// Result
								$price_result[] = array(
									"product_id" => $product[$i],
									"price_kg" => $price_kg,
									"price_unit" => $price_unit,
									"ready_days" => $ready_days,
									
									"error" => FALSE,
									"message" => ""
								);
							
								// TODO
								$price = $price_kg;
								
								
								// Get Old Transaction Id
								$old_tid = Input::get("tid");
								if ($old_tid) {
									$t = Transactions::find($old_tid);
									$t->delete();
								}
									
								// Add To Transactions
								$transaction = new Transactions;
								$transaction->product_id = $p->id;
								if ($user) 
								{
									$transaction->user_id = $user;
								}
								$transaction->product_name_id = $n->id;
								$transaction->price = $price;
								$transaction->quantity = $q_item;
								$transaction->come_from = "API";

								$transaction->save();
							
								$transaction_id = $transaction->id;
							
								
							}
							else
							{
								$price_result[] = array(
									"product" => $p_item,
									"quantity" => $q_item,
									"price_kg" => 0,
									"price_unit" => 0,
									"ready_days" => 0,
									
									"error" => TRUE,
									"message" => "Cannot find product"
								);
							}
						}
						else
						{
							$price_result[] = array(
								"product" => $p_item,
								"quantity" => $q_item,
								"price_kg" => 0,
								"price_unit" => 0,
								"ready_days" => 0,
									
								"error" => TRUE,
								"message" => "Cannot find product name"
							);
						}
					}
					else
					{
						$msg = "Parameter is incorrect.";
						
						if (is_null($p_item))
						{
							$msg = "Product is nothing.";
						}
						else if (is_null($q_item))
						{
							$msg = "Quantity is nothing.";
						}
						
					
						$price_result[] = array(
							"product" => $p_item,
							"quantity" => $q_item,
							"price_kg" => 0,
							"price_unit" => 0,
							"ready_days" => 0,
								
							"error" => TRUE,
							"message" => $msg
						);
					}
				}
				
				$data = $price_result;
			}
			else
			{
				$success = FALSE;
				$data = "Parameter are incorrect.";
			}
		}
		else
		{
			$success = FALSE;
			$data = "Product is incorrect.";
		}
		
		
		$result = array(
			"success" => $success,
			"data" => $data
		);
		
		return Response::json($result);
	}
	
	public function doSearchPriceByProductName()
	{
		$success = FALSE;
		$message = "";
		
		if (Input::has("product")) 
		{
			$product = Input::get("product"); // Expect Id of Name
			
			$p = ProductName::find($product);
			
			
			// Find Min Price
			$ret = DB::table('prices')->select('price')->orderBy('updated_at', 'DESC')->orderBy('price','ASC')->where('product_id', '=' , $p->product_id)->first();
			if ($ret) {
				$success = TRUE;
				$message = $ret;
			}
		}
		
		/*
		$success = TRUE;
		$message = array(
			'price' => rand(1, 1000)
		);
		*/

		$result = array(
			"success" => $success,
			"message" => $message,
			// "sql" => DB::getQueryLog()
		);
		
		return Response::json($result);
	}
}