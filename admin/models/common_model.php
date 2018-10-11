<?php
session_start();
include "../config/db.php";
function login($data){
	global $conn;
	$email = $data['email'];
	$pass = $data['passcode'];
	$stmt = "SELECT * FROM admin WHERE email = '$email' AND passcode = '$pass'";
	$result = mysqli_query($conn,$stmt);
	if (mysqli_num_rows($result) == 1) {
		if (isset($data['checkbox']) && !empty($data['checkbox'])) {
			setcookie('email',$email, time() + (86400 * 30), "/");
			setcookie('pass',$pass, time() + (86400 * 30), "/");
		}
		while ($r = mysqli_fetch_assoc($result)) {
			$_SESSION["admin"] = "1";
			$_SESSION["email"] = $r['email'];
			$_SESSION["name"] = $r['name'];
		}
		echo(true);
	}else {
		echo(false);
	}
}
?>