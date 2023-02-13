<?php
/**
 * Template Name:  Contact Us
 */
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <section class="contact-banner">
    
</section>


  <?php endwhile;

get_footer();   ?>