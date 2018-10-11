<?php
$title = 'Slider_Setting';
$sliderActive = 1;
include "./header.php";
?>

	<section class="content-header">
      <h1>
        Slider
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Slider</li>
      </ol>
    </section>
    <section class="topmargin">
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-2 col-sm-1"></div>
        <div class="col-md-8 col-sm-10 col-xs-12">
          <div class="box box-primary hide" id="slider_form">
            <div class="box-header with-border">
              <h3 class="box-title">slider_image
              </h3>
            </div>
        <!-- form start -->
            <form role="form" action="../controllers/slider_controller.php" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Title
                  </label>
                  <input type="text" name="title" class="form-control" id="slider_title" placeholder="slider_title">
                </div>
                <div class="form-group">
                  <label for="description">Description
                  </label>
                  <textarea type="text" name="description" class="form-control" id="slider_description" placeholder="slider_description"></textarea>
                </div>
                <div class="form-group">
                  <label for="images">images
                  </label>
                  <input type="file" name="images" class="form-control" id="slider_image" placeholder="slider_image">
                </div>
                <input type="hidden" name="slider_id" class="form-control" id="slider_Id">
                <input type="submit" name="submit" value="add" class="mt-2 btn btn-primary" id="slider_image_submit">
                <input type="submit" name="submit" value="update" class="mt-2 btn btn-primary hide" id="slider_image_update">
                <input type="button" name="submit" value="Cancel" onclick="reset();" class="mt-2 btn btn-secondary" id="can-slider"> 
              </div>
              <!-- /.box-body -->
            </form>
            <div class="box-footer">
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-1"></div>
      </div>
      <div class="row">
        <div class="col-md-2 col-sm-1 col-xs-12"></div>
        <div class="col-md-8 col-sm-10 col-xs-12">
          <div class="box">
        <div class="box-header">
          <h3 class="box-title">Slider Images
          </h3>
          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <div class="input-group-btn">
                <button type="submit" id="add_img" class="btn btn-default">
                  <i class="fa fa-plus">
                  </i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody id="list_slider_table">
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
        </div>
        <div class="col-md-2 col-sm-1 col-xs-12"></div>
      </div>
    </section>

<?php
include "./footer.php";
?>
<script>
  sliderlist();
</script>