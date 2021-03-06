<!DOCTYPE html>
<!--[if lt IE 9]><html lang="zh-tw" class="no-js lte-ie8" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"><![endif]-->
<!--[if gt IE 8]><!--><html lang="zh-tw" class="no-js" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"><!--<![endif]-->
<head profile="http://www.w3.org/2005/10/profile">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>聯絡我們</title>
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
		<hr class="dashed-hr"></hr>
		<div class="main-content">
			<form class="form-horizontal">
				<div class="control-group">
					<label class="control-label" for="type">問題類型</label>
					<div class="controls">
						<select name="type">
							<option>異業合作</option>
							<option>代理行銷</option>
							<option>其他（留言處可說明）</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="name">Name</label>
					<div class="controls">
						<input type="text" id="name" placeholder="請輸入您的姓名">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="phone">Phone</label>
					<div class="controls">
						<input type="text" id="phone" placeholder="請輸入您的電話號碼">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="mobilePhone">Mobile Phone</label>
					<div class="controls">
						<input type="text" id="mobilePhone" placeholder="請輸入您的手機號碼">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="email">Email</label>
					<div class="controls">
						<input type="text" id="email" placeholder="請輸入您的Email信箱">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="contactTime">方便聯絡時間</label>
					<div class="controls">
						<select name="contactTime">
							<option>白天 8:00~12:00</option>
							<option>下午 14:00~18:00</option>
							<option>晚上 18:00~22:00</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="message">留言</label>
					<div class="controls">
						<textarea id="message"></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="validCode">驗證碼</label>
					<div class="controls">
						<img src="http://placekitten.com/180/100" /><br />
						<input type="text" id="validCode" placeholder="請輸入驗證碼">
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn">送出</button>
					</div>
				</div>
			</form>
		</div>
		<hr class="dashed-hr"></hr>
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