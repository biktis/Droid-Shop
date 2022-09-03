<?php 
include"goods.php";
session_start();
//session_destroy();




 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/cat.css">
	<title>Catalog</title>
</head>
<body>

		<nav class="header">
			
			<div class="navigation">
				<ul>
					<li><a href="glavnya.php" class="link">Главная</a></li>
					<li><a href="#section-2"  class="link">Каталог</a></li>
					<li><a href="##" id="open_pop_up" class="link">Корзина <span class="kolich"> <?=$_SESSION['cart.qty'] ?? 0?></span> </a></li>
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


	
		
<div class="pop_up" id='pop_up'>
		<div class="tabs">
       
        <div class="tabs__content">
        	<div class="title-top">
        		<div class="title-basket">
        			<img src="img/basket.png" alt="" style="width: 40px;height: 40px;">
        			<p>Корзина</p>
        		</div>
        		<div class="item_close" id='item_close'>&#10006</div>
        	</div>
        	<div class="title-bottom">
        		
        	</div>
        	
           
         </div>

           </div>
	</div>

		<div class="content">
			<div class="filters">
				<div class="filter">

				<div class="option"><p>Категория товара</p></div>
				<div class="category"  >
				<select id="type" class="form-control">
				<option>Все</option>
                <option value="Мобильные чехлы" name="value" >Мобильные чехлы</option>
                <option>Защитные стекла</option>
                <option>Зарядные устройства</option>
                <option>Чехлы для наушников</option>
                <option>Power bank</option>
                <option>Портативные колонки</option>
              </select>
				</div>


              
              </div>
					<!--<div class="option"><p>Категория товара</p></div>
			<div class="category"  >
		    	<ul>
		    		<li> <input type="checkbox" id="mobile"> <label for="mobile">Мобильные чехлы</label></li>
		    		<li> <input type="checkbox" id="steklo"> <label for="steklo">Защитные стекла</label></li>
		    		<li> <input type="checkbox" id="power"> <label for="power">Зарядные устройства</label></li>
		    		<li> <input type="checkbox" id="f"> <label for="f">Чехлы для наушников</label></li>
		    		<li> <input type="checkbox" id="port"> <label for="port">Power bank</label></li>
		    		<li> <input type="checkbox" id="kolonka"> <label for="kolonka">Портативные колонки</label></li>
		    	</ul>
		    </div>-->
				
				
				<div class="filter">
					<div class="option"><p>Производитель</p></div>
					<div class="category"  >
	             	 <select id="manufacturer" class="form-control">
						<option>Все</option>
		                <option>Apple</option>
		                <option>Huawei</option>
		                <option>JBL</option>
		                <option>Samsung</option>
		                <option>Xiaomi</option>
		                <option>Android</option>
		                <option>Yandex</option>
              		</select>
		    </div>
				</div>

				<div class="filter">
					<div class="option"><p>Цена</p></div>
					<div class="category"  >
	             	
				

					<label class="filters-price_label">
						<span class="filters-price_text">от</span>
						<input type="number" step="50"  class="filters-price_input" id="input-1">
						<span class="filters-price_text">&#8381;</span>
					</label>
					<label class="filters-price_label">
						<span class="filters-price_text">до</span>
						<input type="number"  step="50"  class="filters-price_input" id="input-2">
						<span class="filters-price_text">&#8381;</span>
					</label>
				
		    </div>
				</div>
				
				
			</div>
			<div class="tovars">
				
				<div class="tovars-row">
					
				
				

				<?foreach ($products as $product):?>
					<div class="cartochka" data-id="<?=$product['id']?>" data-type="<?=$product['type']?>" data-manufacturer="<?=$product['manufacturer']?>" data-price="<?=$product['price']?>">
					<div class="cartochka-top">
					<img src="<?=$product['image']?>" alt="" style="width: 250px;height: 270px;">
					<?php if(isset($_SESSION["name"])):?>
					<div class="cartochka-hidden">
						<a  class="btn-hidden" href="?cartochka=add&id<?=$product['id']?>"  data-id="<?=$product['id']?>">Добавить в корзину</a>
					</div>
					<?php endif;?>
					
					</div>
					<div class="cartochka-bottom">
						<p class="title"><?=$product['description']?></p>
						<p><?=$product['price']?>р</p>
					</div>

				</div>
				<?endforeach?>
				</div>

					</div>
			</div>

		
				
				
				<!--<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/ch3.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title">Чехол на Mi Redmi</p>
						<p>230р</p>
					</div>
				</div>

			<<div class="cartochka">
					<div class="cartochka-top">
						<img src="img/ch2.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title">Чехол на iphone 11</p>
						<p>550р</p>
					</div>
				</div>

				<div class="tovars-row">
					
				
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/ch4.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title">Чехол на Honor 10</p>
						<p>150р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
						<img src="img/ch5.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title">Чехол на Samsung A51</p>
						<p>650р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/ch6.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title">Чехол на Samsung A21</p>
						<p>450р</p>
					</div>
				</div>

			</div>
			<div class="tovars-row">
					
				
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/st1.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title">Защитное стекло на Samsung A50</p>
						<p>199р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
						<img src="img/st2.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title">Защитное стекло на Iphone 11</p>
						<p>199р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/st3.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title">Защитное стекло на Mi Redmi</p>
						<p>120р</p>
					</div>
				</div>

			</div>

			<div class="tovars-row">
					
				
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/kol1.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title"> JBL Flip 5</p>
						<p>8500р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
						<img src="img/kol2.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title"> JBL Go 3</p>
						<p>4500р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/kol3.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title"> Яндекс.Станция lite</p>
						<p>6200р</p>
					</div>
				</div>

			</div>

				<div class="tovars-row">
					
				
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/kol4.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title"> JBL Clip 4</p>
						<p>5300р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
						<img src="img/p1.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title">Блок питания Apple</p>
						<p>3999р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/p2.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title"> Блок питания USB</p>
						<p>1500р</p>
					</div>
				</div>

			</div>
			<div class="tovars-row">
					
				
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/k1.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title"> Кабель Lightning</p>
						<p>750р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
						<img src="img/k2.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title"> Кабель Type C</p>
						<p>500р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/k3.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title"> MagSafe</p>
						<p>5000р</p>
					</div>
				</div>

			</div>
			<div class="tovars-row">
					
				
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/z2.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title"> Power bank 10000 mAh</p>
						<p>2700р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
						<img src="img/z1.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title"> Power bank 15000 mAh</p>
						<p>4500р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/z3.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title"> Power bank 5000 mAh</p>
						<p>1600р</p>
					</div>
				</div>

			</div>
			<div class="tovars-row">
					
				
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/n2.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title"> Чехол для AirDots </p>
						<p>400р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
						<img src="img/n3.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title">Чехол для AirPods pro</p>
						<p>620р</p>
					</div>
				</div>
				<div class="cartochka">
					<div class="cartochka-top">
					<img src="img/n1.jpg" alt="" style="width: 250px;height: 270px;">
					</div>
					<div class="cartochka-bottom">
						<p class="title"> Чехол для AirPods</p>
						<p>350р</p>
					</div>
				</div>
-->

			
			

		

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
		
			<!--<script>

			$(".cartochka").slice(0, 8).show();
			$("#op").on("click",function(){
			$(".cartochka:hidden").slice(0, 4).slideDown();
			$(".show.btns").css('justify-content','space-between');
			$('#scrt').css('display','flex');

				
			})
		</script>

		<script>

			$("#scrt").on("click",function(){
			$(".cartochka").slice(8, 24).slideUp(600);
			$('#scrt').css('display','none');
			$(".show.btns").css('justify-content','center');
				
			})
		</script>-->

<script>
	 const openPopUp=document.getElementById('open_pop_up');
	  const popUp=document.getElementById('pop_up');
	   const closeItem=document.querySelectorAll(".item_close");
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

    })

	    closeItem.forEach(function(items){
       items.addEventListener("click",function(){
       	
       popUp.classList.remove('active');
       

        });
        });


</script>


		<script>
			var userFilter, typeFilter,priceFilterMax,priceFilterMin;

			function updateFilters() {

				 $('.cartochka').hide().filter(function() {
    var
      self = $(this),
      result = true; 
       if (userFilter && (userFilter != 'Все')) {
      result = result && userFilter === self.data('type');
    }
     if (typeFilter && (typeFilter != 'Все')) {
      result = result && typeFilter === self.data('manufacturer');
    }

     if (priceFilterMin && (priceFilterMin != '')) {
      result = result && self.data('price')>=priceFilterMin;
    }

     if (priceFilterMax && (priceFilterMax != '')) {
      result = result && self.data('price')<=priceFilterMax;
    }
    
      return result;
  }).show();
			}

			$('#type').on('change', function() {
  userFilter = this.value;
  updateFilters();
});

			$('#manufacturer').on('change', function() {
  typeFilter = this.value;
  updateFilters();
});

			$('#input-2').on('change', function(){
				priceFilterMax=$('#input-2').val();
				 updateFilters();
			});
			$('#input-1').on('change', function(){
				priceFilterMin=$('#input-1').val();
				 updateFilters();
			});
		</script>

		<script>

			function showCart(cart){
			$('.title-bottom').html(cart);
			let kol=$('#kol').text() ? $('#kol').text() : 0;
			$('.kolich').text(kol);	
			}
			$('.btn-hidden').on('click',function(e){
				e.preventDefault();
				let id=$(this).data('id');
				 $.ajax({
   		 	url:'basket.php',
   		 	type:'GET',
   		 	dataType:'json',
   		 	data:{
   		 		cart:'add',
   		 		id:id
	 		
 		 	},

   		 	success:function(res){
				if(res.code=='ok'){
					
					showCart(res.answer);
				}
				else{
               alert(res.answer);
				}
   		 		
   		 		
   		 	},
   		 	error:function(){
   		 		alert('Error');
   		 	}
   		 });


			});

			$('#open_pop_up').on('click',function(e){
				e.preventDefault();
			
				 $.ajax({
   		 	url:'basket.php',
   		 	type:'GET',
   		 	
   		 	data:{cart:'show'},

   		 	success:function(res){
				
					showCart(res);
			 		 		
   		 	
   		 	},
   		 	error:function(){
   		 		alert('Error');
   		 	}
   		 });


			});

			$('.title-bottom').on('click','#clear-btn',function(){
				
			
				 $.ajax({
   		 	url:'basket.php',
   		 	type:'GET',
   		 	
   		 	data:{cart:'clear'},

   		 	success:function(res){
				
					showCart(res);
			 		 		
   		 	
   		 	},
   		 	error:function(){
   		 		alert('Error');
   		 	}
   		 });


			});

			$('.title-bottom').on('click','#issue',function(){
				
			let tel=$('input[name="tel"]').val();
			$.ajax({
   		 	url:'telegrem.php',
   		 	type:'POST',
   		 	dataType:'json',
   		 	
   		 	data:{tel:tel},

   		 	success:function(res){
				
					if(res.status){
   		 			console.log(res.message);
   		 			
   		 		}
   		 		else{
   		 			if(res.type === 1){
					console.log(res.message);
   		 			}
   		 			
   		 		}


			 		 		
   		 	
   		 	}
   		 	
   		 });


			});





		</script>
		

</body>
</html>