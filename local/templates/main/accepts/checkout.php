<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<main class="content">
			<div class="container">
				<?php include ("include/breadcrumbs.html") ?>

				<h1>Оформление заказа</h1>

				<div class="order-content-wrap clearfix">
					<form action="#">
						<div class="order-content">
							<div class="content-block">
								<div class="cart-product clearfix">
									<div class="cart-product-images table-cell">
										<div class="product-sale icon">-30%</div>
										<a href="product.php"><img src="images/product-main.jpg" alt=""></a>
									</div>
									<div class="cart-product-info table-cell">
										<div class="art">Код: ПИР901274</div>
										<div class="cart-product-title">
											<a href="product.php">Continental Conti Premium Contact 5 205/55 R16 91V</a>
										</div>
										<div class="available">В наличии <span>&gt;4 шт</span></div>
										<div class="product-delivery"><span>Получение через 10 дней</span> <img src="images/delivery-icons/delivery-1.png" alt=""></div>
									</div>
									<div class="cart-product-price table-cell">
										<div class="cart-product-label">Цена за штуку</div>
										<div class="price price-order">3 830 p</div>
									</div>
									<div class="table-cell">
										<div class="cart-product-label">Кол-во</div>
										<input type="text" value="1" disabled class="input-disabled">
									</div>
									<div class="cart-product-price-result table-cell">
										<div class="cart-product-label">Стоимость</div>
										<div class="price">15 320 p</div>
									</div>
									<div class="cart-product-remove">×</div>
								</div><!-- /.cart-product -->
							</div><!-- /.content-block -->

							<div class="checkout-block">
								<div class="subtitle-main">Представьтесь</div>

								<div class="checkout-block-item">
									<div class="aligner">
										<div class="has-input">
											<input type="radio" name="radio" id="individual" checked>
											<label for="individual">
												<span class="input-style"></span>
												<span class="input-text">Физическое лицо</span>
											</label>	
										</div>
									</div>
									<div class="aligner">
										<div class="has-input">
											<input type="radio" name="radio" id="entity">
											<label for="entity">
												<span class="input-style"></span>
												<span class="input-text">Юридическое лицо</span>
											</label>	
										</div>
									</div>
								</div>
								
								<div class="checkout-block-dropdown js-individual">
									<div class="checkout-block-item">
										<div class="row">
											<div class="size-1">
												<div class="label">ФИО</div>
												<input type="text">
											</div>
											<div class="size-1">
												<div class="label">Номер телефона</div>
												<input type="tel" class="js-mask" placeholder="+7 (______) - _______ - _____ - _____">
											</div>
											<div class="size-1">
												<div class="label">E-mail</div>
												<input type="email">
											</div>
										</div>
									</div>
									<div class="checkout-block-item">
										<div class="row">
											<div class="size-1">
												<div class="label">Город</div>
												<input type="text">
											</div>
										</div>
									</div>
									<div class="checkout-block-item">
										<div class="label">Адрес доставки</div>
										<input type="text">
									</div>
								</div><!-- /.checkout-block-dropdown -->

								<div class="checkout-block-dropdown js-entity">
									<div class="checkout-block-item">
										<div class="row">
											<div class="size-1">
												<div class="label">ФИО</div>
												<input type="text">
											</div>
											<div class="size-1">
												<div class="label">Телефон</div>
												<input type="tel">
											</div>
											<div class="size-1">
												<div class="label">E-mail</div>
												<input type="email">
											</div>
										</div>
									</div>
									<div class="checkout-block-item">
										<div class="label">Наименование юр лица</div>
										<input type="text">
									</div>
									<div class="checkout-block-item">
										<div class="row">
											<div class="size-1">
												<div class="label">ИНН</div>
												<input type="text">
											</div>
											<div class="size-1">
												<div class="label">КПП</div>
												<input type="text">
											</div>
											<div class="size-1">
												<div class="label">Расчетный счет</div>
												<input type="text">
											</div>
										</div>
									</div>
									<div class="checkout-block-item">
										<div class="row">
											<div class="size-1">
												<div class="label">БИК</div>
												<input type="text">
											</div>
											<div class="size-1">
												<div class="label">Банк</div>
												<input type="text">
											</div>
											<div class="size-1">
												<div class="label">Корр счет</div>
												<input type="text">
											</div>
										</div>
									</div>
									<div class="checkout-block-item">
										<div class="label">Юридический адрес</div>
										<input type="text">
									</div>
									<div class="checkout-block-item">
										<div class="label">Фактический адрес</div>
										<input type="text">
									</div>
									<div class="checkout-block-item">
										<div class="row">
											<div class="size-1">
												<div class="label">Город</div>
												<input type="text">
											</div>
										</div>
									</div>
									<div class="checkout-block-item">
										<div class="label">Адрес доставки</div>
										<input type="text">
									</div>
								</div><!-- /.checkout-block-dropdown -->
							</div><!-- /.checkout-block -->

							<div class="checkout-block">
								<div class="subtitle-main">Оплата</div>

								<div class="checkout-radio-wrap row">
									<div class="checkout-radio">
										<input type="radio" name="payment" id="payment-1" checked>
										<label for="payment-1">
											<span class="images"><img src="images/payment-1.jpg" alt=""></span>
											<span class="title">Оплата картой при получении</span>
										</label>
									</div>

									<div class="checkout-radio">
										<input type="radio" name="payment" id="payment-2">
										<label for="payment-2">
											<span class="images"><img src="images/payment-2.jpg" alt=""></span>
											<span class="title">Оплата картой на сайте</span>
										</label>
									</div>

									<div class="checkout-radio">
										<input type="radio" name="payment" id="payment-3">
										<label for="payment-3">
											<span class="images"><img src="images/payment-3.jpg" alt=""></span>
											<span class="title">Оплата наличными<br> при получении</span>
										</label>
									</div>

									<div class="checkout-radio">
										<input type="radio" name="payment" id="payment-4">
										<label for="payment-4">
											<span class="images"><img src="images/payment-4.jpg" alt=""></span>
											<span class="title">Оплата через банк</span>
										</label>
									</div>
								</div><!-- /.checkout-radio-wrap -->
							</div><!-- /.checkout-block -->

							<div class="checkout-block">
								<div class="subtitle-main">Доставка</div>

								<div class="checkout-radio-wrap row">
									<div class="checkout-radio">
										<input type="radio" name="delivery" id="delivery-1">
										<label for="delivery-1">
											<span class="images"><img src="images/delivery-1.jpg" alt=""></span>
											<span class="title">Самовывоз</span>
											<span class="text">
												Самовывоз осуществляется по адресу:<br>
												127051, г. Название города,<br> 
												ул. Название улицы, д. 222
												127051, г. Название города,<br> 
												ул. Название улицы, д. 222
											</span>
										</label>
									</div>
									<div class="checkout-radio">
										<input type="radio" name="delivery" id="delivery-2">
										<label for="delivery-2">
											<span class="images"><img src="images/delivery-2.jpg" alt=""></span>
											<span class="title">Курьер</span>
											<span class="text">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Aenean euismod bibendum laoreet.
											</span>
										</label>
									</div>
									<div class="checkout-radio">
										<input type="radio" name="delivery" id="delivery-3">
										<label for="delivery-3">
											<span class="images"><img src="images/delivery-3.jpg" alt=""></span>
											<span class="title">Транспортной компанией</span>
											<span class="text">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Aenean euismod bibendum laoreet.
											</span>
										</label>
									</div>
								</div><!-- /.checkout-radio-wrap -->
							</div><!-- /.checkout-block -->

							<div class="checkout-block">
								<div class="label">Комментарий</div>
								<textarea></textarea>
							</div><!-- /.checkout-block -->

							<div class="checkout-block">
								<div class="has-input">
									<input type="checkbox" id="agreements-1">
									<label for="agreements-1">
										<span class="input-style"></span>
										<span class="input-text">Настоящим подтверждаю, что я ознакомлен и согласен с условиями политики конфиденциальности <a href="#" class="see-more" target="_blank">Узнать больше</a></span>
									</label>	
								</div>
							</div><!-- /.checkout-block -->

							<div class="checkout-block">
								<input type="submit" class="btn btn-3" value="Оформить заказ">
							</div><!-- /.checkout-block -->
						</div><!-- /.order-content -->

						<aside class="order-sidebar">
							<div class="order-sidebar-block">
								<div class="order-box">
									<div class="order-box-title">Ваш заказ</div>
									<div class="order-box-details">
										<div class="item">4 товара на: <span>15 320 р.</span></div>
										<div class="item">Доставка: <span>300  р.</span></div>
										<div class="item">Скидка: <span>100 р.</span></div>
									</div>
									<div class="order-box-text">
										Проверьте пожалуйста еще раз комплектацию Вашего заказа. При необходимости измените заказ.
									</div>
									<div class="order-box-block">
										<div class="order-box-result">
											Итого: <span>15 520 Р</span>
										</div>
									</div>
								</div>
							</div><!-- /.order-sidebar-block -->

							<div class="order-sidebar-block hidden-md">
								<div class="subtitle-main">Рекомендуем<br> с этим заказом</div>

								<div class="product-box">
									<div class="clearfix">
										<div class="product-box-img">
											<a href="product.php" class="img"><img src="images/product-4.jpg" alt=""></a>
											<div class="product-sale icon">-30%</div>
										</div>
										<div class="product-box-content">
											<div class="product-box-content-inner">
												<div class="title">
													<a href="product.php">Компрессор Goodyear GY-35L</a>
												</div>
												<div class="config">
													<div>Макс. давление: 7 Атм (кг/см2)</div>
													<div>Производительность: 35 л/мин</div>
													<div>Встроенный манометр: Да</div>
													<div>Напряжение: 12 В</div>
													<div>Вес: 2,2 кг</div>
													<div>Страна производитель: Китай</div>
												</div>
											</div>
											<div class="product-delivery"><span>Получение через 10 дней</span> <img src="images/delivery-icons/delivery-1.png" alt=""></div>
										</div>
										<div class="product-box-footer">
											<div class="product-box-header">
												<div class="art">Код: ПИР901274</div>
												<div class="count"><span>В наличии </span> &gt;4 шт</div>
											</div>
											<div class="product-price">
												<div class="price">3 830 p</div>
												<div class="price-old">4 290 p</div>
											</div>
											<div class="product-action clearfix">
												<div class="left">
													<a href="#" class="btn btn-small">Купить</a>
												</div>
												<div class="right">
													<a href="#" rel="tooltip" title="Добавить в избранное" class="product-btn product-favorite"><span>В избранное</span></a>
													<a href="#" rel="tooltip" title="Добавить в сравнение" class="product-btn product-compare"><span>Сравнить</span></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="text-center">
									<a href="#" class="btn btn-gray">Все аксессуары</a>
								</div>
							</div><!-- /.order-sidebar-block -->

							<div class="order-sidebar-block hidden-md">
								<div class="subtitle-main">Наши услуги</div>

								<div class="service-elem item-1">
									<div class="service-elem-inner">
										<div class="title">Хранение<br> шин</div>
										<a href="#" class="service-btn">Подробнее</a>
									</div>
								</div>

								<div class="service-elem item-2">
									<div class="service-elem-inner">
										<div class="title">Шиномонтаж</div>
										<a href="#" class="service-btn">Подробнее</a>
									</div>
								</div>
							</div><!-- /.order-sidebar-block -->
						</aside>
					</form>
				</div><!-- /.order-content-wrap -->
			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

	<?php include ("include/popup.html") ?>

<?php include ("include/foot.html") ?>
	