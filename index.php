<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 
<div class="section-search">
	<div class="container">
		<div class="tabs-search">
			<ul class="resp-tabs-list tabs_1">
				<li>Поиск по авто</li>
				<li>Поиск по шинам</li>
				<li>Поиск по дискам</li>
				<li>Поиск по грузовым шинам</li>
				<li>Поиск по спецшинам</li>
				<li>Поиск по мотошинам</li>
				<li class="has-tabs-link"><a href="/shinnyy-kalkulyator/index.php">Шинный калькулятор</a></li>
			</ul>
			<div class="resp-tabs-container tabs_1">
			<div>
				<form action="#" class="box-inner-1 table">
					<div class="table-cell">
						<div class="size size-1">
							<select name="" id="">
								<option value="">Производитель</option>
								<option value="">Производитель</option>
								<option value="">Производитель</option>
							</select>
						</div>
						<div class="size size-1">
							<select name="" id="">
								<option value="">Модель</option>
								<option value="">Модель</option>
								<option value="">Модель</option>
							</select>
						</div>
						<div class="size size-1">
							<select name="" id="">
								<option value="">Год</option>
								<option value="">Год</option>
								<option value="">Год</option>
							</select>
						</div>
						<div class="size size-1">
							<select name="" id="">
								<option value="">Двигатель</option>
								<option value="">Двигатель</option>
								<option value="">Двигатель</option>
							</select>
						</div>
						<div class="size size-1">
							<!-- <input type="submit" class="btn" value="Показать"> -->
							<a href="search-result.php" class="btn">Показать</a>
						</div>
					</div>
				</form>
			</div>
			<div>
				<form action="#" class="box-inner-2 table">
					<div class="table-cell">
						<div class="tabs-block-select left">
							<div class="box-row clearfix">
								<div class="size size-2">
									<select name="" id="">
										<option value="">Ширина</option>
										<option value="">Ширина</option>
										<option value="">Ширина</option>
									</select>
								</div>
								<div class="size size-2">
									<select name="" id="">
										<option value="">Высота</option>
										<option value="">Высота</option>
										<option value="">Высота</option>
									</select>
								</div>
								<div class="size size-2">
									<select name="" id="">
										<option value="">Диаметр</option>
										<option value="">Диаметр</option>
										<option value="">Диаметр</option>
									</select>
								</div>
								<div class="size hint-popup">
									<a href="#" rel="tooltip" title="Как узнать параметры шины" data-fancybox data-src="#search-popup" class="hint-popup-inner">?</a>
								</div>
							</div>
							<div class="box-row clearfix">
								<div class="size size-2">
									<select name="" id="">
										<option value="">Сезон</option>
										<option value="">Сезон</option>
										<option value="">Сезон</option>
									</select>
								</div>
								<div class="size size-2">
									<select name="" id="">
										<option value="">Производитель</option>
										<option value="">Производитель</option>
										<option value="">Производитель</option>
									</select>
								</div>
								<div class="size size-2">
									<div class="box-center">
										<div class="has-input">
											<input type="checkbox" id="search-input-1">
											<label for="search-input-1">
												<span class="input-style"></span>
												<span class="input-text">Легкогрузовая</span>
											</label>	
										</div>
										<div class="has-input">
											<input type="checkbox" id="search-input-2">
											<label for="search-input-2">
												<span class="input-style"></span>
												<span class="input-text">Распродажа</span>
											</label>	
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tabs-block-action left clearfix">
							<div class="tabs-block-action-price left">
								<div class="box-row">
									<div class="price-slider-text">Цена за 1 шт</div>
									<div class="price-slider">
										<div id="slider"></div>
									</div>
								</div>
								<div class="box-row">
									<div class="price-slider-input">
										<div class="price-slider-input-item">
											<div class="aligner">от</div>
											<div class="aligner"><input type="text" id="filterPrice1"></div>
										</div>
										<div class="price-slider-input-item">
											<div class="aligner">до</div>
											<div class="aligner"><input type="text" id="filterPrice2"></div>
											<div class="aligner">руб.</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tabs-block-action-btn left">
								<div class="box-row">
									<!-- <input type="submit" class="btn" value="Показать"> -->
									<a href="search-result.php" class="btn">Показать</a>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div>
				<div class="table">
					<div class="table-cell">
						
					</div>
				</div>
			</div>
			<div>
				<div class="table">
					<div class="table-cell">
						
					</div>
				</div>
			</div>
			<div>
				<div class="table">
					<div class="table-cell">
						
					</div>
				</div>
			</div>
			<div>
				<div class="table">
					<div class="table-cell">
						
					</div>
				</div>
			</div>
			</div>
			</div><!-- /.tabs-search -->

 <div class="mobile-link"><a href="calculator.php">Шинный калькулятор</a></div>
				
			</div>
		</div><!-- /.section-search -->

		<div class="container">
			<div class="content-block">
				<div class="heading-1">Наши преимущества</div>

				<div class="benefits-wrap">
					<div class="row">
						<div class="benefit-col">
							<div class="benefit">
								<div class="benefit-inner item-1">
									<div class="aligner">Большой выбор шин и дисков</div>
								</div>
							</div>
						</div>
						<div class="benefit-col">
							<div class="benefit">
								<div class="benefit-inner item-2">
									<div class="aligner">Предоставление гарантии</div>
								</div>
							</div>
						</div>
						<div class="benefit-col">
							<div class="benefit">
								<div class="benefit-inner item-3">
									<div class="aligner">Доставка в любой регион России</div>
								</div>
							</div>
						</div>
						<div class="benefit-col">
							<div class="benefit">
								<div class="benefit-inner item-4">
									<div class="aligner">12 лет успешной работы</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.content-block -->

			<div class="content-block">
				<div class="heading-1">Популярные модели шин</div>

				<div class="carousel-product">
					<div class="item">
						<div class="product-box">
							<div class="clearfix">
								<div class="product-box-img">
									<a href="product.php" class="img"><img src="images/product-1.jpg" alt=""></a>
									<div class="product-sale icon">-30%</div>
									<div class="product-mark">
										<div rel="tooltip" title="Летние" class="mark mark-1"></div>
									</div>
								</div>
								<div class="product-box-content">
									<div class="product-box-content-inner">
										<div class="title">
											<a href="product.php">Continental Conti Premium Contact 5 205/55 R16 91V</a>
										</div>
										<div class="config">
											<div>Диаметр: 16 дюймов</div>
											<div>Ширина профиля: 205 мм</div>
											<div>Высота профиля: 55 %</div>
											<div>Индекс скорости: V (до 210 км/ч)</div>
											<div>Индекс нагрузки: (1060 кг)</div>
											<div>Шиповка: да</div>
										</div>
									</div>
									<div class="product-delivery"><span>Получение через 10 дней</span> <img src="images/delivery-icons/delivery-1.png" alt=""></div>
								</div>
								<div class="product-box-footer">
									<div class="product-box-header">
										<div class="art">Код: ПИР901274</div>
										<div class="count"><span>В наличии </span> >4 шт</div>
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
						</div><!-- /.product-box -->
					</div>

					<div class="item">
						<div class="product-box">
							<div class="clearfix">
								<div class="product-box-img">
									<a href="product.php" class="img"><img src="images/product-1.jpg" alt=""></a>
									<div class="product-sale icon">-15%</div>
									<div class="product-mark">
										<div rel="tooltip" title="Зимние" class="mark mark-2"></div>
										<div rel="tooltip" title="Шипованные" class="mark mark-3"></div>
									</div>
								</div>
								<div class="product-box-content">
									<div class="product-box-content-inner">
										<div class="title">
											<a href="product.php">Pirelli P-1 Cinturato Verde 195/65 R15 88H</a>
										</div>
										<div class="config">
											<div>Диаметр: 16 дюймов</div>
											<div>Ширина профиля: 205 мм</div>
											<div>Высота профиля: 55 %</div>
											<div>Индекс скорости: V (до 210 км/ч)</div>
											<div>Индекс нагрузки: (1060 кг)</div>
											<div>Шиповка: да</div>
										</div>
									</div>
									<div class="product-delivery"><span>Получение сегодня</span> <img src="images/delivery-icons/delivery-2.png" alt=""></div>
								</div>
								<div class="product-box-footer">
									<div class="product-box-header">
										<div class="art">Код: ПИР901274</div>
										<div class="count"><span>В наличии </span> >4 шт</div>
									</div>
									<div class="product-price">
										<div class="price">2 690 p</div>
										<div class="price-old">3 120 p</div>
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
						</div><!-- /.product-box -->
					</div>

					<div class="item">
						<div class="product-box">
							<div class="clearfix">
								<div class="product-box-img">
									<a href="product.php" class="img"><img src="images/product-1.jpg" alt=""></a>
									<div class="product-sale icon">-15%</div>
									<div class="product-mark">
										<div rel="tooltip" title="Всесезонные" class="mark mark-4"></div>
									</div>
								</div>
								<div class="product-box-content">
									<div class="product-box-content-inner">
										<div class="title">
											<a href="product.php">Pirelli P-1 Cinturato Verde 195/65 R15 88H</a>
										</div>
										<div class="config">
											<div>Диаметр: 16 дюймов</div>
											<div>Ширина профиля: 205 мм</div>
											<div>Высота профиля: 55 %</div>
											<div>Индекс скорости: V (до 210 км/ч)</div>
											<div>Индекс нагрузки: (1060 кг)</div>
											<div>Шиповка: да</div>
										</div>
									</div>
									<div class="product-delivery"><span>Получение через 3 дня</span> <img src="images/delivery-icons/delivery-3.png" alt=""></div>
								</div>
								<div class="product-box-footer">
									<div class="product-box-header">
										<div class="art">Код: ПИР901274</div>
										<div class="count"><span>В наличии </span> >4 шт</div>
									</div>
									<div class="product-price">
										<div class="price">2 690 p</div>
										<div class="price-old">3 120 p</div>
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
						</div><!-- /.product-box -->
					</div>

					<div class="item">
						<div class="product-box">
							<div class="clearfix">
								<div class="product-box-img">
									<a href="product.php" class="img"><img src="images/product-1.jpg" alt=""></a>
									<div class="product-sale icon">-30%</div>
									<div class="product-mark">
										<div rel="tooltip" title="Зимние" class="mark mark-2"></div>
									</div>
								</div>
								<div class="product-box-content">
									<div class="product-box-content-inner">
										<div class="title">
											<a href="product.php">Continental Conti Premium Contact 5 205/55 R16 91V</a>
										</div>
										<div class="config">
											<div>Диаметр: 16 дюймов</div>
											<div>Ширина профиля: 205 мм</div>
											<div>Высота профиля: 55 %</div>
											<div>Индекс скорости: V (до 210 км/ч)</div>
											<div>Индекс нагрузки: (1060 кг)</div>
											<div>Шиповка: да</div>
										</div>
									</div>
									<div class="product-delivery"><span>Получение через 10 дней</span> <img src="images/delivery-icons/delivery-1.png" alt=""></div>
								</div>
								<div class="product-box-footer">
									<div class="product-box-header">
										<div class="art">Код: ПИР901274</div>
										<div class="count"><span>В наличии </span> >4 шт</div>
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
						</div><!-- /.product-box -->
					</div>

					<div class="item">
						<div class="product-box">
							<div class="clearfix">
								<div class="product-box-img">
									<a href="product.php" class="img"><img src="images/product-1.jpg" alt=""></a>
									<div class="product-sale icon">-30%</div>
									<div class="product-mark">
										<div rel="tooltip" title="Летние" class="mark mark-1"></div>
									</div>
								</div>
								<div class="product-box-content">
									<div class="product-box-content-inner">
										<div class="title">
											<a href="product.php">Continental Conti Premium Contact 5 205/55 R16 91V</a>
										</div>
										<div class="config">
											<div>Диаметр: 16 дюймов</div>
											<div>Ширина профиля: 205 мм</div>
											<div>Высота профиля: 55 %</div>
											<div>Индекс скорости: V (до 210 км/ч)</div>
											<div>Индекс нагрузки: (1060 кг)</div>
											<div>Шиповка: да</div>
										</div>
									</div>
									<div class="product-delivery"><span>Получение через 3 дня</span> <img src="images/delivery-icons/delivery-3.png" alt=""></div>
								</div>
								<div class="product-box-footer">
									<div class="product-box-header">
										<div class="art">Код: ПИР901274</div>
										<div class="count"><span>В наличии </span> >4 шт</div>
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
						</div><!-- /.product-box -->
					</div>
				</div><!-- /.carousel-product -->
			</div><!-- /.content-block -->

			<div class="content-block promo-slider-hidden">
				<div class="promo-slider">
					<div class="slide"><img src="images/slide.jpg" alt=""></div>
					<div class="slide"><img src="images/slide.jpg" alt=""></div>
				</div>
			</div><!-- /.content-block -->

			<div class="content-block">
				<div class="heading-1">Популярные модели дисков</div>

				<div class="carousel-product">
					<div class="item">
						<div class="product-box">
							<div class="clearfix">
								<div class="product-box-img">
									<a href="product.php" class="img"><img src="images/product-2.jpg" alt=""></a>
									<div class="product-sale icon">-30%</div>
								</div>
								<div class="product-box-content">
									<div class="product-box-content-inner">
										<div class="title">
											<a href="product.php">Диски Wiger Sport Power WG&nbsp;0505</a>
										</div>
										<div class="config">
											<div>Типоразмер  6x15</div>
											<div>Крепежные отверстия (PCD): 5x112</div>
											<div>Вылет (ET): 47 мм</div>
											<div>Dia: 66,6 мм</div>
											<div>Цвет: BKF </div>
											<div>Тип: литой</div>
										</div>
									</div>
									<div class="product-delivery"><span>Получение через 10 дней</span> <img src="images/delivery-icons/delivery-1.png" alt=""></div>
								</div>
								<div class="product-box-footer">
									<div class="product-box-header">
										<div class="art">Код: ПИР901274</div>
										<div class="count"><span>В наличии </span> >4 шт</div>
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
						</div><!-- /.product-box -->
					</div>

					<div class="item">
						<div class="product-box">
							<div class="clearfix">
								<div class="product-box-img">
									<a href="product.php" class="img"><img src="images/product-3.jpg" alt=""></a>
									<div class="product-sale icon">-30%</div>
								</div>
								<div class="product-box-content">
									<div class="product-box-content-inner">
										<div class="title">
											<a href="product.php">Диски Yamato Aoki Y3138 </a>
										</div>
										<div class="config">
											<div>Типоразмер  6x15</div>
											<div>Крепежные отверстия (PCD): 5x112</div>
											<div>Вылет (ET): 47 мм</div>
											<div>Dia: 66,6 мм</div>
											<div>Цвет: BKF </div>
											<div>Тип: литой</div>
										</div>
									</div>
									<div class="product-delivery"><span>Получение через 10 дней</span> <img src="images/delivery-icons/delivery-1.png" alt=""></div>
								</div>
								<div class="product-box-footer">
									<div class="product-box-header">
										<div class="art">Код: ПИР901274</div>
										<div class="count"><span>В наличии </span> >4 шт</div>
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
						</div><!-- /.product-box -->
					</div>

					<div class="item">
						<div class="product-box">
							<div class="clearfix">
								<div class="product-box-img">
									<a href="product.php" class="img"><img src="images/product-2.jpg" alt=""></a>
									<div class="product-sale icon">-30%</div>
								</div>
								<div class="product-box-content">
									<div class="product-box-content-inner">
										<div class="title">
											<a href="product.php">Диски Wiger Sport Power WG&nbsp;0505</a>
										</div>
										<div class="config">
											<div>Типоразмер  6x15</div>
											<div>Крепежные отверстия (PCD): 5x112</div>
											<div>Вылет (ET): 47 мм</div>
											<div>Dia: 66,6 мм</div>
											<div>Цвет: BKF </div>
											<div>Тип: литой</div>
										</div>
									</div>
									<div class="product-delivery"><span>Получение через 10 дней</span> <img src="images/delivery-icons/delivery-1.png" alt=""></div>
								</div>
								<div class="product-box-footer">
									<div class="product-box-header">
										<div class="art">Код: ПИР901274</div>
										<div class="count"><span>В наличии </span> >4 шт</div>
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
						</div><!-- /.product-box -->
					</div>

					<div class="item">
						<div class="product-box">
							<div class="clearfix">
								<div class="product-box-img">
									<a href="product.php" class="img"><img src="images/product-3.jpg" alt=""></a>
									<div class="product-sale icon">-30%</div>
								</div>
								<div class="product-box-content">
									<div class="product-box-content-inner">
										<div class="title">
											<a href="product.php">Диски Yamato Aoki Y3138 </a>
										</div>
										<div class="config">
											<div>Типоразмер  6x15</div>
											<div>Крепежные отверстия (PCD): 5x112</div>
											<div>Вылет (ET): 47 мм</div>
											<div>Dia: 66,6 мм</div>
											<div>Цвет: BKF </div>
											<div>Тип: литой</div>
										</div>
									</div>
									<div class="product-delivery"><span>Получение через 10 дней</span> <img src="images/delivery-icons/delivery-1.png" alt=""></div>
								</div>
								<div class="product-box-footer">
									<div class="product-box-header">
										<div class="art">Код: ПИР901274</div>
										<div class="count"><span>В наличии </span> >4 шт</div>
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
						</div><!-- /.product-box -->
					</div>

					<div class="item">
						<div class="product-box">
							<div class="clearfix">
								<div class="product-box-img">
									<a href="product.php" class="img"><img src="images/product-2.jpg" alt=""></a>
									<div class="product-sale icon">-30%</div>
								</div>
								<div class="product-box-content">
									<div class="product-box-content-inner">
										<div class="title">
											<a href="product.php">Диски Wiger Sport Power WG&nbsp;0505</a>
										</div>
										<div class="config">
											<div>Типоразмер  6x15</div>
											<div>Крепежные отверстия (PCD): 5x112</div>
											<div>Вылет (ET): 47 мм</div>
											<div>Dia: 66,6 мм</div>
											<div>Цвет: BKF </div>
											<div>Тип: литой</div>
										</div>
									</div>
									<div class="product-delivery"><span>Получение через 10 дней</span> <img src="images/delivery-icons/delivery-1.png" alt=""></div>
								</div>
								<div class="product-box-footer">
									<div class="product-box-header">
										<div class="art">Код: ПИР901274</div>
										<div class="count"><span>В наличии </span> >4 шт</div>
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
						</div><!-- /.product-box -->
					</div>
				</div><!-- /.carousel-product -->
			</div><!-- /.content-block -->

			<div class="content-block">
				<div class="service-wrap">
					<div class="service item-1">
						<div class="service-content">
							<div class="title"><span>Хранение шин</span></div>
							<a href="#" class="btn btn-gray">Подробнее</a>
						</div>
					</div>
					<div class="service item-2">
						<div class="service-content">
							<div class="title"><span>Автосервис</span></div>
							<a href="#" class="btn btn-gray">Подробнее</a>
						</div>
					</div>
					<div class="service item-3">
						<div class="service-content">
							<div class="title"><span>Шиномонтаж</span></div>
							<a href="#" class="btn btn-gray">Подробнее</a>
						</div>
					</div>
				</div>
			</div><!-- /.content-block -->
		</div><!-- /.container -->

		<div class="brands-section">
			<div class="container">
				<div class="brands-carousel-wrap">
					<div class="heading-1">Мы рекомендуем торговые марки</div>

					<div class="brands-carousel">
						<div class="item">
							<a href="#" class="brand"><img src="images/brands/brand-1.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="#" class="brand"><img src="images/brands/brand-2.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="#" class="brand"><img src="images/brands/brand-3.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="#" class="brand"><img src="images/brands/brand-4.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="#" class="brand"><img src="images/brands/brand-5.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="#" class="brand"><img src="images/brands/brand-6.jpg" alt=""></a>
						</div>
						<div class="item">
							<a href="#" class="brand"><img src="images/brands/brand-4.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.brands-section -->

		<div class="container">
			<div class="content-block clearfix">
				<div class="news-col">
					<div class="news-col-header table">
						<div class="table-cell"><div class="heading-1">Новости</div></div>
						<div class="table-cell"><div class="text-right"><a href="news.php" class="btn btn-gray">Все новости</a></div></div>
					</div>
					<div class="row">
						<div class="news-col-inner">
							<div class="news-box">
								<div class="news-box-img"><a href="#"><img src="images/news-1.jpg" alt=""></a></div>
								<div class="news-box-inner">
									<time class="icon" datetime="2017-03-25">25.03.2017</time>
									<div class="news-box-content">
										<div class="title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </a></div>
										<div class="text">
											Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="news-col-inner">
							<div class="news-box">
								<div class="news-box-img"><a href="#"><img src="images/news-2.jpg" alt=""></a></div>
								<div class="news-box-inner">
									<time class="icon" datetime="2017-03-25">25.03.2017</time>
									<div class="news-box-content">
										<div class="title"><a href="#">Proin gravida dolor sit amet lacus accumsan.</a></div>
										<div class="text">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. 
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.news-col -->

				<div class="news-col">
					<div class="news-col-header table">
						<div class="table-cell"><div class="heading-1">Обзоры</div></div>
						<div class="table-cell"><div class="text-right"><a href="overviews.php" class="btn btn-gray">Все обзоры</a></div></div>
					</div>
					<div class="news-col-inner">
						<div class="overview-box" style="background-image: url(images/overview-1.jpg);">
							<div class="overview">
								<div class="overview-content">
									<div class="subtitle">Обзор</div>
									<div class="title">Новинка! Шины Pirelli PZero Nero</div>
									<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
								</div>
								<a href="#" class="btn btn-small">Смотреть</a>
							</div>
						</div>
					</div>
					<div class="news-col-inner">
						<div class="overview-box" style="background-image: url(images/overview-2.jpg);">
							<div class="overview">
								<div class="overview-content">
									<div class="subtitle">Обзор</div>
									<div class="title">в погоне за стилем! диски  OZ Racing Palladio GT</div>
									<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</div>
								</div>
								<a href="#" class="btn btn-small">Смотреть</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.content-block -->

			<div class="content-block">
				<div class="heading-1">О компании</div>

				<p>
					<strong>Интернет-магазин шин «BERIKOLESA.RU»</strong> предлагает зимние и летние автомобильные шины в Екатеринбурге. Продажа шин и дисков осуществляется не только в Екатеринбурге, но и в Нижнем Тагиле, Новом Уренгое, Тюмени, Ханты-Мансийске, Челябинске. Наш магазин занимается продажей шин для грузовиков и спецтехники по доступным ценам. Иллюстрированный каталог магазина представлен ведущими мировыми брендами. Здесь вы найдете автошины от таких производителей, как: Amtel, Bridgestone, Cordiant, Continental, Dunlop, Goodyear, Hankook, KAMA, Michelin, Nokian, Pirelli, Yokohama, а также шины от многих других известных изготовителей.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div><!-- /.container -->

	</div><!-- /.wrapper -->
	
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>