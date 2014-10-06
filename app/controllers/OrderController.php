<?php

class OrderController extends \BaseController 
{
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		// get all the nerds
		$user = Session::get('user_client');
		$order_temp = DB::table('orders')
					->where('user_id', $user->id)
					->orderBy('created_at', 'DESC')
					// ->orderBy('product_id', 'ASC')
					->get();
					
		// Populate Data
		$orders = array();
		
		$order_id = FALSE;
		foreach($order_temp as $key => $value)
		{
			if ($value->checkout_id != $order_id)
			{
				$order_id = $value->checkout_id;
				
				$orders[$value->checkout_id] = array(
					"checkout_id" => $value->checkout_id,
					"order_date" => date("d/m/Y", strtotime($value->created_at)),
					"order_time" => date("H:i:s", strtotime($value->created_at)),
					"items" => array($value)
				);
			}
			else
			{
				$orders[$value->checkout_id]["items"][] = $value;
			}
		}
		
		$name_mapping = ProductName::lists('name','id');
			
		// load the view and pass the nerds
		return View::make('user.orders.home')
			->with('name_mapping', $name_mapping)
			->with('user', $user)
			->with('orders', $orders);
	}

	public function doCheckout() 
	{
	
		// Check User -> Is signed -in ???
		$user = Session::get('user_client');
		if (! $user) {
			
			return Redirect::to('user_login');
		}
		
		
		$order_list = array();
		$checkout_id = FALSE;
		
		DB::beginTransaction();
		
		try
		{
			$carts = Cart::content();
			
			
			$checkout_id = DB::table('orders')->max('checkout_id');
			$checkout_id++;
			
			// $checkout_id =  // str_random(25);
			foreach($carts as $row)
			{
				
				$product_id = $row->options->has('p') ? $row->options->p->id : '';
				if (! $product_id) {
					continue;
				}
				
				$rowid = $row->rowid;
				$name = $row->options->has("p") ? $row->options->p->name : "";
				$price = $row->price;
				$quantity = $row->qty;
				$total = $row->subtotal;
				$product_name = $row->options->has("n") ? $row->options->n->id : "";
				$supplier_id = $row->options->has("supplier_id") ? $row->options->supplier_id : "";
			
				$order = new Order;
				$order->checkout_id = $checkout_id;
				$order->product_id = $product_id;
				$order->user_id = $user->id;
				$order->product_name_id = $product_name;
				$order->supplier_id = $supplier_id;
				$order->price = $price;
				$order->quantity = $quantity;
				$order->save();
				
				// Find Supplier Name
				$supplier = User::find($order->supplier_id);
				$order->supplier = $supplier;
				
				$order_list[] = $order;
			}
			
			DB::commit();
			
			$data = array(
				"user" => $user,
				"order" => $order_list,
				"checkout_id" => $checkout_id,
			);
			
			// Sending Mail
			Mail::send('mail.order', $data, function($message){
			
				$reciever = Config::get("thaisteel.order_recieved_mail");
			
				$message->to($reciever, "From Thaisteel.com")
							->subject('New Order recieved!!!');
			});
			
			Cart::destroy();
			
			Session::flash('message', 'Check-out finish');
		}
		catch(Exception $e) 
		{
			DB::rollback();
			
			Session::flash('message', $e->getMessage());
		}
		
		
		
		return Redirect::action('SearchController@index');
	}
}