<?php echo doctype('html5'); ?>
<html lang="en">
<head>
	<title>Admin Panel</title>
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
		'href' => 'css/style.css',
		'rel' => 'stylesheet',
		'type' => 'text/css',
		);
	echo link_tag($link_bootstrap);
	echo link_tag($link_fstyle);
	echo link_tag($link_custom);
	echo link_tag('images/favicon.ico', 'shortcut icon', 'image/ico');
	?>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
                      <![endif]-->
                      <!-- <script src="js/jquery/jquery.js"></script>
                      <script>
                        $(document).ready(function() {
                            $('.site-holder').hide();                    
                        });
                      </script> -->
                    </head>
                    <body>
                     <div class="site-holder">
                      <!-- .navbar -->
                      <nav class="navbar  navbar-default nav-delighted " role="navigation">
                        <a href="#" class="toggle-left-sidebar">
                          <i class="fa fa-th-list"></i>
                        </a>
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <a class="navbar-brand" href="#">
                            Admin Panel</a>
                          </div>

                          <!-- Collect the nav links, forms, and other content for toggling -->
                          <div class="collapse navbar-collapse">
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
                                <a href="lock.html" class="logout">
                                  <i class="fa fa-power-off"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <!-- /.navbar-collapse -->
                        </nav>                    
                        <!-- .box-holder -->
                        <div class="box-holder">
                          <!-- .left-sidebar -->
                          <div class="left-sidebar">
                            <div class="sidebar-holder">
                              <!-- User   -->
                              <div class="user-menu">
                                <img src="<?php echo base_url(); ?>images/avatar.png" alt="" class="avatar">
                                <div class="user-info">
                                  <div class="welcome">Welcome,</div>
                                  <div class="username">Admin</div>
                                </div>
                                <div class="user-status">
                                  <i class="fa fa-circle "></i>
                                </div>
                              </div>
                              <!-- /.User   -->

                              <!-- Menu -->
                              <ul class="nav  nav-list">
                                <li class=''>
                                  <a href='dashboard' data-original-title='Dashboard'>
                                    <i class='icon ion-home'></i>

                                    <span class='hidden-minibar'>Dashboard</span>
                                  </a>
                                </li>
                                <li class=' '>
                                  <a href='portlets' data-original-title='Portlets'>
                                    <i class='fa fa-indent'></i>
                                    <span class='hidden-minibar'>Portlets</span>
                                  </a>
                                </li>
                                <li class='submenu'>
                                  <a class='dropdown' onClick='return false;' href='#' data-original-title='Delighted-Gold'>
                                    <i class='icon ion-heart'></i>
                                    <span class='hidden-minibar'>Delighted Gold
                                      <i class='fa fa-chevron-right  pull-right'></i>
                                    </span>
                                  </a>
                                  <ul class="animated fadeInDown">
                                    <li class=' '>
                                      <a href='tasks' data-original-title='Tasks'>
                                        <i class='fa fa-calendar'></i>
                                        <span class='hidden-minibar'>Tasks</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='inbox' data-original-title='Inbox'>
                                        <i class='fa fa-th'></i>
                                        <span class='hidden-minibar'>Inbox</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='profile' data-original-title='Profile'>
                                        <i class='fa fa-picture-o'></i>
                                        <span class='hidden-minibar'>Profile</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='invoice' data-original-title='Invoice'>
                                        <i class='fa fa-bookmark'></i>
                                        <span class='hidden-minibar'>Invoice</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='timeline' data-original-title='Timeline'>
                                        <i class='fa fa-envelope'></i>
                                        <span class='hidden-minibar'> Timeline</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='animations' data-original-title='Animations'>
                                        <i class='fa fa-money'></i>
                                        <span class='hidden-minibar'>Animations</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='notifications' data-original-title='Notifications'>
                                        <i class='fa fa-money'></i>
                                        <span class='hidden-minibar'>Notifications</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='documentation/#overview' data-original-title='Delighted-Wiki' target="_blank">
                                        <i class='fa fa-money'></i>
                                        <span class='hidden-minibar'>Delighted Wiki</span>
                                      </a>
                                    </li>
                                  </ul>
                                </li>
                                <li class=' '>
                                  <a href='typography' data-original-title='Typography'>
                                    <i class='fa fa-tint'></i>
                                    <span class='hidden-minibar'>Typography
                                    </span>
                                  </a>  
                                </li>
                                <li class='submenu  '>
                                  <a class='dropdown' onClick='return false;' href='#' data-original-title='UI-KITS'>
                                    <i class='fa fa-user'></i>
                                    <span class='hidden-minibar'>UI KITS
                                      <i class='fa fa-chevron-right  pull-right'></i>
                                    </span>
                                  </a>
                                  <ul  class="animated fadeInDown">
                                    <li class=' '>
                                      <a href='general-elements' data-original-title='General-Elements'>
                                        <i class='fa fa-exclamation-triangle'></i>
                                        <span class='hidden-minibar'>General Elements</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='buttons' data-original-title='Buttons'>
                                        <i class='fa fa-font'></i>
                                        <span class='hidden-minibar'>Buttons</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='tree-view' data-original-title='Tree-View'>
                                        <i class='fa fa-chain'></i>
                                        <span class='hidden-minibar'>Tree View</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='jquery-ui' data-original-title='Jquery-UI'>
                                        <i class='fa fa-lock'></i>
                                        <span class='hidden-minibar'>Jquery UI</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='nestable-lists' data-original-title='nestable-lists'>
                                        <i class='fa fa-list'></i>
                                        <span class='hidden-minibar'>Nestable Lists</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='extended-zoom' data-original-title='nestable-lists'>
                                        <i class='fa fa-search'></i>
                                        <span class='hidden-minibar'>Extended zoom</span>
                                      </a>
                                    </li>

                                  </ul>
                                </li>
                                
                                <li class='submenu'>
                                  <a class='dropdown' onClick='return false;' href='#' data-original-title='Delighted-Pages'>
                                    <i class="fa fa-plus"></i>
                                    <span class='hidden-minibar'>Delighted Pages
                                      <i class='fa fa-chevron-right  pull-right'></i>
                                    </span>
                                  </a>
                                  <ul  class="animated fadeInDown">
                                    <li class=' '>
                                      <a href=' login.html' data-original-title=' Login' target="_blank">
                                        <i class="fa fa-laptop"></i>
                                        <span class='hidden-minibar'> Login </span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='register.html' data-original-title='Register'  target="_blank">
                                        <i class="fa fa-keyboard-o"></i>
                                        <span class='hidden-minibar'>Register </span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='forgot.html' data-original-title='Forgot-Password'  target="_blank">
                                        <i class="fa fa-frown-o"></i>
                                        <span class='hidden-minibar'>Forgot Password</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='lock.html' data-original-title='lock'  target="_blank">
                                        <i class="fa fa-frown-o"></i>
                                        <span class='hidden-minibar'>Lock Screen</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='not-found.html' data-original-title='Error-Pages'  target="_blank">
                                        <i class="fa fa-exclamation-circle"></i>
                                        <span class='hidden-minibar'>404 </span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='not-found2.html' data-original-title='Error-Pages'  target="_blank">
                                        <i class="fa fa-exclamation-circle"></i>
                                        <span class='hidden-minibar'>505 </span>
                                      </a>
                                    </li>
                                  </ul>
                                </li><!-- delighted pages -->
                                <li class='submenu'>
                                  <a href='#' data-original-title='Unlimited-Menu'>
                                    <i class='fa fa-magnet'></i>
                                    <span class='hidden-minibar'>Unlimited Menu
                                      <i class='fa fa-chevron-right'></i>
                                    </span>
                                  </a>
                                  <ul  class="animated fadeInDown">
                                    <li class=' '>
                                      <a href='level-1' data-original-title='level-1'>
                                        <i class="fa fa-plus"></i>
                                        <span class='hidden-minibar'>level-1 </span>
                                      </a>
                                    </li>
                                    <li class='submenu'>
                                      <a href='level-1' data-original-title='level-1'>
                                        <i class="fa fa-plus"></i>
                                        <span class='hidden-minibar'>level-1
                                         <i class='fa fa-chevron-right'></i> 
                                       </span>
                                     </a>
                                     <ul  class="animated fadeInDown">
                                      <!-- level-2 -->

                                      <li class=" ">
                                        <a href='level-2' data-original-title='level-2'>
                                          <i class="fa fa-plus-circle"></i>
                                          <span class='hidden-minibar'>level-2 </span>
                                        </a>
                                      </li>
                                      <li class=" ">
                                        <a href='level-2' data-original-title='level-2'>
                                          <i class="fa fa-plus-circle"></i>
                                          <span class='hidden-minibar'>level-2 </span>
                                        </a>
                                      </li>
                                      <li class=" submenu">
                                        <a href='level-2' data-original-title='level-2'>
                                          <i class="fa fa-plus-circle"></i>
                                          <span class='hidden-minibar'>level-2 
                                            <i class="fa fa-chevron-right"></i>
                                          </span>
                                        </a>
                                        <!-- level-3 page -->
                                        <ul  class="animated fadeInDown">
                                          <li class=" ">
                                            <a href='level-3' data-original-title='level-3'>
                                              <i class="fa fa-plus-square-o"></i>
                                              <span class='hidden-minibar'>level-3 </span>
                                            </a>
                                          </li>
                                          <li class=" ">
                                            <a href='level-3' data-original-title='level-3'>
                                              <i class="fa fa-plus-square-o"></i>
                                              <span class='hidden-minibar'>level-3 </span>
                                            </a>
                                          </li>
                                          <li class=" ">
                                            <a href='level-3' data-original-title='level-3'>
                                              <i class="fa fa-plus-square-o"></i>
                                              <span class='hidden-minibar'>level-3 </span>
                                            </a>
                                          </li>

                                        </ul>
                                        <!-- level-3 page -->
                                      </li>
                                      <li class=" ">
                                        <a href='level-2' data-original-title='level-2'>
                                          <i class="fa fa-plus-circle"></i>
                                          <span class='hidden-minibar'>level-2 </span>
                                        </a>
                                      </li>
                                      <!-- level-2 -->

                                    </ul>
                                  </li>
                                  <li class=' '>
                                    <a href='level-1' data-original-title='level-1'>
                                      <i class="fa fa-plus"></i>
                                      <span class='hidden-minibar'>level-1 </span>
                                    </a>
                                  </li>
                                </ul>


                                <ul  class="animated fadeInDown">

                                  <li class=' '>
                                    <a href='level-1' data-original-title='level-1'>
                                      <i class="fa fa-plus"></i>
                                      <span class='hidden-minibar'>level-1 </span>
                                    </a>
                                  </li>
                                  <li class=' '>
                                    <a href='level-1' data-original-title='level-1'>
                                      <i class="fa fa-plus"></i>
                                      <span class='hidden-minibar'>level-1 </span>
                                    </a>
                                  </li>
                                  <li class=' '>
                                    <a href='level-1' data-original-title='level-1'>
                                      <i class="fa fa-plus"></i>
                                      <span class='hidden-minibar'>level-1 </span>
                                    </a>
                                  </li>
                                  <li class=' '>
                                    <a href='level-1' data-original-title='level-1'>
                                      <i class="fa fa-plus"></i>
                                      <span class='hidden-minibar'>level-1 </span>
                                    </a>
                                  </li>

                                </ul>

                              </li><!-- unlimited menu -->
                              <li class=' '>
                                <a href='documentation#overview' data-original-title='Documentation'  target="_blank">
                                  <i class="fa fa-file-text"></i>
                                  <span class='hidden-minibar'>Docs
                                  </span>
                                </a>
                              </li>

                              <li class='submenu'>
                                <a class='dropdown' onClick='return false;' href='#' data-original-title='Components'>
                                  <i class="fa fa-hdd-o"></i>
                                  <span class='hidden-minibar'>Components
                                    <i class='fa fa-chevron-right  pull-right'></i>
                                  </span>
                                </a>
                                <ul  class="animated fadeInDown">
                                  <li class='submenu'>
                                    <a class='dropdown' onClick='return false;' href='#' data-original-title='Forms'>
                                      <i class="fa fa-pencil"></i>
                                      <span class='hidden-minibar'>Forms
                                        <i class='fa fa-chevron-right  pull-right'></i>
                                      </span>
                                    </a>
                                    <ul  class="animated fadeInDown">

                                      <li class=' '>
                                        <a href='form-elements' data-original-title='Form-Elements'>
                                          <i class="fa fa-pencil-square-o"></i>
                                          <span class='hidden-minibar'>Form Elements</span>
                                        </a>
                                      </li>
                                      <li class=' '>
                                        <a href='form-layouts' data-original-title=' Form-Layouts'>
                                          <i class="fa fa-pencil-square-o"></i>
                                          <span class='hidden-minibar'> Form Layouts</span>
                                        </a>
                                      </li>
                                      <li class=' '>
                                        <a href='form-validations' data-original-title=' Form-Validations'>
                                          <i class="fa fa-pencil-square-o"></i>
                                          <span class='hidden-minibar'> Form Validations</span>
                                        </a>
                                      </li>
                                      <li class=' '>
                                        <a href='wizards' data-original-title=' Wizards'>
                                         <i class="fa fa-pencil-square-o"></i>
                                         <span class='hidden-minibar'> Wizards</span>
                                       </a>
                                     </li>
                                   </ul><!-- forms -->
                                   <li class=' '>
                                    <a href='dropzone' data-original-title='Drop Zone'>
                                      <i class="fa fa-dropbox"></i>
                                      <span class='hidden-minibar'>Drop Zone</span>
                                    </a>
                                  </li>
                                  <li class=' '>
                                    <a href='image-crop' data-original-title='image-crop'>
                                      <i class='fa fa-picture-o'></i>
                                      <span class='hidden-minibar'>Image crop</span>
                                    </a>
                                  </li>
                                  <li class=' '>
                                    <a href='file-manager' data-original-title='File-Manager'>
                                      <i class="fa fa-folder-open"></i>
                                      <span class='hidden-minibar'>File Manager</span>
                                    </a>
                                  </li>

                                  <li class=' '>
                                    <a href='grid' data-original-title='Grid'>
                                     <i class="fa fa-th-large"></i>
                                     <span class='hidden-minibar'>Grid</span>
                                   </a>
                                 </li> 
                                 <li class='submenu'>
                                  <a href='#' data-original-title='Icons'>
                                    <i class="fa fa-flag"></i>
                                    <span class='hidden-minibar'>Icons
                                      <i class='fa fa-chevron-right'></i>
                                    </span>
                                  </a>
                                  <ul  class="animated fadeInDown">

                                    <li class=' '>
                                      <a href='glyphicons' data-original-title='Glyphicons'>
                                        <i class="fa fa-link"></i>
                                        <span class='hidden-minibar'>Glyphicons</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='ionicons' data-original-title='ionicons'>
                                        <i class="fa fa-link"></i>
                                        <span class='hidden-minibar'>ionicons</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='font-awesome' data-original-title='Font-Awesome'>
                                        <i class="fa fa-link"></i>
                                        <span class='hidden-minibar'>Font Awesome</span>
                                      </a>
                                    </li>
                                  </ul><!-- icons  -->
                                </li><!-- icons  -->
                                <li class=' '>
                                  <a href='info-boxes' data-original-title='Info-Boxes'>
                                    <i class="fa fa-info-circle"></i>
                                    <span class='hidden-minibar'>Info Boxes</span>
                                  </a>
                                </li>    

                                <li class='submenu '>
                                  <a href='#' data-original-title='Tables'>
                                    <i class="fa fa-table"></i>
                                    <span class='hidden-minibar'>Tables
                                      <i class='fa fa-chevron-right'></i>
                                    </span>
                                  </a>
                                  <ul  class="animated fadeInDown">

                                    <li class=' '>

                                      <a href='simple-tables' data-original-title='Simple Tables'>
                                        <i class="fa fa-th"></i>
                                        <span class='hidden-minibar'>Simple Tables</span>
                                      </a>
                                    </li>    
                                    <li class=' '>
                                      <a href='dynamic-tables' data-original-title='Dynamic Tables'>
                                        <i class="fa fa-th"></i>
                                        <span class='hidden-minibar'>Dynamic Tables</span>
                                      </a>
                                    </li>    
                                  </ul><!-- tables -->


                                </li><!-- tables -->
                                <li class='submenu'>
                                  <a href='#' data-original-title='Graphs'>
                                    <i class="fa fa-bar-chart-o"></i>
                                    <span class='hidden-minibar'>Graphs
                                      <i class='fa fa-chevron-right'></i>
                                    </span>
                                  </a>
                                  <ul  class="animated fadeInDown">
                                    <li class=' '>
                                      <a href='flot-charts' data-original-title='Flot-Charts'>
                                        <i class="fa fa-bars"></i>
                                        <span class='hidden-minibar'>Flot Charts</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='morris-charts' data-original-title='Morris-Charts'>
                                        <i class="fa fa-bars"></i>
                                        <span class='hidden-minibar'>Morris Charts</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='chartjs' data-original-title='ChartJs'>
                                        <i class="fa fa-bars"></i>
                                        <span class='hidden-minibar'>Chart JS</span>
                                      </a>
                                    </li>
                                    <li class=' '>
                                      <a href='nvd3charts' data-original-title='nvd3charts'>
                                        <i class="fa fa-bars"></i>
                                        <span class='hidden-minibar'>NVD3 Charts</span>
                                      </a>
                                    </li>
                                    
                                  </ul>
                                </li>   <!-- graphs -->
                                <li class=''>
                                  <a href='calendar' data-original-title='Calendar'>
                                    <i class="fa fa-calendar"></i>
                                    <span class='hidden-minibar'>Calendar
                                    </span>
                                  </a>
                                </li>    
                                <li class=' '>
                                  <a href='gallery' data-original-title='Gallery'>
                                    <i class="fa fa-picture-o"></i>
                                    <span class='hidden-minibar'>Gallery</span>
                                  </a>
                                </li>  
                                <li class=' '>
                                  <a href='editor' data-original-title='Wysiwyg'>
                                    <i class="fa fa-edit"></i>
                                    <span class='hidden-minibar'>WysiWyg</span>
                                  </a>
                                </li>  
                              </ul>
                            </li><!-- components -->



                          </ul>

                          <!-- /.Menu -->

                        </div>
                        <!-- /.left-sidebar Holder-->
                      </div>
                      <!-- /.left-sidebar -->

                      <!-- .right-sidebar -->
                      <div class="user-details user-details-close animated fadeInLeft">
                        <div class="right-sidebar-holder">
                          <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    Personalize
                                  </a>
                                  <i class="fa fa-times close-right-user text-danger pull-right"></i>
                                </h4>
                              </div>
                              <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                  <ul class="list-inline text-center">
                                    <li>Status</li>
                                    <li><input type="checkbox" name="my-checkbox"  data-on-text="Online" data-off-text="Offline" data-size="medium" checked data-on-color="success" data-off-color="danger" class="status-mode"></li>
                                  </ul>
                                  <hr>

                                  <h5 class="text-center">
                                    Theme Options
                                    <a  href="#"  class="theme-panel-close text-danger pull-right"><strong><i class="fa fa-times"></i></strong></a>
                                  </h5>

                                  <ul class="list-group theme-options">
                                    <li class="list-group-item" >   
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" id="fixedTopSide" value=""> Fixed Top Side
                                        </label>
                                      </div>
                                      <div class="checkbox">
                                        <label>
                                          <input type="checkbox" id="miniSidebar" value=""> Mini Sidebar
                                        </label>
                                      </div>

                                    </li>
                                    <li class="list-group-item" >Predefined Themes
                                      <ul class="list-inline predefined-themes"> 
                                        <li><a class="badge" style="background-color:#23bab5" data-color-primary="#23bab5" data-color-secondary="#232b2d" data-color-link="#80969c"> &nbsp; </a></li>
                                        <li><a class="badge" style="background-color:#e96363" data-color-primary="#e96363" data-color-secondary="#232b2d" data-color-link="#AFB5AA"> &nbsp; </a></li>
                                        <li><a class="badge" style="background-color:#5cb85c" data-color-primary="#5cb85c" data-color-secondary="#232b2d" data-color-link="#777e88"> &nbsp; </a></li>
                                        <li><a class="badge" style="background-color:#e97436" data-color-primary="#e97436" data-color-secondary="#232b2d" data-color-link="#80969c"> &nbsp; </a></li>
                                        <li><a class="badge" style="background-color:#2FA2D1" data-color-primary="#2FA2D1" data-color-secondary="#232b2d" data-color-link="#A5B1B7"> &nbsp; </a></li>
                                        <li><a class="badge" style="background-color:#2f343b" data-color-primary="#2f343b" data-color-secondary="#FFFFFF" data-color-link="#232b2d"> &nbsp; </a></li>
                                      </ul>
                                    </li>
                                  </ul>
                                  <div class="list-group contact-list  animated fadeInBig">
                                    <a class="list-group-item  text-primary">Profile <i class="fa fa-user pull-right"></i></a>
                                    <a class="list-group-item  text-info">Inbox <i class="fa fa-envelope pull-right"></i></a>
                                  </div>
                                  <hr>
                                  Server Load
                                  <div class="live-pie-chart">
                                    <div class="user-canvas user-chart" data-percent="73" >73%</div>  
                                  </div>

                                  Users Load
                                  <div class="live-pie-chart">
                                    <div class="user-canvas-two user-chart" data-percent="36" >36%</div>  
                                  </div>


                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    Contacts
                                    <i class="fa fa-users pull-right"></i>
                                  </a>
                                </h4>
                              </div>
                              <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body no-padding">
                                  <div class="list-group contact-list">
                                    <a class="list-group-item">
                                      <img src="images/profiles/one.png" class="chat-user-avatar" alt="">
                                      <div class="contact-info">
                                        <span class="name">John Deo</span>
                                        <span class="status">Available</span>
                                        <i class="fa fa-dot-circle-o"></i>
                                      </div>
                                    </a>
                                    <a class="list-group-item contact">
                                      <img src="images/profiles/two.png" class="chat-user-avatar" alt="">
                                      <div class="contact-info">
                                        <span class="name">John Deo</span>
                                        <span class="status">Available</span>
                                        <i class="fa fa-dot-circle-o online"></i>
                                      </div>
                                    </a>
                                    <a class="list-group-item contact">
                                      <img src="images/profiles/three.png" class="chat-user-avatar" alt="">
                                      <div class="contact-info">
                                        <span class="name">John Deo</span>
                                        <span class="status">busy</span>
                                        <i class="fa fa-dot-circle-o busy"></i>
                                      </div>
                                    </a>
                                    <a class="list-group-item">
                                      <img src="images/profiles/four.png" class="chat-user-avatar" alt="">
                                      <div class="contact-info">
                                        <span class="name">John Deo</span>
                                        <span class="status">offline</span>
                                        <i class="fa fa-dot-circle-o offline"></i>
                                      </div>
                                    </a>
                                    <a class="list-group-item contact">
                                      <img src="images/profiles/five.png" class="chat-user-avatar" alt="">
                                      <div class="contact-info">
                                        <span class="name">John Deo</span>
                                        <span class="status">Unavailable</span>
                                        <i class="fa fa-dot-circle-o"></i>
                                      </div>
                                    </a>
                                    <a class="list-group-item contact">
                                      <img src="images/profiles/six.png" class="chat-user-avatar" alt="">
                                      <div class="contact-info">
                                        <span class="name">John Deo</span>
                                        <span class="status">Unavailable</span>
                                        <i class="fa fa-dot-circle-o"></i>
                                      </div>
                                    </a>
                                    <a class="list-group-item">
                                      <img src="images/profiles/seven.png" class="chat-user-avatar" alt="">
                                      <div class="contact-info">
                                        <span class="name">John Deo</span>
                                        <span class="status">Offline</span>
                                        <i class="fa fa-dot-circle-o offline"></i>
                                      </div>
                                    </a>
                                    <a class="list-group-item contact">
                                      <img src="images/profiles/eight.png" class="chat-user-avatar" alt="">
                                      <div class="contact-info">
                                        <span class="name">John Deo</span>
                                        <span class="status">busy</span>
                                        <i class="fa fa-dot-circle-o busy"></i>
                                      </div>
                                    </a>
                                    <a class="list-group-item contact">
                                      <img src="images/profiles/nine.png" class="chat-user-avatar" alt="">
                                      <div class="contact-info">
                                        <span class="name">John Deo</span>
                                        <span class="status">offline</span>
                                        <i class="fa fa-dot-circle-o offline"></i>
                                      </div>
                                    </a>
                                    <a class="list-group-item">
                                      <img src="images/profiles/ten.png" class="chat-user-avatar" alt="">
                                      <div class="contact-info">
                                        <span class="name">John Deo</span>
                                        <span class="status">online</span>
                                        <i class="fa fa-dot-circle-o online"></i>
                                      </div>
                                    </a>
                                    <a class="list-group-item contact">
                                      <img src="images/profiles/eleven.png" class="chat-user-avatar" alt="">
                                      <div class="contact-info">
                                        <span class="name">John Deo</span>
                                        <span class="status">unvailable</span>
                                        <i class="fa fa-dot-circle-o"></i>
                                      </div>
                                    </a>
                                    <a class="list-group-item contact">
                                      <img src="images/profiles/twelve.png" class="chat-user-avatar" alt="">
                                      <div class="contact-info">
                                        <span class="name">John Deo</span>
                                        <span class="status">unavailable</span>
                                        <i class="fa fa-dot-circle-o"></i>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    Settings
                                    <i class="fa fa-cogs pull-right"></i>
                                  </a>
                                </h4>
                              </div>
                              <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body no-padding">
                                  <table class="table switches-table">
                                    <tr>
                                      <td> Wi-fi</td>                
                                      <td><input type="checkbox" name="my-checkbox" data-size="mini" checked data-on-color="success" data-off-color="danger"></td>
                                    </tr>
                                    <tr>
                                      <td> Data</td>                
                                      <td><input type="checkbox" name="my-checkbox" data-size="mini" unchecked data-on-color="success" data-off-color="danger"></td>
                                    </tr>
                                    <tr>
                                      <td> Music</td>                
                                      <td><input type="checkbox" name="my-checkbox" data-size="mini" unchecked data-on-color="success" data-off-color="danger"></td>
                                    </tr>
                                    <tr>
                                      <td> Flight mode</td>                
                                      <td><input type="checkbox" name="my-checkbox" data-size="mini" unchecked data-on-color="success" data-off-color="danger"></td>
                                    </tr>
                                    <tr>
                                      <td> Roaming</td>                
                                      <td><input type="checkbox" name="my-checkbox" data-size="mini" checked data-on-color="success" data-off-color="danger"></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                            <div class="panel panel-default">
                              <div class="panel-heading">
                                <h4 class="panel-title">
                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    Current Projects
                                    <i class="fa fa-clock-o pull-right"></i>
                                  </a>
                                </h4>
                              </div>
                              <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body no-padding">
                                  <div class="list-group projects">
                                    <a class="list-group-item" href="#">    
                                      <p> Archon <span class="pull-right label bg-success">90%</span></p>
                                      <div class="progress progress-mini">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                          <span class="sr-only">90% Complete</span>
                                        </div>
                                      </div>

                                    </a>
                                    <a class="list-group-item" href="#">    
                                      <p> Banshee <span class="pull-right label bg-warning">40%</span></p>
                                      <div class="progress progress-mini">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                          <span class="sr-only">40% Complete</span>
                                        </div>
                                      </div>

                                    </a>
                                    <a class="list-group-item" href="#">    
                                      <p> Cascade <span class="pull-right label bg-primary">40%</span></p>
                                      <div class="progress progress-mini">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                          <span class="sr-only">75% Complete</span>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>


                        </div>
                        <!-- /.right-sidebar-holder -->
                      </div>
                      <!-- /.right-sidebar -->


                      <!-- .content -->
                      <div class="content  animated fadeInBig">
                        <div class=" breadcrumb-holder">
                          <ul class="breadcrumb">
                            <li class="active">DashBoard</li>
                            <li>
                              <a href="#">Dashboard</a>
                            </li>
                            <li>
                              <a href="#">Template</a>
                            </li>
                          </ul>
                          <a href="#" class="options-toggle">
                            <i class="fa fa-th"></i>
                          </a>
                          <a href="#" class="refresh-storage">
                            <i class="fa fa-refresh"></i>
                          </a>
                        </div>
                        <div class="options-holder closed   animated  fadeInLeft  ">
                          <div class="col-md-2 col-sm-2  col-xs-4">
                            <div class="thumbnail tile tile-blue">
                              <a href="inbox" class="fa-links">
                                <i class="fa fa-3x fa-envelope"></i>
                                <h1>Inbox</h1>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2  col-xs-4">
                            <div class="thumbnail tile tile-orange">
                              <a href="form-elements" class="fa-links">
                                <i class="fa fa-3x fa fa-hdd-o"></i>
                              </a>
                              <h1>Forms</h1>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2  col-xs-4">
                            <div class="thumbnail tile tile-midnight-blue">
                              <a href="invoice" class="fa-links">
                                <i class="fa fa-3x fa-money"></i>
                                <h1>Invoice</h1>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2  col-xs-4">
                            <div class="thumbnail tile tile-amethyst">
                              <a href="profile" class="fa-links">
                                <i class="fa fa-3x fa-users"></i>
                                <h1>Users</h1>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2  col-xs-4">
                            <div class="thumbnail tile tile-red">
                              <a href="file-manager" class="fa-links">
                                <i class="fa fa-3x fa-file-o"></i>
                                <h1>Files</h1>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-2 col-sm-2  col-xs-4">
                            <div class="thumbnail tile tile-lime">
                              <a href="dropzone" class="fa-links">
                                <i class="fa fa-3x fa-cloud-upload"></i>
                                <h1>Upload</h1>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="main-content">











