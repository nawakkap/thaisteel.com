<?php

class PriceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$prices = Price::all();
		
		$user_dropdown[''] = 'All Users';
		$user_dropdown_without_all = User::lists('name', 'id');
		$user_dropdown = $user_dropdown + $user_dropdown_without_all;
		
		$products = Product::lists('name', 'id');
		
		return View::make("admin.price.index")
					->with("prices", $prices)
					->with("user_dropdown", $user_dropdown)
					->with('user_dropdown_without_all', $user_dropdown_without_all)
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
		$user_selected = Input::get("user");
		
		// $user_dropdown[''] = 'All Users';
		$user_dropdown_temp = User::lists('name', 'id');
		$user_dropdown = $user_dropdown_temp;
		
		if ($user_selected == '')
		{
			$user_selected = key($user_dropdown);
		}
		
		$product = Product::lists('name', 'id');

		$products_of_user = array();
		if ($user_selected)
		{
			$temp = User::find($user_selected)->products();
			foreach($temp as $key => $value)
			{
				if (isset($product[$value->id])) 
				{
					$products_of_user[] = array(
						"id" => $value->id,
						"name" => $product[$value->id]
					);
				}
			}
		}
		
		return View::make('admin.price.create')
					->with("user_selected", $user_selected)
					->with("user_dropdown", $user_dropdown)
					->with("products_of_user", $products_of_user);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$user_selected = Input::get("user");
		$update_date = Input::get('update_date');
		$price_kg = Input::get('price_kg');
		$price_unit = Input::get('price_unit');
		
		Price::whereRaw('user_id = ? and updated_at = ?', array($user_selected, $update_date))->delete();
		
		$products_of_user = array();
		if ($user_selected)
		{
			$temp = User::find($user_selected)->products();
			foreach($temp as $key => $value)
			{
				$products_of_user[] = $value->id;
			}
		}

		for($i = 0; $i < count($products_of_user); $i++)
		{
			$ishasPriceKg = Input::has($products_of_user[$i] . "_kg");
			$ishasPriceUnit = Input::has($products_of_user[$i] . "_unit");
			
			if ($ishasPriceKg || $ishasPriceUnit)
			{
				$price_kg = Input::get($products_of_user[$i] . "_kg");
				$price_unit = Input::get($products_of_user[$i] . "_unit");
			
				$price = new Price;
				$price->product_id = $products_of_user[$i];
				$price->user_id = $user_selected;
				$price->price_kg = $price_kg;
				$price->price_unit = $price_unit;
				$price->updated_at = $update_date . " 00:00:00";
				
				$price->save();
			}
		}
		
		Session::flash('message', 'Successfully updated price!');
		return Redirect::to('admin/prices');
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
		$price = Price::find($id);

		// show the edit form and pass the nerd
		return View::make('admin.price.edit')
			->with('price', $price);
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
			'update_date'		=> 'required',
			'price_kg'      	=> 'required|numeric',
			'price_unit'      	=> 'required|numeric',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('admin/prices/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::all());
		} else {
			// store
			$product = Price::find($id);
			$product->user_id				= Input::get('user');
			$product->product_id      		= Input::get('product');
			$product->updated_at      		= Input::get('update_date') . " 00:00:00";
			$product->price_kg				= Input::get('price_kg');
			$product->price_unit			= Input::get('price_unit');
			
			$product->save();

			// redirect
			Session::flash('message', 'Successfully updated price!');
			return Redirect::to('admin/prices');
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
		$price = Price::find($id);
		$price->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the price');
		return Redirect::to('admin/prices');
	}

	public function doImport()
	{
		DB::transaction(function() {
		
			$user = Input::get('user');
			$import_date = Input::get('import_date');
			$file = Input::file('xls');
			$path = Input::file('xls')->getRealPath();
			
			$inputFileType = PHPExcel_IOFactory::identify($path);
			$objReader = PHPExcel_IOFactory::createReader($inputFileType);
			$objPHPExcel = $objReader->load($path);
			
			$sheet = $objPHPExcel->getSheet(0); 
			$highestRow = $sheet->getHighestRow(); 
			$highestColumn = $sheet->getHighestColumn();
			
			
			// Codes below some line hardcode
			for ($row = 1; $row <= $highestRow; $row++) 
			{ 
				//  Read a row of data into an array
				$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
												NULL,
												TRUE,
												FALSE);
												

				//  Insert row data array into your database of choice here
				if ($row == 1)
				{
					// Expect Supplier Name,
				}
				else if ($row == 2)
				{
					// Expect Nothing row
				}
				else if ($row == 3)
				{
					// Expect Column Header
				}
				else if ($row >= 4)
				{
					// Expect Price of Product 
					// Expect 15 columns to be read
					
					$product_id = $rowData[0][12]; 		// M
					$price_kg = $rowData[0][13]; 		// N 
					$price_unit = $rowData[0][14]; 		// O
					$delivery_date = $rowData[0][15]; 	// P
					
					if (! $delivery_date) {
						$delivery_date = Config::get('thaisteel.import_xls_default_day');
					}
					
					if ($product_id)
					{
						settype($price_kg, 'float');
						settype($price_unit, 'float');
						settype($product_id, 'integer');

						$p = new Price;
						$p->user_id = $user;
						$p->product_id = $product_id;
						$p->price_kg = $price_kg;
						$p->price_unit = $price_unit;
						$p->delivery_date = $delivery_date;
						$p->updated_at = $import_date . ' ' . date("H:i:s");
						
						$p->save();
					}
					
					
					/*
					for($j = 0; $j <= 15; $j++)
					{
						if ($j == 0)
						{
							// Expect Product Name
						}
						else if ($j == 1)
						{
							// Expect Size
						}
						else if ($j == 2)
						{
							// Expect Weight / Meter
						}
						else if ($j == 3)
						{
							// Expect Weight / 6 Meters
						}
						else if ($j == 4)
						{
							// Expect Price
						}
						else if ($j == 5)
						{
							// Expect Delivery Date.
						}
						// Ignore 6 - 11
						else if ($j == 12)
						{
							// Expect My Product Id 
							$insert_data['product_id'] = $rowData[$j];
						}
					}
					*/
				}
			}
		});
		
		Session::flash('message', 'Successfully imported price!');
		return Redirect::to('admin/prices');
	}
}