<!DOCTYPE html>
<!--[if lt IE 9]><html lang="zh-tw" class="no-js lte-ie8" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"><![endif]-->
<!--[if gt IE 8]><!--><html lang="zh-tw" class="no-js" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"><!--<![endif]-->
<head profile="http://www.w3.org/2005/10/profile">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>產品總覽</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta http-equiv="x-dns-prefetch-control" content="off">
	<meta http-equiv="Window-target" content="_top" >
	<meta http-equiv="content-language" content="zh-TW" >
	<meta http-equiv="imagetoolbar" content="no" >
	<meta name="resource-type" content="document" >
	<meta name="date" content="2013" >
	{{ HTML::style('bundles/bootstrapper/css/bootstrap.min.css') }}
	{{ HTML::style('css/prototype-style.css') }}
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	{{ HTML::script('bundles/bootstrapper/js/bootstrap.min.js') }}
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="row">
				<div class="span3"><a href="{{ URL::base() }}"><img src="http://placekitten.com/220/150" class="img-polaroid"/></a></div>
				<div class="span9 clearfix">
					<div class="pull-left">
						<ul class="unstyled" id="top-nav">
							<li class="pull-left"><a href="{{ URL::to('dott_brand') }}" class="btn">附點品牌</a></li>
							<li class="pull-left"><a href="{{ URL::to('product_list') }}" class="btn">產品介紹</a></li>
							<li class="pull-left"><a href="{{ URL::to('news') }}" class="btn">最新消息</a></li>
							<li class="pull-left"><a href="{{ URL::to('buy') }}" class="btn">購買通路</a></li>
							<li class="pull-left"><a href="{{ URL::to('contact') }}" class="btn">聯絡我們</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="main-content">
			<hr class="dashed-hr margin-bottom-none"></hr>
			<div class="row">
				<div class="span3">
					<h3>產品</h3>
					<ul class="unstyled">
						<li><a href="{{ URL::to('product_dtl') }}">產品1內頁</a></li>
						<li><a href="{{ URL::to('product_dtl') }}">產品1內頁</a></li>
						<li><a href="{{ URL::to('product_dtl') }}">產品1內頁</a></li>
						<li><a href="{{ URL::to('product_dtl') }}">產品1內頁</a></li>
					</ul>
				</div>
				<div class="span8 left-dash-border">
					<div class="row margin-top-20 margin-left-10">
						<div class="span4">
							<a href="{{ URL::to('product_dtl') }}"><img src="http://placekitten.com/300/150" /></a>
						</div>
						<div class="span3">
							<table class="span3"><tbody>
								<tr>
									<td><a href="{{ URL::to('product_dtl') }}"><img src="http://placekitten.com/100/100" /></a></td>
									<td><a href="{{ URL::to('product_dtl') }}"><img src="http://placekitten.com/100/100" /></a></td>
								</tr>
								<tr>
									<td><a href="{{ URL::to('product_dtl') }}"><img src="http://placekitten.com/100/100" /></a></td>
									<td><a href="{{ URL::to('product_dtl') }}"><img src="http://placekitten.com/100/100" /></a></td>
								</tr>
							</tbody></table>
						</div>
					</div>
					<div class="row margin-top-20 margin-left-10">
						<div class="span3">
							<table class="span3"><tbody>
								<tr>
									<td><a href="{{ URL::to('product_dtl') }}"><img src="http://placekitten.com/100/100" /></a></td>
									<td><a href="{{ URL::to('product_dtl') }}"><img src="http://placekitten.com/100/100" /></a></td>
								</tr>
								<tr>
									<td><a href="{{ URL::to('product_dtl') }}"><img src="http://placekitten.com/100/100" /></a></td>
									<td><a href="{{ URL::to('product_dtl') }}"><img src="http://placekitten.com/100/100" /></a></td>
								</tr>
							</tbody></table>
						</div>
						<div class="span4">
							<a href="{{ URL::to('product_dtl') }}"><img src="http://placekitten.com/300/150" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer clearfix">
			<div class="row">
				<div class="span6">
					電話 (XX) XXXX-XXXX<span>地址 XXX</span><
				</div>
				<div id="copyright" class="span5 offset1">
					版權所有 © 2013 Comlink All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
</body>
</html>