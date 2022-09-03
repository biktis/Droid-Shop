<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/contact.css">
	<title>Контакт</title>
</head>
<body>
	<nav class="header">
			
			<div class="navigation">
				<ul>
					<li><a href="glavnya.php" class="link">Главная</a></li>
					<li><a href="##"  class="link">Каталог</a></li>
					<li><a href="##"  class="link">Преимущества</a></li>
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
		<section class="markets">
			<div class="market" >
				<div class="item">
					<div class="item-top"><img src="img/mess.png" alt=""></div>
					<div class="item-bottom"><p>Онлайн-обслуживание</p></div>
					<div class="block-hiden">
					 <p>Для вопросов по возврату</p>
					 <p>обращаться по телефону</p>
					 	<p>8(917) 926-33-57</p>
					</div>
				</div>
				<div class="item">
					<div class="item-top"><img src="img/qrr.png" alt=""></div>
					<div class="item-bottom"><p>Оставьте отзыв</p></div>
					<div class="block-hiden"> 
					<img src="img/qr.png" alt="" style="height: 20vh;">
					</div>
				</div>
				<div class="item">
					<div class="item-top"><img src="img/metka.png" alt=""></div>
					<div class="item-bottom"><p>Адреса магазинов</p></div>
					<div class="block-hiden"> 
						<p><a href="#madagaskar">Перейти к адресам</a></p>
					
					</div>
				</div>
				<div class="item">
					<div class="item-top"><img src="img/gl.png" alt=""></div>
					<div class="item-bottom"><p>Социальные сети</p></div>
					<div class="block-hiden"> <a href="#socialMedia"><p>Подписаться на нас</p></a></div>
				</div>
			</div>
			<div class="workingMode" >
				<div class="magazine" id="madagaskar">
					<p class="nazvanie"  >Магазин на улице Льва Яшина </p>
					<p class="adress">Адрес:</p>
					<p>Тольятти, ул. Льва Яшина, д.14, ТЦ "Мадагаскар" </p>
					<p class="regim">Режим работы:</p>
					<p>Ежедневно с 10:00 до 22:00</p>
					<p class="tel">Телефон</p>
					<p>8(917) 962-44-57</p>
				</div>
				<div class="magazine" id="vega">
					<p class="nazvanie" >Магазин на улице Юбилейная </p>
					<p class="adress">Адрес:</p>
					<p>Тольятти, ул. Юбилейная, д.40, МТДЦ "Вега" </p>
					<p class="regim">Режим работы:</p>
					<p>Ежедневно с 09:00 до 22:00</p>
					<p class="tel">Телефон</p>
					<p>8(960) 843-33-24</p>
				</div>
				<div class="magazine" id="kapital">
					<p class="nazvanie" >Магазин на улице Дзержинского  </p>
					<p class="adress">Адрес:</p>
					<p>Тольятти, ул. Дзержинского, д.21, ТРК "Капитал" </p>
					<p class="regim">Режим работы:</p>
					<p>Ежедневно с 10:00 до 21:00</p>
					<p class="tel">Телефон</p>
					<p>8(960) 843-33-25</p>
				</div>
				<div class="magazine">
					<p class="nazvanie" id="vosxod">Магазин на улице Свердлова </p>
					<p class="adress">Адрес:</p>
					<p>Тольятти, ул. Свердлова, д.60, ТЦ "Восход" </p>
					<p class="regim">Режим работы:</p>
					<p>Ежедневно с 09:00 до 21:00</p>
					<p class="tel">Телефон</p>
					<p>8(917) 962-44-56</p>
				</div>
			</div>
			<div class="maps">
				<div class="map" id="mad"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa8058d16f84ce90ea493873aac8b31371fce1775fa9e29e8dc27f1ac18305f7d&amp;width=100%&amp;height=30vh&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
			
			</div>
			<div class="socialMedia" id="socialMedia">
				<img src="img/vk.png" alt="">
				<img src="img/inst.png" alt="">
				<a href="https://t.me/+WMLCXIFw3SpmMmQy"><img src="img/telega.png" alt=""></a>
			</div>
			
		</section>

		<footer>
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
	
		
	
</body>
</html>