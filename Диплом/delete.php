<?php
$id=$_POST['id'];
$error_fields=[];

$mysqli = new mysqli('localhost', 'root', 'root', 'droid shop');
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());

} 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


	if($id==='' ){
	
	$error_fields[]='id';
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

$delete_good="DELETE FROM `goods` WHERE `id`='$id'";
$result=mysqli_query($mysqli,$delete_good);
$result=$mysqli -> affected_rows;

if($result>0){
	$response=[
		"status" => true,
		"message" =>'Товар удален',
		"result" => $result
		
	];
	
	echo json_encode($response);
	
}
else
{
	$response=[
		"status" => false,
		"message" =>'Такого товара не существует',
		"result" => $result
		

	];
	echo json_encode($response);

	
}

}

?>