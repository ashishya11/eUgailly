<?php
$title = 'Product';
$productActive = 1;
include "./header.php";
?>

	<section class="content-header">
      <h1>
        Product
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-Product"></i> eUgailly</a></li>
        <li class="active">Product</li>
      </ol>
    </section>
    <section class="topmargin">
</section>
    <section class="content">
    	<div class="row">
		<div class="col-lg-12">
			<!-- <input type="submit" name="submit" value="Add_New" class="btn btn-primary" id="add-product"> -->
			<hr>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-lg-8">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Product_List
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
            <tbody id="list_product_table">
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>  
		<div class="col-lg-4">
			<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="../controllers/product_controller.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group" onchange="sub_category_list();">
                  <label for="Category">Category</label>
                  <select class="form-control mb-2" id="category_list" name="category">
              
                  </select>
                </div>
                <div class="form-group" onchange="brand_list();">
                  <label for="Category">Sub_Category</label>
                  <select class="form-control mb-2" id="sub_category_list" name="sub_category">
              
                  </select>
                </div>
                <div class="form-group">
                  <label for="Category">Brand</label>
                  <select class="form-control mb-2" id="brand_list" name="brand_list">
              
                  </select>
                </div>
                <div class="form-group">
                  <label for="Product_Name">Product_Name</label>
                  <input type="text" name="product_name" class="form-control mb-2" id="product_Name" placeholder="Product_Name">
                </div>
                <div class="form-group">
                  <label for="productImage">Product Image</label>
                  <input type="file" name="product_img[]" class="border btn-sm mt-1 center-block file-upload" id="product_img" multiple>
                </div>
                <div class="form-group">
                  <label for="ProductPrice">Product Price</label>
                  <input type="text" name="product_price" class="form-control mt-1" id="product_price" placeholder="Product_Price">
                </div>
                <div class="form-group">
                  <label for="ProductQuantity">Product quantity</label>
                  <input type="text" name="product_quantity" class="form-control mt-1" id="product_quantity" placeholder="Product_Quantity">
                </div>
                <div class="form-group">
                  <label for="ProductDesc">Product Description</label>
                  <textarea type="text" name="product_desc" class="form-control desc mt-1" id="product_Desc" placeholder="Product_Description"></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="product_Id" class="form-control" id="product_Id">
                <input type="submit" name="submit" value="add" class="mt-2 btn btn-primary" id="product_name_submit">
                <input type="submit" name="submit" value="update" class="mt-2 btn btn-primary hide" id="product_name_update">
                <input type="button" value="Cancel" onclick="reset();" class="mt-2 btn btn-secondary hide" id="can-product"> 
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
	category_list();
	// sub_category_list();
	// brand_list();
	product_list();
</script>		