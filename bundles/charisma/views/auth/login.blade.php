<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<base href="<?php echo URL::base() ?>/bundles/charisma/">
	<meta charset="utf-8">
	<title>Free HTML5 Bootstrap Admin Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
	<meta name="author" content="Muhammad Usman">

	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	  #loginModal {
	  	width: 550px;
		margin: 100px auto 0;
	  }
	</style>
	<?php echo Asset::container('header')->bundle('charisma')->styles() ?>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
    <div class="" id="loginModal">
	  <div class="modal-header">
	    <h3>登入管理</h3>
	  </div>
	  <div class="modal-body">
	    <div class="well">
	      <ul class="nav nav-tabs">
	        <li class="active"><a href="<?php echo route('auth.login') ?>" data-toggle="tab">登入</a></li>
	        <li><a href="<?php echo url('') ?>" data-toggle="tab">回到網站</a></li>
	        <!-- 
	        <li><a href="<?php echo route('auth.forgetpassword') ?>" data-toggle="tab">忘記密碼</a></li>
	    	-->
	      </ul>
	      <div id="myTabContent" class="tab-content">
	        <div class="tab-pane active in" id="login">
	          <?php echo Form::open(route('auth.login'), 'POST', array('class' => 'form-horizontal')); ?>
	            <fieldset>
	              <div id="legend">
	                <legend class="">Login</legend>
	              </div>
	              <div class="control-group {{ $errors->has('username') ? 'error' : '' }}">
	                <!-- Username -->
	                <label class="control-label"  for="username">帳號</label>
	                <div class="controls">
	                	<?php echo Form::text( 'username', Input::old( 'username' ),
	                		array('class' => 'input-xlarge', 'id' => 'username') );?>
	                	@if ( $errors->has('username') )
		                	<p class="help-block">{{ $errors->first('username') }}</p>
		                @endif
	                </div>
	              </div>

	              <div class="control-group {{ $errors->has('password') ? 'error' : '' }}">
	                <!-- Password-->
	                <label class="control-label" for="password">密碼</label>
	                <div class="controls">
	                	<?php echo Form::password( 'password',
	                		array('class' => 'input-xlarge', 'id' => 'password') );?>
	                	@if ( $errors->has('password') )
		                	<p class="help-block">{{ $errors->first('password') }}</p>
		                @endif
	                </div>
	              </div>
	              <div class="control-group {{ Session::has('flash_cannot_login') ? 'error' : '' }}">
	                <!-- Button -->
	                <div class="controls">
	                	@if (Session::has('flash_cannot_login'))
							<p class="help-block" style="margin-bottom:15px;">帳號或密碼錯誤，請重新登入。</p>
						@endif
	                	<?php echo Form::submit('Login', array('class' => 'btn btn-success')); ?>
	                </div>
	              </div>
	            </fieldset>
	          	<?php echo Form::token(); ?>
	          <?php echo Form::close(); ?>             
	        </div>
	    </div>
	  </div>
	</div>
</body>
</html>