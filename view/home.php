<?php
$homeActive = 1;
include "./header.php";
?>

	<section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fas fa-tag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Category</span>
              <span class="info-box-number" id="category-total"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-tags"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sub-Category</span>
              <span class="info-box-number" id="Sub-category-total">#</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-pricetag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Brand</span>
              <span class="info-box-number" id="brand-total">#</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-sitemap"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Product</span>
              <span class="info-box-number" id="product-total">#</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 id="user_list"></h3>

              <h2>Total_User</h2>
            </div>
            <div class="icon">
              <i class="fa fa-users custcol"></i>
            </div>
            <a href="user.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 id="new_user_list"></h3>

              <h2>New_User</h2>
            </div>
            <div class="icon">
              <i class="fa fa-users custcol"></i>
            </div>
            <a href="user.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        
        <!-- /.col -->
      </div>
      
      <!-- /.row -->

      <!-- Main row -->
      
      <!-- /.row -->
    </section>

<?php
include "./footer.php";
?>

<script>
  category_total();
  Sub_category_total();
  brand_total();
  product_total();
  user_total();
  new_user_total();
</script>	