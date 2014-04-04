<?php echo doctype('html5'); ?>
<html>
<head>
	<title>K L N Praveen's Blog</title>
	<?php 
	$link_bootstrap = array(
		'href' => 'css/bootstrap.css',
		'rel' => 'stylesheet',
		'type' => 'text/css',
		);
	$link_custom = array(
		'href' => 'css/custom.css',
		'rel' => 'stylesheet',
		'type' => 'text/css',
		);
	$link_fontawesome = array(
		'href' => 'css/font-awesome.css',
		'rel' => 'stylesheet',
		'type' => 'text/css',
		);
	$link_fontawesomemin = array(
		'href' => 'css/font-awesome.min.css',
		'rel' => 'stylesheet',
		'type' => 'text/css',
		);
	echo link_tag($link_bootstrap);
	echo link_tag($link_custom);
	echo link_tag($link_fontawesome);
	echo link_tag($link_fontawesomemin);
	?>
</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<div id="header" class="navbar" role="navigation">
				<div class="navbar-header">
					<?php echo anchor('https://www.facebook.com/naga.rockwills','<i class="fa fa-facebook"></i>','style="color:#fff"') ?> <i class="fa fa-twitter"></i> Welcome To K L N Praveen's Blog
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		
	
	
		
			
		