<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the users
		$users = User::all();
		$user_type = Config::get('thaisteel.user_type');
		
		
		return View::make('admin.user.index')
				->with('users', $users)
				->with('user_type', $user_type);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$user_type = Config::get('thaisteel.user_type');
		//
		return View::make('admin.user.create')->with('user_type', $user_type);
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
			'name'		 => 'required',
			'email'      => 'required|email',
			'password' 	 => 'required|min:5'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('admin/users/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$user = new User;
			$user->name			= Input::get('name');
			$user->email      	= Input::get('email');
			$user->password		= Hash::make(Input::get('password'));
			$user->permission   = Input::get('permission');
			$user->save();

			// redirect
			Session::flash('message', 'Successfully created a user!');
			return Redirect::to('admin/users');
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
		// get the nerd
		$user = User::find($id);
		
		$user_type = Config::get('thaisteel.user_type');

		// show the edit form and pass the nerd
		return View::make('admin.user.edit')
			->with('user', $user)
			->with('user_type', $user_type);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'		 => 'required',
			'email'      => 'required|email',
			'password' 	 => 'required|min:5'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('admin/users/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$user = User::find($id);
			$user->name			= Input::get('name');
			$user->email      	= Input::get('email');
			$user->password 	= Hash::make(Input::get('password'));
			$user->permission   = Input::get('permission');
			$user->save();

			// redirect
			Session::flash('message', 'Successfully updated user!');
			return Redirect::to('admin/users');
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
		$user = User::find($id);
		$user->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the user');
		return Redirect::to('admin/users');
	}
}