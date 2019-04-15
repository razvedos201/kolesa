<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!doctype html>
<html lang="<?=LANGUAGE_ID?>">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport"  content="width=device-width, initial-scale=1">
	
	<title><?$APPLICATION->ShowTitle()?></title>
	<?$APPLICATION->ShowHead()?>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	
	<?
		use Bitrix\Main\Page\Asset; 
		//Stylesheets 
		Asset::getInstance()->addCss("/local/templates/.default/style/easy-responsive-tabs.css");
		Asset::getInstance()->addCss("/local/templates/.default/style/jquery.fancybox.min.css");
		Asset::getInstance()->addCss("/local/templates/.default/style/jquery-ui.css");
		Asset::getInstance()->addCss("/local/templates/.default/style/main.css");
		Asset::getInstance()->addCss("/local/templates/.default/style/normalize.min.css");
		Asset::getInstance()->addCss("/local/templates/.default/style/slick.css");

		//Scripts
		 Asset::getInstance()->addJs("http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"); 
		 Asset::getInstance()->addJs("/local/templates/.default/js/jquery.mask.js");
		 Asset::getInstance()->addJs("https://api-maps.yandex.ru/2.1/?lang=tr_TR");
		 Asset::getInstance()->addJs("/local/templates/.default/js/slick.min.js");
		 Asset::getInstance()->addJs("/local/templates/.default/js/jquery.fancybox.min.js"); 
		 Asset::getInstance()->addJs("/local/templates/.default/js/jquery-ui.min.js"); 
		 Asset::getInstance()->addJs("/local/templates/.default/js/easyResponsiveTabs.js"); 
		 Asset::getInstance()->addJs("/local/templates/.default/js/main.js"); 
	?>

</head>
<body>
		<? $APPLICATION->ShowPanel();?>
	<!-- No script warning -->
    <noscript>
        <div id="noScriptWarning">
            К сожалению, ваш браузер <strong>не поддерживает</strong> JavaScript.
            Пожалуйста, <a href="http://browsehappy.com/" target="_blank" rel="nofollow">обновите</a> ваш браузер или включите поддержку JavaScript для корректного отображения страницы.
        </div>
    </noscript>
<p>Я тут наговнокодил</p>
    <!-- Outdated browser warning -->
    <!--[if lte IE 10]>
        <div id="outdatedBrowserWarning">
            Вы используете <strong>устаревший</strong> браузер. Пожалуйста,
            <a href="http://browsehappy.com/" target="_blank" rel="nofollow">обновите</a> ваш браузер
            для корректного отображения страницы.
        </div>
    <![endif]-->
<div class="wrapper">
<div class="header-page">
	<div class="top-bar">
		<div class="container clearfix">
			<button class="toggle-btn"><span></span></button>
			<div class="top-bar-location">
				<div class="select location__select">
					<div class="location__select-title icon js-title">
						<div class="value"><span>Екатеринбург</span></div>
					</div>
					<div class="location__select-options js-select-options">
						<ul class="location__select-options-inside">
							<li class="value js-value">Екатеринбург</li>
							<li class="value js-value">Санкт-Петербург</li>
							<li class="value js-value">Москва</li>
						</ul>
					</div>
				</div>
			</div><!-- /.top-bar-location -->

			<div class="mobile-menu clearfix">
				<div class="mobile-menu-close">
					<span>Меню</span>
					<span class="mobile-close">&times;</span>
				</div>
				<ul class="top-bar-menu">
					
					<?$APPLICATION->IncludeComponent(
							"bitrix:menu", 
							"top_menu", 
							array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "top_menu",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "top_menu",
							"USE_EXT" => "N",
							"COMPONENT_TEMPLATE" => "top_menu"
						),
						false
					);?>	
				</ul>

				<div class="top-bar-right">
					<div class="top-bar-link"><a href="login.php" class="icon aligner">Для оптовиков</a></div>
					<div class="top-bar-status"><a href="#" data-fancybox data-src="#status-popup" class="icon aligner">Статус заказа</a></div>
				</div>
			</div><!-- /.mobile-menu -->
		</div><!-- /.container -->
	</div><!-- /.top-bar -->

	<header class="header-main">
		<div class="container">
			<div class="header-main-content clearfix">
				<div class="logo"><a href="/"><img src="/local/templates/.default/images/logo.png" alt=""></a></div>

				<div class="header-main-btn">
					<a href="#" class="favorites icon">Избранное</a>
					<a href="compare.php" class="compare icon">Сравнить</a>
					<a href="cart.php" class="cart icon">Корзина</a>
				</div>

				<div class="header-main-contacts clearfix">
					<div class="header-phone-wrap aligner">
						<div class="schedule">Екатеринбург с 9:00 до 18:00</div>
						<div class="phone"><a href="tel:88007005030">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
							   "AREA_FILE_SHOW" => "file",
							   "PATH" => "/local/templates/.default/include_areas/tel.php",
							   "EDIT_TEMPLATE" => ""
							   ),
							   false
							);?></a>
						</div>
					</div>
					<div class="header-callback aligner">
						<a href="#" data-fancybox data-src="#callback" class="btn btn-light">Заказать звонок</a>
					</div>
				</div>
			</div>

			<div class="header-main-menu clearfix">
				<div class="header-main-search">
					<form action="#">
						<input type="search" class="search" placeholder="Поиск по сайту. Например, шины Continental">
						<button type="submit" class="submit"><span></span></button>
					</form>
				</div>
				<nav class="main-menu">
					<button class="hamburger"><span></span></button>
					<ul class="clearfix">
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"horizontal_multilevel",
							Array(
								"ALLOW_MULTI_SELECT" => "N",
								"CHILD_MENU_TYPE" => "pod_catalog",
								"DELAY" => "N",
								"MAX_LEVEL" => "2",
								"MENU_CACHE_GET_VARS" => array(""),
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"ROOT_MENU_TYPE" => "catalog",
								"USE_EXT" => "Y"
							)
						);?>
						<!--<li class="has-submenu">
							<a href="#"><span class="aligner">Шины</span></a>
							<div class="submenu submenu-big">
								<div class="close">&times;</div>
								<div class="submenu-item-wrap clearfix">
									<div class="submenu-item">
										<div class="title"><div class="item-1 icon"><span class="aligner">Автошины</span></div></div>
										<ul class="submenu-links">

											
											<li><a href="podbor_shin_po_avto.php">Подбор шин по авто</a></li>
											<li><a href="#">Подбор по размеру</a></li>
											<li><a href="catalog.php">Каталог шин</a></li>
										</ul>
									</div>
									<div class="submenu-item">
										<div class="title"><div class="item-2 icon"><span class="aligner">Грузовые шины</span></div></div>
										<ul class="submenu-links">
											<li><a href="#">Подбор по модели техники</a></li>
											<li><a href="#">Подбор грузовых по размеру</a></li>
											<li><a href="#">Грузовые шины</a></li>
										</ul>
									</div>
									<div class="submenu-item">
										<div class="title"><div class="item-3 icon"><span class="aligner">Спецшины</span></div></div>
										<ul class="submenu-links">
											<li><a href="#">Подбор по модели техники</a></li>
											<li><a href="#">Подбор спецшин по размеру</a></li>
											<li><a href="#">Специальные шины</a></li>
										</ul>
									</div>
									<div class="submenu-item">
										<div class="title"><div class="item-4 icon"><span class="aligner">Мотошины</span></div></div>
										<ul class="submenu-links">
											<li><a href="#">Подбор шин по мото</a></li>
											<li><a href="#">Подбор по размеру</a></li>
											<li><a href="#">Каталог мотошин</a></li>
										</ul>
									</div>
								</div>
								<div class="submenu-btn">
									<div class="aligner">
										<a href="calculator.php" class="btn btn-1">Калькулятор шин</a>
									</div>
									<div class="aligner">
										<a href="#" class="submenu-mark">
											<span>%</span> Распродажа
										</a>
									</div>
								</div>
							</div>
						</li>
						<li class="has-submenu">
							<a href="#"><span class="aligner">Диски</span></a>
							<div class="submenu">
								<div class="close">&times;</div>
								<div class="submenu-item-wrap clearfix">
									<div class="submenu-item">
										<div class="title"><div class="item-5 icon"><span class="aligner">Колесные диски</span></div></div>
										<ul class="submenu-links">
											<li><a href="#">Подбор дисков по авто</a></li>
											<li><a href="podbor_diskov_po_razmeru.php">Подбор по размеру</a></li>
											<li><a href="#">Каталог дисков</a></li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="has-submenu">
							<a href="#"><span class="aligner">Шиномонтаж</span></a>
							<div class="submenu submenu-middle">
								<div class="close">&times;</div>
								<div class="submenu-item-wrap clearfix">
									<div class="submenu-item">
										<div class="title"><div class="item-6 icon"><span class="aligner">Запись на шиномонтаж</span></div></div>
										<a href="zapis'_na_shinomontazh.php" class="btn btn-small btn-2"><span class="aligner">Записаться на шиномонтаж</span></a>
									</div>
									<div class="submenu-item">
										<div class="title"><div class="item-7 icon"><span class="aligner">Сезонное хранение шин</span></div></div>
										<a href="sdat'_shiny_na_hranenie.php" class="btn btn-small btn-2"><span class="aligner">Сдать шины на хранение</span></a>
										<a href="#" data-fancybox data-src="#take-popup" class="btn btn-gray btn-2"><span class="aligner">Забрать шины с хранения</span></a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="car-service.php"><span class="aligner">Автосервис</span></a>
						</li>-->
					</ul>
				</nav>
			</div>
		</div>
	</header>
</div><!-- /.header-page -->
