<?php

class ProductOfUserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$user_dropdown[''] = 'All Users';
		$user_dropdown_temp = User::lists('name', 'id');
		$user_dropdown = $user_dropdown + $user_dropdown_temp;
		
		$users = User::all();
		
		
		return View::make("admin.productusermapping.index")->with('user_dropdown', $user_dropdown)->with('users', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$user = Input::get("user");
		
		$user_dropdown = User::lists('name', 'id');
		$product_dropdown = Product::orderBy('name')->lists('name', 'id');
		
		$isShowProductAsCheckbox = Config::get("thaisteel.product_of_user_checkbox");
		
		$products_of_user = array();
		if (! $user)
		{
			$user = key($user_dropdown);
		}
		
		if ($user)
		{
			$temp = User::find($user)->products();
			foreach($temp as $key => $value)
			{
				$products_of_user[]= $value->id;
			}
		}
		
		return View::make('admin.productusermapping.create')
						->with('user_dropdown', $user_dropdown)
						->with('product_dropdown', $product_dropdown)
						->with("user_selected", $user)
						->with("products_of_user", $products_of_user)
						->with("isShowProductAsCheckbox", $isShowProductAsCheckbox);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$user = Input::get("user");
		$products = Input::get("product");
		
		// Delete old data.
		ProductUserMapping::where('user_id', '=' , $user)->delete();
		
		for($i = 0; $i < count($products); $i++)
		{
			$product_user_mapping = new ProductUserMapping;
			$product_user_mapping->user_id = $user;
			$product_user_mapping->product_id = $products[$i];
			
			$product_user_mapping->save();
		}
		
		// redirect
		Session::flash('message', 'Successfully updated mapping!');
		return Redirect::to('admin/product_user_mapping');
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