<?php

class SearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$product_dropdown[''] = 'กรุณาเลือกสินค้า...';
		$product_dropdown = $product_dropdown +  DB::table('product_names')->orderBy('name','ASC')->lists('name', 'id'); // ProductName::lists('name', 'id');
		
		$carts = Cart::content();
		
		$user = Session::get('user_client');
		foreach($carts as $row)
		{
			$transaction_id = $row->options->has('tid') ? $row->options->tid : '';
			if ($transaction_id)
			{
				$t = Transactions::find($transaction_id);
				
				$user = Session::get('user_client');
				if ($user && $t)
				{
					$t->user_id = $user->id;
				}
				if ($t)
				{
					$t->save();
				}
			}
		}
		
		$checked = Session::get('checked');
		$price = Session::get('price');
		$tid = Session::get('tid');
		$supplier_id = Session::get('supplier_id');
		$quantity = Input::old('quantity');
		$total = $price * $quantity;
		
		$minimum_quantity = Config::get('thaisteel.minimum_quantity');
		$maximum_quantity = Config::get('thaisteel.maximum_quantity');
		
		$q = Input::get('search');
		return View::make('hello')
					->with('user', $user)
					->with("search", $q)
					->with('tid', $tid)
					->with('supplier_id', $supplier_id)
					->with('price', $price)
					->with('checked', $checked)
					->with('total', $total)
					->with('product_dropdown', $product_dropdown)
					->with('carts', $carts)
					->with("minimum_quantity", $minimum_quantity)
					->with("maximum_quantity", $maximum_quantity);
	}
	
	public function doAddToCart()
	{
		$cmd = Input::get("cmd");
		
		if ($cmd == "CHECK_PRICE")
		{
			// Get Price
			$price = 0;
			$supplier_id = FALSE;
			$transaction_id = 0;
			$file_name = '';
			$file_imported_date = '';
			
			if (Input::has("product")) 
			{
				$product = Input::get("product"); // Expect Id of Name
				
				$n = ProductName::find($product);

				if ($n)
				{
					// Product Find
					$p = Product::find($n->product_id);
					if ($p)
					{
						$quantity = Input::get('quantity');
				
						// Find Min Price
						$price_kg = 2147483648;
						$price_unit = 2147483648;
						
						$ret = FALSE;
						if (Config::get('thaisteel.price_display_in_search'))
						{
							// $retTemp = DB::select("SELECT MAX(id) as max_id, product_id, user_id, price_kg, price_unit FROM `prices` GROUP BY product_id, user_id HAVING product_id = ?", array($p->id));
							
							$retTemp = DB::select(
								"select * from prices a
									where a.user_id in (
										select u 
										from (select user_id u, max(`updated_at`) from prices
											  where product_id = ?
											  group by user_id) aa
									)
									and a.updated_at in (
										select ud
										from (select user_id u, max(`updated_at`) ud from prices
											  where product_id = ?
											  group by user_id) bb
									)
									and product_id = ?;",
									array($p->id, $p->id, $p->id));
							
							/*
							select * from prices a
							where a.user_id in (
								select u 
								from (select user_id u, max(`updated_at`) from prices
									  where product_id = 151
									  group by user_id) aa
							)
							and a.updated_at in (
								select ud
								from (select user_id u, max(`updated_at`) ud from prices
									  where product_id = 151
									  group by user_id) bb
							)
							and product_id = 151;
							*/
							
							//echo "SELECT MAX(id) as max_id, product_id, user_id, price_kg, price_unit FROM `prices` GROUP BY product_id, user_id HAVING product_id = " . $p->id;
							
							for($i = 0; $i < count($retTemp); $i++)
							{
								if ($price_unit > $retTemp[$i]->price_unit)
								{
									$price_unit = $retTemp[$i]->price_unit;
									$ret = $retTemp[$i];
								}
							}

						}
						else
						{
							$ret = DB::select("SELECT MAX(id) as max_id, product_id, user_id, price_kg, price_unit FROM `prices` GROUP BY product_id, user_id HAVING product_id = ?", array($p->id));
							
							$retTemp = DB::select(
								"select * from prices a
									where a.user_id in (
										select u 
										from (select user_id u, max(`updated_at`) from prices
											  where product_id = ?
											  group by user_id) aa
									)
									and a.updated_at in (
										select ud
										from (select user_id u, max(`updated_at`) ud from prices
											  where product_id = ?
											  group by user_id) bb
									)
									and product_id = ?",
									array($p->id, $p->id, $p->id));
									
							
							for($i = 0; $i < count($retTemp); $i++)
							{
								if ($price_unit > $retTemp[$i]->price_kg)
								{
									$price_unit = $retTemp[$i]->price_kg;
									$ret = $retTemp[$i];
								}
							}
						}
						
						if ($ret) 
						{
							$price_kg = $ret->price_kg;
							$price_unit = $ret->price_unit;
							$supplier_id = $ret->user_id;
						}
						
						if (Config::get('thaisteel.price_display_in_search'))
						{
							$price = $price_unit;
						}
						else
						{
							$price = $price_kg;
						}
						
						print_r($ret);
						
						$file_name = $ret->file_name;
						$file_imported_date = date("Y-m-d H:i:s"); // $ret->updated_time;
						
						// #21
						$price = round ($price);
		
						// Get Old Transaction Id
						$old_tid = Input::get("tid");
						if ($old_tid) {
							$t = Transactions::find($old_tid);
							$t->delete();
						}
						
						// Add To Transaction Table
						$user = Session::get('user_client');
								
						// Add To Transactions
						$transaction = new Transactions;
						$transaction->product_id = $p->id;
						if ($user) 
						{
							$transaction->user_id = $user->id;
						}
						$transaction->product_name_id = $n->id;
						$transaction->price = $price;
						$transaction->quantity = $quantity;
						$transaction->come_from = 'SEARCH';
						//$transaction->file_name = $file_name;
						//$transaction->file_imported_date = $file_imported_date;
						// $transaction->status = 'ADD';
						
						$transaction->save();
					
						$transaction_id = $transaction->id;
						
					}
				}
			}

			return Redirect::action('SearchController@index')
									->withInput(Input::all())
									->with('price', $price)
									->with("tid", $transaction_id)
									->with('supplier_id', $supplier_id)
									->with('checked', TRUE);
		}
		else if ($cmd == "ADD_TO_CART")
		{
			$product = Input::get('product');
			$price = Input::get("price");
			$quantity = Input::get('quantity');
			$supplier_id = Input::get('supplier_id');

			if ($product && $price && $quantity && $supplier_id) 
			{
				// Remove , 
				$price = str_replace (',', '', $price);
			
			
				// Product Name Find
				$n = ProductName::find($product);

				if ($n)
				{
					// Product Find
					$p = Product::find($n->product_id);
					if ($p)
					{
						try
						{
							$user = Session::get('user_client');
							
							$old_tid = Input::get("tid");
							
							$transaction = FALSE;
							if ($old_tid)
							{
								$transaction = Transactions::find($old_tid);
								
								// Check change of parameter
							}
							else
							{
								$transaction = new Transactions;
							}
							$transaction->product_id = $p->id;
							if ($user) 
							{
								$transaction->user_id = $user->id;
							}
							$transaction->product_name_id = $n->id;
							$transaction->price = $price;
							$transaction->quantity = $quantity;
							$transaction->come_from = 'SEARCH';
							// $transaction->status = 'ADD';
							
							$transaction->save();
						
							$transaction_id = $transaction->id;
							
							// Clear price in Session
							Session::forget('price');
							Session::forget('tid');
						
							Cart::add($p->id, $n->name, $quantity, $price, array('p' => $p, 
																				 'n' => $n, 
																				 'tid' => $transaction_id,
																				 'supplier_id' => $supplier_id));					
						}
						catch(ShoppingcartInvalidItemException $e) 
						{
							// die($e);
						}
					}
				}
			}
			
			return Redirect::action('SearchController@index');
		}
	}
	
	public function doRemoveFromCart()
	{
		$row_id = Input::get("row_id");
		
		$row = Cart::get($row_id);
		$transaction_id = $row->options->has('tid') ? $row->options->tid : '';
		
		if ($transaction_id)
		{
			$t = Transactions::find($transaction_id);
			
			$user = Session::get('user_client');
			if ($user)
			{
				$t->user_id = $user->id;
			}
			// $t->status = 'DEL';
			
			$t->save();
		}
		
		Cart::remove($row_id);
		
		return Redirect::action('SearchController@index');
	}
	
	public function doUpdateCart()
	{
		$row_id = Input::get('row_id');
		$quantity = Input::get('quantity');
		
		$row = Cart::get($row_id);
		$transaction_id = $row->options->has('tid') ? $row->options->tid : '';
		if ($transaction_id)
		{
			$t = Transactions::find($transaction_id);
			
			$user = Session::get('user_client');
			if ($user)
			{
				$t->user_id = $user->id;
			}
			$t->quantity = $quantity;
			
			$t->save();
		}
		
		Cart::update($row_id, $quantity);
		
		return Redirect::action('SearchController@index');
	}
	
	public function doDestroyCart()
	{
		/*
		$carts = Cart::content();
		foreach($carts as $row)
		{
			$transaction_id = $row->options->has('tid') ? $row->options->tid : '';
			if ($transaction_id)
			{
				$t = Transactions::find($transaction_id);
				
				$user = Session::get('user_client');
				if ($user)
				{
					$t->user_id = $user->id;
				}
				// $t->status = 'DEL';
				$t->save();
			}
		}
	
		Cart::destroy();
		*/
		
		Cart::destroy();
		
		return Redirect::action('SearchController@index');
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}