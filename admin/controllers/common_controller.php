<?php
require_once('../models/common_model.php');
if (isset($_POST) && !empty($_POST)) {
	// echo "<pre>";print_r($_POST);die;
	if ($_POST['submit'] == 'login') {
		$r = login($_POST);
		header("location:../view/home.php");
	}
}
?>