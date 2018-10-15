<?php
include "./admin/config/db.php";
function category(){
	// $category_Data=array();
	global $conn;
	$stmt = "SELECT * FROM category WHERE delete_status = '0'";
	$result = mysqli_query($conn,$stmt);
	if (mysqli_num_rows($result)) {
	 	while($row = mysqli_fetch_assoc($result)){
	 		$category_Data[] = $row;
	 	}
	 	// echo json_encode($category_Data);
	 	// print_r($category_Data);
	} else {
		echo false;
	}
}
function subcategory(){
	// $category_Data=array();
	global $conn;
	$stmt = "SELECT * FROM sub_category WHERE delete_status = '0'";
	$result = mysqli_query($conn,$stmt);
	if (mysqli_num_rows($result)) {
	 	while($row = mysqli_fetch_assoc($result)){
	 		$subcategory_Data[] = $row;
	 	}
	 	// echo json_encode($category_Data);
	 	// print_r($subcategory_Data);
	} else {
		echo false;
	}
}
function product(){
	// $category_Data=array();
	global $conn;
	$stmt = "SELECT * FROM product WHERE delete_status = '0'";
	$result = mysqli_query($conn,$stmt);
	if (mysqli_num_rows($result)) {
	 	while($row = mysqli_fetch_assoc($result)){
	 		$product_Data[] = $row;
	 	}
	 	// echo json_encode($category_Data);
	 	// print_r($product_Data);
	} else {
		echo false;
	}
}
function brand(){
	// $category_Data=array();
	global $conn;
	$stmt = "SELECT * FROM brand WHERE delete_status = '0'";
	$result = mysqli_query($conn,$stmt);
	if (mysqli_num_rows($result)) {
	 	while($row = mysqli_fetch_assoc($result)){
	 		$brand_data[] = $row;
	 	}
	 	// echo json_encode($category_Data);
	 	// print_r($brand_data);
	} else {
		echo false;
	}
}
function slider(){
	// $category_Data=array();
	global $conn;
	$stmt = "SELECT * FROM slider WHERE delete_status = '0'";
	$result = mysqli_query($conn,$stmt);
	if (mysqli_num_rows($result)) {
	 	while($row = mysqli_fetch_assoc($result)){
	 		$slider_data[] = $row;
	 	}
	 	// echo json_encode($category_Data);
	 	return $slider_data;
	} else {
		echo false;
	}
}

?>