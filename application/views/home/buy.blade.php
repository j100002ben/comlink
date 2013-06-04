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
				<a href="#" id="pchome-link" class="buy-link-b">PC home online</a>
				<a href="#" id="books-link" class="buy-link-b">books.com.tw</a>
				<a href="#" id="pinkoi-link" class="buy-link-b">pinkoi</a>
				<a href="#" id="zakka-link" class="buy-link-b">ZAKKA</a>
			</div>
		</div>
	<hr class="dashed-hr"></hr>
	<div class="buy-info-div">
		<img src="http://placekitten.com/740/200" />
		<div class="margin-top-20">
			<span class="buy-planning"></span><span>實體通路規劃中</span><span class="buy-planning"></span>
			<ul class="unstyled">
				<li>台北</li>
				<li>台中</li>
				<li>高雄</li>
			</ul>
		</div>
	</div>
</div>
@endsection