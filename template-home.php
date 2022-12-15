<?php
/**
 * Template Name:  Home
 */
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

<h1>Title</h1>

<?php endwhile;

get_footer();   ?>