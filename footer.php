
<footer>
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-11 mx-auto">
				<div class="footer-top">
					<div class="row">
						<div class="col-lg-3 col-md-6 footer-logo">     

                            <?php dynamic_sidebar('Footer-1'); ?>
							
						</div>
						<div class="col-lg-3 col-md-6">
						
                            <?php dynamic_sidebar('Footer-2'); ?>

						</div>
						<div class="col-lg-2 mx-auto col-md-6">
							
                            <?php dynamic_sidebar('Footer-3'); ?>

						</div>   
                        <div class="col-lg-2 mx-auto col-md-6">
							
                            <?php dynamic_sidebar('Footer-4'); ?>

						</div>            
					</div>
				</div>
			</div>
			<div class="footer-bottom">
			<div class="col-md-11 mx-auto">
				<div class="row">
					<div class="col-md-6 mx-auto">
						<p class="copy-right"><span>&copy; <?php echo date('Y'); ?> CheckRed All rights reserved</span></p>
					</div>
					<div class="col-md-6 mx-auto">
						<?php dynamic_sidebar('Footer-Links'); ?>
					</div>  
				</div>                 
				</div>                 
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>