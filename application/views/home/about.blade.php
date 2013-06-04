@layout('layouts.index')

@section('head-title')
關於康利金
@endsection

@section('content')
<div class="main-content">
	<hr class="dashed-hr margin-bottom-none"></hr>
	<div class="row">
		<div class="span2">
			<ul class="unstyled sidebar-ul margin-top-40">
				<li><span><strong>關於康利金</strong></span></li>
				<li><a href="#about-comlink1">是甚麼</a></li>
				<li><a href="#about-comlink2">做甚麼</a></li>
				<li><a href="#about-comlink3">大事紀</a></li>
				<li><a href="#top"><i class="icon-arrow-up"></i>top</a></li>
			</ul>
		</div>
		<div class="span9 left-dash-border">
			<div class="about-content-div">
				<div class="margin-bottom-40">
					<p><img src="{{ asset('img/about/about.jpg') }}"></p>
				</div>
				<div class="margin-bottom-40">
					<h4 id="about-comlink1">是甚麼</h4>
					<p>Combine + Link = Comlink。<br>
					康利金是一間企業，<br>
					企業三大經營理念是「追求生活的夢想、創造生活的感動、實現生活的幸福！」，<br>
					將夢想、感動、幸福融入到大家的生活中，<br>
					再透過人與人之間的連結將這份理念繼續延續，<br>
					是我們企業的理想和目標。</p>
				</div>
				<div class="margin-bottom-40">
					<h4 id="about-comlink2">做甚麼</h4>
					<p>康利金希望能夠成立屬於台灣的品牌，讓設計留在台灣，<br>
					做出令人感動的產品，讓台灣的好設計可以從台灣出發，讓世界看見。</p>
				</div>
				<div class="margin-bottom-40">
					<h4 id="about-comlink3">大事紀</h4>
					<p>2012.07 康利金成立<br>
					2012.12 附點品牌成立<br>
					2013.06 官方網站成立</p>
				</div>
			</div>
		</div>
	</div>
</div>
<hr class="dashed-hr"></hr>
@endsection