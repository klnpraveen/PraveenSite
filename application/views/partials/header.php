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
	$link_fstyle = array(
		'href' => 'css/style_front.css',
		'rel' => 'stylesheet',
		'type' => 'text/css',
		);
	echo link_tag($link_bootstrap);
	echo link_tag($link_fstyle);
	echo link_tag($link_custom);
	echo link_tag('images/favicon.ico', 'shortcut icon', 'image/ico');
	?>
</head>
<body>
	<div class="site-holder">
		<!-- .navbar -->
		<nav class="navbar  navbar-default nav-delighted " role="navigation">
			<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
          <img src="images/doctor.png" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    
      <ul class="nav navbar-nav navbar-right">
 <li>
                                    <form role="search" class="search-form">
                                        <div class="form-group">
                                            <input type="text" class="form-control  nav-input-search " placeholder="Search ">
                                            <i class="fa fa-search"></i>
                                        </div>
                                    </form>
                                </li>
                                <li>
                                    <a href="lock.html" class="settings">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
	</nav>                    

	<!-- .left-sidebar -->
	<div class="left-sidebar">
		@Leftside Menu
	</div>

	
	<!-- .content -->
	<div class=" breadcrumb-holder">
		@Breadcrumb
	</div>    

	<div class="main-content">
		@Main content

		








