<?php

class UserClientController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// No-Impl
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('user.create')
					->with('user', FALSE);
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
			'first_name'		 => 'required',
			'mobile_phone'		 => 'required',
			'email'      		 => 'required|email',
			'password' 	 		 => 'required|min:5|confirmed',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('user_clients/create')
				->withErrors($validator)
				->withInput(Input::except('password', 'confirm_password'));
		} else {
			// store
			$user = new User;
			$user->email      	= Input::get('email');
			$user->password		= Hash::make(Input::get('password'));
			$user->permission   = 3; // Force User Type
			$user->name			= Input::get('first_name');
			$user->lastname		= Input::get('last_name');
			$user->address		= Input::get('address');
			$user->mobile_phone = Input::get('mobile_phone');
			$user->telephone 	= Input::get('telephone');
			$user->fax 			= Input::get('fax');
			$user->company 		= Input::get('company');
			$user->save();

			// redirect
			// Session::flash('message', 'Successfully created a user!');
			return Redirect::to('/');
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
		$user = User::find($id);

		// show the edit form and pass the nerd
		return View::make('user.edit')
			->with('user', $user);
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
			'name'		 		 => 'required',
			'mobile_phone'		 => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('user_clients/' . $id . "/edit")
				->withErrors($validator)
				->withInput(Input::except('password', 'confirm_password'));
		} else {
			// store
			$user = User::find($id);
			$user->permission   = 3; // Force User Type
			$user->name			= Input::get('name');
			$user->lastname		= Input::get('lastname');
			$user->address		= Input::get('address');
			$user->mobile_phone = Input::get('mobile_phone');
			$user->telephone 	= Input::get('telephone');
			$user->fax 			= Input::get('fax');
			$user->company 		= Input::get('company');
			$user->save();

			// redirect
			// Session::flash('message', 'Successfully created a user!');
			return Redirect::to('/');
		}
	}
	
	public function changePassword()
	{
		$user = Session::get('user_client');
	
		//
		// show the edit form and pass the nerd
		return View::make('user.change_password')->with('user', $user);
	}
	
	public function doChangePassword()
	{
		$rules = array(
			'old_password'		 => 'required|min:5',
			'new_password'       => 'required|min:5|confirmed'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('user_clients/change_password')
				->withErrors($validator)
				->withInput(Input::except('old_password', 'new_password', 'new_password_confirmation'));
		} else {
		
			// Validate
			$old_password = Input::get('old_password');
			
			$user_client = Session::get('user_client');
			
			if (Hash::check($old_password, $user_client->getAuthPassword()))
			{
				$new_password = Input::get("new_password");
				
				$user = User::find($user_client->id);
				
				$user->password = Hash::make($new_password);
				$user->save();
				
				return Redirect::to('/');
			}
			else
			{
				$messages = array(
					'required' => 'Invalid Old Password',
				);
			
				return Redirect::to('user_clients/change_password')
					->withErrors($messages)
					->withInput(Input::except('old_password', 'new_password', 'new_password_confirmation'));
			}
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
	}

}