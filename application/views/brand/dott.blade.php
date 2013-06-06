@layout('layouts.index')

@section('head-title')
附點品牌
@endsection

@section('content')
<div class="main-content">
	<hr class="dashed-hr margin-bottom-none"></hr>
	<div class="row">
		<div class="span2">
			<ul class="unstyled sidebar-ul margin-top-40">
				<li><span><strong>關於附點</strong></span></li>
				<li><a href="{{ route('dott_brand') }}#about-comlink1">是甚麼</a></li>
				<li><a href="{{ route('dott_brand') }}#about-comlink2">做甚麼</a></li>
				<li><a href="{{ route('dott_brand') }}#about-comlink3">大事紀</a></li>
				<li><a href="{{ route('dott_brand') }}#about-comlink4">附點生活</a></li>
				<li><a href="{{ route('dott_chart') }}">角色介紹</a></li>
				<li class="no-border"><a href="#top"><i class="icon-arrow-up"></i>top</a></li>
			</ul>
		</div>
		<div class="span9 left-dash-border">
			<div class="about-content-div">
				<div class="margin-bottom-40">
					<p><img src="{{ asset('img/brand/brand.jpg') }}"></p>
				</div>
				<div class="margin-bottom-40">
					<h4 id="about-comlink1">是甚麼</h4>
					<p>附點，原本指的是一個記號，<br>
					一個長在音符旁邊的痣。<br>
					它可以讓音符的長度延長50%。</p>

					<p>當作曲家有了靈感透過理性的手法寫下了樂章，<br>
					演奏時，欣賞音樂的人不會明顯知道音符的拍數，<br>
					卻能感受到樂曲的跳躍和流動。</p>

					<p>符號的定義是「理性」的，<br>
					但所帶來的經驗感受是「感性」的。</p>

					<p>感性出發透過理性手法帶來加乘的感性感動，<br>
					是我們對附點的新定義。</p>

					<p>附點的 logo 是一個音符加上一個附點，<br>
					也可以看做一個點化作無限可能。<br>
					Add a dot , add a lot .<br>
					創造出無限的可能！</p>

				</div>
				<div class="margin-bottom-40">
					<h4 id="about-comlink2">做甚麼</h4>
					<p>雖然目前附點只是一個小小的團隊，<br>
						但是我們希望可以用不同的角度觀察生活、體驗生活、享受生活、進而改變生活。<br>
						從感性的洞察和同理心出發，經過理性的思考和碰撞，<br>
						設計出有趣、不一樣、甚至讓生活變得更好的產品！</p>
				</div>
				<div class="margin-bottom-40">
					<h4 id="about-comlink3">大事紀</h4>
					<p>2012.12 附點品牌成立<br>
						2012.12 附點生活粉絲團成立<br>
						2013.03 第一次擺攤試賣<br>
						2013.06 第一波商品全面開始銷售</p>
				</div>
				<div class="margin-bottom-40">
					<p><img src="{{ asset('img/brand/dott-life.jpg') }}" ></p>
				</div>
				<div class="margin-bottom-40">
					<h4 id="about-comlink4">附點生活</h4>
					<p>附點生活是附點品牌成立的粉絲團，<br>
						一開始透過圖文的方式讓大家認識我們，<br>
						也因為「附點」的關係創造了十個角色，<br>
						融入大家的生活中。</p>
				</div>
			</div>
		</div>
	</div>
</div>
<hr class="dashed-hr"></hr>
@endsection