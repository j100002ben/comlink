<tr>
	<td>{{ $page->title }}</td>
	<td class="center">{{ $page->updated_at }}</td>
	<td class="center">{{ $page->group }}</td>
	<td class="center">
		@if ( $page->status == 'public' )
			<span class="label label-success">Public</span>
		@elseif ( $page->status == 'private' )
			<span class="label label-warning">Private</span>
		@endif
	</td>
	<?php $type2route = array(
    	'' => 'page',
    	'news' => 'news',
    	'about' => 'about',
    	'brand' => 'brand',
    	'brand-detail' => 'brand-detail'
    	);?>
	<td class="center">
		<a target="_blank" class="btn btn-success" href="{{ route('news') }}">
			<i class="icon-zoom-in icon-white"></i>  
			View                                            
		</a>
		<a class="btn btn-info" href="{{ route('admin.news.edit', array($page->id)) }}">
			<i class="icon-edit icon-white"></i>  
			Edit                                            
		</a>
		<a class="btn btn-danger" href="{{ route('admin.news.delete', array($page->id)) }}">
			<i class="icon-trash icon-white"></i> 
			Delete
		</a>
	</td>
</tr>