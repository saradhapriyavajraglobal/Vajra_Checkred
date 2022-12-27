<?php
/**
 * Template Name:  Home
 */
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

<!-- <h1>Title</h1> -->

<!-- Hero banner -->

<?php if( have_rows('banner_wrap') ):
  while ( have_rows('banner_wrap') ) : the_row();?>
    <section class="c-banner">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 mx-auto align-self-center">
            <div class="content-wrap">
              <?php if( have_rows('banner_slider') ):
                while ( have_rows('banner_slider') ) : the_row();?>
                  <div class="left-slider">
                    <h1 class="v-title-w"><?php the_sub_field('banner_title');?></h1>
                    <p class="tag-text"><?php the_sub_field('banner_tagline');?></p>
                    <a  href="<?php the_sub_field('cta_link');?>" class="cta cta-r">
                      <div data-hover="<?php the_sub_field('banner_cta');?>" class="text-wrap">
                        <div class="btn-link">
                          <span class="link"><?php the_sub_field('banner_cta');?></span>
                        </div> 
                      </div> 
                      <div class="icon-img">
                        <span>
                          <img src="/wp-content/uploads/2022/12/right-2.png" class="i-img">
                        </span>
                      </div>
                    </a>
                  </div>
                <?php
                endwhile;
                else :
              endif;
              ?>
            </div>
          </div>

          <div class="col-lg-6 pe-0">
            <div class="banner-slider">
              <?php if( have_rows('banner_slider') ):
                while ( have_rows('banner_slider') ) : the_row();?>
                  <?php if( get_sub_field('slider_image') ): ?>
                    <img class="banner-img" src="<?php the_sub_field('slider_image'); ?>" />
                  <?php endif; ?>
                <?php
                endwhile;
                else :
              endif;
              ?>
            </div>
            <div class="counter-info"></div>
          </div>
        </div>
      </div>
    </section>
  <?php
  endwhile;
  else :
endif;
?>

<?php if( have_rows('challenges_wrap') ):
  while ( have_rows('challenges_wrap') ) : the_row();?>
    <section class="c-challenges">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-11 me-auto">
            <div class="row">
              <div class="col-lg-6">
                <div class="img-container">
                  <?php if( get_sub_field('image') ): ?>
                    <img class="ch-img img-fluid" src="<?php the_sub_field('image'); ?>" />
                  <?php endif; ?>
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <h1 class="v-title-wwr"><?php the_sub_field('title');?></h1>
                <p class="tag-text c-des"><?php the_sub_field('description');?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php
  endwhile;
  else :
endif;
?>

<?php if( have_rows('client_cloud') ):
  while ( have_rows('client_cloud') ) : the_row();?>
    <section class="cloud-security">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 mx-auto align-self-center">
            <h1 class="v-title-wwr"><?php the_sub_field('title');?></h1>
            <p class="tag-text c-des"><?php the_sub_field('description');?></p>
          </div>
          <div class="col-lg-6 pe-0 align-self-center">
            <div class="img-container">
              <?php if( get_sub_field('image') ): ?>
                <img class="ch-img img-fluid" src="<?php the_sub_field('image'); ?>" />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php
  endwhile;
  else :
endif;
?>






<?php endwhile;

get_footer();   ?>