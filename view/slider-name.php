<?php
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
    <section class="content">
      <div class="row">
        <div class="col-md-2 col-sm-1 col-xs-0"></div>
        <div class="col-md-8 col-sm-10 col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Slider
              </h3>
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
        <div class="col-md-2 col-sm-1 col-xs-0"></div>
        <div class="clearfix visible-sm-block"></div>
      </div>
    </section>

<?php
include "./footer.php";
?>