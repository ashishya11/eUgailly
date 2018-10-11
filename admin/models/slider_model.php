<?php
include "../config/db.php";
function save($data){
	global $conn;
	$check = true;
	$uncheck = false;
	$temp = explode(".", $_FILES["images"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);
	$filetmpname = $_FILES['images']['tmp_name'];
	$folder = "/var/www/html/eUgailly/admin/media/slider/";
	// print_r($folder.$newfilename);die;
	move_uploaded_file($filetmpname, $folder.$newfilename);
	// echo"<pre>";print_r($filetmpname);echo"<pre>";print_r($_FILES);die;
	$title = $data['title'];
	$desc = $data['description'];
	$user_id = "1";
	$time = date("Y-m-d H:i:s");
	$stmt = "INSERT INTO slider (image, title, created_by, modified_by, modified_on, description) VALUES ('$newfilename','$title','$user_id','$user_id','$time','$desc')";
	// die;
	$result = mysqli_query($conn,$stmt);
	if(mysqli_affected_rows($conn)){
		return $check;
	}else{
		return $uncheck;
	}
}
function sliderlist(){
	global $conn;
	$user = array();
	$delete_status = "0";
	$stmt = "SELECT * FROM slider WHERE delete_status = '$delete_status'";
	$result = mysqli_query($conn,$stmt);
	if (mysqli_num_rows($result)) {
	 	while($row = mysqli_fetch_assoc($result)){
	 		$user[] = $row;
	 	}
	 	echo json_encode($user);
	 	// return $user;
	} else {
		echo false;
	}
}
function slider_list($data){
	global $conn;
	$user = array();
	$id = $data['id'];
	$stmt = "SELECT * FROM slider WHERE id = '$id'";
	$result = mysqli_query($conn,$stmt);
	if (mysqli_num_rows($result)) {
	 	while($row = mysqli_fetch_assoc($result)){
	 		$user[] = $row;
	 	}
	 	echo json_encode($user);
	 	// return $user;
	} else {
		echo false;
	}
}
function update($data){
	// echo "<pre>"; print_r($_FILES);die;
	global $conn;
	$check = true;
	$uncheck = false;
	$id = $data['slider_id'];
	$title = $data['title'];
	$desc = $data['description'];
	$user_id = "1";
	$time = date("Y-m-d H:i:s");
	if (isset($_FILES) && ($_FILES['images']['error'] == 0)) {
		// echo "in";die;
		$temp = explode(".", $_FILES["images"]["name"]);
		$newfilename = round(microtime(true)) . '.' . end($temp);
		$filetmpname = $_FILES['images']['tmp_name'];
		$folder = "/var/www/html/eUgailly/admin/media/slider/";
		move_uploaded_file($filetmpname, $folder.$newfilename);
		$stmt = "UPDATE slider SET title = '$title', description = '$desc', image = '$newfilename', modified_on = '$time', modified_by = '$user_id' WHERE id = '$id'";
		$result = mysqli_query($conn,$stmt);
		if(mysqli_affected_rows($conn)){
			return $check;
		}else{
			return $uncheck;
		}
	}else {
		// echo "out";die;
		$stmt = "UPDATE slider SET title = '$title', description = '$desc', modified_on = '$time', modified_by = '$user_id' WHERE id = '$id'";
		$result = mysqli_query($conn,$stmt);
		if(mysqli_affected_rows($conn)){
			return $check;
		}else{
			return $uncheck;
		}
	}		
}
function status_update($data){
	// echo "<pre>"; print_r($data);die;
	global $conn;
	$id = $data['id'];
	$user_id = "2";
	$status = $data['status'];
	$time = date("Y-m-d H:i:s");
	$check = true;
	$uncheck = false;
	if ($status != 0) {
		$new_status = "0";
		$stmt = "UPDATE slider SET status = '$new_status', modified_on = '$time', modified_by = '$user_id' WHERE id = '$id'";
		$result = mysqli_query($conn,$stmt);
		if(mysqli_affected_rows($conn)){
			return $check;
		}else{
			return $uncheck;
		}
	} else {
		$new_status = "1";
		$stmt = "UPDATE slider SET status = '$new_status', modified_on = '$time', modified_by = '$user_id' WHERE id = '$id'";
		$result = mysqli_query($conn,$stmt);
		if(mysqli_affected_rows($conn)){
			return $check;
		}else{
			return $uncheck;
		}
	}
}
function delete($data){
	// echo "<pre>"; print_r($data);die;
	global $conn;
	$id = $data['id'];
	$user_id = "2";
	$delete_status = "1";
	$time = date("Y-m-d H:i:s");
	$check = true;
	$uncheck = false;
	$stmt = "UPDATE slider SET delete_status = '$delete_status', modified_on = '$time', modified_by = '$user_id' WHERE id = '$id'";
	$result = mysqli_query($conn,$stmt);
	if(mysqli_affected_rows($conn)){
		return $check;
	}else{
		return $uncheck;
	}
}
?>