<?php
$sub_categoryActive = 1;
include "../header.php";
// include './msg.php';
?>
<script>
	category_list();
	list_sub_category();
</script>
	<section class="content-header">
      <h1>
        Sub_Category
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-category"></i> eUgailly</a></li>
        <li class="active">Sub_Category</li>
      </ol>
    </section>
    <section class="content">
	<div class="row">
		<div class="col-lg-12">
			<input type="submit" name="submit" value="Add_New" class="btn btn-primary" id="add-sub-category">
			<hr>
		</div>
		<div class="col-lg-12">
			<h3 id="msg"></h3>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-lg-8">
			<div id="list_sub_category_table">
				
			</div>
		</div>
		<div class="col-lg-4">
			<!-- <div class="card hide" id="insert-sub-category">
				<div class="card-body">
					<form class="form-group" action="../controllers/sub_category_controller.php" method="POST">
						<h4>Sub_Category_Name</h4>
						<select class="form-control mb-2" id="category_list" name="category">
							
						</select>
						<input type="text" name="sub_category" class="form-control" id="sub_category_Name" placeholder="Sub_Category_Name">
						<input type="hidden" name="sub_category_id" class="form-control" id="sub_category_id">
						<input type="submit" name="submit" value="add" class="mt-2 btn btn-primary" id="sub_category_name_submit">
						<input type="submit" name="submit" value="update" class="mt-2 btn btn-primary hide" id="sub_category_name_update">
					</form>
				</div>
				<input type="submit" name="submit" value="Cancel" class="mt-2 btn btn-secondary" id="can-sub-category">
			</div> -->
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Sub_Category_Name</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="../controllers/sub_category_controller.php" method="POST">
              <div class="box-body">
              	<div class="form-group">
              		<label for="category_Name">Category_Name</label>
              		<select class="form-control mb-2" id="category_list" name="category">
							
					</select>
              	</div>
                <div class="form-group">
                  <label for="Sub_Category_Name">Sub_Category_Name</label>
                  <input type="text" name="sub_category" class="form-control" id="sub_category_Name" placeholder="Sub_Category_Name">
                </div>
                <input type="hidden" name="sub_category_id" class="form-control" id="sub_category_id">
				<input type="submit" name="submit" value="add" class="mt-2 btn btn-primary" id="sub_category_name_submit">
				<input type="submit" name="submit" value="update" class="mt-2 btn btn-primary hide" id="sub_category_name_update">
              </div>
              <!-- /.box-body -->
            </form>
            <div class="box-footer">
               <input type="submit" name="submit" value="Cancel" class="mt-2 btn btn-secondary" id="can-sub-category">
            </div>
          </div>
		</div>
	</div>
	</section>
<?php
include "../footer.php";
?>	
