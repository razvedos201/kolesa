<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<main class="content">
			<div class="container">
				<?php include ("include/breadcrumbs.html") ?>

				<h1>Автоаксессуары</h1>

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
								<div class="title-toggle"><span>Автохимия</span></div>
								<div class="filter-sidebar-dropdown">
									<div class="has-input">
										<input type="checkbox" id="autochemistry-1">
										<label for="autochemistry-1">
											<span class="input-style"></span>
											<span class="input-text">Видеорегистраторы</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="autochemistry-2">
										<label for="autochemistry-2">
											<span class="input-style"></span>
											<span class="input-text">Компрессоры</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="autochemistry-3">
										<label for="autochemistry-3">
											<span class="input-style"></span>
											<span class="input-text">Пылесосы</span>
										</label>	
									</div>
								</div>
							</div>

							<div class="filter-sidebar-block">
								<div class="title-toggle"><span>Портативная техника</span></div>
								<div class="filter-sidebar-dropdown">
									<div class="has-input">
										<input type="checkbox" id="technical-1">
										<label for="technical-1">
											<span class="input-style"></span>
											<span class="input-text">Видеорегистраторы</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="technical-2">
										<label for="technical-2">
											<span class="input-style"></span>
											<span class="input-text">Компрессоры</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="technical-3">
										<label for="technical-3">
											<span class="input-style"></span>
											<span class="input-text">Пылесосы  </span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="technical-4">
										<label for="technical-4">
											<span class="input-style"></span>
											<span class="input-text">Манометры</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="technical-5">
										<label for="technical-5">
											<span class="input-style"></span>
											<span class="input-text">Навигаторы</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="technical-6">
										<label for="technical-6">
											<span class="input-style"></span>
											<span class="input-text">Радар-детекторы </span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="technical-7">
										<label for="technical-7">
											<span class="input-style"></span>
											<span class="input-text">FM-Трансмиттеры</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="technical-8">
										<label for="technical-8">
											<span class="input-style"></span>
											<span class="input-text">Алкотестеры</span>
										</label>	
									</div>
								</div>
							</div>

							<div class="filter-sidebar-block">
								<div class="title-toggle"><span>Инструменты</span></div>
								<div class="filter-sidebar-dropdown">
									<div class="has-input">
										<input type="checkbox" id="tool-1">
										<label for="tool-1">
											<span class="input-style"></span>
											<span class="input-text">Видеорегистраторы</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="tool-2">
										<label for="tool-2">
											<span class="input-style"></span>
											<span class="input-text">Компрессоры</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="tool-3">
										<label for="tool-3">
											<span class="input-style"></span>
											<span class="input-text">Пылесосы</span>
										</label>	
									</div>
								</div>
							</div>

							<div class="filter-sidebar-block">
								<div class="title-toggle"><span>Уход и хранение</span></div>
								<div class="filter-sidebar-dropdown">
									<div class="has-input">
										<input type="checkbox" id="care-1">
										<label for="care-1">
											<span class="input-style"></span>
											<span class="input-text">Видеорегистраторы</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="care-2">
										<label for="care-2">
											<span class="input-style"></span>
											<span class="input-text">Компрессоры</span>
										</label>	
									</div>
									<div class="has-input">
										<input type="checkbox" id="care-3">
										<label for="care-3">
											<span class="input-style"></span>
											<span class="input-text">Пылесосы</span>
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

								<div class="product-box">
									<div class="clearfix">
										<div class="product-box-img">
											<a href="product.php" class="img"><img src="images/product-5.jpg" alt=""></a>
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
							</div><!-- /.row -->
						</div><!-- /.product-box-wrap -->

						<?php include ("include/pagination.html") ?>
					</section>
				</div><!-- /.content-inner -->

			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

	<?php include ("include/popup.html") ?>

<?php include ("include/foot.html") ?>
	