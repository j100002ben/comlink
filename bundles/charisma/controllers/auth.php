<?php

class Charisma_Auth_Controller extends Charisma_Base_Controller {
	
	public function post_login()
	{
		$input = Input::all();
		$rules = array(
			'username'  => 'required|max:20',
			'password' => 'required'
		);
		$validation = Validator::make($input, $rules);
		if ($validation->fails()) {
		    return Redirect::to_route('auth.login')->with_input('only', array('username'))->with_errors($validation);;
		}
		$credentials = array('username' => $input['username'], 'password' => $input['password']);
		
		if( ! Auth::attempt($credentials) ){
			return Redirect::to_route('auth.login')->with_input('only', array('username'))->with('flash_cannot_login', 1);;
		}
		
		return Redirect::to_route('admin.index');
	}
	
}
