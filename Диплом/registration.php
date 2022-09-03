<?php 
$email=$_POST['email'];
$password=$_POST['password'];
$password_check=$_POST['password_check'];
$name=$_POST['name'];
$admin=0;


$error_fields=[];

$mysqli = new mysqli('localhost', 'root', 'root', 'droid shop');
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());

}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // The request is using the POST method

$check_login=mysqli_query($mysqli,"SELECT * FROM `users` WHERE `email`='$email'");
if(mysqli_num_rows($check_login)>0){
	$response=[
		"status" => false,
		"type" =>1,
		"message" =>'Такой пользователь уже существует',
		"fields" => ['email']

	];
	echo json_encode($response);
	die();

}


if($email==='' ){
	
	$error_fields[]='email';
}
if($name===''){
	
	$error_fields[]='name';
}
if($password===''){
	
	$error_fields[]='password';
}

if($password_check===''){
	
	$error_fields[]='password_check';
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


if($password === $password_check){
$sql="INSERT INTO `users` (admin, username, email, password) VALUES ('$admin','$name','$email','$password')";
if($mysqli->query($sql)===TRUE){
	$response=[
		"status" => true,
		"message" =>'Регистрация прошла успешно'
	];
	echo json_encode($response);
}
	

	
}
	

else{
	$response=[
		"status" => false,
		"message" =>'Пароли не совпадают'
		

	];
	echo json_encode($response);
	
}
}



?>