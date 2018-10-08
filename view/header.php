<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <title>eUgailly | Dashboard
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/fontawesome-5.3.1/css/all.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="../dist/css/custom.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">       -->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="home.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">
            <b><i class="fab fa-erlang"></i>
            </b>
          </span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">
            <b>e
            </b>Ugailly
          </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation
            </span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Ashish Singh
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Ashish Singh - Web Developer
                      <small>Member since Oct. 2017
                      </small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="profile.php" class="btn btn-default btn-flat">Profile
                      </a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar">
                  <i class="fa fa-cogs">
                  </i>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Ashish Singh
              </p>
              <a href="#">
                <i class="fa fa-circle text-success">
                </i> Online
              </a>
            </div>
          </div>
          <!-- search form -->
          <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search">
                  </i>
                </button>
              </span>
            </div>
          </form> -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION
            </li>
            <li class="treeview  <?php if(isset($homeActive)) echo 'active';?>">
              <a href="#">
                <i class="fa fa-tachometer-alt">
                </i> 
                <span>Dashboard
                </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right">
                  </i>
                </span>
              </a>
              <ul class="treeview-menu">
                <!-- <li><a href="index.html"><i class="fa fa-circle"></i> Dashboard v1</a></li> -->
                <li class="<?php if(isset($homeActive)) echo 'active';?>">
                  <a href="home.php">
                    <i class="fa fa-circle">
                    </i> Home
                  </a>
                </li>
              </ul>
            </li>
            <li class="treeview  <?php if(isset($userActive)) echo 'active';?>">
              <a href="#">
                <i class="fa fa-users">
                </i> 
                <span>Users
                </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right">
                  </i>
                </span>
              </a>
              <ul class="treeview-menu">
                <!-- <li><a href="index.html"><i class="fa fa-circle"></i> Dashboard v1</a></li> -->
                <li class="<?php if(isset($userActive)) echo 'active';?>">
                  <a href="user.php">
                    <i class="fa fa-circle">
                    </i> Users
                  </a>
                </li>
              </ul>
            </li>
            <li class="treeview <?php if(isset($categoryActive)) echo 'active';?>">
              <a href="#">
                <i class="fa fa-tag">
                </i> 
                <span>Category
                </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right">
                  </i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if(isset($categoryActive)) echo 'active';?>">
                    <a href="category-name.php">
                      <i class="fa fa-circle">
                      </i> Category_list
                    </a>
                    </li>
              </ul>
            </li>
            <li class="treeview <?php if(isset($sub_categoryActive)) echo 'active';?>">
              <a href="#">
                <i class="fa fa-tags">
                </i> 
                <span>Sub_Category
                </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right">
                  </i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if(isset($sub_categoryActive)) echo 'active';?>">
                    <a href="sub-category-name.php">
                      <i class="fa fa-circle">
                      </i> Sub_Category_list
                    </a>
                    </li>
              </ul>
            </li>
            <li class="treeview <?php if(isset($brandActive)) echo 'active';?>">
              <a href="#">
                <i class="ion ion-ios-pricetag">
                </i> 
                <span>Brand
                </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right">
                  </i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if(isset($brandActive)) echo 'active';?>">
                    <a href="brand-name.php">
                      <i class="fa fa-circle">
                      </i> Brand_list
                    </a>
                    </li>
              </ul>
            </li>
            <li class="treeview <?php if(isset($productActive)) echo 'active';?>">
              <a href="#">
                <i class="fa fa-sitemap">
                </i> 
                <span>Product
                </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right">
                  </i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if(isset($productActive)) echo 'active';?>">
                    <a href="product-name.php">
                      <i class="fa fa-circle">
                      </i> Product_list
                    </a>
                    </li>
              </ul>
            </li>
             <li class="treeview <?php if(isset($sliderActive)) echo 'active';?>">
              <a href="#">
                <i class="fa fa-images">
                </i> 
                <span>Slider
                </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right">
                  </i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php if(isset($sliderActive)) echo 'active';?>">
                    <a href="slider-name.php">
                      <i class="fa fa-circle">
                      </i> Slider
                    </a>
                    </li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <div class="content-wrapper">
