<?php
/**
 * Template Name:  Home
 */
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

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




<section class="cloud-tab-section">
	<div class="container-fluid">
		<p class="text-center main-tagline">Enhance your<span class="v-title-r">cloud and SaaS security with the CheckRed platform</span></p>
		<div class="row">
			<div class="col-lg-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" role="tab" aria-controls="tab1" aria-selected="true">CSPM</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link " id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" role="tab" aria-controls="tab2" aria-selected="true">SSPM</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-12 cloud-tab-content">
				<div id="content" class="tab-content" role="tablist">
					<div class="card tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
						<div class="card-header" role="tab" id="heading-1">
							<h5 class="mb-0">
								<a data-bs-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">CSPM</a>
							</h5>
						</div>
						<div id="collapse-1" class="collapse show" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-1">
							<div class="card-body">
                <div class="row">
                  <div class="col-md-5 mx-auto align-self-center order-sm-12">
                    <img class="img-fluid" src="/wp-content/uploads/2022/12/CSPM.webp" alt="">
                  </div>
                  <div class="col-md-5 mx-auto align-self-center order-sm-12">
                    <h3 class="main-title">Cloud Security Posture Management</h3>
                    <P>Gain a comprehensive view of risk posture across your cloud assets. Identify, analyze, and prioritize these risks with accuracy and agility.</P>
                    <a class="cta" href="#">Know More</a>
                  </div>
								</div>
							</div>
						</div>
					</div>
					<div class="card tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
						<div class="card-header" role="tab" id="heading-2">
							<h5 class="mb-0">
								<a data-bs-toggle="collapse" href="#collapse-2" aria-expanded="true" aria-controls="collapse-2">SSPM</a>
							</h5>
						</div>
						<div id="collapse-2" class="collapse show" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-2">
							<div class="card-body">
                <div class="row">
                  <div class="col-md-5 mx-auto align-self-center order-sm-12">
                    <img class="img-fluid" src="/wp-content/uploads/2022/12/SSPM.webp" alt="">
                  </div>
                  <div class="col-md-5 mx-auto align-self-center order-sm-12">
                    <h3 class="main-title">SaaS security posture management</h3>
                    <P>Shield your SaaS applications from unauthorized users and avoid data leakages. Get complete visibility, monitor access, and follow all compliance and security policies.</P>
                    <a class="cta" href="#">Know More</a>
                  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php endwhile;

get_footer();   ?>