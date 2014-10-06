<?php

class ProductController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		// get all the nerds
		$products = Product::all();

		// load the view and pass the nerds
		return View::make('admin.product.index')
			->with('products', $products);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('admin.product.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'      		=> 'required',
			'type' 				=> 'required',
			'thickness'	 		=> 'numeric',
			'weight_per_m'      => 'required|numeric',
			'weight_tolerance' 	=> 'required|numeric',
			//'grade'      		=> 'required',
			'standard_length' 	=> 'required',
			//'pack_unit'      	=> 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('admin/products/create')
				->withErrors($validator)
				->withInput(Input::all());
		} else {
			// store
			$product_name = new ProductName(array('name' => Input::get('name')));
			
			$product = new Product;
			$product->name 					= Input::get('name');
			$product->type      			= Input::get('type');
			$product->thickness      		= Input::get('thickness');
			$product->weight_per_m			= Input::get('weight_per_m');
			$product->weight_tolerance 		= Input::get('weight_tolerance');
			$product->grade 				= Input::get('grade');
			$product->standard_length 		= Input::get('standard_length');
			$product->pack_unit 			= Input::get('pack_unit');
			$product->save();
			
			$product->product_names()->save($product_name);

			// redirect
			Session::flash('message', 'Successfully created a product!');
			return Redirect::to('admin/products');
		}
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
		$product = Product::find($id);
		
		$names = $product->product_names()->get();
		
		
		return View::make('admin.product.productname')->with("product", $product)->with("names", $names);
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
		$product = Product::find($id);

		// show the edit form and pass the nerd
		return View::make('admin.product.edit')
			->with('product', $product);
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
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'				=> 'required',
			'type' 				=> 'required',
			'thickness'	 		=> 'numeric',
			'weight_per_m'      => 'required|numeric',
			'weight_tolerance' 	=> 'required|numeric',
			//'grade'      		=> 'required',
			'standard_length' 	=> 'required',
			//'pack_unit'      	=> 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('admin/products/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::all());
		} else {
			// store
			$product = Product::find($id);
			$product->name					= Input::get('name');
			$product->type      			= Input::get('type');
			$product->thickness      		= Input::get('thickness');
			$product->weight_per_m			= Input::get('weight_per_m');
			$product->weight_tolerance 		= Input::get('weight_tolerance');
			$product->grade 				= Input::get('grade');
			$product->standard_length 		= Input::get('standard_length');
			$product->pack_unit 			= Input::get('pack_unit');
			$product->save();

			// redirect
			Session::flash('message', 'Successfully updated a product!');
			return Redirect::to('admin/products');
		}
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
		$product = Product::find($id);
		$product->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the product');
		return Redirect::to('admin/products');
	}

}