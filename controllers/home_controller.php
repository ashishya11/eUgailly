<?php
require_once('../models/home_model.php');
if (isset($_POST) && !empty($_POST)) {
	if ($_POST['submit']== 'total') {
		$r = category_total();
	}
	if ($_POST['submit']== 'sub_total') {
		$r = sub_category_total();
	}
	if ($_POST['submit']== 'brand_total') {
		$r = brand_total();
	}
	if ($_POST['submit']== 'product_total') {
		$r = product_total();
	}
	if ($_POST['submit']== 'user_total') {
		$r = user_total();
	}
	if ($_POST['submit']== 'new_user_total') {
		$r = new_user_total();
	}
	if ($_POST['submit']== 'userlist') {
		$r = userlist();
		if ($r) {
			echo json_encode($user);
		}
	}
}
?>