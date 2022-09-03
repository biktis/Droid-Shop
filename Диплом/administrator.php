<?php 
include"goods.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/admin.css">
	<title>admin</title>
</head>
<body>
	<nav class="header">
			
			<div class="navigation">
				<ul>
					<li><a href="##" class="link">Панель администратора</a></li>
					<li><a href="glavnya.php"  class="link">Главная</a></li>
				</ul>
			</div>
			<div class="registration">
				
			<?php
				if(isset($_SESSION["name"])):
				  ?>
				  <a href="##"> <?=$_SESSION["name"]?></a>
				  <a href="##" class="btn" >|</a>

			<a href="logout.php" class="btn" >Выйти</a>
			<?php endif;?>
				
		</div>
		</nav>

		<div class="contents">
			<div class="panel">
				<div class="panel-item active" data-tab="#tab-1"><p>Добавление товара</p></div>
				<div class="panel-item" data-tab="#tab-2"><p>Показ ассортимента</p></div>
				<div class="panel-item " data-tab="#tab-3"><p>Удаление товара</p></div>
				<div class="panel-item " data-tab="#tab-4"><p>Изменение количества</p></div>
				
			</div>
			<div class="panels-info">
				<div class="panel-info active" id="tab-1">
				<div class="title">
					<p>Добавить новый товар</p>
					<p class="MS  none-add"></p>
				</div>
				<div class="info">
					 <form id="add"  >
                	
                    <input type="text" name="manufacturer" required placeholder="Производитель">
                    <input type="text"  name="description" required placeholder="Описание">
                     <input type="text"  name="image" required placeholder="img/название фото ">
                     <input type="text"  name="price" required placeholder="Цена">
                     <input type="text"  name="type" required placeholder="Тип товара">
                      <input type="text"  name="amountAdd" required placeholder="Кол-во товара">
                   
                    <div class="button">
                        <input type="submit" class="add-btn" id="add-btn" value="Добавить"> 
                    </div>
                </form>
				</div>
				</div>
				<div class="panel-info" id="tab-2">
				<div class="title">
					<p>Показать весь ассортимент</p>
					
				</div>
				<div class="info" id="zag">
					<div class="info-tab"><p>id</p></div>
					<div class="info-tab"><p>Кол-во</p></div>
					<div class="info-tab"><p>Произ-тель</p></div>
					<div class="info-tab"><p>Описание</p></div>
					<div class="info-tab"><p>Цена</p></div>
					<div class="info-tab"><p>Фото</p></div>
					<div class="info-tab"><p>Тип товара</p></div>


				</div>
				<div class="infos" id="scroll">
				<?foreach ($products as $product):?>
				<div class="info" >
					
					<div class="info-tab"><p><?=$product['id']?></p></div>
					<div class="info-tab"><p><?=$product['amount']?></p></div>
					<div class="info-tab"><p><?=$product['manufacturer']?></p></div>
					<div class="info-tab"><p><?=$product['description']?></p></div>
					<div class="info-tab"><p><?=$product['price']?></p></div>
					<div class="info-tab"><p><?=$product['image']?></p></div>
					<div class="info-tab"><p><?=$product['type']?></p></div>

					
					
				</div>

				<?endforeach?>
				</div>
				</div>

				<div class="panel-info" id="tab-3">
				<div class="title">
					<p>Удалить товар</p>
					<p class="MSG  none-delete"></p>
				</div>
				<div class="info">
					 <form id="delete" >
                	
                    <input type="number" min="1" name="id" required placeholder="Введите id товара">
                    <div class="button">
                        <input type="submit" class="add-btn" id="delete-btn" value="Удалить"> 
                    </div>
                </form>
				</div>
				</div>

				<div class="panel-info " id="tab-4">
				<div class="title">
					<p>Изменить количество товара</p>
					<p class="MSGG  none-change"></p>
				</div>
				<div class="info">
					 <form id="remove"  >
                	
                    <input type="text" name="idCh" required placeholder="Введите id">
                     <input type="text" name="amount" required placeholder="Введите кол-во товара">
                   
                   <div class="button">
                        <input type="submit" class="add-btn" id="remove-btn" value="Изменить"> 
                    </div>
                </form>
				</div>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		  <script>
   		$('#add-btn').click(function(e){
   		e.preventDefault();
   		
   		
		let manufacturer=$('input[name="manufacturer"]').val(),
   		 description=$('input[name="description"]').val(),
   		 image=$('input[name="image"]').val(),
   		 price=$('input[name="price"]').val(),
   		 type=$('input[name="type"]').val(),
   		  amount=$('input[name="amountAdd"]').val();

   		 


   		 let forMData= new FormData();
   		 forMData.append('manufacturer', manufacturer);
   		 forMData.append('description', description);
   		 forMData.append('image', image);
   		 forMData.append('price', price);
   		 forMData.append('type', type);
   		  forMData.append('amount',amount);
   		 

   		 $.ajax({
   		 	url:'addGoods.php',
   		 	type:'POST',
   		 	dataType:'json',
   		 	processData: false,
   		 	contentType: false,
   		 	cache:false,
   		 	data:forMData,
			success:function(data){
				if(data.status){
   		 			$('.MS').removeClass('none-add').text(data.message);
   		 		}
   		 		else{
   		 			
   		 			$('.MS').removeClass('none-add').text(data.message);
   		 		}
   		 		
   		 	}
   		 });

   		
   	});
   </script>

   <script>
   		$('#delete-btn').click(function(e){
   		e.preventDefault();
   		$('.MSG').addClass('none-delete');
 		let id=$('input[name="id"]').val();
   		 $.ajax({
   		 	url:'delete.php',
   		 	type:'POST',
   		 	dataType:'json',
   		 	data:{
   		 		id:id
	 		
 		 	},

   		 	success:function(data){
				if(data.status){
   		 			$('.MSG').removeClass('none-delete').text(data.message);
   		 			
   		 		}

   		 		else{
   		 			
   		 			$('.MSG').removeClass('none-delete').text(data.message);
   		 		}
   		 		
   		 		
   		 	}
   		 });

   	});
   </script>

    <script>
   		$('#remove-btn').click(function(e){
   		e.preventDefault();
   		
 		let id=$('input[name="idCh"]').val(),
 				amount=$('input[name="amount"]').val();
   		 $.ajax({
   		 	url:'change.php',
   		 	type:'POST',
   		 	dataType:'json',
   		 	data:{
   		 		id:id,
   		 		amount:amount
	 		
 		 	},

   		 	success:function(data){
				if(data.status){
   		 			$('.MSGG').removeClass('none-change').text(data.message);
   		 			
   		 		}

   		 		else{
   		 			
   		 			$('.MSGG').removeClass('none-change').text(data.message);
   		 		}
   		 		
   		 		
   		 	}
   		 });

   	});
   </script>

   <script>
   	 const tabsBtn=document.querySelectorAll(".panel-item");
   	  const tabsItems=document.querySelectorAll(".panel-info");
   	  const message=document.querySelector(".MSG");
   	   const messag=document.querySelector(".MS");
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
           message.classList.add('none-delete');
            messag.classList.add('none-add');
            $('#add')[0].reset();
            $('#delete')[0].reset();
          }
          
               });
        });

   </script>
</body>
</html>