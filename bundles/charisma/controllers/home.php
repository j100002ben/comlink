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
		return '';
	}
	
	public function post_page_new()
	{
		return '';
	}
	
	public function get_page_edit($id)
	{
		return '';
	}
	
	public function post_page_edit($id)
	{
		return '';
	}
	
	public function get_news()
	{
		
		
		$this->layout->nest('content', 'charisma::pages.news');
	}
}
