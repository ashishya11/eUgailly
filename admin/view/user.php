<?php
$title = 'User_List';
$userActive = 1;
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
    <section class="topmargin">
</section>
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-2 col-sm-2 col-xs-1"></div>
        <div class="col-md-8 col-sm-8 col-xs-10">
          <div class="box">
            <div class="box-header">
          <h3 class="box-title">User_List
          </h3>
          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" id="myInput" name="category_search" class="form-control pull-right" placeholder="Search">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default">
                  <i class="fa fa-search">
                  </i>
                </button>
              </div>
            </div>
          </div>
            </div>
        <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody id="list_user_table">
                </tbody>
              </table>
            </div>
        <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-2 col-sm-2 col-xs-1"></div>
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
      </div>
      
      <!-- /.row -->

      <!-- Main row -->
      
      <!-- /.row -->
    </section>

<?php
include "./footer.php";
?>
<script>
  userlist();
</script>
