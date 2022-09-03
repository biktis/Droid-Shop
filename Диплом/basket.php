<?php
session_start();
$mysqli = new mysqli('localhost', 'root', 'root', 'droid shop');
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());

}


	$result = $mysqli->query($mysqli, "SELECT * FROM `goods` WHERE `id`='$id'");
	$goods = mysqli_fetch_assoc($result);

	


if(isset($_GET['cart'])){
	switch ($_GET['cart']) {
		case'add':
		$id=isset($_GET['id']) ? (int)$_GET['id'] : 0;
		$result = $mysqli->query("SELECT * FROM `goods` WHERE `id`='$id'");
		$flag=true;
		$goods = mysqli_fetch_assoc($result);
		if(!$goods){
			echo json_encode(['code' =>'error','answer' => 'ERROR PR']);
		}
		else{
			

			if(isset($_SESSION['cart'][$goods['id']]))
			{
				if($_SESSION['cart'][$goods['id']]['qty'] < $_SESSION['cart'][$goods['id']]['amount'] ){
				$_SESSION['cart'][$goods['id']]['qty'] += 1;
				

				}
				else{
					$flag=false;
				}

				
				
			}
			else{

				$_SESSION['cart'][$goods['id']] = [
					'manufacturer' => $goods['manufacturer'],
					'description' => $goods['description'],
					'price' => $goods['price'],
					'amount' => $goods['amount'],
					'qty' => 1,
					
				];
				
				
	}
	
	if(!empty($_SESSION['cart.qty'])){
		if($flag){
			++$_SESSION['cart.qty'];
		}
		
	}
	else{
		$_SESSION['cart.qty']=1;
	}

	if(!empty($_SESSION['cart.sum'])){
		if($flag){
		$_SESSION['cart.sum']= $_SESSION['cart.sum'] + $goods['price'];
		}
	}
	else{
		$_SESSION['cart.sum']= $goods['price'];
	}
	//$_SESSION['cart.qty'] = !empty($_SESSION['cart.qty'])  ? ++$_SESSION['cart.qty'] : 1;
	//$_SESSION['cart.sum'] = !empty($_SESSION['cart.sum'])  ? $_SESSION['cart.sum'] + $goods['price'] : $goods['price'];


		ob_start();
		require('cart-modal.php');
		$cart=ob_get_clean();
			echo json_encode(['code' =>'ok','answer' => $cart]);
		}
		
		
		break;

		case 'show':
		require('cart-modal.php');
		break;

		case 'clear':
		if(!empty($_SESSION['cart'])){
			unset($_SESSION['cart']);
			unset($_SESSION['cart.sum']);
			unset($_SESSION['cart.qty']);
		}
		require('cart-modal.php');
		break;
	}
}

?>