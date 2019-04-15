<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>

<main class="content">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a href="#">Главная</a></li>
					<li><a href="#">Каталог шин</a></li>
					<li>Contintental</li>
				</ul>

				<h1>Новости</h1>

				<div class="news-box-wrap row">
					<div class="news-box">
						<div class="news-box-img"><a href="news-more.php"><img src="/local/templates/.default/images/news-1.jpg" alt=""></a></div>
						<div class="news-box-inner">
							<time class="icon" datetime="2017-03-25">25.03.2017</time>
							<div class="news-box-content">
								<div class="title"><a href="news-more.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </a></div>
								<div class="text">
									Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								</div>
							</div>
						</div>
					</div>

					<div class="news-box">
						<div class="news-box-img"><a href="news-more.php"><img src="/local/templates/.default/images/news-2.jpg" alt=""></a></div>
						<div class="news-box-inner">
							<time class="icon" datetime="2017-03-25">25.03.2017</time>
							<div class="news-box-content">
								<div class="title"><a href="news-more.php">Proin gravida dolor sit amet lacus accumsan.</a></div>
								<div class="text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. 
								</div>
							</div>
						</div>
					</div>

					<div class="news-box">
						<div class="news-box-img"><a href="news-more.php"><img src="/local/templates/.default/images/news-3.jpg" alt=""></a></div>
						<div class="news-box-inner">
							<time class="icon" datetime="2017-04-03">03.04.2017</time>
							<div class="news-box-content">
								<div class="title"><a href="news-more.php">Lorem ipsum dolor sit amet. </a></div>
								<div class="text">
									Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. 
								</div>
							</div>
						</div>
					</div>

					<div class="news-box">
						<div class="news-box-img"><a href="news-more.php"><img src="/local/templates/.default/images/news-4.jpg" alt=""></a></div>
						<div class="news-box-inner">
							<time class="icon" datetime="2017-04-03">03.04.2017</time>
							<div class="news-box-content">
								<div class="title"><a href="news-more.php">Proin gravida dolor sit amet lacus accumsan. </a></div>
								<div class="text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. 
								</div>
							</div>
						</div>
					</div>

					<div class="news-box">
						<div class="news-box-img"><a href="news-more.php"><img src="/local/templates/.default/images/news-1.jpg" alt=""></a></div>
						<div class="news-box-inner">
							<time class="icon" datetime="2017-03-25">25.03.2017</time>
							<div class="news-box-content">
								<div class="title"><a href="news-more.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </a></div>
								<div class="text">
									Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
								</div>
							</div>
						</div>
					</div>

					<div class="news-box">
						<div class="news-box-img"><a href="news-more.php"><img src="/local/templates/.default/images/news-2.jpg" alt=""></a></div>
						<div class="news-box-inner">
							<time class="icon" datetime="2017-03-25">25.03.2017</time>
							<div class="news-box-content">
								<div class="title"><a href="news-more.php">Proin gravida dolor sit amet lacus accumsan.</a></div>
								<div class="text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. 
								</div>
							</div>
						</div>
					</div>

					<div class="news-box">
						<div class="news-box-img"><a href="news-more.php"><img src="/local/templates/.default/images/news-3.jpg" alt=""></a></div>
						<div class="news-box-inner">
							<time class="icon" datetime="2017-04-03">03.04.2017</time>
							<div class="news-box-content">
								<div class="title"><a href="news-more.php">Lorem ipsum dolor sit amet. </a></div>
								<div class="text">
									Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. 
								</div>
							</div>
						</div>
					</div>

					<div class="news-box">
						<div class="news-box-img"><a href="news-more.php"><img src="/local/templates/.default/images/news-4.jpg" alt=""></a></div>
						<div class="news-box-inner">
							<time class="icon" datetime="2017-04-03">03.04.2017</time>
							<div class="news-box-content">
								<div class="title"><a href="news-more.php">Proin gravida dolor sit amet lacus accumsan. </a></div>
								<div class="text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. 
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.news-box-wrap -->

				<?php include ("include/pagination.html") ?>
			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>