<?php
$manufacturer=$_POST['manufacturer'];
$description=$_POST['description'];
$image=$_POST['image'];
$price=$_POST['price'];
$type=$_POST['type'];
$amount=$_POST['amount'];
$error_fields=[];

$mysqli = new mysqli('localhost', 'root', 'root', 'droid shop');
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());

} 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if($manufacturer==='' ){
	
	$error_fields[]='manufacturer';
}

	if($description==='' ){
	
	$error_fields[]='description';
}

	if($image==='' ){
	
	$error_fields[]='image';
}

	if($price==='' ){
	
	$error_fields[]='price';
}

	if($type==='' ){
	
	$error_fields[]='type';
}
	if($amount==='' ){
	
	$error_fields[]='amount';
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

$sql="INSERT INTO `goods` (manufacturer, description, price, image, type,amount) VALUES ('$manufacturer','$description','$price','$image','$type','$amount')";
if($mysqli->query($sql)===TRUE){
	$response=[
		"status" => true,
		"message" =>'Товар добавлен успешно'
	];
	echo json_encode($response);
}


else{
	$response=[
		"status" => false,
		"message" =>'Что-то пошло не так'
		

	];
	echo json_encode($response);
	
}
}
?>