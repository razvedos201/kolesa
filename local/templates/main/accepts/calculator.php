<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<main class="content">
			<div class="container">
				<?php include ("include/breadcrumbs.html") ?>

				<h1>Шинный калькулятор</h1>

				<section class="content-block-1">
					<div class="row">
						<div class="col">
							<div class="subtitle-main subtitle-small">Пересчет типоразмера шины</div>

							<div class="bold">Для чего нужен шинный калькулятор? </div>
							<p>
								С помощью этого сервиса вы легко можете посчитать как изменятся: внешние размеры колеса, высота дорожного просвета (клиренс), показания спидометра и другие характеристики, при установке шин с другим типоразмером на ваш автомобиль.
							</p>

							<div class="bold">Как пользоваться шинным калькулятором?</div>
							<p>
								 Введите сначала типоразмер установленный на вашем автомобиле, а затем тот, который вы хотите установить. В таблице снизу будут показаны результаты расчетов.
							</p>

							<div class="bold">Следует учитывать, что:</div>
							<p>
								При увеличении диаметра колёсного диска, и, как следствие, уменьшение высоты профиля шины, увеличивается нагрузка на подвеску автомобиля, а так же ухудшается комфорт (автомобиль станет заметно жёстче).
							</p>
							<p>
								Погрешность в показаниях спидометра зависит от скорости автомобиля, при увеличении скорости погрешность увеличивается.
							</p>
						</div>
						<div class="col">
							<div class="text-center"><img src="images/img-5.png" alt=""></div>
						</div>
					</div>
				</section><!-- /.content-block-1 -->

				<div class="content-block-1">
					<div class="calculate content-block-info">
						<div class="row">
							<div class="col">
								<div class="calculate-column-wrap clearfix">
									<div class="calculate-column left">
										<div class="calculate-title old">Старый типоразмер</div>
										<div class="row">
											<div class="size">
												<div class="label">Ширина</div>
												<select>
													<option value="">195</option>
													<option value="">205</option>
													<option value="">215</option>
												</select>
											</div>
											<div class="size">
												<div class="label">Высота</div>
												<select>
													<option value="">65</option>
													<option value="">75</option>
													<option value="">85</option>
												</select>
											</div>
											<div class="size">
												<div class="label">Диаметр</div>
												<select>
													<option value="">14</option>
													<option value="">15</option>
													<option value="">16</option>
												</select>
											</div>
										</div>
									</div>
									<div class="calculate-column right">
										<div class="calculate-title">Новый типоразмер</div>
										<div class="row">
											<div class="size">
												<div class="label">Ширина</div>
												<select>
													<option value="">195</option>
													<option value="">205</option>
													<option value="">215</option>
												</select>
											</div>
											<div class="size">
												<div class="label">Высота</div>
												<select>
													<option value="">65</option>
													<option value="">75</option>
													<option value="">85</option>
												</select>
											</div>
											<div class="size">
												<div class="label">Диаметр</div>
												<select>
													<option value="">14</option>
													<option value="">15</option>
													<option value="">16</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="table-container">
									<table class="calculate-table">
										<tr>
											<th>Размеры</th>
											<th>Старый</th>
											<th>Новый</th>
											<th>Разница</th>
										</tr>
										<tr>
											<td>Ширина шины, мм <b>(А)</b></td>
											<td><div class="old">195</div></td>
											<td>205</td>
											<td><div class="difference">10</div></td>
										</tr>
										<tr>
											<td>Высота профиля, мм <b>(Н)</b></td>
											<td><div class="old">127</div></td>
											<td>113</td>
											<td><div class="difference">-14</div></td>
										</tr>
										<tr>
											<td>Внутренний диаметр, мм <b>(R)</b></td>
											<td><div class="old">356</div></td>
											<td>406</td>
											<td><div class="difference">50</div></td>
										</tr>
										<tr>
											<td>Внешний диаметр, мм <b>(D)</b></td>
											<td> <div class="old">609</div> </td>
											<td>632</td>
											<td><div class="difference">23</div></td>
										</tr>
										<tr>
											<td>Изменения клиренса (мм)</td>
											<td></td>
											<td></td>
											<td> <div class="difference">12</div> </td>
										</tr>
									</table>
								</div>
							</div><!-- /.col -->

							<div class="col">
								<div class="calculate-title">Изменения показания спидометра</div>

								<div class="calculate-info">При показании спидометра «60 км/ч»</div>
								<div class="calculate-info bold">Фактическая скорость составит 62.2 км/ч</div>

								<div class="calculate-indicator-wrap">
									<div class="calculate-indicator">
										<img class="indicator-arrow" src="images/calculate-indicator-arrow.png" alt="">
										<div class="indicator item-1">20.9</div>
										<div class="indicator item-2">41.8</div>
										<div class="indicator item-3">62.6</div>
										<div class="indicator item-4">83.6</div>
										<div class="indicator item-5">104.5</div>
										<div class="indicator item-6">125.4</div>
										<div class="indicator item-7">146.3</div>
										<div class="indicator item-8">167.2</div>
										<div class="indicator item-9">188.1</div>
										<div class="indicator item-10">209.5</div>
										<div class="indicator item-11">230.2</div>
									</div>
								</div><!-- /.calculate-indicator-wrap -->
							</div><!-- /.col -->
						</div>
					</div><!-- .calculate -->
				</div><!-- /.content-block-1 -->

				<div class="content-block">
					<div class="subtitle-main subtitle-small">Расчет ширины диска</div>
					<div class="calculate-block clearfix">
						<div class="calculate-block-info">
							При изменении параметров шин вам необходимо свериться с совместимостью ширины диска, установленным на вашем автомобиле. Этот раздел покажет вам минимальные и максимальные показатели ширины диска подходящие под выбранный вами типоразмер покрышек.
						</div>
						<div class="calculate-block-input">
							<div class="calculate-column">
								<div class="calculate-title old">Типоразмер шины</div>
								<div class="row">
									<div class="size">
										<div class="label">Ширина</div>
										<select>
											<option value="">195</option>
											<option value="">205</option>
											<option value="">215</option>
										</select>
									</div>
									<div class="size">
										<div class="label">Высота</div>
										<select>
											<option value="">65</option>
											<option value="">75</option>
											<option value="">85</option>
										</select>
									</div>
								</div>
							</div>

							<div class="calculate-column">
								<div class="calculate-title">Ширина обода</div>
								<div class="row">
									<div class="size">
										<div class="label">Мин</div>
										<input type="text" class="input-disabled" value="5.5" disabled>
									</div>
									<div class="size">
										<div class="label">Рек.</div>
										<input type="text" class="input-disabled" value="6.5" disabled>
									</div>
									<div class="size">
										<div class="label">Макс.</div>
										<input type="text" class="input-disabled" value="7.5" disabled>
									</div>
								</div>
							</div>
						</div><!-- /.calculate-block-input -->
					</div>
				</div><!-- /.content-block -->

				<div class="content-block-1">
					<div class="heading-1">Здесь можно сделать поиск</div>

					<div class="tabs-search">
					    <ul class="resp-tabs-list tabs_1">
					        <li>Поиск по авто</li>
							<li>Поиск по шинам</li>
							<li>Поиск по дискам</li>
							<li>Поиск по грузовым шинам</li>
							<li>Поиск по спецшинам</li>
							<li>Поиск по мотошинам</li>
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
				</div><!-- /.content-block-1 -->
			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

	<?php include ("include/popup.html") ?>

<?php include ("include/foot.html") ?>
	