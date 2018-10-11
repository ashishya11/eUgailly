<?php
require_once('../models/web_setting_model.php');
if (isset($_POST) && !empty($_POST)) {
	if ($_POST['submit'] == 'select') {
		$r = select($_POST);
		if ($r) {
			echo json_encode($user);
		}else {
			echo false;
		}
	}
	if ($_POST['submit'] == 'update') {
		// echo "<pre>";print_r($_POST);print_r($_FILES);die;
		$r = update($_POST);
		if ($r) {
			header("location:../view/web_setting.php?msg=inserted");
		}else{
			header("location:../view/web_setting.php?msg=!inserted");
		}
	}
}
?>