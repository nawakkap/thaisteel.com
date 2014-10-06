<?php

class AdminOrderController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$orders = DB::select('
						SELECT orders.checkout_id, users.id as user_id, users.name as user_name, product_names.name, orders.created_at, SUM(price * quantity) as total 
						FROM orders 
						LEFT JOIN users ON orders.user_id = users.id 
						LEFT JOIN product_names ON orders.product_name_id = product_names.id 
						GROUP BY checkout_id 
						ORDER BY checkout_id');
		//
		return View::make("admin.order.index")
					->with("orders", $orders);
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
		// Expect Id is checkout_id
		$orders = DB::select('
						SELECT orders.*, users.id as user_id, users.name as user_name, product_names.name as product_name, orders.created_at
						FROM orders 
						LEFT JOIN users ON orders.user_id = users.id 
						LEFT JOIN product_names ON orders.product_name_id = product_names.id 
						WHERE orders.checkout_id = ? 
						ORDER BY checkout_id', array($id));
				
		$temp = DB::select('
						SELECT *, SUM(price * quantity) as total 
						FROM orders 
						WHERE checkout_id = ? 
						ORDER BY checkout_id',
						array($id));
						
		
		$sum = $temp[0]->total;
		$user = User::find($temp[0]->user_id);
		
		
		return View::make("admin.order.detail")
						->with('info', $temp[0])
						->with('sum', $sum)
						->with('user', $user)
						->with('orders', $orders);
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