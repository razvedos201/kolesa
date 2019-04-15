
<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<main class="content">
			<div class="container">
				<?php include ("include/breadcrumbs.html") ?>

				<h1>Восстановление пароля</h1>

				<div class="form-contact">
					<form action="#">
						<div class="form-group">
							<div class="form-group-label">Email</div>
							<div class="form-group-input">
								<input type="email">
							</div>
						</div>
						<div class="form-group">
							<img src="images/captcha.jpg" alt="">
						</div>
						<div class="form-group">
							<div class="form-group-btn">
								<a href="login.php">Авторизоваться</a>
								<a href="registration.php">Зарегистрироваться</a>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-3" value="Отправить">
						</div>
					</form>
				</div>

			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

	<?php include ("include/popup.html") ?>

<?php include ("include/foot.html") ?>
	