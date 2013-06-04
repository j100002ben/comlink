@layout('layouts.index')

@section('head-title')
首頁
@endsection

@section('content')
<hr class="dashed-hr"></hr>
<div class="main-content">
	{{ render('home.index-carousel') }}
	<hr class="dashed-hr margin-bottom-none"></hr>
	<div class="row" style="margin-left:0px;">
		<div class="span6 right-dash-border">
			<div class="row margin-top-20">
				<div class="span3">
					<a href="news.html"><img style="width: " src="{{ asset('img/index/product-left.jpg') }}" /></a>
				</div>
				<div class="span3" id="index-prod-left-note">
					<a href="news.html"><p>小巧可愛的霧面徽章， 最經典的圖樣設計， 不管是別在背包或是筆袋上都適合到不行！<br>也是收藏一套的最佳選擇！……（繼續閱讀）</p></a>
				</div>
			</div>
		</div>
		<div class="span6">
			<div class="row margin-top-20">
				<div class="span3">
					<a href="product_dtl.html"><img src="{{ asset('img/index/product-right.jpg') }}" /></a>
				</div>
				<div class="span3">
					<a href="product_dtl.html"><p>這是愛。使用環保餐具， 是你對地球的愛；<br>做出讓你放心的環保餐具， 是我們對你的愛。……（繼續閱讀）</p></a>
				</div>
			</div>
		</div>
	</div>
	<hr class="dashed-hr"></hr>
	<div class="row">
		<div class="span6">
			<h3 class="main-h3">關於康利金</h3>
			<a href="{{ route('about') }}"><p>康利金是一間企業，企業三大經營理念是「追求生活的夢想、創造生活的感動、實現生活的幸福！」，
將夢想、感動、幸福融入到大家的生活中，再透過人與人之間的連結將這份理念繼續延續，……（繼續閱讀）</p></a>
		</div>
		<div class="span6" id="index-where-to-buy">
			<h3 class="main-h3">where to buy</h3>
			<ul class="unstyled clearfix">
				<li><a title="PcHome" href="http://www.pcstore.com.tw/comlinktek/" id="pchome-link" class="buy-link">
					<img src="{{ asset('img/index/where-to-buy-PChome.jpg') }}">
				</a></li>
				<li><a title="Pinkoi" href="http://www.pinkoi.com/store/dotted" id="pinkoi-link" class="buy-link">
					<img src="{{ asset('img/index/where-to-buy-Pinkoi.jpg') }}">
				</a></li>
			</ul>
		</div>
	</div>
</div>
<hr class="dashed-hr"></hr>
@endsection