<?php

class ProductNameController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
		$rules = array(
			'name'      		=> 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		
		$product_id = Input::get("product_id");

		// process the login
		if ($validator->fails()) {
			return Redirect::to('admin/products/' . $product_id)
				->withErrors($validator)
				->withInput(Input::all());
		} else {
			// store
			$product_name = new ProductName;
			$product_name->name = Input::get("name");
			$product_name->product_id = $product_id;
			$product_name->save();
			
			// redirect
			Session::flash('message', 'Successfully add New Name!');
			return Redirect::to('admin/products/' . $product_id);
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
		$rules = array(
			'name' 		=> 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('admin/products/' . $product_id)
				->withErrors($validator)
				->withInput(Input::all());
		} else {
			// store
			$product_name = ProductName::find($id);
			$product_name->name = Input::get("name");
			$product_id = $product_name->product_id;
			$product_name->save();
			
			// redirect
			Session::flash('message', 'Successfully updated Name!');
			return Redirect::to('admin/products/' . $product_id);
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
		$product_name = ProductName::find($id);
		$product_id = $product_name->product_id;
		$product_name->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the Name of Product');
		return Redirect::to('admin/products/' . $product_id);
	}

}