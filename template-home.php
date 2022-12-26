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
      <div class="col-lg-11 mx-auto">
    
        <div class="row">

          <div class="col-lg-6 align-self-center">
          <div class="content-wrap">
          <?php if( have_rows('banner_slider') ):
  
  while ( have_rows('banner_slider') ) : the_row();?>
          <div class="left-slider">
             <h1 class="v-title-w"><?php the_sub_field('banner_title');?></h1>
             <p class="tag-text"><?php the_sub_field('banner_tagline');?></p>
             <div class="cta-b">
                <div data-hover="<?php the_sub_field('banner_cta');?>" class="text-wrap">
                  <div class="btn-link">
                    <a class="link" href="<?php the_sub_field('cta_link');?>"><?php the_sub_field('banner_cta');?></a>
                  </div> 
                </div> 
                <div class="icon-img">
                  <span>
                    <img src="/wp-content/uploads/2022/12/right-3.png" class="i-img">
                  </span>
                </div>
              </div>
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
                <img src="<?php the_sub_field('slider_image'); ?>" />
                <?php endif; ?>
             
                <?php
            endwhile;
            else :
            endif;
            ?>
           
             </div>
  
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

<!-- <section class="integration-sec">
    <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <div class="integration">
                  <div class="slide-inte">
                      <div class="inte-carousel">
                        <img src="/wp-content/uploads/2022/12/Logo-1.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-429.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-427.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-423.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-421.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-420.svg">
                        <img src="/wp-content/uploads/2022/12/Group-429.svg"/>
                      </div>
                  </div>
            </div>

            <div class="integration">
                    <div class="slide-inte">
                      <div class="inte-carousel-rtl" dir="rtl">
                        <img src="/wp-content/uploads/2022/12/Group-431.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-430.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-426.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-425.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-422.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-424.svg"/>
                        <img src="/wp-content/uploads/2022/12/Group-419.svg"/>
                      </div>
                    </div>
            </div>

          </div>
      </div>
      
    </div>
    
</section> -->




<?php endwhile;

get_footer();   ?>