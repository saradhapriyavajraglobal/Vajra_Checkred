<?php get_header(); ?>
<?php
if(have_posts()):
while(have_posts()): the_post(); ?>

<main class="main">
<!-- <h3><?php //the_title(); ?></h3> -->
<?php the_content(); ?>
</main>
<?php 
endwhile;
endif;
?>
<?php get_footer(); ?>