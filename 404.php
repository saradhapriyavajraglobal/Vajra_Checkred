<?php

get_header();

?>
<?php get_template_part('templates/page', 'header'); ?>
<section id="error">
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-md-12 col-lg-9 text-center mx-auto text-center align-self-center">
			<img src="/wp-content/uploads/2022/09/404.svg" class="img-fluid">
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br>Commodi officiis, asperiores.</p>
				<div class="error-btn-wrap error-btn-wrap">
					<a class="error-btn white-btn" onclick="goBack()" href="#">
						<span class="cta"><span>Home</span></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
<script>

  function goBack(){

        window.history.back()

  }

</script>