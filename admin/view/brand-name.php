<?php
$title = 'Brand_List';
$brandActive = 1;
include "./header.php";
?>
<script>
list_brand();
</script>

	<section class="content-header">
      <h1>
        Brand
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-brand"></i> eUgailly</a></li>
        <li class="active">Brand</li>
      </ol>
    </section>
    <section class="topmargin">
</section>
    <section class="content">
    	<div class="row">	
		<div class="col-lg-12">
			<h3 id="msg"></h3>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-lg-8">
			<div class="box">
        <div class="box-header">
          <h3 class="box-title">Brand_List
          </h3>
          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" id="myInput" class="form-control pull-right" placeholder="Search">
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
            <tbody id="list_brand_table">
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
		</div>
		<div class="col-lg-4">
			<!-- <div class="card hide" id="insert-brand">
				<div class="card-body">
					<form class="form-group" action="../controllers/brand_controller.php" enctype="multipart/form-data" method="POST">
						<h4>Brand_Name</h4>
						<input type="text" name="brand" class="form-control" id="brand_Name" placeholder="brand_Name">
						<div class="text-center mt-1">
							<img id="img1" src="../media/demo pic/no-image.png" class="avatar img-thumbnail" alt="avatar">
						</div>
						<input type="file" name="brand_img" class="border btn-sm mt-1 text-center center-block file-upload" id="brand_img">
						<input type="hidden" name="brand_Id" class="form-control" id="brand_Id">
						<input type="submit" name="submit" value="submit" class="mt-2 btn btn-primary" id="brand_name_submit">
						<input type="submit" name="submit" value="update" class="mt-2 btn btn-primary hide" id="brand_name_update">
					</form>
				</div>
				<input type="submit" name="submit" value="submit" class="mt-2 btn btn-primary" id="brand_name_submit">
				<input type="submit" name="submit" value="Cancel" class="mt-2 btn btn-secondary can-brand" id="can-brand">
			</div>	 -->
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">brand_Name</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="../controllers/brand_controller.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="brand_Name">brand_Name</label>
                  <input type="text" name="brand" class="form-control" id="brand_Name" placeholder="brand_Name">
                </div>
                <div class="text-center mt-1">
					<img id="img1" src="../media/demo pic/no-image.png" class="avatar img-thumbnail" alt="avatar">
				</div>
				<input type="file" name="brand_img" class="border btn-sm mt-1 text-center center-block file-upload" id="brand_img">
                <input type="hidden" name="brand_Id" class="form-control" id="brand_Id">
                
              </div>
              <!-- /.box-body -->
            
            <div class="box-footer">
              <input type="submit" name="submit" value="add" class="mt-2 btn btn-primary" id="brand_name_submit">
              <input type="submit" name="submit" value="update" class="mt-2 btn btn-primary hide" id="brand_name_update">
               <input type="button" value="Cancel" onclick="reset();" class="mt-2 btn btn-secondary hide" id="can-brand"> 
            </div>
            </form>
          	</div>
		</div>
	</div>	
    </section>
	
<?php
include "./footer.php";
?>
<script>
list_brand();
</script>