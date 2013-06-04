			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo route('admin.index');?>">後台首頁</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo route('admin.page');?>">頁面管理</a>
					</li>
				</ul>
			</div>
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i> 頁面管理</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<p class="left">
							<a href="<?php echo route('admin.page.new');?>" class="btn btn-large btn-primary">新增頁面</a> 
						</p>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i> 頁面清單</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>頁面名稱</th>
								  <th>最後編輯日期</th>
								  <th>群組</th>
								  <th>狀態</th>
								  <th>操作</th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php echo render_each('charisma::pages.page-list', $pages, 'page'); ?>
						  </tbody>
					  </table>    
					  <script>
					  	jQuery('#content').on('click', '.btn-danger', function(){
					  		return confirm("你確定要進行這項操作嗎？");
					  	});
					  </script>        
					</div>
				</div><!--/span-->
			
			</div><!--/row-->