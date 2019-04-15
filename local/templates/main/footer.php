
<footer class="footer-main">
	<div class="container">
		<div class="footer-main-content clearfix">
			<div class="footer-menu">
				<div class="table">
					<div class="table-cell">
						<div class="title">Шины</div>
						<ul>
							<li><a href="#">Быстрый подбор шин</a></li>
							<li><a href="#">Каталог шин</a></li>
							<li><a href="#">Хранение шин</a></li>
							<li><a href="#">Онлайн запись на шиномонтаж</a></li>
							<li><a href="#">Шинный калькулятор</a></li>
							<li><a href="#">Распродажа шин</a></li>
						</ul>
					</div>
					<div class="table-cell">
						<div class="title">Диски</div>
						<ul>
							<li><a href="#">Быстрый подбор дисков</a></li>
							<li><a href="#">Каталог дисков</a></li>
							<li><a href="#">Правила примерки и возврата дисков</a></li>
						</ul>
					</div>
					<div class="table-cell">
						<div class="title">Покупателю</div>
						<ul>
							<li><a href="#">Как оформить заказ</a></li>
							<li><a href="#">Оплата и доставка</a></li>
							<li><a href="#">Гарантии</a></li>
							<li><a href="#">Обмен и возврат</a></li>
							<li><a href="#">Статус заказа</a></li>
							<li><a href="#">Для оптовиков</a></li>
							<li><a href="#">Договор оферты</a></li>
						</ul>
					</div>
					<div class="table-cell">
						<div class="title">О компании</div>
						<ul>
							<li><a href="#">С нами удобно</a></li>
							<li><a href="#">Контакты</a></li>
							<li><a href="#">Конфиденциальность</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="footer-contacts">
				<div class="title">Связаться с нами</div>
				<div class="block">
					<div class="schedule">Екатеринбург с 9:00 до 18:00</div>
					<div class="phone">
						<a href="tel:88007005030">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
								   "AREA_FILE_SHOW" => "file",
								   "PATH" => "/local/templates/.default/include_areas/tel.php",
								   "EDIT_TEMPLATE" => ""
								   ),
								   false
							);?></a>
					</div>
				</div>
				<div class="block">
					<a href="#" data-fancybox data-src="#callback" class="btn btn-dark">Заказать звонок</a>
				</div>
				<div class="block">
					<div class="social">
						<a href="#" class="item-1">vk</a>
						<a href="#" class="item-2">twitter</a>
						<a href="#" class="item-3">ok</a>
					</div>
				</div>
			</div>
		</div><!-- /.footer-main-content -->

		<div class="footer-main-bottom">
			<div class="copy">
				<span>&copy; 2017 Berikolesa.ru</span> - интернет-магазин шин и дисков
			</div>
			<div class="create">
				<a href="https://webtu.ru"><img src="/local/templates/.default/images/webtu.png" alt=""></a>
			</div>
			<div class="footer-card">
				Мы принимаем: 
				<img src="/local/templates/.default/images/visa.png" alt="">
				<img src="/local/templates/.default/images/mastercard.png" alt="">
				<img src="/local/templates/.default/images/paykeeper.png" alt="">
			</div>
		</div><!-- /.footer-main-bottom -->
	</div>
</footer>

<!--popup.html-->
<div class="box-overlay"></div>

<div id="search-popup" class="popup search-popup">
	<div class="search-popup-header">
		<div class="title">Поиск по типоразмеру</div>
		<div class="subtitle">Задать ширину/высоту профиля/диаметр шины</div>
	</div>
	<form action="#" class="search-popup-content">
		<div class="search-popup-content-input">
			<div class="size size-1">
				<select name="" id="">
					<option value="">205</option>
					<option value="">255</option>
					<option value="">305</option>
				</select>	
				<div class="text">Ширина</div>
			</div>
			<div class="size size-2">
				<select name="" id="">
					<option value="">55</option>
					<option value="">60</option>
					<option value="">65</option>
				</select>
				<div class="text">Высота</div>
			</div>
			<div class="size size-3">
				<select name="" id="">
					<option value="">Все</option>
					<option value="">Все</option>
					<option value="">Все</option>
				</select>
				<div class="text">Диаметр</div>
			</div>
		</div>
		<div class="search-popup-content-value">
			<input type="submit" value="Подобрать шины" class="btn btn-middle">
		</div>
	</form>
</div><!-- /.search-popup -->

<div id="callback" class="popup callback-popup">
	<div class="popup-header">
		<div class="title">Обратный звонок</div>
		<div class="subtitle">Оставьте номер, мы Вам перезвоним</div>
	</div>
	<form action="#">
		<div class="form-group">
			<div class="form-group-label">Ваше имя</div>
			<div class="form-group-input">
				<input type="text">
			</div>
		</div>
		<div class="form-group">
			<div class="form-group-label">Телефон</div>
			<div class="form-group-input">
				<input type="tel">
			</div>
		</div>
		<div class="form-group">
			<div class="form-group-label">Город</div>
			<div class="form-group-input">
				<input type="text">
			</div>
		</div>
		<div class="form-group">
			<img src="/local/templates/.default/images/captcha.jpg" alt="">
		</div>
		<div class="form-group">
			<div class="has-input">
				<input type="checkbox" id="agreements-1">
				<label for="agreements-1">
					<span class="input-style"></span>
					<span class="input-text">Настоящим подтверждаю, что я ознакомлен и согласен с условиями политики конфиденциальности <a href="#" class="see-more" target="_blank">Узнать больше</a></span>
				</label>	
			</div>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-3" value="Заказать звонок">
		</div>
	</form>
</div><!-- /.callback-popup -->

<div id="buy-popup" class="popup buy-popup">
	<div class="popup-header">
		<div class="title">Вы только что добавили</div>
	</div>
	<div class="cart-product clearfix">
		<div class="cart-product-images table-cell">
			<div class="product-sale icon">-30%</div>
			<a href="product.php"><img src="/local/templates/.default/images/product-main.jpg" alt=""></a>
		</div>
		<div class="cart-product-info table-cell">
			<div class="art">Код: ПИР901274</div>
			<div class="cart-product-title">
				<a href="product.php">Continental Conti Premium Contact 5 205/55 R16 91V</a>
			</div>
			<div class="available">В наличии <span>>4 шт</span></div>
			<div class="product-delivery"><span>Получение через 10 дней</span> <img src="/local/templates/.default/images/delivery-icons/delivery-1.png" alt=""></div>
		</div>
		<div class="cart-product-price table-cell">
			<div class="price-old">4 290 p</div>
			<div class="price">3 830 p</div>
		</div>
		<div class="table-cell">
			<div class="numberbox">
				 <button class="dec"><span>−</span></button>
				 <input type="text" value="4">
				 <button class="inc"><span>+</span></button>
			</div>
		</div>
		<div class="cart-product-price-result table-cell">
			<div class="price">15 320 p</div>
		</div>
		<div class="cart-product-remove">&times;</div>
	</div><!-- /.cart-product -->
	<div class="buy-popup-btn clearfix">
		<div class="left"><a href="#" class="btn btn-gray-2">Продолжить покупки</a></div>
		<div class="right"><a href="#" class="btn">Перейти в корзину</a></div>
	</div>
</div><!-- /.buy-popup -->

<div id="signed-popup" class="popup signed-popup">
	<div class="popup-block">
		<div class="title">Вы записались на шиномонтаж</div>
		<div class="subtitle">на 02.06.2017 в 11:00</div>
	</div>
	<div class="popup-block">
		<address>Бокс №1, ул. Карьерная, д. 2А</address>
	</div>
	<div class="popup-block">
		<a href="#" data-fancybox-close class="btn btn-3">Ok</a>
	</div>
</div><!-- /.signed-popup -->

<div id="make-popup" class="popup make-popup">
	<div class="popup-header">
		<div class="title">запись на шиномотнаж</div>
		<div class="subtitle">Вы записываетесь на 02.06.2017 в 11:00</div>
	</div>
	<form action="#">
		<div class="form-group">
			<div class="form-group-label">ФИО</div>
			<div class="form-group-input">
				<input type="text">
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="item item-1">
					<div class="form-group-label">Телефон</div>
					<div class="form-group-input">
						<input type="tel">
					</div>
				</div>
				<div class="item item-1">
					<div class="form-group-label">E-mail</div>
					<div class="form-group-input">
						<input type="email">
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="item item-1">
					<div class="form-group-label">Марка автомобиля</div>
					<div class="form-group-input">
						<input type="text">
					</div>
				</div>
				<div class="item item-1">
					<div class="row">
						<div class="item item-1">
							<div class="form-group-label">Гос номер</div>
							<div class="form-group-input">
								<input type="text">
							</div>
						</div>
						<div class="item item-1">
							<div class="form-group-label">Диаметр</div>
							<div class="form-group-input">
								<select name="" id="">
									<option value="">R16</option>
									<option value="">R16</option>
									<option value="">R16</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="form-group-label">Сообщение</div>
			<div class="form-group-input">
				<textarea></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="has-input">
				<input type="checkbox" id="agreements">
				<label for="agreements">
					<span class="input-style"></span>
					<span class="input-text">Настоящим подтверждаю, что я ознакомлен и согласен с условиями политики конфиденциальности <a href="#" class="see-more" target="_blank">Узнать больше</a></span>
				</label>	
			</div>
		</div>
		<div class="form-group clearfix">
			<div class="left">
				<img src="/local/templates/.default/images/captcha-1.jpg" alt="">
			</div>
			<div class="right">
				<input type="submit" class="btn" value="Отправить">
			</div>
		</div>
	</form>
</div><!-- /.make-popup -->

<div id="cancel-popup" class="popup cancel-popup">
	<div class="popup-block">
		<div class="title">Ваш заказ №7546 отменен</div>
	</div>
	<div class="popup-block">
		<a href="#" data-fancybox-close class="btn btn-3">Ok</a>
	</div>
</div><!-- /.cancel-popup -->

<div id="take-popup" class="popup take-popup">
	<div class="popup-header">
		<div class="title">Забрать шины с хранения</div>
	</div>
	<p>
		<strong>Для того что бы забрать автошины с хранения Вам необходимо знать номер и дату договора хранения.</strong> Забрать автошины с хранения могут только те лица, которые указаны в договоре, либо по доверенности. 
	</p>
	<p>
		Если Вам необходим последующий шиномонтаж в сервисе Лион, то Вы можете воспользоваться <a href="#">онлайн записью</a> на шиномонтаж, указав в комментариях номер и дату договора хранения, либо заказать обратный звонок или позвонить по телефону <strong>3-82-42-21, 204-77-88</strong>
	</p>
	<p>
		Если Вы забираете автошины с хранения без шиномонтажа в сервисе Лион Вам необходимо позвонить по телефону <strong>3-82-42-21, 204-77-88</strong> и сообщить номер и дату договора хранения, и дату самовывоза.
	</p>
</div><!-- /.take-popup -->

<div id="status-popup" class="popup status-popup">
	<div class="popup-header">
		<div class="title">Статус заказа</div>
	</div>
	<form action="#">
		<div class="form-group">
			<div class="form-group-label">Номер заказа</div>
			<div class="form-group-input">
				<input type="text">
			</div>
		</div>
		<div class="form-group">
			<div class="form-group-label">Мобильный телефон</div>
			<div class="form-group-input">
				<input type="tel">
			</div>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-3" value="Проверить">
		</div>
	</form>
</div><!-- /.status-popup -->
</body>
</html>
