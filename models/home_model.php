<?php
include "../config/db.php";
function category_total(){
	global $conn;
	$stmt = "SELECT * FROM category";
	$result = mysqli_query($conn,$stmt);
	$rowcount = mysqli_num_rows($result);
	echo $rowcount;
}
function sub_category_total(){
	global $conn;
	$stmt = "SELECT * FROM sub_category";
	$result = mysqli_query($conn,$stmt);
	$rowcount = mysqli_num_rows($result);
	echo $rowcount;
}
function brand_total(){
	global $conn;
	$stmt = "SELECT * FROM brand";
	$result = mysqli_query($conn,$stmt);
	$rowcount = mysqli_num_rows($result);
	echo $rowcount;
}
function product_total(){
	global $conn;
	$stmt = "SELECT * FROM product";
	$result = mysqli_query($conn,$stmt);
	$rowcount = mysqli_num_rows($result);
	echo $rowcount;
}
function user_total(){
	global $conn;
	$stmt = "SELECT * FROM users";
	$result = mysqli_query($conn,$stmt);
	$rowcount = mysqli_num_rows($result);
	echo $rowcount;
}
// function new_user_total(){
// 	global $conn;
// 	// echo date("Y-m-d h:i:s");
// 	$date2 = date("Y-m-d h:i:s");

// 	$time = date_diff($date1,$date2);
// 	echo $stmt = "SELECT * FROM users WHERE" .date_diff(."created_on".,$date2). " > 1";
// 	$result = mysqli_query($conn,$stmt);
// 	$rowcount = mysqli_num_rows($result);
// 	echo $rowcount;
// }
function userlist(){
	global $conn;
	$user = array();
	$stmt = "SELECT * FROM users";
	$result = mysqli_query($conn,$stmt);
	if (mysqli_num_rows($result)) {
		 	while($row = mysqli_fetch_assoc($result)){
		 		$user[] = $row;
		 	}
		 	echo json_encode($user);
		 	// echo "<pre>";print_r($user);die;
		 	// return $user;
		} else {
			echo false;
		}
}
?>