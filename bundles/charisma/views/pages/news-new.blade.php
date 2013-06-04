<div>
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo route('admin.index');?>">後台首頁</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="<?php echo route('admin.news');?>">最新消息</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="<?php echo route('admin.news.new');?>">新增頁面</a>
		</li>
	</ul>
</div>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header well" data-original-title>
			<h2><i class="icon-edit"></i>新增頁面</h2>
			<div class="box-icon">
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<?php echo Form::open(route('admin.news.new'), 'POST', array('class' => 'form-horizontal')); ?>
			  <fieldset>
				<legend>頁面資訊</legend>
				<div class="control-group {{ $errors->has('title') ? 'error' : '' }}">
				  <label class="control-label" for="title">頁面標題</label>
				  <div class="controls">
				  	<?php echo Form::text( 'title', Input::old( 'title' ),
	                		array('class' => 'input-xlarge', 'id' => 'title') );?>
	                	@if ( $errors->has('title') )
		                	<p class="help-block">{{ $errors->first('title') }}</p>
		                @endif
				  </div>
				</div>
				<div class="control-group {{ $errors->has('name') ? 'error' : '' }}">
				  <label class="control-label" for="name">頁面連結</label>
				  <div class="controls">
				  	<?php echo Form::text( 'name', Input::old( 'name' ),
	                		array('class' => 'input-xlarge', 'id' => 'name') );?>
	                	@if ( $errors->has('name') )
		                	<p class="help-block">{{ $errors->first('name') }}</p>
		                @endif
				  </div>
				</div>  
				<div class="control-group {{ $errors->has('menu_order') ? 'error' : '' }}">
				  <label class="control-label" for="menu_order">順序</label>
				  <div class="controls">
				  	<?php echo Form::text( 'menu_order', Input::old( 'menu_order' ),
	                		array('class' => 'input-xlarge', 'id' => 'menu_order') );?>
	                	<p class="help-block">由小到大排列。</p>
	                	@if ( $errors->has('menu_order') )
		                	<p class="help-block">{{ $errors->first('menu_order') }}</p>
		                @endif
				  </div>
				</div>      
				<div class="control-group {{ $errors->has('content') ? 'error' : '' }}">
				  <label class="control-label" for="content">內容</label>
				  <div class="controls">
				  	<?php echo Form::textarea( 'content', Input::old( 'content' ),
	                		array('rows' => '3', 'class' => 'cleditor', 'id' => 'content') );?>
	                	@if ( $errors->has('content') )
		                	<p class="help-block">{{ $errors->first('content') }}</p>
		                @endif
				  </div>
				</div>
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">新增頁面</button>
				  <button type="reset" class="btn">清除</button>
				</div>
			  </fieldset>
			<?php echo Form::token(); ?>
	        <?php echo Form::close(); ?>   

		</div>
	</div><!--/span-->

</div><!--/row-->