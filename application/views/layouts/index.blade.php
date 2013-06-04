<!DOCTYPE html>
<!--[if lt IE 9]><html lang="zh-tw" class="no-js lte-ie8" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"><![endif]-->
<!--[if gt IE 8]><!--><html lang="zh-tw" class="no-js" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"><!--<![endif]-->
<head profile="http://www.w3.org/2005/10/profile">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>@yield('head-title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta http-equiv="x-dns-prefetch-control" content="off">
	<meta http-equiv="Window-target" content="_top" >
	<meta http-equiv="content-language" content="zh-TW" >
	<meta http-equiv="imagetoolbar" content="no" >
	<meta name="resource-type" content="document" >
	<meta name="date" content="2013" >
	{{ HTML::style('bundles/bootstrapper/css/bootstrap.min.css') }}
	{{ HTML::style('css/style.css') }}
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	{{ HTML::script('bundles/bootstrapper/js/bootstrap.min.js') }}
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="row">
				<div class="span3 logo-div">
					<h1><a href="{{ url('') }}" class="logo-link"><span>Comlink</span></h1></a>
				</div>
				<div class="span9">
					<ul class="unstyled clearfix">
						<li class="pull-left">
							<a href="{{ url('dott_brand') }}" class="nav-item">
								品牌介紹<span>Brand</span>
							</a>
						</li>
						<li class="pull-left">
							<a href="product_list.html" class="nav-item">
								產品介紹<span>Product</span>
							</a>
						</li>
						<li class="pull-left">
							<a href="{{ route('news') }}" class="nav-item">
								最新消息<span>News</span>
							</a>
						</li>
						<li class="pull-left">
							<a href="{{ route('buy') }}" class="nav-item">
								購買通路<span>Buy</span>
							</a>
						</li>
						<li class="pull-left">
							<a href="{{ route('contact') }}" class="nav-item">
								聯絡我們<span>Contact</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<hr class="dashed-hr"></hr>
		@yield('content')
		<hr class="dashed-hr"></hr>
		<div class="footer clearfix">
			<div class="row">
				<div class="span6">
					電話 (02) 2545-2535<span>地址</span>
				</div>
				<div class="span4 offset2 text-right">
					2013 Comlink All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
</body>
</html>