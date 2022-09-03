<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/glavnaya.css">
	<title>Droid Shop</title>
</head>
<body id="body">
		<nav class="header">
			
			<div class="navigation">
				<ul>
					<li><a href="#section-1" class="link">Главная</a></li>
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
			<?php else:?>


			<a href="##" class="btn" id="open_pop_up">Регистрация</a>
			<img src="img/profil.png" alt="" style="width: 30px;height: 30px;">
			
			
				
			<?php endif;?>
				
		</div>
		</nav>
		<section class="banner section" id="section-1">
			<div class="textBx">
			<h2>Важна каждая деталь.</h2>
			<h3>Наш ответ мобильной моде!</h3>
			</div>
			<a href="cat.php" class="double-border-button" >Приступить к покупкам</a>
			
		</section>
		<div class="pop_up" id='pop_up'>
		<div class="tabs">
        <div class="tabs__nav">
            <button class="tabs__nav-btn  active" type="button" data-tab="#tab_1">Регистрация</button>
            <button class="tabs__nav-btn" type="button" data-tab="#tab_2">Авторизация</button>
           
        </div>
        <div class="tabs__content">
            <div class="tabs__item  active" id="tab_1">
                <p>Регистрация</p>
                 <p class="MS  none-reg"></p>
                
                <form  id="reg">
                	
                    <input type="text" name="name" required placeholder="Имя">
                    <input type="text"  name="email" required placeholder="Эл. почта">
                    <div class="password">
                    	<input type="password" name="password" id="password-input" required placeholder="Пароль" >
                    	<a href="#" class="password-control"></a>
                    </div>
                    
                    <input type="password"  name="password_check" required placeholder="Повторите пароль">
                    
                     
                    <div class="button">
                        <input type="submit" class="registr-btn" value="Зарегистрироваться"> 
                    </div>
                </form>
                <div class="item_close" id='item_close'>&#10006</div>
            </div>
            

            
            <div class="tabs__item"  id="tab_2">
                <p >Авторизация</p>
                <p class="MSG none" ></p>
                
                <form id="aut" >
                    
                    <input type="text" name="emailAut" placeholder="Эл. почта">
                     <div class="password">
                    <input type="password" name="passwordAut"  id="passwordCheck-input" placeholder="Пароль">
                    	<a href="#" class="passwordCheck-control"></a>
                    </div>
                    <div class="button" id="aut">
                        <input type="submit" class="login-btn" value="Авторизоваться"> 
                    </div>
                    
                </form>
                <div class="item_close" id='itemm_close'>&#10006</div>
            </div>
            </div>

           </div>
	</div>
		<section class="razdelenie"></section>
		<section class="assortments section" id="section-2">
			<div class="wrapper">
				<div class="assort">
					<img src="img/power.png" alt="">
					<img src="img/provod.png" alt="">
					<img src="img/mobile.png" alt="">
				</div>
				<div class="assort">
					
					<img src="img/steklo.png" alt="">
					<img src="img/airpods.png" alt="">
					
				</div>
				<div class="assort">
					<img src="img/kolonka.png" alt="">
					
					
				</div>

			
			</div>

			<div id="scrollTop" class="isShowBtn isShowBtn--hide ">
		<img src="img/Strelochka.png" alt="">

	
		
	</div>
			
		</section>
		<section class=" zx section" id="section-3">
			<div class="benefits">
				<div class="benefit">
					<img src="img/car.png" alt="">
					<p>Быстрая доставка</p>
				</div>
				<div class="benefit">
					<img src="img/geo.png" alt="">
					<p>Пункты самовывоза</p>
				</div>
				<div class="benefit">
					<img src="img/money.png" alt="">
					<p>Приемлемые цены</p>
				</div>
				
				<div class="benefit">
					<img src="img/garant.png" alt="">
					<p>Гарантия на товар</p>
				</div>
				<div class="benefit">
					<img src="img/corzina.png" alt="">
					<p>Большой ассортмент</p>
				</div>
				<div class="benefit">
					<img src="img/vozvr.png" alt="">
					<p>Возврат товара</p>
				</div>
			

			</div>
			<div class="ben">
				<div class="ben-left">
					<img src="img/Droid_shop.png" alt="" >
				</div>
				<div class="ben-right">
					<p>сеть магазинов премиальных аксессуаров и техники.</p>
					<p>Мы предлагаем широкий спектр товаров на любую модель телефона.</p>
				</div>
				
			</div>
			<div class="ben-bottom">
				<img src="img/apple.jpg" alt="">
				<img src="img/Xi.png" alt="">
				
				<img src="img/huawei.png" alt="">
				<img src="img/jbl.jpg" alt="">
				<img src="img/Sams.png" alt="">
				
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
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
			function onEntry(entry) {
  entry.forEach(change => {
    if (change.isIntersecting) {
     change.target.classList.add('element-show');
    } else{
    	
   change.target.classList.remove('element-show');
      	
    }
  });
}

let options = {
  threshold: [0.5] };
let observer1 = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.assort');

for (let elm of elements) {
  observer1.observe(elm);
}
		</script>
		<script>
			const scrollBtn=document.querySelector('.isShowBtn');
			window.onscroll=function showheader(){
				var header= document.querySelector('.header');
				if(window.pageYOffset >700){
					header.classList.add('header-fixed');
					scrollBtn.classList.remove('isShowBtn--hide');

				} else{
					header.classList.remove('header-fixed');
					scrollBtn.classList.add('isShowBtn--hide');
				}
				scrollBtn.onclick=()=>{
				window.scrollTo(0,0);
			};
			}
		</script>
		<script>
			const observer = new IntersectionObserver((entries) => {
				entries.forEach((entry)=>{
					 if (entry.isIntersecting){
					 	document.querySelectorAll('.link').forEach((link)=>{
					 	if(link.getAttribute('href').replace('#','')===entry.target.id){
						link.classList.add('link-active');

					 	}else{
					 		link.classList.remove('link-active');
					 	}
					 });
					 }

				});
		},{
				threshold: 0.6,
			});
			document.querySelectorAll('.section').forEach((section)=>
				 observer.observe(section),
			);
		</script>
  <script>
        const tabsBtn=document.querySelectorAll(".tabs__nav-btn");
        const tabsItems=document.querySelectorAll(".tabs__item");
      const openPopUp=document.getElementById('open_pop_up');

       const closeItem=document.querySelectorAll(".item_close");

     
      const popUp=document.getElementById('pop_up');
      const body=document.getElementById('body');
      openPopUp.addEventListener('click', function(e){
        e.preventDefault();
        let x=e.clientX-e.target.offsetLeft;
let y=e.clientY-e.target.offsetTop;
let ripples=document.createElement('span');
ripples.style.left=x+'px';
ripples.style.top=y+'px';
this.appendChild(ripples);
setTimeout(()=>{
ripples.remove();

},1000);
        popUp.classList.add('active');
         body.classList.add('scroll-hidden');
         tabsBtn.forEach(function(item){
            item.addEventListener("click",function(){
           let currentBtn=item;
           let tabId=currentBtn.getAttribute("data-tab");
           let currentTab=document.querySelector(tabId);
          if(!currentBtn.classList.contains('active')){
 tabsBtn.forEach(function(item){
            item.classList.remove('active');
           });

           tabsItems.forEach(function(item){
            item.classList.remove('active');
           });

           currentBtn.classList.add('active');
           currentTab.classList.add('active');
          }
          
               });
        });


      })
     closeItem.forEach(function(items){
       items.addEventListener("click",function(){
       	 document.querySelector('.tabs__nav-btn:nth-child(1)').click();
        popUp.classList.remove('active');
        body.classList.remove('scroll-hidden');
        $('#reg')[0].reset();
        $('#aut')[0].reset();
        $('.MSG').addClass('none');
        $('.MS').addClass('none-reg');
        $('input').removeClass('tabs__item-error');
        $('.password-control').removeClass('view');
         $('.passwordCheck-control').removeClass('view');

        });
        });
      
    </script>
   <script>
   	$(document).on('click', '.password-control', function(){
	if ($('#password-input').attr('type') == 'password'){
		$(this).addClass('view');
		$('#password-input').attr('type', 'text');
	} else {
		$(this).removeClass('view');
		$('#password-input').attr('type', 'password');
	}
	return false;
});
   </script>


  <script>
   	$(document).on('click', '.passwordCheck-control', function(){
	if ($('#passwordCheck-input').attr('type') == 'password'){
		$(this).addClass('view');
		$('#passwordCheck-input').attr('type', 'text');
	} else {
		$(this).removeClass('view');
		$('#passwordCheck-input').attr('type', 'password');
	}
	return false;
});
   </script>


  <script>
   	$('.registr-btn').click(function(e){
   		e.preventDefault();
   		$('input').removeClass('tabs__item-error');
   		
let email=$('input[name="email"]').val(),
   		 password=$('input[name="password"]').val(),
   		 password_check=$('input[name="password_check"]').val(),
   		 name=$('input[name="name"]').val();
   		 


   		 let formData= new FormData();
   		 formData.append('email', email);
   		 formData.append('password', password);
   		 formData.append('password_check', password_check);
   		 formData.append('name', name);
   		 

   		 $.ajax({
   		 	url:'registration.php',
   		 	type:'POST',
   		 	dataType:'json',
   		 	processData: false,
   		 	contentType: false,
   		 	cache:false,
   		 	data:formData,
			success:function(data){
				if(data.status){
   		 			$('.MS').removeClass('none-reg').text(data.message);
   		 		}
   		 		else{
   		 			if(data.type === 1){
					data.fields.forEach(function(field){
						$(`input[name="${field}"]`).addClass('tabs__item-error');
					});
   		 			}
   		 			$('.MS').removeClass('none-reg').text(data.message);
   		 		}
   		 		
   		 	}
   		 });

   		
   	});
   </script>

 


   <script>
   	$('.login-btn').click(function(e){
   		e.preventDefault();
   		$('input').removeClass('tabs__item-error');
   		
let email=$('input[name="emailAut"]').val(),
   		 password=$('input[name="passwordAut"]').val();

   		 $.ajax({
   		 	url:'aut.php',
   		 	type:'POST',
   		 	dataType:'json',
   		 	data:{
   		 		email:email,
   		 		password:password

   		 	},

   		 	success:function(data){
				if(data.status){
   		 			document.location.href='glavnya.php';
   		 			
   		 		}
   		 		else{
   		 			if(data.type === 1){
					data.fields.forEach(function(field){
						$(`input[name="${field}"]`).addClass('tabs__item-error');
					});
   		 			}
   		 			$('.MSG').removeClass('none').text(data.message);
   		 		}
   		 		
   		 	}
   		 });

   		
   	});
   </script>

		

</body>
</html>