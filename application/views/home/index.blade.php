@layout('layouts.index')

@section('head-title')
首頁
@endsection

@section('content')
<div class="main-content">
	<div class="main-carousel">
		<img src="http://placekitten.com/940/300" />
	</div>
	<hr class="dashed-hr margin-bottom-none"></hr>
	<div class="row">
		<div class="span6">
			<div class="row margin-top-20">
				<div class="span3">
					<a href="news.html"><img src="http://placekitten.com/220/150" /></a>
				</div>
				<div class="span3">
					<a href="news.html"><p>這是最新消息cinia odio sem nec elit.……（繼續閱讀）</p></a>
				</div>
			</div>
		</div>
		<div class="span6">
			<div class="row margin-top-20">
				<div class="span3">
					<a href="product_dtl.html"><img src="http://placekitten.com/220/150" /></a>
				</div>
				<div class="span3">
					<a href="product_dtl.html"><p>這是產品內頁cinia odio sem nec elit.……（繼續閱讀）</p></a>
				</div>
			</div>
		</div>
	</div>
	<hr class="dashed-hr"></hr>
	<div class="row">
		<div class="span6">
			<h3 class="main-h3">關於康利金</h3>
			<a href="about.html"><p>Nullam quligula, eget lacinia odio sem nec elit.……（繼續閱讀）</p></a>
		</div>
		<div class="span4 offset2">
			<h3 class="main-h3">where to buy</h3>
			<ul class="unstyled clearfix">
				<li class="pull-left"><a href="" id="pchome-link" class="buy-link">PC home online</a></li>
				<li class="pull-left"><a href="" id="books-link" class="buy-link">books.com.tw</a></li>
				<li class="pull-left"><a href="" id="pinkoi-link" class="buy-link">pinkoi</a></li>
				<li class="pull-left"><a href="" id="zakka-link" class="buy-link">ZAKKA</a></li>
			</ul>
		</div>
	</div>
</div>
@endsection