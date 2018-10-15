<?php
$title = 'Category';
$categoryActive = 1;
include "./header.php";
// include "./msg.php";
?>
<!-- <div class="container"> -->
<section class="content-header">
</section>
<section class="content">
  <div class="row" style="padding-left: 2em; padding-right: 2em;">
    <div class="col-lg-4">
          <h1>Category Listing</h1>
          <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-tachometer-alt"></i> Home</a></li>
            <li class="active">category</li>
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
  <div class="row" style="padding-left: 2em; padding-right: 2em;">
    <div class="col-lg-12 fourm hide">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Category Name
          </h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" role="form" action="../controllers/category_controller.php" method="POST" onsubmit="return category_Name();">
          <div class="box-body">
            <div class="form-group">
              <label for="Category_Name" class="col-sm-3 control-label">Category Name
              </label>
              <div class="col-sm-7">
                <input type="text" name="category" class="form-control" id="category_Name" placeholder="Category_Name"> 
              </div>
            </div>  
          </div>    
          <div class="box-footer">    
            <input type="hidden" name="category_Id" class="form-control" id="category_Id">
            <input type="submit" name="submit" value="add" class="mt-2 btn btn-primary" id="category_name_submit">
            <input type="submit" name="submit" value="update" class="mt-2 btn btn-primary hide" id="category_name_update">
            <input type="button" name="submit" value="Cancel" onclick="reset();" class="mt-2 btn btn-secondary can" id="can-category"> 
          </div>
          <!-- /.box-body -->
        </form>
      </div>  
    </div>
    <div class="col-lg-12">
      <div class="box">
        <div class="box-header"> 
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody id="list_category_table">
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
</section>
<!-- </div> -->
<?php
include "./footer.php";
?>  
<script>
  list_category();
</script>
