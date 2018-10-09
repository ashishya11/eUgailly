<?php
require_once('../models/slider_model.php');
if (isset($_POST) && !empty($_POST)) {
	if ($_POST['submit']== 'sliderlist') {
		$r = sliderlist();
		if ($r) {
			echo json_encode($user);
		}
	}
	if ($_POST['submit'] == 'add') {
		// echo "<pre>";print_r($_FILES);print_r($_POST);die;
		$r = save($_POST);
		if($r){
			header("location:../view/slider-name.php?msg=inserted");
		}else{
			header("location:../view/slider-name.php?msg=!inserted");
		}
	}
	if ($_POST['submit']== 'slider_list') {
		// echo "<pre>";print_r($_POST);die;
		$r = slider_list($_POST);
		if ($r) {
			echo json_encode($user);
		}
	}
	if ($_POST['submit'] == 'update') {
		// echo "<pre>";print_r($_FILES);print_r($_POST);die;
		$r = update($_POST);
		if($r){
			header("location:../view/slider-name.php?msg=updated");
		}else{
			header("location:../view/slider-name.php?msg=!updated");
		}
	}
	if ($_POST['submit'] == 'update_status') {
		// echo "<pre>";print_r($_FILES);print_r($_POST);die;
		$r = status_update($_POST);
		if($r){
			header("location:../view/slider-name.php?msg=updated");
		}else{
			header("location:../view/slider-name.php?msg=!updated");
		}
	}
	if ($_POST['submit'] == 'delete') {
		// echo "<pre>";print_r($_FILES);print_r($_POST);die;
		$r = delete($_POST);
		if($r){
			header("location:../view/slider-name.php?msg=deleted");
		}else{
			header("location:../view/slider-name.php?msg=!deleted");
		}
	}
}
?>