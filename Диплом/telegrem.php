<?php
session_start();
$tel=$_POST['tel'];
$mysqli = new mysqli('localhost', 'root', 'root', 'droid shop');
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());


}
$error_fields=[];
	

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$i=1;
$chat_id="-773448718";
$token="5345312983:AAHBi-6BsV2-Gbz9vexZ0fYHoUZO1b9C-bg";
if($tel===''){
	
	$error_fields[]='tel';
}

if(!empty($error_fields)){
	$response=[
		"status" => false,
		"type" =>1,
		"message" =>'Введите мобильный телефон',
		"fields" => $error_fields

	];
	echo json_encode($response);
	die();
}
foreach ($_SESSION['cart'] as $key => $value) {

	$mas .="<b>".$value['description']."</b>".' '.'в количестве:'.$value['qty']."%0A";
};

$arr=array(
'Контактный телефон: ' =>$tel,
'Общая сумма заказа:' => $_SESSION['cart.sum'] ,
'Товар:' => $mas ,
'Общее количество товаров:'=>$_SESSION['cart.qty']
);
foreach ($arr as $key => $value) {

	$txt .="<b>".$key."</b>".' '.$value."%0A";
};
if($i=1){
$sendToTelegram=fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
}

	if($sendToTelegram && $i=1 )
{
	

	$response=[
		"status" => true,
		"message" => $_SESSION['cart']
		

	];
	echo json_encode($response);


}
else{
		$response=[
		"status" => false,
		"message" =>'Все плохо'
		

	];
	echo json_encode($response);
}
}



?>