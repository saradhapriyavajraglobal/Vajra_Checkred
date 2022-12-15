<?php while (have_posts()) : the_post(); ?>
<?php if ( in_category('post' ) ){

  get_template_part('templates/content-single', get_post_type());
  
}
elseif(is_product())
{
	wc_get_template_part( 'content', 'single-product' );
}
else {

get_template_part('single-blog', get_post_type());

} ?>

<?php endwhile;  ?>