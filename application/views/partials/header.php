<?php echo doctype('html5'); ?>
<html lang="en">
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
	echo link_tag('images/favicon.ico', 'shortcut icon', 'image/ico');
	?>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
      </div>
    </div>

	
	<div class="col-md-2 left-navbar   nav navbar-left">
		<ul class="menu list-unstyled">
			<li>Home</li>
			<li>About Me</li>
			<li>menu</li>
			<li>Contact</li>
			<li>Sign In</li>
		</ul>
	</div>
	<div class="col-md-10 content">
		
	

	

	
	


