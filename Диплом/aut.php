<?php
$email=$_POST['email'];
$password=$_POST['password'];
$error_fields=[];


$mysqli = new mysqli('localhost', 'root', 'root', 'droid shop');
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

session_start();
if($email===''){
	
	$error_fields[]='emailAut';
}
if($password===''){
	
	$error_fields[]='passwordAut';
}
if(!empty($error_fields)){
	$response=[
		"status" => false,
		"type" =>1,
		"message" =>'Проверьте правильность полей',
		"fields" => $error_fields

	];
	echo json_encode($response);
	die();
}
$check_user=mysqli_query($mysqli, "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");

if(mysqli_num_rows($check_user) > 0){
	
	while ($user = mysqli_fetch_assoc($check_user)) {
       $_SESSION["name"]=$user["username"];
        $_SESSION["admin"]=$user["admin"];
    }

	
	$response=[
		"status" => true
		
	];
	
	echo json_encode($response);
	
}
else{
	$response=[
		"status" => false,
		"message" =>'Неверный логин или пароль'
	];
	echo json_encode($response);
}
?>