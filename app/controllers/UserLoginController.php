<?php

class UserLoginController extends BaseController {

	public function __construct() {
	   $this->beforeFilter('csrf', array('on'=>'post'));
	}
	
	public function showLogin()
	{
		if( Session::has('user_client') )
		{
			return Redirect::to('/');
		}
		
		return View::make("user.login");
	}

	public function doLogin()
	{	
		// validate the info, create rules for the inputs
		$rules = array(
			'email'      => 'required|email',
			'password' 	 => 'required|min:5'
		);
		
		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails()) {
			return Redirect::to('user_login')
				->with('message', 'Your username/password combination was incorrect')
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {
			if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
			
				$user = Auth::user();
				if ($user->permission == 3)
				{
					Session::put('user_client', Auth::user());
					return Redirect::to('/');
				}
				else if ($user->permission == 1 || $user->permission == 2)
				{
					Session::put('user', Auth::user());
					return Redirect::to('admin/products')->with('message', 'You are now logged in!');
				}
				
				
			} else {
				return Redirect::to('user_login/')
				  ->with('message', 'Your username/password combination was incorrect')
				  ->withInput(Input::except('password'));
			}
		}
	}
	
	public function doLogout()
	{
		Auth::logout();
		Session::forget('user_client');
		
		return Redirect::to('/')
				->with('message', 'Logout Successful');
	}
}