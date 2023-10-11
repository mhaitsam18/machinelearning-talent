<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">


	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>404 Page Not Found</title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>/template/assets/css/components.css">

</head>

<body>
	<!-- <div class="wrap"> -->

	<div id="app">
		<section class="section">
			<div class="container mt-5">
				<div class="page-error">
					<div class="page-inner">
						<h1>404</h1>
						<div class="page-description">
							The page you were looking for could not be found.
						</div>
						<p>
							<?php if (!empty($message) && $message !== '(null)') : ?>
								<?= nl2br(esc($message)) ?>
							<?php else : ?>
								Sorry! Cannot seem to find the page you were looking for.
							<?php endif ?>
						</p>
					</div>
				</div>
				<div class="mt-3 text-center">
					<a href="<?= base_url('/pages') ?>">Back to Home</a>
				</div>
				<div class="simple-footer mt-5">
					Copyright &copy; SDM Telkom University 2022
				</div>
			</div>
		</section>
	</div>

	<script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
	<script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
	<script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>


	<!-- JS Libraies -->

	<!-- Template JS File -->
	<script src="<?= base_url() ?>/template/assets/js/scripts.js"></script>
	<script src="<?= base_url() ?>/template/assets/js/custom.js"></script>

	<!-- Page Specific JS File -->
</body>


</html>