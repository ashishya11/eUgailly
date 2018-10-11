<?php
include "../config/db.php";
function select($data){
	// echo "<pre>"; print_r($data);die;
	global $conn;
	$user = array();
	$stmt = "SELECT * FROM web_setiing";
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
	global $conn;
	$check = true;
		$uncheck = false;
		$id = $data['id'];
		$email = $data['email'];
		$telephone = $data['telephone'];
		$address = $data['address'];
		$desc = $data['desc'];
		$facebookurl = $data['facebook_url'];
		$youtubeurl = $data['youtube_url'];
		$likedinurl = $data['likedin_url'];
		$googleurl = $data['google_plus_url'];
		$user_id = "2";
		$time = date("Y-m-d H:i:s");
		if (isset($_FILES) && ($_FILES['logo']['error'] == 0)) {
			// echo "in";die;
			$temp = explode(".", $_FILES["logo"]["name"]);
			$newfilename = round(microtime(true)) . '.' . end($temp);
			$filetmpname = $_FILES['logo']['tmp_name'];
			$folder = "/var/www/html/eUgailly/admin/media/company-logo/";
			move_uploaded_file($filetmpname, $folder.$newfilename);
			echo $stmt = "UPDATE web_setiing SET address = '$address', modified_on = '$time', modified_by = '$user_id', logo = '$newfilename', description = '$desc', email = '$email', telephone = '$telephone', facebook_url = '$facebookurl', youtube_url = '$youtubeurl', likedin_url = '$likedinurl', google_plus_url = '$googleurl' WHERE id = '$id'";
			$result = mysqli_query($conn,$stmt);
			if(mysqli_affected_rows($conn)){
				return $check;
			}else{
				return $uncheck;
			}
		}else {
			// echo "out";die;
			echo $stmt = "UPDATE web_setiing SET address = '$address', modified_on = '$time', modified_by = '$user_id', description = '$desc', email = '$email', telephone = '$telephone', facebook_url = '$facebookurl', youtube_url = '$youtubeurl', likedin_url = '$likedinurl', google_plus_url = '$googleurl' WHERE id = '$id'";
			$result = mysqli_query($conn,$stmt);
			if(mysqli_affected_rows($conn)){
				return $check;
			}else{
				return $uncheck;
			}
		}
}
?>