<?php
$id=$_POST['id'];
$amount=$_POST['amount'];
$error_fields=[];

$mysqli = new mysqli('localhost', 'root', 'root', 'droid shop');
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());

} 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if($id==='' ){
	
	$error_fields[]='id';
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

$sql="UPDATE goods SET amount='$amount' WHERE `id`='$id'";
$result=mysqli_query($mysqli,$sql);
$res=$mysqli -> affected_rows;

if($res>0){
	$response=[
		"status" => true,
		"message" =>'Количество изменено',
		"result" => $res
		
	];
	
	echo json_encode($response);
	
}
else
{
	$response=[
		"status" => false,
		"message" =>'Такого товара не существует',
		"result" => $res
		

	];
	echo json_encode($response);

	
}

}

?>