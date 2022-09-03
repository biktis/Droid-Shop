
<div class="tabs__item  active" id="tab_1">
 
	
            	
            	
            	
            	<div class="titles-goods"> 

            	<?php if(!empty($_SESSION['cart'])): ?>        	
            	<div class="title-goods" id="qw">
            		<ul>
            			
            			<li>
            				<p>Описание</p>
            			</li>
            			<li>
            				<p>Цена</p>
            			</li>
            			<li>
            				<p>Количество</p>
            			</li>
            			
            		</ul>

            	</div>

            	<?php foreach($_SESSION['cart'] as $id => $item): ?>
            	<div class="title-goods">
            		<ul>
            			
            			<li>
            				<p><?=$item['description'] ?></p>
            			</li>
            			<li>
            				<p><?=$item['price'] ?></p>
            			</li>
            			<li>
            				<p><?=$item['qty'] ?></p>
            			</li>
            			
            		</ul>

            	</div>
            	
            <?php endforeach; ?>
           
             <div class="title-goods bottom">
             	<div class="title-goods-left">
                    <form >
                    <input type="tel" name="tel" maxlength="11" required="" placeholder="Моб. телефон">
                </form>
             	<p>Товаров:<span id="kol"><?=$_SESSION['cart.qty']?></span></p>
            	<p>Общая сумма:<?=$_SESSION['cart.sum']?>р</p>
             	</div>
             	<div class="title-goods-right">
                
             	<button type="button" id="clear-btn">Очистить корзину</button>
            	<button type="button"id="issue">Оформить доставку</button>
             	</div>
            	
            	

            </div>
            <?php else: ?>
            	<div class="title-goods">
            	<p>В корзине пока нет товаров</p>
            	</div>

            	
            <?php endif; ?>
 </div>
    </div>
             
            


           


