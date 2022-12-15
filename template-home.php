<?php
/**
 * Template Name:  Home
 */
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

<?php echo do_shortcode('[home_banner /]');?>

<?php endwhile;

get_footer();   ?>