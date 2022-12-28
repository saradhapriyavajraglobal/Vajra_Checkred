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
            <div class="banner-slider m-pad">
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


<?php if( have_rows('cloud_platform_tab') ):
  while ( have_rows('cloud_platform_tab') ) : the_row();?>
<section class="cloud-tab-section">
	<div class="container-fluid">
		<?php if(get_sub_field('main_title')): ?>
		<h3 class="text-center main-tagline v-title-wwr"><?php the_sub_field('main_title'); ?></h3>
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-11 mx-auto">

				<?php if( have_rows('cloud_tab_repeater') ): ?>

				<ul class="nav nav-tabs" role="tablist">

					<?php
					$j=-1;
					while( have_rows('cloud_tab_repeater') ): the_row();
					?>

					<?php
					if($j==-1) { ?>
					<li class="nav-item">
						<a id="tab<?php echo $j; ?>" href="#pane-<?php echo $j; ?>" class="nav-link active" data-bs-toggle="tab" role="tab">
							<?php if(get_sub_field('tab_name')): ?>
							<?php the_sub_field('tab_name'); ?>
							<?php endif; ?>
						</a>
					</li>
					<?php
							  } 

					else { ?>
					<li class="nav-item">
						<a id="tab<?php echo $j; ?>" href="#pane-<?php echo $j; ?>" class="nav-link" data-bs-toggle="tab" role="tab">
							<?php if(get_sub_field('tab_name')): ?>
							<?php the_sub_field('tab_name'); ?>
							<?php endif; ?>
						</a>
					</li>
					<?php
						 }
					?>
					<?php $j++;
					endwhile;
					?>
				</ul>

			</div>

			<div class="col-lg-11 mx-auto cloud-tab-content">
				<div id="content" class="tab-content" role="tablist">

					<?php
					$j=-1;
					while( have_rows('cloud_tab_repeater') ): the_row();
					?>
					<?php
					if($j==-1) { ?>
					<div class="card tab-pane fade show active" id="pane-<?php echo $j; ?>" role="tabpanel" aria-labelledby="tab<?php echo $j; ?>-tab">
						<div class="card-header" role="tab" id="heading-<?php echo $j; ?>">
							<h4 class="mb-0">
								<a data-bs-toggle="collapse" href="#collapse-<?php echo $j; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $j; ?>">
									<?php if(get_sub_field('tab_name')): ?>
									<?php the_sub_field('tab_name'); ?>
									<?php endif; ?></a>
							</h4>
						</div>
						<div id="collapse-<?php echo $j; ?>" class="collapse show" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-<?php echo $j; ?>">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-6 col-md-12 me-auto align-self-center order-sm-12">
										<?php if(get_sub_field('tab_image')): ?>
										<img class="img-fluid tab-img" src="<?php the_sub_field('tab_image'); ?>" alt="">
										<?php endif; ?>
									</div>
									<div class="col-lg-5 col-md-12 me-auto align-self-center order-sm-12 tab-content-wrap">
										<?php if(get_sub_field('tab_title')): ?>
										<h3 class="main-title v-subtitle-w"><?php the_sub_field('tab_title'); ?></h3>
										<?php endif; ?>
										<?php if(get_sub_field('description')): ?>
										<P class="tag-text"><?php the_sub_field('description'); ?></P>
										<?php endif; ?>
										<?php if(get_sub_field('slider_title')): ?>
										<P class="tag-text-w"><?php the_sub_field('slider_title'); ?></P>
										<?php endif; ?>

										<div class="img-slider">
											<?php if( have_rows('image_slider') ):
							   while ( have_rows('image_slider') ) : the_row();?>
											<div class="img-slide">
												<img src="<?php the_sub_field('slide_image'); ?>" class="slide-icon">
											</div>
											<?php
							   endwhile;
							   else :
							   endif;
											?>
										</div>
										<?php if(get_sub_field('tab_cta_link')): ?>
										<a  href="<?php the_sub_field('tab_cta_link'); ?>" class="cta cta-r">
											<div data-hover="<?php the_sub_field('tab_cta'); ?>" class="text-wrap">
												<div class="btn-link">
													<span class="link"><?php the_sub_field('tab_cta'); ?></span>
												</div> 
											</div> 
											<div class="icon-img">
												<span>
													<img src="/wp-content/uploads/2022/12/right-2.png" class="i-img">
												</span>
											</div>
										</a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
							  } 
					else { ?>
					<div class="card tab-pane fade" id="pane-<?php echo $j; ?>" role="tabpanel" aria-labelledby="tab<?php echo $j; ?>-tab">
						<div class="card-header" role="tab" id="heading-<?php echo $j; ?>">
							<h4 class="mb-0">
								<a data-bs-toggle="collapse" href="#collapse-<?php echo $j; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $j; ?>">
									<?php if(get_sub_field('tab_name')): ?>
									<?php the_sub_field('tab_name'); ?>
									<?php endif; ?></a>
							</h4>
						</div>
						<div id="collapse-<?php echo $j; ?>" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-<?php echo $j; ?>">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-6 col-md-12 me-auto align-self-center order-sm-12">
										<?php if(get_sub_field('tab_image')): ?>
										<img class="img-fluid tab-img" src="<?php the_sub_field('tab_image'); ?>" alt="">
										<?php endif; ?>
									</div>
									<div class="col-lg-5 col-md-12 me-auto align-self-center order-sm-12 tab-content-wrap">
										<?php if(get_sub_field('tab_title')): ?>
										<h3 class="main-title v-subtitle-w"><?php the_sub_field('tab_title'); ?></h3>
										<?php endif; ?>
										<?php if(get_sub_field('description')): ?>
										<P class="tag-text"><?php the_sub_field('description'); ?></P>
										<?php endif; ?>
										<?php if(get_sub_field('slider_title')): ?>
										<P class="tag-text-w"><?php the_sub_field('slider_title'); ?></P>
										<?php endif; ?>

										<div class="img-slider">
											<?php if( have_rows('image_slider') ):
						  while ( have_rows('image_slider') ) : the_row();?>
											<div class="img-slide">
												<img src="<?php the_sub_field('slide_image'); ?>" class="slide-icon">
											</div>
											<?php
						  endwhile;
						  else :
						  endif;
											?>
										</div>
										<?php if(get_sub_field('tab_cta_link')): ?>
										<a  href="<?php the_sub_field('tab_cta_link'); ?>" class="cta cta-r">
											<div data-hover="<?php the_sub_field('tab_cta'); ?>" class="text-wrap">
												<div class="btn-link">
													<span class="link"><?php the_sub_field('tab_cta'); ?></span>
												</div> 
											</div> 
											<div class="icon-img">
												<span>
													<img src="/wp-content/uploads/2022/12/right-2.png" class="i-img">
												</span>
											</div>
										</a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
						<?php
						 }
						?>

						<?php $j++;
						endwhile;
						?>
					</div>
				</div>

				<?php  
				endif; ?>
			</div>
		</div>
	</div>
</section>
<?php
  endwhile;
  else :
endif;
?>

<section class="checkred-works">
    <div class="container-fluid">
      <div class="row">
         <div class="col-lg-11 mx-auto">
                  <?php if(get_field('checkred_title')): ?>
                     <h2 class="v-title-wwr"><?php the_field('checkred_title'); ?></h2>
                  <?php endif; ?>
              <?php if( have_rows('checkred_works') ): ?>
    
              <div class="responsive-tabs">

                        <div class="work-titles">
                          <ul class="nav nav-tabs" role="tablist">
                              
                              <?php
                                  $i=1;
                                  while( have_rows('checkred_works') ): the_row();
                                  ?>

                                    <?php
                                        if($i==1) { ?>
                                          <li class="nav-item">
                                          <a id="tab-<?php echo $i; ?>" href="#pane-<?php echo $i; ?>" class="nav-link active" data-bs-toggle="tab" role="tab">
                                          <?php if(get_sub_field('work_titles')): ?>
                                          <?php the_sub_field('work_titles'); ?>
                                          <?php endif; ?>
                                          </a>
                                          </li>
                                      <?php
                                    } 
                                
                                    else { ?>
                                      <li class="nav-item">
                                      <a id="tab-<?php echo $i; ?>" href="#pane-<?php echo $i; ?>" class="nav-link" data-bs-toggle="tab" role="tab">
                                          <?php if(get_sub_field('work_titles')): ?>
                                          <?php the_sub_field('work_titles'); ?>
                                          <?php endif; ?>
                                      </a>
                                      </li>
                                      <?php
                                      }
                                  ?>
                            <?php $i++;
                            endwhile;
                            ?>
                          </ul>

                        </div>  

                          <div id="content" class="tab-content" role="tablist">
                          
                              <?php
                                  $i=1;
                                  while( have_rows('checkred_works') ): the_row();
                              ?>
                              <?php
                                if($i==1) { ?>
                                  <div id="pane-<?php echo $i; ?>" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-<?php echo $i; ?>">
                                      <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
                                          <h5 class="mb-0">
                                              <a data-bs-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $i; ?>">
                                                  <?php if(get_sub_field('work_titles')): ?>
                                                  <?php the_sub_field('work_titles'); ?>
                                                  <?php endif; ?>
                                              </a>
                                          </h5>
                                      </div>
                                      <div id="collapse-<?php echo $i; ?>" class="collapse show" data-bs-parent="#content" role="tabpanel"
                                          aria-labelledby="heading-<?php echo $i; ?>">
                                          <div class="card-body">
                                              <div class="container">
                                                  <div class="row">
                                                      <div class="col-lg-5 align-self-center">
                                                          <?php if(get_sub_field('content_title')): ?>
                                                              <h3><?php the_sub_field('content_title'); ?></h3>
                                                          <?php endif; ?>
                                                          <?php if(get_sub_field('description')): ?>
                                                              <p><?php the_sub_field('description'); ?></p>
                                                          <?php endif; ?>
                                                      </div>
                                                      <div class="col-lg-7 cont-img" style="background-image:url('<?php the_sub_field('content_image'); ?>')">
                                                                                                       
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <?php
                                    } 
                              else { ?>
                              <div id="pane-<?php echo $i; ?>" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-<?php echo $i; ?>">
                                  <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
                                      <h5 class="mb-0">
                                          <a class="collapsed" data-bs-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="false"
                                              aria-controls="collapse-<?php echo $i; ?>">
                                              <?php if(get_sub_field('work_titles')): ?>
                                              <?php the_sub_field('work_titles'); ?>
                                              <?php endif; ?>
                                          </a>
                                      </h5>
                                  </div>
                                  <div id="collapse-<?php echo $i; ?>" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-<?php echo $i; ?>">
                                      <div class="card-body">
                                              <div class="container">
                                                  <div class="row">
                                                      <div class="col-lg-5 align-self-center">
                                                          <?php if(get_sub_field('content_title')): ?>
                                                              <h3><?php the_sub_field('content_title'); ?></h3>
                                                          <?php endif; ?>
                                                          <?php if(get_sub_field('description')): ?>
                                                              <p><?php the_sub_field('description'); ?></p>
                                                          <?php endif; ?>
                                                      </div>
                                                      <div class="col-lg-7 cont-img" style="background-image:url('<?php the_sub_field('content_image'); ?>')">
                                                 
                                                      </div>
                                                  </div>
                                              </div>
                                      </div>
                                  </div>
                              </div>
                              <?php
                              }
                              ?>
                              
                              <?php $i++;
                              endwhile;
                              ?>
                        
                          </div>
                     </div>
                  <?php  
                  endif; ?>

                  </div>
                </div>

       
    </div>
</section>

<?php if( have_rows('integration_logo') ):
  while ( have_rows('integration_logo') ) : the_row();?>
<section class="integration-sec">
    <div class="container-fluid">
          <?php if(get_sub_field('logo_title')): ?>
              <h2 class="v-title-wwr"><?php the_sub_field('logo_title'); ?></h2>
           <?php endif; ?>
      <div class="row">
          <div class="col-lg-12">
              <div class="integration">
                  <div class="slide-inte">
                      <div class="inte-carousel">
                          <?php if( have_rows('integration_slide1') ):
                          while ( have_rows('integration_slide1') ) : the_row();?>
                              <?php if( get_sub_field('1logo_images') ): ?>
                                <img src="<?php the_sub_field('1logo_images'); ?>" />
                              <?php endif; ?>
                          <?php
                          endwhile;
                          else :
                          endif;
                          ?>
                      </div>
                  </div>
            </div>

            <div class="integration">
                    <div class="slide-inte">
                      <div class="inte-carousel-rtl" dir="rtl">
                      <?php if( have_rows('integration_slide2') ):
                          while ( have_rows('integration_slide2') ) : the_row();?>
                           <?php if( get_sub_field('2logo_image') ): ?>
                                <img src="<?php the_sub_field('2logo_image'); ?>" />
                              <?php endif; ?>
                        <?php
                        endwhile;
                        else :
                        endif;?>
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

<?php if( have_rows('client_cloud') ):
  while ( have_rows('client_cloud') ) : the_row();?>
    <section class="cloud-security">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-5 mx-auto align-self-center">
            <h2 class="v-title-wwr"><?php the_sub_field('title');?></h2>
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

<?php if( have_rows('approach_wrap') ):
  while ( have_rows('approach_wrap') ) : the_row();?>
<section class="c-approch">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-9 mx-auto">
       
        <div class="row">
        <h3 class="v-title-wwr1"><?php the_sub_field('a-sec-title');?></h3>
          <div class="col-lg-4 col-md-4">
            <div class="a-con content-wrapper">
              <h4 class="s-title-text"><?php the_sub_field('title-1');?></h4>
              <p class="s-text"><?php the_sub_field('desc-1');?></p>
            </div>
            <div class="a-con content-wrapper c-pad">
              <h4 class="s-title-text"><?php the_sub_field('title-2');?></h4>
              <p class="s-text"><?php the_sub_field('desc-2');?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
           
          </div>
          <div class="col-lg-4 col-md-4">
           <div class="a-con content-wrapper-s">
              <h4 class="s-title-text"><?php the_sub_field('title-3');?></h4>
              <p class="s-text"><?php the_sub_field('desc-3');?></p>
            </div>
            <div class="a-con content-wrapper-s c-pad1">
              <h4 class="s-title-text"><?php the_sub_field('title-4');?></h4>
              <p class="s-text"><?php the_sub_field('desc-4');?></p>
            </div>
          </div>
        </div>
        <div class="content-wrap-a text-center">
              <h4 class="s-title-text"><?php the_sub_field('title-5');?></h4>
              <p class="s-text"><?php the_sub_field('desc-5');?></p>
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

<section class="c-form">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-11 mx-auto">
        <div class="row">
          <div class="col-lg-5 align-self-center">
            <h3 class="v-title-wwr"><?php the_field('form_title');?></h3>
          </div>
          <div class="col-lg-7 m-pad">
            <?php the_field('home_form');?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php endwhile;

get_footer();   ?>