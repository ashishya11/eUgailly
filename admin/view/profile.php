<?php

$title = 'Profile';
$profileActive = 1;
include "./header.php";
?>
<section class="content-header">
  </section>
<section class="content">
	<div class="row">
	    <div class="col-lg-4">
	          <h1>Profile</h1>
	          <ol class="breadcrumb">
	            <li><a href="home.php"><i class="fa fa-tachometer-alt"></i> Home</a></li>
	            <li class="active">Profile</li>
	          </ol>
	    </div>
	    
  	</div>
  	<div class="row mt-2" style="padding-left: 2em; padding-right: 2em;">
  		<div class="col-lg-2"></div>
  		<div class="col-lg-8">
  			<div class="box box-primary">
	        <div class="box-body box-profile">
		        <img class="profile-user-img img-responsive img-circle" src="../dist/img/default-50x50.gif" alt="User profile picture">
		        <h3 class="profile-username text-center">Nina Mcintire</h3>
		        <p class="text-muted text-center">Software Engineer</p>
		        <ul class="list-group list-group-unbordered">
		            <li class="list-group-item">
		                <b>Followers</b> <a class="pull-right">1,322</a>
		            </li>
		            <li class="list-group-item">
		                <b>Following</b> <a class="pull-right">543</a>
		            </li>
		            <li class="list-group-item">
		                <b>Friends</b> <a class="pull-right">13,287</a>
		            </li>
		        </ul>
		        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
		    </div>
        	<!-- /.box-body -->
        	</div>
    	</div>
    	<div class="col-lg-2"></div>	
  	</div>
	
</section>
<?php
include "./footer.php";
?>