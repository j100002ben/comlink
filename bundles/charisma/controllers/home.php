<?php

class Charisma_Home_Controller extends Charisma_Base_Controller {
	
	public function get_index($view = 'index.html')
	{
		// Get rid of `.html` and prepend bundle and folder name
		$view_str = 'charisma::pages.' . current(explode('.', $view));
		// Load the view by the given parameter
		$this->layout->nest('content', $view_str);
	}
	
	public function get_page()
	{
		$pages = Page::where('status', '!=', 'deleted')->get();
		
		$this->layout->nest('content', 'charisma::pages.page', 
            array(
            	'pages' => $pages
            ));
	}
	
	public function get_page_new()
	{
		$this->layout->nest('content', 'charisma::pages.page-new');
	}
	
	public function post_page_new()
	{
		$input = Input::all();
		$rules = array(
			'title'  => 'required',
			'name' => 'required',
			'menu_order' => 'numeric',
			'content' => 'required'
		);
		$validation = Validator::make($input, $rules);
		if ($validation->fails()) {
		    return Redirect::to_route('admin.page.new')->with_input('only', array_keys($rules))->with_errors($validation);;
		}
		if( empty($input['menu_order']) ){
			$input['menu_order'] = 0;
		}
		$data = array();
		foreach( array_keys($rules) as $name ){
			$data[$name] = $input[$name];
		}
		$data['status'] = 'public';
		$page = Page::create($data);
		return Redirect::to_route('admin.page');
	}
	
	public function get_page_edit($id)
	{
		$page = Page::find($id);
		if( !$page ){
			return Redirect::to_route('admin.page');
		}
		$this->layout->nest('content', 'charisma::pages.page-edit', array('page' => $page));
	}
	
	public function post_page_edit($id)
	{
		$page = Page::find($id);
		if( !$page ){
			return Redirect::to_route('admin.page');
		}
		
		$input = Input::all();
		$rules = array(
			'title'  => 'required',
			'name' => 'required',
			'menu_order' => 'numeric',
			'content' => 'required'
		);
		$validation = Validator::make($input, $rules);
		if ($validation->fails()) {
		    return Redirect::to_route('admin.page.new')->with_input('only', array_keys($rules))->with_errors($validation);;
		}
		if( empty($input['menu_order']) ){
			$input['menu_order'] = 0;
		}
		$data = array();
		foreach( array_keys($rules) as $name ){
			$data[$name] = $input[$name];
		}
		$data['status'] = 'public';
		$page->update($data);
		return Redirect::to_route('admin.page');
	}
	
}
