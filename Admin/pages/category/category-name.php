<?php
$categoryActive = 1;
include "../header.php";
// include "./msg.php";
?>

<!-- <div class="container"> -->
	<section class="content-header">
      <h1>
        Category
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-category"></i> eUgailly</a></li>
        <li class="active">Category</li>
      </ol>
    </section>
    <section class="content">
    	<div class="row">
		<div class="col-lg-12">
			<input type="submit" name="submit" value="Add_New" class="btn btn-primary" id="add-category">
			<!-- <input type="submit" name="submit" value="Cancel" class="btn btn-primary" id="can-category"> -->
			<hr>
		</div>
		<div class="col-lg-12">
			<h3 id="msg"></h3>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-lg-8">
			<div class="box-body table-responsive no-padding">
              <table class="table">
                <tbody id="list_category_table">

              </tbody></table>
            </div>
		</div>
		<div class="col-lg-4">
			<!-- <div class="card hide" id="insert-category">
				<div class="card-body">
					<form class="form-group" action="../controllers/category_controller.php" method="POST" onsubmit="return category_Name();">
						<h4>Category_Name</h4>
						<input type="text" name="category" class="form-control" id="category_Name" placeholder="Category_Name">
						<input type="hidden" name="category_Id" class="form-control" id="category_Id">
						<input type="submit" name="submit" value="add" class="mt-2 btn btn-primary" id="category_name_submit">
						<input type="submit" name="submit" value="update" class="mt-2 btn btn-primary hide" id="category_name_update">
					</form>
				</div>
				<input type="submit" name="submit" value="submit" class="mt-2 btn btn-primary" id="category_name_submit">
				<input type="submit" name="submit" value="Cancel" class="mt-2 btn btn-secondary can-category" id="can-category">
			</div>	 -->
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Category_Name</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="../controllers/category_controller.php" method="POST" onsubmit="return category_Name();">
              <div class="box-body">
                <div class="form-group">
                  <label for="Category_Name">Category_Name</label>
                  <input type="text" name="category" class="form-control" id="category_Name" placeholder="Category_Name">
                </div>
                <input type="hidden" name="category_Id" class="form-control" id="category_Id">
                <input type="submit" name="submit" value="add" class="mt-2 btn btn-primary" id="category_name_submit">
				<input type="submit" name="submit" value="update" class="mt-2 btn btn-primary hide" id="category_name_update">
              </div>
              <!-- /.box-body -->
            </form>
            <div class="box-footer">
               <input type="submit" name="submit" value="Cancel" class="mt-2 btn btn-secondary can-category" id="can-category"> 
            </div>
          	</div>
          
		</div>
	</div>
    </section>
	

<!-- </div> -->
<?php
include "../footer.php";
?>	
<script>
list_category();
</script>