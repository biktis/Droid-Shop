<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/test.css">
	<title>Document</title>
</head>
<body>
	<div class="wrapper">
		<nav class="header">
			<div class="navigation">
				<ul>
					<li><a href="glavnya.php" class="link">Главная</a></li>
					<li><a href="#section-2"  class="link">Каталог</a></li>
					<li><a href="#section-3"  class="link">Преимущества </a></li>
					<li><a href="test.php" class="link">Доставка</a></li>
					<li><a href="contaaact.php"  class="link">Контакты</a></li>
				</ul>
			</div>
				<div class="registration">
				
						
		<?php if(isset($_SESSION["name"])):?>
				  <a href="##"> <?=$_SESSION["name"]?></a>
				  <a href="##" class="btn" >|</a>
			 <?php if($_SESSION["admin"]):?>
			<a href="administrator.php" class="btn" >Админ. панель</a>
			 
			 <?php else:?>
			<a href="logout.php" class="btn" >Выйти</a>
			<?php endif;?>
		<?php endif;?>
				
		</div>
		</nav>
		<main class="main">
			<div class="mains">
			<div class="description">
				<p>- Время — главный приоритет. Доставим точно по графику;</p>
				<p>- В целях вашей безопасности оплата осуществляется после получения товара</p>
				<p>- Мы обеспечиваем полный контроль за процессом доставки.</p>
				<p>- Мы усилили мероприятия по дезинфекции, провели обучение и выдали сотрудникам средства персональной защиты;</p>
				<p>- Мы тщательно следим за самочувствием всех наших сотрудников;</p>
				<p>Наш интернет-магазин осуществляет доставку любой купленной у нас техники. Приём заказов осуществляется ежедневно с понедельника по воскресенье с 10:00 до 21:00 (время московское). </p>
			</div>

			<div class="item">
				<div class="item-top">
					<div class="item-left">
					<img src="img/cars.png" alt="">
					<p>Стоимость доставки</p>
				</div>
				<div class="item-right">
					<img src="img/raz.png" alt="" class="opening" id="stoimost">
				</div>
				</div>
				<div class="item-bottom" id="botST">
					<div class="cost">
						<div class="cost-row first left"><p>Районы доставки</p></div>
						<div class="cost-row left"><p>Автозаводской </p></div>
						<div class="cost-row left"><p>Центральный </p></div>
						<div class="cost-row left"><p>Комсомольский</p></div>
						
					</div>
					<div class="cost">
						<div class="cost-row first"><p>Заказ до 1000р</p></div>
						<div class="cost-row"><p>99р</p></div>
						<div class="cost-row"><p>149р</p></div>
						<div class="cost-row"><p>199р</p></div>
					
					</div>
					<div class="cost">
						<div class="cost-row first"><p>Заказ от 1000р</p></div>
						<div class="cost-row"><p>Бесплатно</p></div>
						<div class="cost-row"><p>99р</p></div>
						<div class="cost-row"><p>99р</p></div>
					</div>
					<div class="cost">
					<div class="cost-row first"><p>Заказ от 2000р</p></div>
						<div class="cost-row"><p>Бесплатно</p></div>
						<div class="cost-row"><p>Бесплатно</p></div>
						<div class="cost-row"><p>Бесплатно</p></div>
					</div>
				</div>
				</div>



				<div class="item">
				<div class="item-top">
					<div class="item-left">
					<img src="img/tim.png" alt="">
					<p>Временные интервалы</p>
				</div>
				<div class="item-right">
					<img src="img/raz.png" alt="" class="opening" id="time">
				</div>
				</div>
				<div class="item-bottom" id="botTim" >
					<div class="cost">
						<div class="cost-row first left"><p>Интервалы доставки</p></div>
						<div class="cost-row left"><p>10:00 - 21:00</p></div>
						<div class="cost-row left"><p>10:00 - 15:00</p></div>
						<div class="cost-row left"><p>15:00 - 19:00</p></div>
						<div class="cost-row left"><p>По договренности</p></div>
						
					</div>
					<div class="cost">
						<div class="cost-row first"><p>Стоимость доплаты</p></div>
						<div class="cost-row"><p>Бесплатно</p></div>
						<div class="cost-row"><p>49р</p></div>
						<div class="cost-row"><p>79р</p></div>
						<div class="cost-row"><p>99р</p></div>
					
					
					</div>
				</div>
				</div>

				<div class="item">
				<div class="item-top">
					<div class="item-left">
					<img src="img/st.png" alt="">
					<p>Способ оплаты</p>
				</div>
				<div class="item-right">
					<img src="img/raz.png" alt="" class="opening" id="sposob">
				</div>
				</div>
				<div class="item-bottom" id="botSp" >
					<div class="cost" id="oplata">
						<div class="cost-row oplata"><p>- Оплата картой </p></div>
						<div class="cost-row oplata"><p>- Оплата наличными</p></div>
						<div class="cost-row oplata"><p>- Денежный перевод</p></div>
						<div class="cost-row oplata"><p>- Подарочный сертификат</p></div>
						
					</div>
					
				</div>
				</div>
		<div class="txt">
			<p>Прежде чем принять заказ, проверьте полноту комплектации товаров и убедитесь в отсутствии механических повреждений. Сотрудники службы доставки всегда помогут Вам в этом. Все документы, сопровождающие покупку, Вы получите вместе с товаром. После подписания бланка заказа или накладной транспортной компании, осуществляющей доставку, претензии по комплектности и внешнему виду не принимаются.</p>
			<p>В соответствии с законом «О защите прав потребителей» РФ Вы можете вернуть или обменять товар ненадлежащего и надлежащего качества в течение оговоренных законом сроков.</p>
		</div>
		</div>
		
		</main>
		<footer class="footer"> 
			<div class="topmenu">
			<element>
				<ul>
					<li>Главная</li>
					<li>Каталог</li>
					<li>Преимущества</li>
				</ul>
			</element>
			<element>
				<ul>
					<li>Доставка</li>
				</ul>
			</element>
			<element>
				<ul>
					<li>Контакты</li>
					
				</ul>
			</element>
		</div>
		<div class="botmenu">
			<elemet>
				<ul>
					<li>Тольятти</li>
				</ul>
			</elemet>
			<elemet>
				<ul>
					<li>Пользовательское соглашение</li>
				</ul>
			</elemet>
			<elemet>
				<ul>
					<li>© 2018–2022  Droid Shop</li>
				</ul>
			</elemet>
			
		</div>

		</footer>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
			
	
	 	$(document).on('click', '#stoimost', function(){
	 		if ($('#botST').css("display") === 'none'){
	 			$('#botST').css('display','flex');
	 			$('#stoimost').attr("src","img/shevron.png");
	 		}
	 		else{
				$('#botST').hide(400);
				$('#stoimost').attr("src","img/raz.png");
	 			
	 		}

return false;
	});

	 	$(document).on('click', '#time', function(){
	 		if ($('#botTim').css("display") === 'none'){
	 			$('#botTim').css('display','flex');
	 			$('#time').attr("src","img/shevron.png");
	 		}
	 		else{
				$('#botTim').hide(400);
				$('#time').attr("src","img/raz.png");
	 			
	 		}
	 		return false;
	});

	 		$(document).on('click', '#sposob', function(){
	 		if ($('#botSp').css("display") === 'none'){
	 			$('#botSp').css('display','flex');
	 			$('#sposob').attr("src","img/shevron.png");
	 		}
	 		else{
				$('#botSp').hide(400);
				$('#sposob').attr("src","img/raz.png");
	 			
	 		}
	 		return false;
	});
</script>
</body>
</html>