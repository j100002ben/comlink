<?php

Route::get('/', function()
{
	return View::make('home.index');
});

Route::get('about', array( 'as' => 'about', function(){
	return View::make('home.about');
}));

Route::get('page/(:all)', array( 'as' => 'page', function( $page_name ){
	return $page_name;
}));

Route::get('news', array( 'as' => 'news', function(){
	return View::make('news.index');
}));
/*
Route::get('news/(:all)', array( 'as' => 'news-detail', function( $page_name ){
	return $page_name;
}));
*/

Route::get('about/(:all)', array( 'as' => 'about', function( $page_name ){
	return $page_name;
}));

Route::get('brand/(:all)', array( 'as' => 'brand', function( $page_name ){
	return $page_name;
}));

Route::get('brand-detail/(:all)', array( 'as' => 'brand-detail', function( $page_name ){
	return $page_name;
}));

Route::get('buy', array( 'as' => 'buy', function(){
	return View::make('home.buy');
}));

Route::get('contact', array( 'as' => 'contact', function(){
	return View::make('home.contact');
}));

Route::post('contact', array( function(){
	$input = Input::all();
	$mailer = IoC::resolve('mailer');
	$message = Swift_Message::newInstance('[Comlink] 聯絡我們通知信')
	    ->setFrom(array('server@comlink.com'=>'Comlink Server'))
	    ->setTo(array('service@comlinktek.com'=>'Comlink Service'))
	    ->setBcc(array('comlink@clients.poka.tw'=>'Client-Comlink'))
	    ->setReplyTo(array($input['email']=>$input['name']))
	    ->setBody(<<<EOT
{$input['name']}於[Comlink]發送一封留言
日期：2013年6月3日 PM 03:54 Mon
以下為留言內容：
────────────────────────────────────────
聯絡姓名：{$input['name']}
E-mail：{$input['email']}
電話：{$input['phone']}
手機：{$input['mobile']}
方便時間：{$input['time']}
問題敘述：
{$input['message']}

────────────────────────────────────────
如需回復給使用者，請直接回覆此E-mail。
EOT
,'text/plain');
	$mailer->send($message);
	return Redirect::to_route('contact');
}));



Route::get('/product', function(){
	return View::make('product.index');
});

Route::get('/product_dtl', function(){
	return View::make('product.detail');
});

Route::get('/product_list', function(){
	return View::make('product.list');
});

Route::get('/brand', function(){
	return View::make('brand.index');
});

Route::get('/dott_brand', function(){
	return View::make('brand.dott');
});

Route::get('/chart', function(){
	return View::make('home.chart');
});

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application. The exception object
| that is captured during execution is then passed to the 500 listener.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function($exception)
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});