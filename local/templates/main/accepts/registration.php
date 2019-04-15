<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<main class="content">
			<div class="container">
				<?php include ("include/breadcrumbs.html") ?>

				<h1>Регистрация</h1>

				<div class="form-contact">
					<form action="#">
						<div class="form-group">
							<div class="form-group-label">Ф.И.О.</div>
							<div class="form-group-input">
								<input type="text">
							</div>
						</div>
						<div class="form-group">
							<div class="form-group-label">Пароль</div>
							<div class="form-group-input">
								<input type="password">
							</div>
						</div>
						<div class="form-group">
							<div class="form-group-label">Подтвердите пароль</div>
							<div class="form-group-input">
								<input type="password">
							</div>
						</div>
						<div class="form-group">
							<img src="images/captcha.jpg" alt="">
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
						<div class="form-group-1">
							<div class="has-input">
								<input type="checkbox" id="agreement">
								<label for="agreement">
									<span class="input-style"></span>
									<span class="input-text">Соглашаюсь на обработку моих персональных данных</span>
								</label>	
							</div>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-3" value="Зарегистрироваться">
						</div>
					</form>
				</div>

			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

	<?php include ("include/popup.html") ?>

<?php include ("include/foot.html") ?>
	