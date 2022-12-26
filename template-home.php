<?php
/**
 * Template Name:  Home
 */
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

<!-- <h1>Title</h1> -->




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