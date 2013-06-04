<?php

Route::any('(:bundle)', function(){
	return Redirect::to_route('admin.index');
});
Route::any('(:bundle)/', function(){
	return Redirect::to_route('admin.index');
});

Route::get('(:bundle)/login', array('before' => 'guest', 'as' => 'auth.login', function(){
	return View::make('charisma::auth.login');
}));
Route::post('(:bundle)/login', array('before' => 'guest|csrf', 'uses' => 'charisma::auth@login'));

Route::get('(:bundle)/logout', array('as' => 'auth.logout', function(){
	Auth::logout();
	return Redirect::to_route('auth.login');
}));
Route::any('(:bundle)/forgetpassword', array('as' => 'auth.forgetpassword', 'uses' => 'charisma::auth@forgetpassword'));

Route::group(array('before' => 'auth'), function()
{
	Route::get('(:bundle)/index', array('as' => 'admin.index', 'uses' => 'charisma::home@index'));
	
	Route::get('(:bundle)/page-index', array('as' => 'admin.page-index', function(){
		return View::make('charisma::index.index');
	}));
	
	
	
	Route::get('(:bundle)/page', array('as' => 'admin.page', 'uses' => 'charisma::home@page'));
	
	Route::get('(:bundle)/page-new', array('as' => 'admin.page.new', 'uses' => 'charisma::home@page_new'));
	Route::post('(:bundle)/page-new', array('uses' => 'charisma::home@page_new'));
	
	Route::get('(:bundle)/page-edit/(:num)', array('as' => 'admin.page.edit', 'uses' => 'charisma::home@page_edit'));
	Route::post('(:bundle)/page-edit/(:num)', array('uses' => 'charisma::home@page_edit'));
	
	Route::get('(:bundle)/page-delete/(:num)', array('as' => 'admin.page.delete', function($id){
		$page = Page::find($id);
		if( $page ){
			$page->status = 'deleted';
			$page->timestamp();
			$page->save();
		}
		return Redirect::to_route('admin.page');
	}));
	
	Route::get('(:bundle)/news', array('as' => 'admin.news', 'uses' => 'charisma::news@news'));
	
	
	Route::get('(:bundle)/news-new', array('as' => 'admin.news.new', 'uses' => 'charisma::news@news_new'));
	Route::post('(:bundle)/news-new', array('uses' => 'charisma::news@news_new'));
	
	Route::get('(:bundle)/news-edit/(:num)', array('as' => 'admin.news.edit', 'uses' => 'charisma::news@news_edit'));
	Route::post('(:bundle)/news-edit/(:num)', array('uses' => 'charisma::news@news_edit'));
	
	Route::get('(:bundle)/news-delete/(:num)', array('as' => 'admin.news.delete', function($id){
		$page = Page::find($id);
		if( $page ){
			$page->status = 'deleted';
			$page->timestamp();
			$page->save();
		}
		return Redirect::to_route('admin.news');
	}));
});

Route::filter('guest', function()
{
    if( Auth::check() ){
        return Redirect::to_route('admin.index')->with('flash_notice', 'You are already logged in!');
    }
});

Route::filter('auth', function()
{
	if( ! Auth::check() ){
		return Redirect::to_route('auth.login');
	}
});
