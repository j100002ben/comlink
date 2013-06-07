@layout('layouts.index')

@section('head-title')
附點角色介紹 - Comlink
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
			<div class="margin-top-20 margin-left-20">
				<div class="row">
					<div class="span9"><img id="image-container" src="{{ asset('img/brand/01.jpg') }}"></div>
				</div>
			</div>
			<div class="margin-top-20 margin-bottom-20 margin-left-20 row">
				<table class="chart-table"><tbody>
					<tr>
						<td><a href="#" target-image="{{ asset('img/brand/01.jpg') }}"><img src="{{ asset('img/brand/01s.jpg') }}" ></a></td>
						<td><a href="#" target-image="{{ asset('img/brand/02.jpg') }}"><img src="{{ asset('img/brand/02s.jpg') }}" ></a></td>
						<td><a href="#" target-image="{{ asset('img/brand/03.jpg') }}"><img src="{{ asset('img/brand/03s.jpg') }}" ></a></td>
						<td><a href="#" target-image="{{ asset('img/brand/04.jpg') }}"><img src="{{ asset('img/brand/04s.jpg') }}" ></a></td>>
					</tr>
					<tr>
						<td><a href="#" target-image="{{ asset('img/brand/05.jpg') }}"><img src="{{ asset('img/brand/05s.jpg') }}" ></a></td>
						<td><a href="#" target-image="{{ asset('img/brand/06.jpg') }}"><img src="{{ asset('img/brand/06s.jpg') }}" ></a></td>
						<td><a href="#" target-image="{{ asset('img/brand/07.jpg') }}"><img src="{{ asset('img/brand/07s.jpg') }}" ></a></td>
						<td><a href="#" target-image="{{ asset('img/brand/08.jpg') }}"><img src="{{ asset('img/brand/08s.jpg') }}" ></a></td>
					</tr>
					<tr>
						<td><a href="#" target-image="{{ asset('img/brand/09.jpg') }}"><img src="{{ asset('img/brand/09s.jpg') }}" ></a></td>
						<td><a href="#" target-image="{{ asset('img/brand/10.jpg') }}"><img src="{{ asset('img/brand/10s.jpg') }}" ></a></td>
						<td><a href="#" target-image="{{ asset('img/brand/11.jpg') }}"><img src="{{ asset('img/brand/11s.jpg') }}" ></a></td>
						<td><a href="#" target-image="{{ asset('img/brand/12.jpg') }}"><img src="{{ asset('img/brand/12s.jpg') }}" ></a></td>
					</tr>
				</tbody></table>
				<script>
				(function(window, undefined){
					var $ = window.jQuery
					  , document = window.document
					  ;
					$('.chart-table').on('click', 'a', function(){
						var $that = $(this)
						$('#image-container').animate({opacity: 0}, 500, function(){
							$(this).attr('src', $that.attr('target-image')).animate({opacity: 1}, 500);
						});
						return false;
					});
				})(window);
				</script>
			</div>
		</div>
	</div>
</div>
<hr class="dashed-hr"></hr>
@endsection
