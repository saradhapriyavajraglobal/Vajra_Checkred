<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<header class="header">

			<div class="header-main">

				<div class="container-fluid">

					<div class="row">

						<div class="col-lg-11 col-md-12 mx-auto">


							<div class="head-wrap clearfix">

								<a class="head-logo" href="<?= esc_url(home_url('/')); ?>"></a>

								<nav class="nav-primary">

									<?php if (has_nav_menu('primary_navigation')) :

									wp_nav_menu(['theme_location' => 'primary_navigation']);

									endif; ?>


								</nav>

								<div class="head-cta">

									<a class="cta" href="#"></a>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</header>