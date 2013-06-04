<?php

class Charisma_News_Controller extends Charisma_Base_Controller {
	
	public function get_news()
	{
		$pages = Page::where('status', '!=', 'deleted')->where_type('news')->get();
		
		$this->layout->nest('content', 'charisma::pages.news', 
            array(
            	'pages' => $pages
            ));
	}
	
	public function get_news_new()
	{
		$this->layout->nest('content', 'charisma::pages.news-new');
	}
	
	public function post_news_new()
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
		    return Redirect::to_route('admin.news.new')->with_input('only', array_keys($rules))->with_errors($validation);;
		}
		if( empty($input['menu_order']) ){
			$input['menu_order'] = 0;
		}
		$data = array();
		foreach( array_keys($rules) as $name ){
			$data[$name] = $input[$name];
		}
		$data['type'] = 'news';
		$data['status'] = 'public';
		$page = Page::create($data);
		return Redirect::to_route('admin.news');
	}
	
	public function get_news_edit($id)
	{
		$page = Page::find($id);
		if( !$page ){
			return Redirect::to_route('admin.news');
		}
		$this->layout->nest('content', 'charisma::pages.news-edit', array('page' => $page));
	}
	
	public function post_news_edit($id)
	{
		$page = Page::find($id);
		if( !$page ){
			return Redirect::to_route('admin.news');
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
		    return Redirect::to_route('admin.news.new')->with_input('only', array_keys($rules))->with_errors($validation);;
		}
		if( empty($input['menu_order']) ){
			$input['menu_order'] = 0;
		}
		$data = array();
		foreach( array_keys($rules) as $name ){
			$data[$name] = $input[$name];
		}
		$data['type'] = 'news';
		$data['status'] = 'public';
		$page->update($data);
		return Redirect::to_route('admin.news');
	}
	
}
