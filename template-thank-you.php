<?php
/**
* Template Name: Thank you
*/
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>

<section id="thankyou">
	<div class="container h-100">
		<div class="row h-100">
			<div class=" col-md-10 col-lg-9 text-center mx-auto align-self-center">
				<img src="/wp-content/uploads/2022/09/Thank-you-img.svg" class="img-fluid">
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br>Commodi officiis, asperiores.</p>
				<div class="thankyou-btn-wrap thankyou-btn-wrap">
					<a class="thankyou-btn white-btn" onclick="goBack()" href="#">
						<span class="cta"><span>Home</span></span>
					</a>
				</div>

			</div>
		</div>
	</div>
</section>

<?php endwhile;
get_footer();   ?>
<script>

	function goBack(){

		window.history.back()

	}

</script>