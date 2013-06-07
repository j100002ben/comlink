@layout('layouts.index')

@section('head-title')
產品介紹 - Comlink
@endsection

@section('content')
<div class="main-content">
	<hr class="dashed-hr margin-bottom-none"></hr>
	<div class="row">
		<div class="span2">
			<ul class="unstyled sidebar-ul margin-top-40">
				<li><span><strong>週邊商品</strong></span></li>
				<li><a href="{{ route('product-dtl', array('130℃環保筷')) }}">130℃環保筷</a></li>
				<li><a href="{{ route('product-dtl', array('攪拌棒')) }}">攪拌棒</a></li>
				<li><a href="{{ route('product-dtl', array('杯墊')) }}">杯墊</a></li>
				<li><a href="{{ route('product-dtl', array('徽章')) }}">徽章</a></li>
				<li><a href="{{ route('product-dtl', array('貼紙')) }}">貼紙</a></li>
				<li><a href="{{ route('product-dtl', array('卡片')) }}">卡片</a></li>
				<li><a href="{{ route('product-dtl', array('毛巾')) }}">毛巾</a></li>
				<li><a href="{{ route('product-dtl', array('筆袋')) }}">筆袋</a></li>
				<li><a href="{{ route('product-dtl', array('馬克杯')) }}">馬克杯</a></li>
				<li><span><strong>設計商品</strong></span></li>
				<li><a href="{{ route('product-dtl', array('冰中劍')) }}">冰中劍</a></li>
				<li class="no-border"><a href="#top"><i class="icon-arrow-up"></i>top</a></li>
			</ul>
		</div>
		<div class="span9 left-dash-border">
			<div class="margin-top-20 margin-left-20 clearfix">
				<div class="pull-left product-list-item-div">
					<a href="{{ route('product-dtl', array('冰中劍')) }}">
						<div>冰中劍</div>
						<img src="{{ asset('img/product/冰中劍-01.jpg') }}" />
					</a>
				</div>
				<table class="product-list-item-table pull-left"><tbody>
					<tr>
						<td>
							<a href="{{ route('product-dtl', array('130℃環保筷')) }}" class="product-list-item-s">
								<div>130℃環保筷</div>
								<img src="{{ asset('img/product/130c-04.jpg') }}" />
							</a>
						</td>
						<td>
							<a href="{{ route('product-dtl', array('攪拌棒')) }}" class="product-list-item-s">
								<div>攪拌棒</div>
								<img src="{{ asset('img/product/攪拌棒-02.jpg') }}" />
							</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="{{ route('product-dtl', array('杯墊')) }}" class="product-list-item-s">
								<div>杯墊</div>
								<img src="{{ asset('img/product/杯墊-04.jpg') }}" />
							</a>
						</td>
						<td>
							<a href="{{ route('product-dtl', array('徽章')) }}" class="product-list-item-s">
								<div>徽章</div>
								<img src="{{ asset('img/product/徽章-01.jpg') }}" />
							</a>
						</td>
					</tr>
				</tbody></table>
			</div>
			<div class="margin-top-20 margin-left-20 clearfix">
				<table class="product-list-item-table pull-left"><tbody>
					<tr>
						<td>
							<a href="{{ route('product-dtl', array('貼紙')) }}" class="product-list-item-s">
								<div>貼紙</div>
								<img src="{{ asset('img/product/貼紙-03.jpg') }}" />
							</a>
						</td>
						<td>
							<a href="{{ route('product-dtl', array('卡片')) }}" class="product-list-item-s">
								<div>卡片</div>
								<img src="{{ asset('img/product/卡片-03.jpg') }}" />
							</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="{{ route('product-dtl', array('毛巾')) }}" class="product-list-item-s">
								<div>毛巾</div>
								<img src="{{ asset('img/product/毛巾-05.jpg') }}" />
							</a>
						</td>
						<td>
							<a href="{{ route('product-dtl', array('筆袋')) }}" class="product-list-item-s">
								<div>筆袋</div>
								<img src="{{ asset('img/product/筆袋-02.jpg') }}" />
							</a>
						</td>
					</tr>
				</tbody></table>
				<div class="pull-left product-list-item-div">
					<a href="{{ route('product-dtl', array('馬克杯')) }}">
						<div>馬克杯</div>
						<img src="{{ asset('img/product/馬克杯-02.jpg') }}" />
					</a>
				</div>
			</div>
			<script type="text/javascript">
				(function($){
					$(function(){
						$('.product-list-item-div').hover(
							function(){ $(this).children().children('div').show();},
							function(){ $(this).children().children('div').hide();}
						);
						$('.product-list-item-s').hover(
							function(){ $(this).children('div').show();},
							function(){ $(this).children('div').hide();}
						);
					});
				})(jQuery);
			</script>
		</div>
	</div>
</div>
<hr class="dashed-hr"></hr>
@endsection
