@layout('layouts.index')

@section('head-title')
附點生活 130℃環保筷 - Comlink
@endsection

<?php
if( rawurldecode($product_name) == '130℃環保筷' )
	$link_name = '130c';
else
	$link_name = $product_name;
?>

@section('content')
<div class="main-content">
	<hr class="dashed-hr"></hr>
		<div class="row">
			<div class="span2">
				<ul class="unstyled">
					<li class="margin-bottom-10"><img src="{{ asset('img/product/'.$link_name.'-02.jpg') }}" /></li>
					<li class="margin-bottom-10"><img src="{{ asset('img/product/'.$link_name.'-03.jpg') }}" /></li>
					<li class="margin-bottom-10"><img src="{{ asset('img/product/'.$link_name.'-04.jpg') }}" /></li>
			</div>
			<div class="span6">
				<img src="{{ asset('img/product/'.$link_name.'-01.jpg') }}" />
			</div>
			<div class="span4">
				<h3>產品名稱</h3>
				<ul class="unstyled">
					<li>尺寸</li>
					<li>規格</li>
					<li>規格</li>
				</ul>
				<div class="clearfix">
					<span>where to buy</span>
					<ul class="unstyled">
						<li class="pull-left margin-right-10"><a title="PcHome" href="http://www.pcstore.com.tw/comlinktek/" id="pchome-link" class="buy-link">
							<img src="{{ asset('img/index/where-to-buy-PChome.jpg') }}">
						</a></li>
						<li class="pull-left margin-right-10"><a title="Pinkoi" href="http://www.pinkoi.com/store/dotted" id="pinkoi-link" class="buy-link">
							<img src="{{ asset('img/index/where-to-buy-Pinkoi.jpg') }}">
						</a></li>
					</ul>
				</div>
			</div>
		</div>
	<hr class="dashed-hr"></hr>
	<div class="row">
		<div class="span10" style="margin: 30px 0;">
			<img src="{{ asset('img/index/product.jpg') }}">
		</div>
	</div>
	<div class="row">
		<div class="span10">
			<span>/ 商品故事 /</span>
			<p>氣醫度前我一濟以天，眼我去！的上常外該；兩熱年；動目早像雨訴所。不仍的水，斯精另方上從他；試古看於不有病品南代也龍知所</p>
		</div>
	</div>
	<div class="row">
		<div class="span10">
			<span>/ 品牌簡介 /</span>
			<p>氣醫度前我一濟以天，眼我去！的上常外該；兩熱年；動目早像雨訴所。不仍的水，斯精另方上從他；試古看於不有病品南代也龍知所</p>
		</div>
	</div>
</div>
@endsection
