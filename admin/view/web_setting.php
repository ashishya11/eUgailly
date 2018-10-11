<?php
$title = 'Web-Setting';
$webActive = 1;
include "./header.php";
?>
<section class="content-header">
	<h1>
		Web-Setting
   		<small>Version 2.0</small>
 	</h1>
 	<ol class="breadcrumb">
   		<li><a href="home.php"><i class="fa fa-Dasboard"></i> Home</a></li>
   		<li class="active">Web-Setting</li>
 	</ol>
</section>
<section class="topmargin">
</section>
<section class="content">
	<div class="row mt-2">
		<div class="col-lg-2"></div>
    	<div class="col-lg-8">
    		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Web_Setting</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="../controllers/web_setting_controller.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="address" class="col-sm-3 control-label">Address</label>

                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                  </div>
                </div>
                <div class="form-group">
                  <label for="telephone" class="col-sm-3 control-label">Telephone</label>

                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Telephone">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-3 control-label">Email</label>

                  <div class="col-sm-7">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="description" class="col-sm-3 control-label">Description</label>

                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="desc" id="desc" placeholder="Description">
                  </div>
                </div>
                <div class="form-group">
                  <label for="facebook_url" class="col-sm-3 control-label">Facebook URL</label>

                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="facebook_url" id="facebook_url" placeholder="Facebook_url">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Youtube_url" class="col-sm-3 control-label">Youtube URL</label>

                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="youtube_url" id="youtube_url" placeholder="Youtube_url">
                  </div>
                </div>
                <div class="form-group">
                  <label for="LikedIn_url" class="col-sm-3 control-label">LikedIn URL</label>

                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="likedin_url" id="likedin_url" placeholder="LikedIn_url">
                  </div>
                </div>
                <div class="form-group">
                  <label for="google_plus" class="col-sm-3 control-label">Google_Plus URL</label>

                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="google_plus_url" id="google_plus_url" placeholder="Google_Plus_url">
                  </div>
                </div>
                <div class="form-group">
                  <label for="logo" class="col-sm-3 control-label">Company Logo</label>

                  <div class="col-sm-7">
                    <input type="file" class="form-control file-upload" name="logo" id="logo" placeholder="logo">
                  </div>
                </div>
                <div class="text-center">
                  <img id="img1" src="../media/demo pic/no-image.png" class="avatar img-thumbnail" alt="avatar">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	<input type="hidden" name="id" value="1">
                <button type="submit" name="submit" value="update" class="btn btn-info">Update</button>
                <!-- <button type="submit" name="submit" value="cancel" onclick="reset()" class="btn btn-default">Cancel</button> -->
              </div>
              <!-- /.box-footer -->
            </form>
          </div>  
      	</div>
      	<div class="col-lg-2"></div>
    </div>
</section>


<?php
include "./footer.php";
?>

<script>
	web_setting();
</script>