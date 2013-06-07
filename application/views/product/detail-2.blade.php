@layout('layouts.index')

@section('head-title')
附點生活 攪拌棒 - Comlink
@endsection

<?php
$pchome_link = 'http://www.pcstore.com.tw/comlinktek/M13814552.htm';
$pinkoi_link = 'http://www.pinkoi.com/product/1vRfWNhI';

if( rawurldecode($product_name) == '130℃環保筷' )
	$link_name = '130c';
else
	$link_name = $product_name;
?>

@section('content')
<script>
(function(window){
	var $ = window.jQuery
	  , document = window.document
	  ;
	$(function(){
		$('li.margin-bottom-10 > img').on('click', function(){
			$next_src = $(this).attr('src');
			$prev_src = $('#image-container').attr('src');
			$(this).animate({opacity:0}, 500, function(){
				$(this).animate({opacity:1}, 500).attr('src', $prev_src);
			});
			$('#image-container').animate({opacity:0}, 500, function(){
				$(this).animate({opacity:1}, 500).attr('src', $next_src);
			});
		});
	});
})(window);
</script>
<div class="main-content">
	<hr class="dashed-hr"></hr>
		<div class="row" id="product-spot">
			<div class="span2">
				<ul class="unstyled">
					<li class="margin-bottom-10"><img src="{{ asset('img/product/'.$link_name.'-02.jpg') }}" /></li>
					<li class="margin-bottom-10"><img src="{{ asset('img/product/'.$link_name.'-03.jpg') }}" /></li>
					<li class="margin-bottom-10"><img src="{{ asset('img/product/'.$link_name.'-04.jpg') }}" /></li>
			</div>
			<div class="span6">
				<img id="image-container" src="{{ asset('img/product/'.$link_name.'-01.jpg') }}" />
			</div>
			<div class="span4" id="product-info">
				<div id="product-list">
					<h3>攪拌棒</h3>
					<ul class="unstyled">
						<li>材質 / 玻璃</li>
						<li>尺寸 / 2 × 2 × 18 （cm）</li>
					</ul>
				</div>
				<div id="product-buy">
					<span>where to buy</span>
					<ul class="unstyled">
						@if ($pchome_link != '')
						<li class="pull-left margin-right-10"><a target="_blank" title="PcHome" href="{{ $pchome_link }}" id="pchome-link" class="buy-link">
							<img src="{{ asset('img/index/where-to-buy-PChome.jpg') }}">
						</a></li>
						@endif
						@if ($pinkoi_link != '')
						<li class="pull-left margin-right-10"><a target="_blank" title="Pinkoi" href="{{ $pinkoi_link }}" id="pinkoi-link" class="buy-link">
							<img src="{{ asset('img/index/where-to-buy-Pinkoi.jpg') }}">
						</a></li>
						@endif
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
			<span style="font-size:1.3em;font-weight:bold;display:block;margin:15px 0;">/ 商品說明及故事 /</span>
			<p>玻璃材質給你最放心的使用體驗，<br>
			耐高溫、好清潔，<br>
			讓可愛的笑臉陪你度過享受飲品的美好時光！</p>
		</div>
	</div>
	<div class="row">
		<div class="span10">
			<span style="font-size:1.3em;font-weight:bold;display:block;margin:15px 0;">/ 品牌簡介 /</span>
			<p>Add a dot , add a lot .<br>
			創造出無限的可能！</p>
			<p>附點生活是附點品牌成立的粉絲團，<br>
			一開始透過圖文的方式讓大家認識我們，<br>
			也因為「附點」的關係創造了十個角色，<br>
			融入大家的生活中。</p>
</p>
		</div>
	</div>
</div>
<hr class="dashed-hr"></hr>
@endsection