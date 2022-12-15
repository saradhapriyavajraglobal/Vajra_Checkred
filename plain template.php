<?php
/**
 * Template Name: Plain Template 
 */
?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>

<section class="section">

<div class="container">

<div class="row">

<div class="col-md-12">

<?php echo the_content(); ?>


</div>

</div>

</div>

</section>

<?php endwhile; ?>
<?php    get_footer();   ?>