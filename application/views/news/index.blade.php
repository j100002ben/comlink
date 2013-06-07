@layout('layouts.index')

@section('head-title')
最新消息 - Comlink
@endsection

@section('content')
<hr class="dashed-hr"></hr>
<div class="main-content" id="news-content">
	<div class="row margin-top-20">
		<div class="span2"><strong>2013.06.03</strong></div>
		<div class="span8">
			<img src="{{ asset('img/news/news.jpg') }}"><br>
			<p>耶耶耶 !<br>
			經過了那麼久的時間 !<br>
			終於可以在網路上買到附點的相關產品啦 !!!<br>
			好感動哈哈哈哈哈哈哈哈</p>
			<p>登登登 !<br>
			一次曝光兩個賣場</p>
			<p>一個是 PC home 商店街的 <br>
			<a target="_blank" href="http://www.pcstore.com.tw/comlinktek/">http://www.pcstore.com.tw/comlinktek/</a></p>
			<p>一個是 Pinkoi 的<br>
			<a target="_blank" href="http://www.pinkoi.com/store/dotted">http://www.pinkoi.com/store/dotted</a></p>
			<p>裡面可以買到之前在粉絲團曝光的所有商品 !<br>
			歡迎大家光臨 !<br>
			也歡迎大家把消息分享給親朋好友哈哈 !!</p>
		</div>
	</div>
</div>
<hr class="dashed-hr"></hr>
@endsection
