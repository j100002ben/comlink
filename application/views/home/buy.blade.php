@layout('layouts.index')

@section('head-title')
購買通路
@endsection

@section('content')
<div class="main-content">
	<hr class="dashed-hr"></hr>
		<div class="row">
			<div class="span4">
				<h2>where to buy</h2>
			</div>
			<div class="span8">
				<a title="PcHome" href="http://www.pcstore.com.tw/comlinktek/" id="pchome-link" class="buy-link-b">
					<img src="{{ asset('img/index/where-to-buy-PChome.jpg') }}">
				</a>
				<a title="Pinkoi" href="http://www.pinkoi.com/store/dotted" id="pinkoi-link" class="buy-link-b">
					<img src="{{ asset('img/index/where-to-buy-Pinkoi.jpg') }}">
				</a>
			</div>
		</div>
	<hr class="dashed-hr"></hr>
	<div class="buy-info-div">
		<div class="margin-top-20">
			<span class="buy-planning"></span><span>實體通路規劃中</span><span class="buy-planning"></span>
		</div>
	</div>
</div>
<hr class="dashed-hr"></hr>
@endsection