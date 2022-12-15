<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="header">

		<div class="header-top">

			<div class="container-fluid">

				<div class="row">

					<div class="col-lg-11 mx-auto">

						<div class="menu-wrap">

						<P class="base-cnt">LOREM IPSUM DOLOR SIT AMET, CONSETETUR SADIPSCING</p>

						<p class="top-menu base-cnt"><a data-toggle="modal" data-target="#test_video_modal" href="" class="search-icon search_icon"></a><a class="head-top" href="/contact-us/">CONTACT US</a> | <?php global $current_user; wp_get_current_user(); 
							if (is_user_logged_in()) { ?>
							<a class="head-top" href="#" target="new">Hello, <?php echo $current_user->display_name; ?></a>
						<?php
						} else { ?>
							<a class="head-top" href="<?php echo wp_login_url() ?>">SIGN IN</a>
						<?php } ?></p>

						</div>
	
					</div>

				</div>

			</div>

		</div>

	</header>