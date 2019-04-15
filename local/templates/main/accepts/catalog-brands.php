<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<main class="content">
			<div class="container">
				<?php include ("include/breadcrumbs.html") ?>

				<h1>Шины  Continental</h1>

				<div class="content-info table">
					<div class="table-cell"><div class="brand"><img src="images/brand.jpg" alt=""></div></div>
					<div class="table-cell">
						<p>
							<strong>В Интернет-магазине «Бери Колеса»</strong> вы сможете ознакомиться с широким выбором летней и зимней резины и подобрать качественные диски. Вся продукция производится ведущими мировыми брендами, предоставляющими гарантию на свои товары. Одним из таких производителей является торговая марка <strong>Continental</strong>. Корпорация существует с 1871-го года, а качество ее продукции настолько высоко, что шины Континенталь устанавливают на каждый четвертый автомобиль, произведенный в Европе.
						</p>
					</div>
					<div class="table-cell">
						<a href="calculator.php" class="btn btn-1 btn-gray-2">Шинный калькулятор</a>
					</div>
				</div>

				<div class="content-inner clearfix">
					<aside class="filter-sidebar">
						<div class="filter-sidebar-mobile">Фильтр</div>
						<div class="filter-toggle">
							<div class="filter-sidebar-block">
								<div class="title">Цена <span>(руб.)</span></div>
								<div class="price-slider">
									<div id="slider"></div>
								</div>
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
							<div class="filter-sidebar-block">
								<div class="title">
									<div class="aligner">Типоразмер</div>
									<div class="aligner">
										<div class="hint">
											<div class="hint-icon"></div>
											<div class="hint-content">
												<img src="images/tooltip.jpg" alt="">
											</div>
										</div>
									</div>
								</div>
								<div class="filter-sidebar-option">
									<div class="item">
										<div class="label">Ширина</div>
										<select name="" id="">
											<option value="">205</option>
											<option value="">305</option>
											<option value="">405</option>
										</select>
									</div>
									<div class="item">
										<div class="label">Высота</div>
										<select name="" id="">
											<option value="">55</option>
											<option value="">65</option>
											<option value="">75</option>
										</select>
									</div>
									<div class="item">
										<div class="label">Диаметр</div>
										<select name="" id="">
											<option value="">Все</option>
											<option value="">Все</option>
											<option value="">Все</option>
										</select>
									</div>
								</div>
							</div>
							<div class="filter-sidebar-block">
								<div class="title">Производитель шин</div>
								<div class="filter-sidebar-search">
									<input type="search" placeholder="Найти производителя">
									<button type="submit"><span></span></button>
								</div>

								<div class="has-input">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span class="input-style"></span>
										<span class="input-text">Bridgestone</span>
									</label>	
								</div>
								<div class="has-input">
									<input type="checkbox" id="brand-2">
									<label for="brand-2">
										<span class="input-style"></span>
										<span class="input-text">Continental</span>
									</label>	
								</div>
								<div class="has-input">
									<input type="checkbox" id="brand-3">
									<label for="brand-3">
										<span class="input-style"></span>
										<span class="input-text">Yokohama</span>
									</label>	
								</div>
								<div class="has-input">
									<input type="checkbox" id="brand-4">
									<label for="brand-4">
										<span class="input-style"></span>
										<span class="input-text">Nokian</span>
									</label>	
								</div>
								<div class="has-input">
									<input type="checkbox" id="brand-5">
									<label for="brand-5">
										<span class="input-style"></span>
										<span class="input-text">Michelin</span>
									</label>	
								</div>
								<div class="has-input">
									<input type="checkbox" id="brand-6">
									<label for="brand-6">
										<span class="input-style"></span>
										<span class="input-text">Pirelli</span>
									</label>	
								</div>
								<div class="has-input">
									<input type="checkbox" id="brand-7">
									<label for="brand-7">
										<span class="input-style"></span>
										<span class="input-text">Dunlop</span>
									</label>	
								</div>
								<div class="has-input">
									<input type="checkbox" id="brand-8">
									<label for="brand-8">
										<span class="input-style"></span>
										<span class="input-text">Kumho</span>
									</label>	
								</div>

								<div class="filter-sidebar-toggle">
									<div class="filter-input-toggle">
										<div class="has-input">
											<input type="checkbox" id="brand-9">
											<label for="brand-9">
												<span class="input-style"></span>
												<span class="input-text">Bridgestone</span>
											</label>	
										</div>
										<div class="has-input">
											<input type="checkbox" id="brand-10">
											<label for="brand-10">
												<span class="input-style"></span>
												<span class="input-text">Continental</span>
											</label>	
										</div>
										<div class="has-input">
											<input type="checkbox" id="brand-11">
											<label for="brand-11">
												<span class="input-style"></span>
												<span class="input-text">Yokohama</span>
											</label>	
										</div>
										<div class="has-input">
											<input type="checkbox" id="brand-12">
											<label for="brand-12">
												<span class="input-style"></span>
												<span class="input-text">Nokian</span>
											</label>	
										</div>
										<div class="has-input">
											<input type="checkbox" id="brand-13">
											<label for="brand-13">
												<span class="input-style"></span>
												<span class="input-text">Michelin</span>
											</label>	
										</div>
									</div>
									<div class="filter-sidebar-toggle-btn">
										<div class="aligner"><a href="#" class="js-view-filter icon">Показать 34 производителя</a></div>
									</div>
								</div>
							</div>
							<div class="filter-sidebar-block">
								<div class="filter-popup">
									<div class="filter-popup-result">
										Найдено <span class="value">20</span> товаров
										<a href="#">Показать</a>
									</div>
								</div>
								<div class="title">Сезон</div>
								<div class="has-input-float clearfix">
									<div class="has-input">
										<input type="checkbox" id="season-1">
										<label for="season-1">
											<span class="input-style"></span>
											<span class="input-text item-1 icons">Летние</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="season-2">
										<label for="season-2">
											<span class="input-style"></span>
											<span class="input-text item-2 icons">Шипованные</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="season-3">
										<label for="season-3">
											<span class="input-style"></span>
											<span class="input-text item-3 icons">Зимние</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="season-4">
										<label for="season-4">
											<span class="input-style"></span>
											<span class="input-text item-4 icons">Всесезонные</span>
										</label>	
									</div>
								</div>
							</div>
							<div class="filter-sidebar-block">
								<div class="title">Другое</div>
								<div class="has-input-float clearfix">
									<div class="has-input">
										<input type="checkbox" id="other-1">
										<label for="other-1">
											<span class="input-style"></span>
											<span class="input-text">Легкогрузовая</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="other-2">
										<label for="other-2">
											<span class="input-style"></span>
											<span class="input-text">RunFlat</span>
										</label>	
									</div>
								</div>
							</div>
							<div class="filter-sidebar-block">
								<div class="flex-box">
									<a href="#" class="btn btn-small">Подобрать</a>
									<a href="#" class="btn btn-gray">Сбросить</a>
								</div>
							</div>
						</div>
					</aside>

					<section class="content-main">
						<div class="filter-content clearfix">
							<div class="filter-content-btn">
								<div class="aligner">Сортировать:</div>
								<div class="aligner"><a href="#" class="active">По популярности</a></div>
								<div class="aligner"><a href="#">По возрастанию цены</a></div>
								<div class="aligner"><a href="#">По убыванию цены</a></div>
								<div class="aligner"><a href="#">По умолчанию</a></div>
							</div>
							<div class="filter-content-view">
								<div class="aligner">Вид:</div>
								<div class="aligner">
									<div class="view-btn view-table active"></div>
									<div class="view-btn view-list"></div>
								</div>
							</div>
						</div><!-- /.filter-content -->

						<div class="product-box-wrap">
							<div class="row">
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
											<div class="product-delivery"><span>Получение через 10 дней</span> <img src="images/delivery-icons/delivery-1.png" alt=""></div>
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
											<div class="product-delivery"><span>Получение через 10 дней</span> <img src="images/delivery-icons/delivery-1.png" alt=""></div>
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
											<div class="product-delivery"><span>Получение через 10 дней</span> <img src="images/delivery-icons/delivery-1.png" alt=""></div>
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
											<div class="product-delivery"><span>Получение через 10 дней</span> <img src="images/delivery-icons/delivery-1.png" alt=""></div>
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
							</div><!-- /.row -->
						</div><!-- /.product-box-wrap -->

						<?php include ("include/pagination.html") ?>
					</section>
				</div><!-- /.content-inner -->

				<section class="content-block">
					<div class="heading-1">Мы рекомендуем</div>

					<div class="tabs-wrap js-tabs-wrap">
						<ul class="tabs-list js-tabs-list clearfix">
							<li class="current"><span class="aligner">Автохимия</span></li>
							<li><span class="aligner">Компрессоры</span></li>
							<li><span class="aligner">Чехлы для хранения</span></li>
							<li><span class="aligner">Маноментры</span></li>
						</ul>
						<div class="tabs-content">
							<div class="box box-visible">
								<div class="row">
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

									<div class="product-box">
										<div class="clearfix">
											<div class="product-box-img">
												<a href="product.php" class="img"><img src="images/product-5.jpg" alt=""></a>
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
													<div class="count"><span>В наличии </span> >4 шт</div>
												</div>
												<div class="product-price">
													<div class="price">3 830 p</div>
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

									<div class="product-box">
										<div class="clearfix">
											<div class="product-box-img">
												<a href="product.php" class="img"><img src="images/product-6.jpg" alt=""></a>
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
							</div>
							<div class="box">
								Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Безопасную, языкового по всей несколько! Живет, маленький проектах жаренные обеспечивает вскоре она? Рот переписывается буквоград назад возвращайся пустился, запятой текстами великий.
							</div>
							<div class="box">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit nesciunt expedita velit laboriosam in maxime magnam inventore iusto exercitationem iste totam ullam quo recusandae architecto pariatur, error minus ipsum non.
							</div>
							<div class="box">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda reiciendis nemo quos iusto quam asperiores, cum consequuntur, repellat pariatur eius perferendis impedit delectus. Qui dolor nobis deserunt, molestias amet eveniet.
							</div>
						</div>
					</div><!-- /.tabs-wrap -->

					<div class="text-center">
						<a href="#" class="btn btn-1 btn-gray-2">Все автоаксессуары</a>
					</div>
				</section><!-- /.content-block -->	
			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

	<?php include ("include/popup.html") ?>

<?php include ("include/foot.html") ?>
	