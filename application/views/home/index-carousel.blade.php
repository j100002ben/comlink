<div class="main-carousel">
	<div id="index-carousel" class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#index-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#index-carousel" data-slide-to="1"></li>
			<li data-target="#index-carousel" data-slide-to="2"></li>
			<li data-target="#index-carousel" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="active item">
				<a href="{{ route('product') }}">
					<img src="{{ asset('img/index/ad-01.jpg') }}" >
					<div class="carousel-caption">
						<h4>產品介紹</h4>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="{{ route('buy') }}">
					<img src="{{ asset('img/index/ad-02.jpg') }}" >
					<div class="carousel-caption">
						<h4>購買通路</h4>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="{{ route('product-dtl', array('冰中劍')) }}">
					<img src="{{ asset('img/index/ad-03.jpg') }}" >
					<div class="carousel-caption">
						<h4>冰中劍</h4>
						<p>小時候大家都聽過石中劍的故事，<br />
						只有真正擁有勇氣的人才能拔出石中劍成為亞瑟王……</p>
					</div>
				</a>
			</div>
			<div class="item">
				<a href="{{ route('product-dtl', array('貼紙')) }}">
					<img src="{{ asset('img/index/ad-04.jpg') }}" >
					<div class="carousel-caption">
						<h4>貼紙</h4>
						<p>霧面透明的貼紙設計，<br />
						讓你使用時不會遮到底下的文字跟圖案！</p>
					</div>
				</a>
			</div>
		</div>
		<a class="carousel-control left" href="#index-carousel" data-slide="prev">&lsaquo;</a>
		<a class="carousel-control right" href="#index-carousel" data-slide="next">&rsaquo;</a>
	</div>
</div>
