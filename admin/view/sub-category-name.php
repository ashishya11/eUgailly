<?php

$title = 'Sub_Category';
$sub_categoryActive = 1;
include "./header.php";
// include './msg.php';
?>

	<section class="content-header">
  </section>
    <section class="content">
	<div class="row">
    <div class="col-lg-4">
          <h1>Sub Category Listing</h1>
          <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-tachometer-alt"></i> Home</a></li>
            <li class="active">Sub_category</li>
          </ol>
          
      <hr>
    </div>
    <div class="col-lg-4">
      <div class="input-group input-group-sm" style="/* width: 150px; */margin-top: 5em;/* margin-left: 18em; */">
        <input type="text" id="myInput" class="form-control pull-right" placeholder="Search">
        <div class="input-group-btn">
          <button type="submit" class="btn btn-default">
            <i class="fa fa-search">
            </i>
          </button>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="input-group input-group-sm" style="width: 150px;margin-top: 5em;margin-left: 20em;">
        <!-- <input type="text" id="myInput" class="form-control pull-right" placeholder="Search"> -->
        <div class="input-group-btn">
          <button type="submit" class="btn btn-primary add">
            <i class="fa fa-plus">
               ADD NEW </i></button>
        </div>
      </div>
    </div>
  </div>
	<div class="row mt-2" style="padding-left: 2em; padding-right: 2em;">
		<div class="col-lg-12 fourm hide">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Sub_Category_Name</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="../controllers/sub_category_controller.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="category_Name" class="col-sm-3 control-label">Category_Name</label>
                  <div class="col-sm-7">
                    <select class="form-control" id="category_list" name="category">
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Sub_Category_Name" class="col-sm-3 control-label">Sub_Category_Name</label>
                  <div class="col-sm-7">
                    <input type="text" name="sub_category" class="form-control" id="sub_category_Name" placeholder="Sub_Category_Name">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            
              <div class="box-footer">
                <input type="hidden" name="sub_category_id" class="form-control" id="sub_category_id">
                <input type="submit" name="submit" value="add" class="mt-2 btn btn-primary" id="sub_category_name_submit">
                <input type="submit" name="submit" value="update" class="mt-2 btn btn-primary hide" id="sub_category_name_update">
                <input type="button" name="submit" onclick="reset();" value="Cancel" class="mt-2 btn btn-secondary hide can" id="can-sub-category">
              </div>
            </form>
          </div>
    </div>
    <div class="col-lg-12">
			<div class="box">
        <div class="box-header">
          
          <div class="box-tools">
            
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody id="list_sub_category_table">
            </tbody>
          </table>
        </div>
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <li><a href="#">«</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">»</a></li>
          </ul>
        </div>
        <!-- /.box-body -->
      </div>
		</div>
	</div>
	</section>
<?php
include "./footer.php";
?>	
<script>
	category_list();
	list_sub_category();
</script>
