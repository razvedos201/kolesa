<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<main class="content">
			<div class="container">
				<?php include ("include/breadcrumbs.html") ?>

				<h1>Изменить регистрационные данные</h1>

				<div class="form-contact">
					<form action="#">
						<div class="form-group">
							<div class="form-group-label">Ф.И.О.</div>
							<div class="form-group-input">
								<input type="text" placeholder="Пушкин Александр Сергеевич">
							</div>
						</div>
						<div class="form-group">
							<div class="form-group-label">E-mail</div>
							<div class="form-group-input">
								<input type="email" placeholder="qwertyxxx@mail.ru">
							</div>
						</div>
						<div class="form-group">
							<div class="form-group-label">Телефон</div>
							<div class="form-group-input">
								<input type="tel" placeholder="+7 909 320 70 40">
							</div>
						</div>
						<div class="form-group">
							<div class="form-group-label">Название города</div>
							<div class="form-group-input">
								<input type="text" placeholder="Екатеринбург">
							</div>
						</div>
						<div class="form-group">
							<div class="form-group-label">Новый пароль</div>
							<div class="form-group-input">
								<input type="password" placeholder="************">
							</div>
						</div>
						<div class="form-group">
							<div class="form-group-label">Повторите пароль</div>
							<div class="form-group-input">
								<input type="password" placeholder="************">
							</div>
						</div>
						<div class="form-group">
							<img src="images/captcha.jpg" alt="">
						</div>
						<div class="form-group-1">
							<div class="has-input">
								<input type="checkbox" id="promo">
								<label for="promo">
									<span class="input-style"></span>
									<span class="input-text">Подписаться на рекламную рассылку</span>
								</label>	
							</div>
							<div class="has-input">
								<input type="checkbox" id="news">
								<label for="news">
									<span class="input-style"></span>
									<span class="input-text">Подписаться на новости</span>
								</label>	
							</div>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-3" value="Сохранить">
						</div>
					</form>
				</div>

			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

	<?php include ("include/popup.html") ?>

<?php include ("include/foot.html") ?>
	