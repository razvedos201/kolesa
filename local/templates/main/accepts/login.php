<?php include ("include/head.html") ?>

	<div class="wrapper">
		<?php include ("include/header.html") ?>

		<main class="content">
			<div class="container">
				<?php include ("include/breadcrumbs.html") ?>

				<h1>Авторизация на сайте</h1>

				<div class="form-contact">
					<form action="#">
						<div class="form-group">
							<div class="form-group-label">Логин</div>
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
							<div class="form-group-btn">
								<div class="aligner">
									<input type="submit" class="btn btn-3" value="Войти">
								</div>
								<div class="aligner"><a href="password-recovery.php">Забыли свой пароль?</a></div>
							</div>
						</div>
					</form>
				</div>

			</div><!-- /.container -->
		</main>

	</div><!-- /.wrapper -->

	<?php include ("include/footer.html") ?>

	<?php include ("include/popup.html") ?>

<?php include ("include/foot.html") ?>
	