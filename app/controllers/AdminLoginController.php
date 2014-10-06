<?php

class AdminLoginController extends BaseController {

	public function __construct() {
	   $this->beforeFilter('csrf', array('on'=>'post'));
	}
	
	public function showLogin()
	{
		if( Session::has('user') )
		{
			return Redirect::to('admin/products')->with('message', 'You are now logged in!');
		}
		
		return View::make("admin.login");
	}

	public function doLogin()
	{	
		// validate the info, create rules for the inputs
		$rules = User::$rules;

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {
			return Redirect::to('admin')
				->with('message', 'Your username/password combination was incorrect')
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {
			if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
			
				// Check Permission // Only Admin and Supplier
				$user = Auth::user();
				
				if ($user->permission == "1" OR $user->permission == "2")
				{
					Session::put('user', Auth::user());
					return Redirect::to('admin/products')->with('message', 'You are now logged in!');
				}
				else
				{
					return Redirect::to('admin/')
					  ->with('message', 'Your username/password combination was incorrect')
					  ->withInput(Input::except('password'));
				}
			} else {
				return Redirect::to('admin/')
				  ->with('message', 'Your username/password combination was incorrect')
				  ->withInput(Input::except('password'));
			}
		}
	}
	
	public function doLogout()
	{
		Auth::logout();
		Session::forget('user');
		
		return Redirect::to('/user_login')
				->with('message', 'Logout Successful');
	}
}