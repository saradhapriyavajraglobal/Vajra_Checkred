<?php
/**
 * Template Name:  Home
 */
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

<h1>Title</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores recusandae dolor nostrum minima vitae consectetur ut vero, ab eveniet consequatur porro quas, dolorum nemo soluta non enim voluptatem nihil in.</p>

<?php endwhile;

get_footer();   ?>