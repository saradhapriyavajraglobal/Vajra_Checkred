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

								<nav class="nav-primary mx-auto">

									<?php if (has_nav_menu('primary_navigation')) :

									wp_nav_menu(['theme_location' => 'primary_navigation']);

									endif; ?>


								</nav>

								<a class="cta cta-b"   href="#">
									<div data-hover="Request a Demo" class="text-wrap">
										<div class="btn-link">
											<span class="link">Request a Demo</span>
										</div> 
									</div> 
									<div class="icon-img">
										<span>
											<img src="/wp-content/uploads/2022/12/right-3.png" class="i-img">
										</span>
									</div>
								</a>

								<div class="search ms-4 align-self-center">
									
									<a data-bs-toggle="modal" data-bs-target="#testi_modal" class="search-cta" href=""></a>
								
								</div>

								<button class="nav-toggler">
									<span></span>
								</button>


							</div>

						</div>

					</div>

				</div>

			</div>

		</header>